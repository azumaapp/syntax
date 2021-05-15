# Missing Data(NA, NaN) 처리
# 데이터 분석에 있어 가장 중요한 과정은 결측값, 특이값을 얼마나 잘 처리하는 지의 유무에 달려있음
# 결측값, 특이값을 처리하는 3가지 방법
# 1. 무시한다.
# 2. 제거한다.
# 3. 다른 값으로 대체한다.

# 우선 pandas와 numpy를 이용해 NaN 값이 포함된 DataFrame을 만듦
import pandas as pd
import numpy as np

df = pd.DataFrame([[1, np.nan, 2, np.nan],
                            [3, np.nan, 4, np.nan],
                            [5, 6, 7, np.nan],
                            [np.nan, np.nan, np.nan, np.nan]],
                            columns=list('abcd'))
print(df)

# 1. 무시한다.

# 2. 제거한다. : df.dropna()
# Na가 하나라도 들어간 행은 다 지워라.
print(df.dropna())
# 모든 데이터가 NaN인 행은 다 지워라.
print(df.dropna(how='all'))

# 3. NaN값을 다른 값으로 대체한다. : df.fillna()
# 특정값으로 일괄 대체하라.
print(df.fillna(0))
# 열마다 다른 값으로 대체하라.
new_data={'a':0, 'b':1, 'c':-9999}
print(df.fillna(new_data))
# 모든 NaN 값 중 2번째 NaN값까지만 변경하도록 지정해서 대체하라.
new_data={'a':0, 'b':1, 'c':-9999, 'd':-9998}
print(df.fillna(new_data, limit=2))
# method='ffill' : NaN의 값이 그 앞 행 데이터로부터 카피되어 채워짐
print(df.fillna(method='ffill'))
# method='bfill' : NaN의 값이 그 뒤 행 데이터로부터 카피되어 채워짐
print(df.fillna(method='bfill'))