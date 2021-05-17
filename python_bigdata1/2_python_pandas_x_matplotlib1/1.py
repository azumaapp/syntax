# 데이터분석 라이브러리 판다스 x 맷플롭립
# 참조자료:
# https://ordo.tistory.com/34?category=732886 (Python 데이터프레임 만들기 블로그 시작점)
import pandas as pd # pip install pandas
from pandas import DataFrame as df


# 1. Pandas를 활용해 DataFrame 만들기
# DataFrame을 간단히 df로 정의하기 : df(data={'key':[value]})
df1 = df(data={'Num':['1', '2', '3'], 'Name':['Kim', 'Park', 'Choi'], 'Color':['red', 'blue', 'green']})
print(df1)
# DataFrame의 열 순서를 변경하기 : columns=[] 옵션 추가
df2 = df(data={'Num':['1', '2', '3'], 'Name':['Kim', 'Park', 'Choi'], 'Color':['red', 'blue', 'green']},
    columns=['Num', 'Name', 'Color'])
print(df2)
# DataFrame의 인덱스 지정하기 : index=[] 옵션 추가
df3 = df(data={'Num':['1', '2', '3'], 'Name':['Kim', 'Park', 'Choi'], 'Color':['red', 'blue', 'green']},
    columns=['Num', 'Name', 'Color'], index=['A', 'B', 'C'])
print(df3)
# numpy의 arange 함수를 활용, 0부터 5까지 2행 3열의 형태로 데이터프레임을 만들기
# dtype='int' : 데이터 형태를 int로 지정하라
# copy=False : 입력 데이터를 복사할지 지정하라
import numpy as np
df4 = df(data=np.arange(6).reshape(2,3), columns=['a', 'b', 'c'], index=['1', '2'], dtype='int', copy=False)
print(df4)

# 1. DataFrame 관련 기본 함수
df1 = df(data={'Num':['1', '2', '3'], 'Name':['Kim', 'Park', 'Choi'], 'Color':['red', 'blue', 'green']},
    columns=['Num', 'Name', 'Color'], index=['A', 'B', 'C'])    
# shape : 행과 열의 개수를 튜플로 반환
print(df1.shape)
# dtypes : 열을 기준으로 데이터 형태 반환
print(df1.dtypes)
# axes : 행과 열의 이름을 리스트로 반환
print(df1.axes)
# T : 행과 열을 서로 뒤집음
print(df1.T)
# index : 행의 이름을 리스트로 반환
print(df1.index)
# columns : 열의 이름을 리스트로 반환
print(df1.columns)
# 특정컬럼 반환
print(df1['Name'])