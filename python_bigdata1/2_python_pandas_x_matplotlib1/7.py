# 1. pandas를 이용한 데이터로 도표 그리기 준비
# import matplotlib and pandas
import matplotlib.pyplot as plt
import pandas as pd

# 웹에서 csv 파일 불러와서 DataFrame에 담기
df=pd.read_csv("http://goo.gl/QPDdMl")
print(df)

# x, y label
plt.xlabel('P1 Sales')
plt.ylabel('Frequency')
# main title
plt.title('Histogram of P1 Sales')

# # 1. pandas를 이용하여 히스토그램 그리기
# plt.hist(df['p1sales'])
# plt.show()

# # 1. X축 매출액의 범위를 조정한 히스토그램 그리기
# salesRange = []
# # salesRange 리스트에 반복문을 활용하여 0부터 300까지의 데이터를 넣은 후, 이를 X축 범위로 적용함
# for i in range(0, 11):
#     salesRange.append(i * 30)
# # salesRange 리스트로 X축 범위를 지정
# plt.hist(df['p1sales'], salesRange, histtype='bar', rwidth=0.9)
# plt.show()

# 1. pandas를 이용하여 산점도 그리기
plt.title('Scatterplot of P1 Sales')
plt.scatter(df['Week'], df['p1sales'], label='skitscat', color='r', s=30, marker='o')
plt.show()