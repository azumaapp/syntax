# -*- coding: utf-8 -*-

# 파이썬 데이터분석 커리큘럼 : 파이썬 유틸리티 함수 만들기　→　엑셀　→　sql　→　하둡　→　텐서플로우

# 통계
num_friends = [100, 40, 40, 30, 30, 100, 100, 30, 30, 30, 54, 54, 25, 25, 54, 3, 3, 3, 25, 3]
print('원본데이터: ', num_friends)

# 동일한 친구수를 가진 사람들을 모아서 보여주기
import collections
friends_counts = collections.Counter(num_friends)
print('카운터: ', friends_counts)

# 가시화(visualization)
# import matplotlib.pyplot as plt
# xs = range(101)
# ys = [friends_counts[x] for x in xs]
# plt.bar(xs, ys)
# plt.axis([0,101,0,10])
# plt.xlabel("# of friends")
# plt.ylabel("# of people")
# plt.show()

# 총 조사대상 수는?
people_len = len(num_friends)
print('대상 수: ', people_len)

# 가장 많은 친구수와, 가장 적은 친구수가 궁금해요.
max_value = max(num_friends)
min_value = min(num_friends)
print('최대값: ', max_value)
print('최소값: ', min_value)

# 두번째, 세번째로 많은 친구수는 어떻게 구해요?
sorted_value = sorted(num_friends) # 오름차순으로 정렬된 리스트를 반환
print(sorted_value)
second_smallest_value = sorted_value[1] # 두번째 값
third_smallest_value = sorted_value[2] # 세번째 값
second_largest_value = sorted_value[-2] # 뒤에서 두번째 값
third_largest_value = sorted_value[-3] # 뒤에서 세번째 값
print('2번째값: ', second_largest_value)
print('3번째값: ', third_largest_value)
print('뒤에서 2번째값: ', second_smallest_value)
print('뒤에서 3번째값: ', third_smallest_value)

# 회원들의 친구수의 평균은?
# 파라미터 x = {Array}, 친구수 리스트
def mean(x):
    return sum(x)/len(x)

average_value = mean(num_friends)
print('평균값: ', average_value)

# 회원들의 친구수의 중앙값(극단적인 케이스를 제외하기 위해 사용)은? 
def median(x):
    n = len(x)
    sorted_x = sorted(x) # 정렬
    midpoint = n // 2 # / 로 나누면 float로 반환, // 로 나누면 int로 반환 (몫)

    if n % 2 == 1: # 리스트가 홀수이면, 가운데 값
        return sorted_x(midpoint)
    else:
        lo = midpoint - 1 # 짝수이면, 2개의 값의 평균
        hi = midpoint
        return (sorted_x[lo]+sorted_x[hi] / 2)

median_value = median(num_friends)
print('중앙값: ', median_value)

# 친구수라는 「데이터」의 분포(산포도)는 어떻게 될까요?
# * 왜 이런게 필요..? 특정 데이터가 어느 등급에 속할 지를 정할 때 유용함. (예: 수능 1~9등급)
# 1. 최대, 최소 사이의 범위
def data_range(x):
    return max(x) - min(x)
range_value = data_range(num_friends)
print('최대, 최소 사이의 범위', range_value)
# 2. 상, 하위 25% 사이의 차이 : 이상치를 제외한 평범한 데이터 사이의 범위
# 파라미터 x = {Array}, 친구수 리스트
# 파라미터 p = {Float}, 상하위 퍼센티지 (예: 0.75)
def quantile(x, p):
    p_index = int(p * len(x))
    return sorted(x)[p_index]
def interquartile_range(x):
    return quantile(x, 0.75) - quantile(x, 0.25)
inter_value = interquartile_range(num_friends)
print('상, 하위 25% 사이의 차이', inter_value)
# 3. 데이터들 사이에 얼마나 차이가 큰가? : 분산(variance)
import math
def dot(v, w): # 제곱의 합계를 구하기 위한 로직
    return sum(v_i * w_i for v_i, w_i in zip (v, w))
def sum_of_squares(v): # 제곱의 합계를 구함
    return dot(v,v)
def de_mean(x): # 각 요소값과 평균의 차이를 각각 넣은 배열로 반환
    x_bar = mean(x) # 3~100 평균값 약 39인데 [3-39, 40-39, 50-39, 100-39 ....]
    return [x_i - x_bar for x_i in x]
def variance(x): # 분산을 구함
    n = len(x)
    deviations = de_mean(x) # deviations = 각 요소값과 평균사이의 차들 (편차)
    return sum_of_squares(deviations) / (n-1) # n-1로 나누는 이유? 정확도 상승 ("분산을 n-1으로 나누는 이유" 검색)
variance_value = variance(num_friends)
print('분산: ', variance_value)
# 4. 표준편차(standard deviation) 구하기
# *분산은 데이터의 차이에 제곱을 해주기 때문에 그 값을 sqrt(제곱근 "square root"을 구하는 메소드)를 해줘서 현실적으로 바꿔준 값이다.



