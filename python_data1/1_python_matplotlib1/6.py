# # 3. 임포트
import matplotlib.pyplot as plt
import numpy as np


# # 3. 수직 막대 그래프 그리기 : plt.bar(x, y)
# # # np.arange는 주어진 범위와 간격에 따라 균일한 값을 갖는 어레이를 생성하는 함수입니다.
# # years는 x축에 표시될 연도이고, values는 막대 그래프의 높이로 표시될 y 값 입니다.
# # 먼저 bar() 함수에 NumPy 어레이 [0, 1, 2]와 y 값에 해당하는 리스트 [100, 400, 900]를 입력해줍니다.
# # 다음, xticks()에 x와 years를 입력해주면, x축에 ‘2017’, ‘2018’, ‘2019’가 순서대로 표시됩니다.
# # 결과는 아래와 같습니다.
# x = np.arange(3)
# years = ['2017', '2018', '2019']
# values = [100, 400, 900]
# plt.bar(x, values) # 막대 그래프 표현하는 함수
# plt.xticks(x, years)
# plt.show()


# # 3. 수직 막대 그래프 스타일 꾸미기 : width, align, color, edgecolor, linewidth, tick_label, log
# # 이번에는 막대 그래프에서 막대와 테두리의 색, 두께 등 다양한 스타일을 적용해 보겠습니다.
# # width는 막대의 너비입니다. 디폴트 값은 0.8이며, 예제에서는 0.6으로 설정했습니다.
# # align은 틱 (tick)과 막대의 위치를 조절합니다. 디폴트 값은 ‘center’인데, ‘edge’로 설정하면 막대의 왼쪽 끝에 x_tick이 표시됩니다.
# # color는 막대의 색을 지정합니다.
# # edgecolor는 막대의 테두리 색을 지정합니다.
# # linewidth는 테두리의 두께를 지정합니다.
# # tick_label을 어레이 형태로 지정하면, 틱에 어레이의 문자열을 순서대로 나타낼 수 있습니다.
# # log=True로 설정하면, y축이 로그 스케일로 표시됩니다.
# #결과는 아래와 같습니다.
# x = np.arange(3)
# years = ['2017', '2018', '2019']
# values = [100, 400, 900]
# plt.bar(x, values, width=0.6, align='edge', color="springgreen",
#         edgecolor="gray", linewidth=3, tick_label=years, log=True)
# plt.show()


# # 3. 수평 막대 그래프 그리기 : plt.barh(x, y)
# # height는 막대의 높이입니다. 디폴트는 0.8인데 -0.6으로 설정했습니다.
# # align은 tick과 막대의 위치를 조절합니다. 디폴트는 ‘center’인데 ‘edge’로 설정하면 막대의 아래쪽 끝에 y_tick이 표시됩니다.
# # 예제에서는 height를 음수로 지정했기 때문에 막대의 위쪽 끝에 y_tick이 표시됩니다.
# # color는 막대의 색을 지정합니다.
# # edgecolor는 막대의 테두리색을 지정합니다.
# # linewidth는 테두리의 두께를 지정합니다.
# # tick_label을 어레이 형태로 지정해주면, 틱에 어레이의 문자열을 순서대로 나타낼 수 있습니다.
# # log=False로 설정하면, x 축이 선형 스케일로 표시됩니다. 디폴트는 False입니다.
# # 결과는 아래와 같습니다.
# y = np.arange(3)
# years = ['2017', '2018', '2019']
# values = [100, 400, 900]
# plt.barh(y, values, height=-0.6, align='edge', color="springgreen",
#         edgecolor="gray", linewidth=3, tick_label=years, log=False)
# plt.show()


# # 3. 2차원 산점도 그리기1 임의 : plt.scatter(x, y, s=size)
# # 산점도 (scatter plot)는 두 변수의 상관 관계를 직교 좌표계의 평면에 데이터를 점으로 표현하는 그래프입니다.
# # np.random.seed(int) : 이를 이용해서 난수 생성의 시드를 설정하면, 같은 난수를 재사용할 수 있습니다. seed()에 들어갈 파라미터는 0에서 4294967295 사이의 정수여야 합니다.
# # np.random.rand(int) : x, y의 위치, 마커의 색 (colors)과 면적 (area)을 무작위로 지정해줍니다. 예를 들어, x는 [0.7003673, 0.74275081, … ,0.23722644, 0.82394557]으로 0~1 범위에서 무작위의 int 개의 값을 갖습니다.
# # plt.scatter(x, y, s=size) : scatter()에 x, y 위치를 입력해줍니다. s는 마커의 면적, c는 마커의 색, alpha는 마커색의 투명도를 결정합니다.
# # 결과는 아래와 같습니다.
# np.random.seed(20210312)    # Reproducible random state
# N = 50
# x = np.random.rand(N)
# y = np.random.rand(N)
# colors = np.random.rand(N)
# area = (30 * np.random.rand(N))**2
# plt.scatter(x, y, s=area, c=colors, alpha=0.5)
# plt.show()


