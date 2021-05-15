/**
 * Copyright (C) ${year} [company_name] Corp. All rights reserved.
 */
package jp.co.[company_name].[main_system_name].is.controller;

import java.util.ArrayList;
import java.util.Arrays;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

import org.slf4j.Logger;
import org.slf4j.LoggerFactory;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.security.core.annotation.AuthenticationPrincipal;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import jp.co.[company_name].[main_system_name].auth.UserInfo;
import jp.co.[company_name].[main_system_name].exception.ApplicationException;
import jp.co.[company_name].[main_system_name].is.config.Consts;
import jp.co.[company_name].[main_system_name].is.config.MessageConst;
import jp.co.[company_name].[main_system_name].is.entity.TbTrnIsdocCatalogEntity;
import jp.co.[company_name].[main_system_name].is.enums.VariableDisplayTypeEnum;
import jp.co.[company_name].[main_system_name].is.model.Result;
import jp.co.[company_name].[main_system_name].is.service.TbTrnIsdocCatalogService;
import jp.co.[company_name].[main_system_name].is.utils.ChangeVariableName;
import jp.co.[company_name].[main_system_name].is.utils.EntityAccessUtils;
import jp.co.[company_name].[main_system_name].is.utils.IsJsonUtil;
import jp.co.[company_name].[main_system_name].model.Message;
import jp.co.[company_name].[main_system_name].model.WebApiResponse;

/**
 *
 * IS Doc 정보취득, 갱신 컨트롤러 클래스
 *
 * @author [author]
 * @version [version] [update_date]
 */
@RestController
@RequestMapping(Consts.SIM_UI_PATH)
public class IsDocCatalogController extends IsControllerBase {

	private static final Logger log = LoggerFactory.getLogger(IsDocCatalogController.class);

	private static final String[] colNames = { "versionNo" };

	@Autowired
	private TbTrnIsdocCatalogService service;

	private EntityAccessUtils<TbTrnIsdocCatalogEntity> entityBean = new EntityAccessUtils<TbTrnIsdocCatalogEntity>(TbTrnIsdocCatalogEntity.class);

	/**
	 * 설계대상부재 일람을 검색한다.
	 *
	 * @param id 제원번호
	 * @param colName 설계대상부재 일람의 컬럼명
	 * @param userInfo 유저정보
	 * @return 검색결과
	 */
	@GetMapping(Consts.SIM_UI_GET_PATH + Consts.SIM_UI_ISDOC_CATALOG_PATH + "/{id}/{columnName}")
	public WebApiResponse<Object> select(@PathVariable("id") String id, @PathVariable("columnName") String colName,
			@AuthenticationPrincipal UserInfo userInfo) throws Exception {
		WebApiResponse<Object> result = new WebApiResponse<>();
		try {
			log.info("Select Start");
			if (id != null) {
				Map<String, ?> ifCondMap = this.parseID(id);
				String ifCondJson = IsJsonUtil.Map2JSON(ifCondMap);
				String ifCondJson1 = IsJsonUtil.Map2JSON(ifCondMap, false);
				String ifCondJson2 = IsJsonUtil.Map2JSON(ifCondMap, true);
				log.info("ID : " + id);
				log.info("Parse ID : " + ifCondJson);
				log.info("Parse ID1 : " + ifCondJson1);
				log.info("Parse ID2 : " + ifCondJson2);
				log.info("Map ID : " + ifCondMap);
				Result<List<TbTrnIsdocCatalogEntity>> body = service.select(ifCondMap);
				result.setMessages(body.getMessages());
				List<TbTrnIsdocCatalogEntity> listEntity = body.getResponse();
				if (colName != null) {
					String valName = ChangeVariableName.changeName(VariableDisplayTypeEnum.LowerCamelCase, colName);
					String dbColName = ChangeVariableName.changeName(VariableDisplayTypeEnum.SnakeCase, colName);
					log.info("colName : " + colName);
					log.info("colName1 : " + valName);
					log.info("colName2 : " + dbColName);
					List<Map<String, Object>> response = new ArrayList<Map<String, Object>>();
					List<String> nameList = new ArrayList<String>(Arrays.asList(colNames));
					nameList.add(valName);
					for (TbTrnIsdocCatalogEntity bean : listEntity) {
						Map<String, Object> resultValue = new HashMap<String, Object>();
						for (String name : nameList) {
							Object value = bean.getObjectValue(bean, name);
							resultValue.put(name, value);
						}
						response.add(resultValue);
					}
					if (response.isEmpty()) {
						result.setResponseBody(null);
					} else {
						result.setResponseBody(response);
					}
				} else {
					if (listEntity == null || listEntity.isEmpty()) {
						result.setResponseBody(null);
					} else {
						result.setResponseBody(listEntity);
					}
				}
			}
			log.info("Select End");
		} catch (ApplicationException ae) {
			result.setMessages(ae.getMessages());
		} catch (Exception e) {
			result.addMessage(new Message(MessageConst.MSG_C_IS0000, e.getMessage()));
			log.warn(e.getMessage(), e);
		}
		return result;
	}

