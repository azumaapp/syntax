import { ThunkDispatch } from '@reduxjs/toolkit'
import { NextPage, NextPageContext } from 'next'
import React, { ReactElement, useCallback, useEffect, useMemo, useState } from 'react'
import { connect } from 'react-redux'
import { AnyAction } from 'redux'
import Head from '~/components/atoms/Head'
import Loading from '~/components/atoms/Progress/Loading'
import { withQuery } from '~/components/hoc/withQuery'
import { MediaFileUploadableList } from '~/components/organisms/MediaFile/MediaFileUploadbaleList'
import { MediaFileVerifing } from '~/components/organisms/MediaFile/MediaFileVerifing'
import { ImageUploadPageHeader } from '~/components/pages/media-references/mediaReferenceId/upload/ImageUploadPageHeader'
import { MediaReferenceListUploadTemplate } from '~/components/templates/MediaReference/Upload'
import { MediaReferenceMediaReferenceTypeEnum } from '~/iidaco-client/api'
import NextRouter from '~/routes'
import { actions as mediaFileActions } from '~/store/mediaFiles'
import { actions as mediaReferenceStatusActions } from '~/store/mediaReferenceStatus'
import { actions as mediaReferenceTagsActions } from '~/store/mediaReferenceTags'
import { actions } from '~/store/mediaReferences'
import { RootState } from '~/store/state'
import DatasetMaskImageList from '~/components/List/MediaFile/MaskMediaFileList/Container'
import DatasetMediaFileList from '~/components/List/MediaFile/NormalMediaFileList/Container'

export type MediaReferencesUploadPageProps = {
  mediaReferenceId: string
  annotationId?: string
  datasetId: number
  isMaskImage: boolean
  resetSelectedMediaFiles: () => void
  initialize(): Promise<any>
  verifyingImage: boolean
}

/**
 * model_sourceの画像アップロード時はannotationIdは必須
 * mask画像のアップロード時はannotationIdは不要
 */

const MediaReferencesUploadPage: NextPage<
  MediaReferencesUploadPageProps,
  Pick<MediaReferencesUploadPageProps, 'mediaReferenceId'>
> = (props: MediaReferencesUploadPageProps): JSX.Element => {
  const { datasetId, isMaskImage } = props
  const mediaReferenceId = Number(props.mediaReferenceId)
  const annotationId = Number(props.annotationId)

  const isLoading = useMemo(() => {
    return props.isMaskImage === undefined || props.datasetId === undefined
  }, [props.isMaskImage, props.datasetId])
  
  useEffect(() => {
    if (!annotationId && !isMaskImage && datasetId) {
      NextRouter.push('/datasets/[datasetId]', { datasetId: String(datasetId) })
    }
  }, [annotationId, isMaskImage, datasetId]) // eslint-disable-line react-hooks/exhaustive-deps

  const renderContent = useCallback(() => {
    if (props.verifyingImage) {
      return (
        <>
          <MediaFileVerifing
            mediaReferenceId={String(mediaReferenceId)}
            annotationId={String(annotationId)}
          />
          {!isLoading &&
            (
              <DatasetMediaFileList
                mediaReferenceId={mediaReferenceId}
                annotationMediaReferenceId={Number(annotationId)}
                datasetId={datasetId}
              />
            )
          }
        </>
      )
    } else {
      return (
        <MediaFileUploadableList
          annotationMediaReferenceId={Number(annotationId)}
          mediaReferenceId={Number(mediaReferenceId)}
          datasetId={Number(datasetId)}
          isMaskImage={isMaskImage}
        />
      )
    }
  }, [
    props.verifyingImage,
    isMaskImage,
    datasetId,
    annotationId,
    mediaReferenceId,
  ])

  return (
    <MediaReferenceListUploadTemplate
      MetaHeader={<Head />}
      PageHeader={
        <ImageUploadPageHeader
          datasetId={datasetId}
          mediaReferenceId={mediaReferenceId}
          isMaskImage={isMaskImage}
        />
      }
      renderContent={renderContent}
    />
  )
}

const Page: NextPage<
  MediaReferencesUploadPageProps,
  Pick<MediaReferencesUploadPageProps, 'mediaReferenceId' | 'annotationId'>
> = withQuery(
  connect(
    (
      state: RootState,
      props: Pick<
        MediaReferencesUploadPageProps,
        'mediaReferenceId' | 'annotationId'
      >
    ) => {
      const mediaReference =
        state.entities.mediaReferences[props.mediaReferenceId]
      const mediaReferenceType = mediaReference?.media_reference_type
      const dataset = mediaReference && mediaReference.parent
      const mediaReferenceStatus =
        state.mediaReferenceStatus.records[props.mediaReferenceId]

      return {
        datasetId: Number(dataset?.id),
        isMaskImage:
          mediaReferenceType &&
          mediaReferenceType === MediaReferenceMediaReferenceTypeEnum.Mask,
        verifyingImage: mediaReferenceStatus && mediaReferenceStatus.none !== 0,
      }
    },
    (
      dispatch: ThunkDispatch<any, any, any>,
      props: Pick<MediaReferencesUploadPageProps, 'mediaReferenceId'>
    ) => ({
      async initialize() {
        dispatch(mediaFileActions.setQuery({}))
        dispatch(mediaFileActions.resetSelectedMediaFiles())
        dispatch(mediaReferenceTagsActions.setSelectedFilterIds({}))
        return await Promise.all([
          dispatch(
            actions.fetchOneMediaReference({
              mediaReferenceId: Number(props.mediaReferenceId),
            })
          ),
          dispatch(
            mediaReferenceStatusActions.fetchMediaFileStatuses({
              id: Number(props.mediaReferenceId),
            })
          ),
        ])
      },
      resetSelectedMediaFiles() {
        dispatch(mediaFileActions.resetSelectedMediaFiles())
      },
    })
  )(function WaitingContainer(
    props: MediaReferencesUploadPageProps
  ): ReactElement | null {
    const [initialized, setInitialized] = useState(false)
    useEffect(() => {
      setInitialized(false)
      props.initialize().then(() => {
        setInitialized(true)
      })
      return () => setInitialized(false)
    }, []) // eslint-disable-line react-hooks/exhaustive-deps
    return (
      <Loading loading={!initialized}>
        <MediaReferencesUploadPage {...props} />
      </Loading>
    )
  })
) as NextPage<
  MediaReferencesUploadPageProps,
  Pick<MediaReferencesUploadPageProps, 'mediaReferenceId' | 'annotationId'>
>

Page.getInitialProps = (
  context: NextPageContext<any, AnyAction>
):
  | { mediaReferenceId: string; annotationId?: string }
  | Promise<{ mediaReferenceId: string; annotationId?: string }> => {
  return context.query as Pick<
    MediaReferencesUploadPageProps,
    'mediaReferenceId' | 'annotationId'
  >
}

export default Page