# # 3. 2차원 산점도 그리기2 수동 : plt.scatter(x, y, s=size)
# x = [100, 200, 300, 400, 500, 233, 355, 411, 777, 111, 666, 888]
# y = [705, 500, 200, 400, 300, 785, 500, 700, 300, 555, 444, 222]
# colors = np.random.rand(len(x))
# size = [50, 20, 30, 40, 99, 120, 122, 154, 199, 193, 888, 111]
# plt.scatter(x, y, s=size, c=colors, alpha=0.5)
# plt.show()


# 3. 3차원 산점도 그리기1 임의 : plt.figure().add_subplot(111, projection='3d').scatter(xs, ys, zs)
# xs, ys는 0에서 20 사이, zs는 0에서 50 사이의 값을 갖도록 범위를 정해줍니다.
n = 100
xmin, xmax, ymin, ymax, zmin, zmax = 0, 20, 0, 20, 0, 50
# color는 0에서 2 사이의 값을 갖는 실수이고, 이 값을 통해 각각 다른 색을 표현합니다.
cmin, cmax = 0, 2
# np.random.random_sample()를 통해 각 범위 안에서 임의의 실수를 생성합니다.
xs = np.array([(xmax - xmin) * np.random.random_sample() + xmin for i in range(n)])
ys = np.array([(ymax - ymin) * np.random.random_sample() + ymin for i in range(n)])
zs = np.array([(zmax - zmin) * np.random.random_sample() + zmin for i in range(n)])
color = np.array([(cmax - cmin) * np.random.random_sample() + cmin for i in range(n)])
print(xs, ys, zs)
# 이 부분은 아래와 같이 np.random.rand(n)를 이용해서 동일하게도 만들 수 있습니다.
# xs = (xmax - xmin) * np.random.rand(n) + xmin
# ys = (xmax - xmin) * np.random.rand(n) + ymin
# zs = (xmax - xmin) * np.random.rand(n) + zmin
# color = (xmax - xmin) * np.random.rand(n) + cmin
# rcParams를 이용해서 figure의 사이즈를 설정해줍니다.
plt.rcParams["figure.figsize"] = (6, 6)
fig = plt.figure()
# 3D axes를 만들기 위해 add_subplot()에 projection=’3d’를 입력해줍니다.
ax = fig.add_subplot(111, projection='3d')
# scatter() 함수에 x, y, z 위치를 어레이의 형태로 입력해줍니다.
# c=color는 color 어레이의 값들이 색으로 표현되도록 합니다.
# 마커 (marker)의 형태를 원형 (circle)으로 정해줍니다.
# cmap=’Greens’를 통해 colormap을 녹색 계열로 설정합니다.
ax.scatter(xs, ys, zs, c=color, marker='o', s=15, cmap='Greens')
# 결과는 아래와 같습니다.
plt.show()