	/**
	 * 설계대상부재일람을 검색한다.
	 *
	 * @param id 제원번호
	 * @param userInfo 유저정보
	 * @return 검색결과
	 */
	@GetMapping(Consts.SIM_UI_GET_PATH + Consts.SIM_UI_ISDOC_CATALOG_PATH + "/{id}")
	public WebApiResponse<Object> select(@PathVariable("id") String id,
			@AuthenticationPrincipal UserInfo userInfo) throws Exception {
		WebApiResponse<Object> result = new WebApiResponse<>();
		try {
			log.info("Select Start");
			if (id != null) {
				log.info("ID : " + id);
				Map<String, ?> ifCondMap = this.parseID(id);
				String ifCondJson = IsJsonUtil.Map2JSON(ifCondMap);
				String ifCondJson1 = IsJsonUtil.Map2JSON(ifCondMap, false);
				String ifCondJson2 = IsJsonUtil.Map2JSON(ifCondMap, true);
				log.info("ID : " + id);
				log.info("Parse ID : " + ifCondJson);
				log.info("Parse ID1 : " + ifCondJson1);
				log.info("Parse ID2 : " + ifCondJson2);
				log.info("Map ID : " + ifCondMap);
				Result<List<TbTrnIsdocCatalogEntity>> body = service.select(ifCondMap);
				result.setMessages(body.getMessages());
				List<TbTrnIsdocCatalogEntity> listEntity = body.getResponse();
				if (listEntity == null || listEntity.isEmpty()) {
					result.setResponseBody(null);
				} else {
					result.setResponseBody(listEntity);
				}
			}
			log.info("Select End");
		} catch (ApplicationException ae) {
			result.setMessages(ae.getMessages());
		} catch (Exception e) {
			result.addMessage(new Message(MessageConst.MSG_C_IS0000, e.getMessage()));
			log.warn(e.getMessage(), e);
		}
		return result;
	}

	/**
	 * 설게대상부재 일람을 검색한다.
	 *
	 * @param userInfo 유저정보
	 * @return 검색결과
	 */
	@GetMapping(Consts.SIM_UI_GET_PATH + Consts.SIM_UI_ISDOC_CATALOG_PATH)
	public WebApiResponse<Object> select(@AuthenticationPrincipal UserInfo userInfo) throws Exception {
		WebApiResponse<Object> result = new WebApiResponse<>();
		try {
			log.info("Select Start");
			Map<String, ?> ifCondMap = new HashMap<String, String>();
			Result<List<TbTrnIsdocCatalogEntity>> body = service.select(ifCondMap);
			result.setMessages(body.getMessages());
			List<TbTrnIsdocCatalogEntity> listEntity = body.getResponse();
			if (listEntity == null || listEntity.isEmpty()) {
				result.setResponseBody(null);
			} else {
				result.setResponseBody(listEntity);
			}
			log.info("Select End");
		} catch (ApplicationException ae) {
			result.setMessages(ae.getMessages());
		} catch (Exception e) {
			result.addMessage(new Message(MessageConst.MSG_C_IS0000, e.getMessage()));
			log.warn(e.getMessage(), e);
		}
		return result;
	}

	/**
	 * 설계대상부재 일람을 갱신한다.
	 *
	 * @param id 제원번호
	 * @param dataBody 데이터바디
	 * @param userInfo 유저정보
	 * @return 갱신결과
	 */
	@PostMapping(Consts.SIM_UI_SET_PATH + Consts.SIM_UI_ISDOC_CATALOG_PATH + "/{id}")
	public WebApiResponse<Object> update(@PathVariable("id") String id, @RequestBody String dataBody,
			@AuthenticationPrincipal UserInfo userInfo) {
		WebApiResponse<Object> result = new WebApiResponse<>();
		try {
			log.info("Update Start");

			Map<String, ?> delConfMap = this.parseID(id);
			TbTrnIsdocCatalogEntity beanDel = entityBean.Map2Bean(delConfMap);

			List<TbTrnIsdocCatalogEntity> beanInsList = new ArrayList<TbTrnIsdocCatalogEntity>();
			List<Map<String, ?>> indDataMapList = IsJsonUtil.listUsingTypeReference(dataBody);
			for (Map<String, ?> tempMap : indDataMapList) {
				TbTrnIsdocCatalogEntity beanIns = entityBean.Map2Bean(tempMap);
				for (Map.Entry<String, ?> entity : delConfMap.entrySet()) {
					String name = entity.getKey();
					Object value = entity.getValue();
					boolean bool = beanIns.chkFieldName(beanIns, name);
					if (!bool) {
						String className = beanIns.getClass().getName();
						throw new ApplicationException(new Message(MessageConst.MSG_C_IS0002, name, className));
					}
					beanIns.setObjectValue(beanIns, name, value);
				}
				beanIns.setCreateUser(userInfo.getUserId());
				beanIns.setUpdateUser(userInfo.getUserId());
				beanInsList.add(beanIns);
			}

			Result<Map<String, Integer>> body = service.deleteInsert(beanDel, beanInsList);

			result.setMessages(body.getMessages());

			Result<List<TbTrnIsdocCatalogEntity>> response = service.select(delConfMap);
			List<TbTrnIsdocCatalogEntity> responseBody = response.getResponse();
			if (responseBody == null || responseBody.isEmpty()) {
				result.setResponseBody(null);
			} else {
				result.setResponseBody(responseBody);
			}

			log.info("Update End");
		} catch (ApplicationException ae) {
			result.setMessages(ae.getMessages());
		} catch (Exception e) {
			result.addMessage(new Message(MessageConst.MSG_C_IS0000, e.getMessage()));
			log.warn(e.getMessage(), e);
		}
		return result;
	}
}
