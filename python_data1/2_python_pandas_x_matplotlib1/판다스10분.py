# 참조자료:
# https://dandyrilla.github.io/2017-08-12/pandas-10min/
# https://dataitgirls2.github.io/10minutes2pandas/

# 1. import
import pandas as pd
import numpy as np

# 1. Creating Data Object
s = pd.Series([1, 3, 5, np.nan, 6, 8])
dates = pd.date_range('20130101', periods=6)
# print(s)
# print(dates)
df = pd.DataFrame(np.random.randn(6, 4), index=dates, columns=list('ABCD'))
df2 = pd.DataFrame({'A': 1.,
                    'B': pd.Timestamp('20130102'),
                    'C': pd.Series(1, index=list(range(4)), dtype='float32'),
                    'D': np.array([3] * 4, dtype='int32'),
                    'E': pd.Categorical(["test", "train", "test", "train"]),
                    'F': 'foo'})
print(df)
print(df2)

# 1. Viewing Data