# # 3. 3차원 산점도 그리기2 수동 : plt.figure().add_subplot(111, projection='3d').scatter(xs, ys, zs)
# # xs, ys는 0에서 20 사이, zs는 0에서 50 사이의 값을 갖도록 범위를 정해줍니다.
# n = 5
# xmin, xmax, ymin, ymax, zmin, zmax = 0, 5, 0, 5, 0, 10
# # color는 0에서 2 사이의 값을 갖는 실수이고, 이 값을 통해 각각 다른 색을 표현합니다.
# cmin, cmax = 0, 2
# # 각 20개의 데이터를 입력해 받습니다.
# xs = [2.35, 3.55, 5.32, 4.03, 1.15]
# ys = [4.81, 2.23, 3.34, 3.12, 1.91]
# zs = [7.86, 2.39, 9.39, 4.55, 6.12]
# # 이 부분은 아래와 같이 np.random.rand(n)를 이용해서 동일하게도 만들 수 있습니다.
# # xs = (xmax - xmin) * np.random.rand(n) + xmin
# # ys = (xmax - xmin) * np.random.rand(n) + ymin
# # zs = (xmax - xmin) * np.random.rand(n) + zmin
# # color = (xmax - xmin) * np.random.rand(n) + cmin
# # rcParams를 이용해서 figure의 사이즈를 설정해줍니다.
# plt.rcParams["figure.figsize"] = (6, 6)
# fig = plt.figure()
# # 3D axes를 만들기 위해 add_subplot()에 projection=’3d’를 입력해줍니다.
# ax = fig.add_subplot(111, projection='3d')
# # scatter() 함수에 x, y, z 위치를 어레이의 형태로 입력해줍니다.
# # c=color는 color 어레이의 값들이 색으로 표현되도록 합니다.
# # 마커 (marker)의 형태를 원형 (circle)으로 정해줍니다.
# # cmap=’Greens’를 통해 colormap을 녹색 계열로 설정합니다.
# ax.scatter(xs, ys, zs, marker='o', s=30, cmap='Greens')
# # 결과는 아래와 같습니다.
# plt.show()


# # 3. 히스토그램 그리기 : plt.hist(list)
# # 히스토그램 (Histogram)은 (빈)도수분포표를 그래프로 나타낸 것으로, 가로축은 계급, 세로축은 도수 (횟수나 개수 등)를 나타냅니다.
# # weight는 몸무게 값을 나타내는 리스트입니다.
# # 결과는 아래와 같습니다.
# weight = [68, 81, 64, 56, 78, 74, 61, 77, 66, 68, 59, 71, 80, 59, 67, 81, 69, 73, 69, 74, 70, 65]
# plt.hist(weight)
# plt.show()


# # 3. 여러 개의 히스토그램 그리기1 임의
# # Numpy의 np.random.randn(), np.random.standard_normal(), np.random.rand() 함수를 이용해서 임의의 값들을 만들었습니다.
# # 어레이 a는 표준편차 2.0, 평균 1.0을 갖는 정규분포, 어레이 b는 표준정규분포를 따릅니다.
# # 어레이 c는 -10.0에서 10.0 사이의 균일한 분포를 갖는 5000개의 임의의 값입니다.
# # 세 개의 분포를 동시에 그래프에 나타냅니다.
# # bins는 몇 개의 영역으로 쪼갤지를 설정합니다.
# # density=True로 설정해주면, 밀도함수가 되어서 막대의 아래 면적이 1이 됩니다.
# # alpha는 투명도를 의미합니다. 0.0에서 1.0 사이의 값을 갖습니다.
# # histtype을 ‘step’으로 설정하면 막대 내부가 비어있고, ‘stepfilled’로 설정하면 막대 내부가 채워집니다.
# # 결과는 아래와 같습니다.
# a = 2.0 * np.random.randn(10000) + 1.0
# b = np.random.standard_normal(10000)
# c = 20.0 * np.random.rand(5000) - 10.0
# plt.hist(a, bins=100, density=True, alpha=0.7, histtype='step')
# plt.hist(b, bins=50, density=True, alpha=0.5, histtype='stepfilled')
# plt.hist(c, bins=100, density=True, alpha=0.9, histtype='step')
# plt.show()


# # 3. 여러 개의 히스토그램 그리기2 수동
# # 어레이 a는 표준편차 2.0, 평균 1.0을 갖는 정규분포, 어레이 b는 표준정규분포를 따릅니다.
# # 어레이 c는 -10.0에서 10.0 사이의 균일한 분포를 갖는 5000개의 임의의 값입니다.
# # 세 개의 분포를 동시에 그래프에 나타냅니다.
# # bins는 몇 개의 영역으로 쪼갤지를 설정합니다.
# # density=True로 설정해주면, 밀도함수가 되어서 막대의 아래 면적이 1이 됩니다.
# # alpha는 투명도를 의미합니다. 0.0에서 1.0 사이의 값을 갖습니다.
# # histtype을 ‘step’으로 설정하면 막대 내부가 비어있고, ‘stepfilled’로 설정하면 막대 내부가 채워집니다.
# # 결과는 아래와 같습니다.
# a = [1, 2, 3, 4, 5, 4, 3, 2, 1]
# b = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 9, 8, 7, 6, 5, 4, 3, 3, 2, 1]
# c = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 14, 13, 12, 11, 10, 9, 8, 7, 6, 5, 4, 3, 3, 2, 1]
# plt.hist(a, bins=3, density=True, alpha=0.7, histtype='step')
# plt.hist(b, bins=6, density=True, alpha=0.5, histtype='stepfilled')
# plt.hist(c, bins=9, density=True, alpha=0.9, histtype='stepfilled')
# plt.show()


