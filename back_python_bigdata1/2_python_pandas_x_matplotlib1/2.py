import pandas as pd # pip install pandas
from pandas import DataFrame as df

# 1. DataFrame 만들기
df1 = pd.DataFrame({'Year':[1991, 1992, 1993, 1994], 
                                'Beer_Code':[11, 12, 13, 14],
                                'Price':[100, 200, 300, 400]},
                                index=[1, 2, 3, 4])
df2 = pd.DataFrame({'Year':[1991, 1992, 1993, 1994], 
                                'Beer_Code':[11, 12, 13, 14],
                                'Price':[100, 200, 300, 400]},
                                index=[5, 6, 7, 8])
df3 = pd.DataFrame({'Year':[1991, 1992, 1993, 1995], 
                                'Beer_Code':[11, 12, 13, 14],
                                'Color_Num':[33, 34, 47, 99]},
                                index=[1, 2, 3, 4])

# 1. DataFrame 결합1 : pd.concat(), concat은 연결의 의미인 concatenation의 줄임말
result = pd.concat([df1, df2])
print(result)
result = pd.concat([df1, df3])
print(result)

# 1. DataFrame 결합2 : pd.append()
result = df1.append(df2)
print(result)
result = df1.append(df3)
print(result)

# 1. 한 행의 데이터프레임을 pd.append()를 통해 결합해보기
print(df3)
df4 = pd.Series([1991, 10, 73], index=['Year', 'Beer_Code', 'Color_Num'])
result = df3.append(df4, ignore_index = True) # 시리즈를 넣을 때는 "인덱스 무시 옵션"의 추가 필수
print(result)

# 1. DataFrame 병합1 : pd.merge(df1, df2), 인덱스와 상관없이 병합이 되고, 같은 값들은 중복 표기가 되지 않음
result= pd.merge(df1, df2)
print(result)

# 1. DataFrame 특정열을 기준으로 병합 : pd.merge(df1, df2, on='컬럼명'), 특정 열(Year열)을 지정하여 그 열을 기준으로 병합하고, 그 열(Year) 외에는 데이터가 다 중복으로 표기됨
result= pd.merge(df1, df2, on='Year')
print(result)
# 좀 더 깔끔하게 'Year'를 인덱스로 설정하여 DataFrame 정리해보기 : inplace = True를 입력해야 DataFrame이 실제로 바뀜
result.set_index('Year', inplace=True)
print(result)

# 1. DataFrame 병합2 : 하나의 열이 다르고 데이터가 서로 다른 df1와 df3의 병합
result=pd.merge(df1, df3)
print(result)
result=pd.merge(df1, df3, on='Year')
print(result)

# 1. DataFrame 병합 방식 변경 : pd.merge(df1, df2, on='컬럼명', how='출력방식')
# how='inner' : 중복된 데이터만 병합
result=pd.merge(df1, df3, on='Year', how='inner')
print(result)
# how='outer' : 모든 데이터를 병합
result=pd.merge(df1, df3, on='Year', how='outer')
print(result)
# how='left' : df1의 'Year'를 기준으로 병합
result=pd.merge(df1, df3, on='Year', how='left')
print(result)
# how='right' : df3의 'Year'를 기준으로 병합
result=pd.merge(df1, df3, on='Year', how='right')
print(result)