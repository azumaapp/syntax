# 주식데이터 불러오기
# 1. import
import pandas as pd
import datetime
import pandas_datareader as web # pip install pandas_datareader

# 1. setting
ticker = '005930.KS' # Samsung Electronics' Ticker
online_source = 'yahoo' # Yahoo App
start = datetime.datetime(2021, 1, 1)
end = datetime.datetime.today()

# 1. pandas_datareader로 주식데이터 출력
# 기본 출력 : web.DataReader(tickers, source, start, end)
df = web.DataReader(ticker, online_source, start, end)
print(df.head())
# 종가 컬럼만 출력
df_close=df['Close']
print(df_close.head())
# start 날짜부터 end 날짜 사이중 평일만 추려내기 // freq의 나머지 기능들은 직접 찾아보기
only_weekdays = pd.date_range(start, end, freq='B')
print(only_weekdays)
# 종가 DataFrame을 평일 기준으로 다시 나타내기
df_close_weekdays=df_close.reindex(only_weekdays)
print(df_close_weekdays)