# # 3. 에러바 그래프1 (대칭편차 나타내기) : plt.errorbar(x, y, yerr=[array])
# # 에러바 (Errorbar, 오차막대)는 데이터의 편차를 표시하기 위한 그래프 형태입니다.
# # errorbar() 함수에 x, y 값들과 함께,
# # 데이터의 편차를 나타내는 리스트인 yerr을 입력합니다.
# # yerr의 각 값들은 데이터 포인트의 위/아래 대칭인 오차로 표시됩니다.
# # 결과는 아래와 같습니다.
# x = [1, 2, 3, 4]
# y = [1, 4, 9, 16]
# yerr = [2.3, 3.1, 1.7, 2.5]
# plt.errorbar(x, y, yerr=yerr)
# plt.show()


# # 3. 에러바 그래프2 (비대칭편차 나타내기) : plt.errorbar(x, y, yerr=[(tuple1), (tuple2)])
# # 데이터 포인트를 기준으로 비대칭인 편차를 표시합니다.
# # 첫번째 튜플의 값들은 아래 방향 편차,
# # 두번째 튜플의 값들은 위 방향 편차를 나타냅니다.
# # 결과는 아래와 같습니다.
# x = [1, 2, 3, 4]
# y = [1, 4, 9, 16]
# yerr = [(2.3, 3.1, 1.7, 2.5), (1.1, 2.5, 0.9, 3.9)]
# plt.errorbar(x, y, yerr=yerr)
# plt.show()


# # 3. 에러바 그래프3 (상한/하한 기호 표시하기) : plt.errorbar(x, y, yerr=[array], uplims=True, lolims=True) # 아래, 위 화살표
# # uplims, lolims를 사용해서 상한/하한 기호를 선택적으로 표시할 수 있습니다.
# # 예를 들어, uplims이 True이고 lolims이 False라면, 
# # 이 값이 상한값임을 의미해서 아래 방향의 화살표가 표시됩니다.
# # 결과는 아래와 같습니다.
# x = np.arange(1, 5)
# y = x**2
# # numpy 수열 만들기 : 예를 들어 np.linspace(0.1, 0.4, 4)는 0.1에서 시작해서 4까지 0.4씩 증가하는 수열을 만든다는 의미
# yerr = np.linspace(0.1, 0.4, 4) 
# # 1번째 에러바 그래프 : 화살표 없음
# plt.errorbar(x, y + 4, yerr=yerr)
# # 2번째 에러바 그래프 : 전부 아래, 위로 화살표 있음
# plt.errorbar(x, y + 2, yerr=yerr, uplims=True, lolims=True) 
# # 3번째 에러바 그래프 : 아래, 없음, 아래위, 위로 화살표
# upperlimits = [True, False, True, False]
# lowerlimits = [False, False, True, True] 
# plt.errorbar(x, y, yerr=yerr, uplims=upperlimits, lolims=lowerlimits)
# plt.show()


# # 3. 파이챠트 그리기 : plt.pie([ratioArray], labels=[labelsArray], autopct='string')
# # 파이 차트 (Pie chart, 원 그래프)는 범주별 구성 비율을 원형으로 표현한 그래프입니다.
# # ratioArray: 각 영역의 비율입니다.
# # labelsArray: 각 영역의 이름입니다.
# # autopct : 부채꼴 안에 표시될 숫자의 형식을 지정. 예) 「%.1f%%」는 소수점 한자리까지 표시하도록 설정하는 것입니다.
# ratio = [34, 32, 16, 18]
# labels = ['Apple', 'Banana', 'Melon', 'Grapes']
# plt.pie(ratio, labels=labels, autopct='%.1f%%')
# plt.show()


# # 3. 파이챠트 시작 각도와 방향 설정하기 : plt.pie([ratioArray], labels=[labelsArray], autopct='string', startangle=int, counterclock=False)
# # startangle : 부채꼴이 그려지는 시작 각도. 디폴트는 0도 (양의 방향 x축)
# # counterclock : False로 설정하면 시계 방향 순서로 부채꼴 영역이 표시됩니다.
# ratio = [34, 32, 16, 18]
# labels = ['Apple', 'Banana', 'Melon', 'Grapes']
# plt.pie(ratio, labels=labels, autopct='%.1f%%', startangle=260, counterclock=False)
# plt.show()


# # 3. 파이챠트 중심에서 벗어나는 정도 설정하기 : plt.pie([ratioArray], labels=[labelsArray], autopct='string', startangle=int, counterclock=False, explode=[explodeArray])
# # explodeArray : 부채꼴이 파이 차트의 중심에서 벗어나는 정도
# ratio = [34, 32, 16, 18]
# labels = ['Apple', 'Banana', 'Melon', 'Grapes']
# # ‘Banana’와 ‘Grapes’ 영역에 대해서 반지름의 10% 만큼 벗어나도록 설정했습니다.
# explode = [0, 0.10, 0, 0.10]
# plt.pie(ratio, labels=labels, autopct='%.1f%%', startangle=260, counterclock=False, explode=explode)
# plt.show()


# # 3. 파이챠트 그림자 나타내기 : plt.pie([ratioArray], labels=[labelsArray], autopct='string', startangle=int, counterclock=False, explode=[explodeArray], shadow=True)
# # shadow = True로 설정하면, 파이 차트에 그림자가 표시됩니다.
# ratio = [34, 32, 16, 18]
# labels = ['Apple', 'Banana', 'Melon', 'Grapes']
# explode = [0.05, 0.05, 0.05, 0.05]
# plt.pie(ratio, labels=labels, autopct='%.1f%%', startangle=260, counterclock=False, explode=explode, shadow=True)
# plt.show()


# # 3. 파이챠트 색상 지정하기1 : plt.pie([ratioArray], labels=[labelsArray], autopct='string', startangle=int, counterclock=False, explode=[explodeArray], shadow=True, colors=[colorsArray])
# # colorsArray : ‘silver’ 등 이름을 사용하거나,  ‘#ff9999’ 등 헥사코드로 각 영역의 색상을 지정합니다.
# # 결과는 아래와 같습니다.
# ratio = [34, 32, 16, 18]
# labels = ['Apple', 'Banana', 'Melon', 'Grapes']
# explode = [0.05, 0.05, 0.05, 0.05]
# colors = ['silver', 'gold', 'whitesmoke', 'lightgray']
# # colors = ['#ff9999', '#ffc000', '#8fd9b6', '#d395d0']
# plt.pie(ratio, labels=labels, autopct='%.1f%%', startangle=260, counterclock=False, explode=explode, shadow=True, colors=colors)
# plt.show()


# # 3. 파이챠트 부채꼴 스타일 지정하기 : plt.pie([ratioArray], labels=[labelsArray], autopct='string', startangle=int, counterclock=False, colors=[colorsArray], wedgeprops={wedgepropsDict})
# # wedgepropsDict : 부채꼴 영역의 스타일을 설정하는 딕셔너리. ‘width’, ‘edgecolor’, ‘linewidth’ 키를 이용해서 각각 "부채꼴 영역의 너비(=반지름에 대한 비율)", "테두리의 색상", "테두리 선의 너비"를 설정합니다.
# # 결과는 아래와 같습니다. 
# ratio = [34, 32, 16, 18]
# labels = ['Apple', 'Banana', 'Melon', 'Grapes']
# colors = ['#ff9999', '#ffc000', '#8fd9b6', '#d395d0']
# wedgeprops={'width': 0.7, 'edgecolor': 'w', 'linewidth': 5}
# plt.pie(ratio, labels=labels, autopct='%.1f%%', startangle=260, counterclock=False, colors=colors, wedgeprops=wedgeprops)
# plt.show()



# # 최종숙제1 : 자신이 가지고 있는 메모장 파일을 통해서 리스트에 담아서 이를 이용해 그래프로 그리고 시각화까지 해보기
# # 최종숙제2 : 자신이 가지고 있는 엑셀 파일(*.CSV, *.XLSX)을 통해서 리스트에 담아서 이를 이용해 그래프로 그리고 시각화까지 해보기
# # 최종숙제3 : 웹크롤러로 받은 데이터를 리스트에 담아서 이를 이용해 그래프로 그리고 시각화까지 해보기