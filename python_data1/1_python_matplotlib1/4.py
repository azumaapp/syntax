# matplotlib을 이용해서 자신이 만든 통계 분석 자료를 보여주기 (1)
# 참조자료:
# https://matplotlib.org/ (API - 튜토리얼)
# https://matplotlib.org/stable/tutorials/introductory/pyplot.html
# https://wikidocs.net/92082


# 1. 임포트
# 맷플랏립: 시각화 라이브러리
import matplotlib.pyplot as plt 
# 넘피: Numerical Python의 약자로 대규모 다차원 배열과 행렬 연산에 필요한 다양한 함수를 제공. 
# 특히 메모리 버퍼에 배열 데이터를 저장하고 처리하는 효율적인 인터페이스를 제공
import numpy as np



# 1. 배열의 축 레이블 지정
plt.xlabel('X-Label')
plt.ylabel('Y-Label')


# # 1. 배열의 y값만 지정 (x축은 자동으로 1, 2, 3, 4)
# plt.plot([0, 1, 2, 3]) 
# plt.plot([1, 4, 9, 16])
# plt.show()


# # 1. 배열의 x값도 함께 지정
# plt.plot([1, 2, 3, 4], [0, 1, 2, 3]) 
# plt.plot([1, 2, 3, 4], [1, 4, 9, 16])
# plt.show()


# # 1. 배열의 x, y축의 눈금을 수동지정 : axis([x축첫값, x축막값, y축첫값, y축막값])
# plt.plot([1, 2, 3, 4], [1, 4, 9, 16])
# plt.show()


# # 1. 배열의 축 범위 지정
# plt.plot([1, 2, 3, 4], [1, 4, 9, 16])
# plt.axis([0, 6, 0, 20]) # 축 범위 지정
# plt.show()


# # 1. 도트그래프 만들기
# plt.plot([1, 2, 3, 4], [1, 4, 9, 16], 'ro')
# plt.axis([0, 6, 0, 20])
# plt.show()


# # 1. 마커 지정
# # plot() 함수에 ‘bo’를 입력해주면 파란색의 원형 마커로 그래프가 표시됩니다.
# # ‘b’는 blue, ‘o’는 circle을 나타내는 문자입니다.
# # 결과는 아래와 같습니다.
# plt.plot([1, 2, 3, 4], [1, 4, 9, 16], 'bo')
# plt.axis([0, 5, 0, 20])
# plt.show()


# # 1. 마커의 색이나 형태를 바꾸는 방법
# # plt.plot()의 파라미터에 '마커색+마커모양' 을 추가한다. (예: 'ro' = red circles 모양의 마커가 형성됨)
# # 마커색, 모양중 하나를 입력안할 경우에는 디폴트 값으로 지정된다. (예 : 'b' = blue markers with default shape, 'o' = circles with default color)
# # 1-1. 마커색 변경 : 'b' blue, 'r' red, 'g' green, 'k' black, 'y', yellow, 'w' white, 'm' magenta, 'c', cyan
# # 1-2. 컬러 파라미터를 이용하여 마커색 변경 : color='springgreen', color='violet', color='dodgerblue' 등등 color 파라미터를 이용해 더 다양한 css 색상의 이름 지정 가능
# # 1-3. 마커모양 변경
# # '-' solid line, '--' dashed line, '-.' dashed and dotted line
# # 'o' circle, '.' point, ',' pixel,
# # '^' triangle-up, 'v' triangle-down, '<' triangle-left, '>' triangle-right,
# # '1' tri-down, '2' tri-up, '3' tri-left, '4' tri-right,
# # 's' square, 'p' pentagon, 'h' hexagon1, 'H' hexagon2
# # '*' star, '+' plus, 'x' x, 'D' diamond, 'd' thin diamond
# # '|' vertical line, '_' horizontal line
# # 결과는 아래와 같습니다.
# plt.plot([1, 2, 3, 4], [1, 4, 9, 16], 'bo')
# plt.axis([0, 5, 0, 20])
# plt.show()


# # 1. 그래프 영역 채우기
# # ↓ 공통 : x값, y값, 각축의 눈금 지정
# x = [1, 2, 3, 4]
# y = [1, 4, 9, 16]
# plt.axis([0, 5, 0, 20])
# plt.plot(x, y)
# # ↓ fill_between() 사용 : 그래프 x축 밑으로 시작점-끝점을 채움, 알파 채널은 숫자가 낮을수록 시각적으로 더 색상을 부드럽게 구분해줌
# plt.fill_between(x[0:4], y[0:4], alpha=0.5) # x[0], x[3] 사이 채움
# plt.fill_between(x[0:3], y[0:3], alpha=0.5) # x[0], x[2] 사이 채움
# plt.fill_between(x[0:2], y[0:2], alpha=0.5) # x[0], x[1] 사이 채움
# plt.fill_between(x[1:4], y[1:4], alpha=0.5) # x[1], x[3] 사이 채움
# plt.fill_between(x[1:3], y[1:3], alpha=0.5) # x[1], x[2] 사이 채움
# plt.fill_between(x[2:4], y[2:4], alpha=0.5) # x[2], x[3] 사이 채움
# plt.show()
# # ↓  fill_betweenx() 사용 : 그래프 y축 왼쪽으로 시작점-끝점을 채움
# plt.fill_betweenx(y[0:4], x[0:4], alpha=0.2)  # y[0], y[3] 사이 채움
# plt.fill_betweenx(y[0:3], x[0:3], alpha=0.5)  # y[0], y[2] 사이 채움
# plt.fill_betweenx(y[0:2], x[0:2], alpha=0.5)  # y[0], y[1] 사이 채움
# plt.fill_betweenx(y[1:4], x[1:4], alpha=0.5)  # y[1], y[3] 사이 채움
# plt.fill_betweenx(y[1:3], x[1:3], alpha=0.5)  # y[1], y[2] 사이 채움
# plt.fill_betweenx(y[2:4], x[2:4], alpha=0.5)  # y[2], y[3] 사이 채움
# plt.show()
# # ↓ fill() 사용 : 그래프의 꼭지점을 따라 도형을 그리고 채움
# plt.fill(x[0:4], y[0:4], alpha=0.5) # y[0], y[3] 꼭지점 사이 채움
# plt.fill(x[0:3], y[0:3], alpha=0.5) # y[0], y[2] 꼭지점 사이 채움
# plt.fill(x[0:2], y[0:2], alpha=0.5) # y[0], y[2] 꼭지점 사이 채움
# plt.fill(x[1:4], y[1:4], alpha=0.5) # y[1], y[3] 꼭지점 사이 채움
# plt.fill(x[1:3], y[1:3], alpha=0.5) # y[1], y[2] 꼭지점 사이 채움 (꼭지점 2개이므로 사실상 의미 없음)
# plt.fill(x[2:4], y[2:4], alpha=0.5) # y[2], y[3] 꼭지점 사이 채움  (꼭지점 2개이므로 사실상 의미 없음)
# plt.show()


# # 1. 두 그래프 사이의 영역 채우기
# # 두 개의 그래프 커브 사이 영역을 채우기 위해서는 두 개의 y 값 시퀀스 y1, y2를 입력해줍니다.
# # 네 점(x[1], y[1]), (x[1], y[2]), (x[2], y[1]), (x[2], y[2]) 사이 영역을 채웁니다.
# # 결과는 아래와 같습니다.
# x = [1, 2, 3, 4]
# y1 = [1, 4, 9, 16]
# y2 = [1, 2, 4, 8]
# plt.plot(x, y1)
# plt.plot(x, y2)
# plt.fill_between(x[1:3], y1[1:3], y2[1:3], color='lightgray', alpha=0.5)
# plt.show()


# # 1. 꼭지점만 수동 지정해 만든 임의의 도형에 채우기
# # fill() 함수에 x, y 값의 리스트를 입력해주면,
# # 각 x, y 점들로 정의되는 다각형 영역을 자유롭게 지정해서 채울 수 있습니다.
# # 결과는 아래와 같습니다.
# x = [1, 2, 3, 4]
# y1 = [1, 4, 9, 16]
# y2 = [1, 2, 4, 8]
# plt.plot(x, y1)
# plt.plot(x, y2)
# plt.fill([1.9, 1.9, 3.1, 3.1], [2, 5, 11, 8], color='lightgray', alpha=0.5) # [x1, x2, x3, x4], [y1, y2, y3, y4] 에서 (x1,y1), (x2,y2) ... 의 4개의 꼭지점에서 도출된 임의의 도형에 색칠한다.
# plt.show()


# # 1. 여러 곡선 그리기
# # 여기서부터 Numpy 임포트가 작동합니다.
# # NumPy 어레이 [ 0. 0.2 0.4 0.6 0.8 1. 1.2 1.4 1.6 1.8]를 만들었습니다. 
# # plot() 함수에 x 값, y 값, 스타일을 순서대로 세 번씩 입력하면, 세 개의 곡선 (y=x, y=x^2, y=x^3)이 동시에 그려집니다.
# # ‘r–‘은 빨간색 (Red)의 대쉬 (Dashed) 스타일 선,
# # ‘bo’는 파란색 (Blue)의 원형 (Circle) 마커,
# # ‘g-.’은 녹색 (Green)의 대쉬-닷 (Dash-dot) 스타일 선을 의미합니다.
# # 결과는 아래와 같습니다.
# a = np.arange(0, 2, 0.2)
# plt.plot(a, a, 'r--', a, a**2, 'bo', a, a**3, 'g-.')
# plt.show()


# # 1. 스타일 지정하기 (color, marker, linewidth, markersize 파라미터 추가하기)
# # 첫 번째 곡선의 스타일은 ‘bo’로,
# # 두 번째 곡선은 color=’#e35f62’, marker=’*’, linewidth=2로,
# # 세 번째 곡선은 color=’springgreen’, marker=’^’, markersize=9로 각각 설정했습니다.
# a = np.arange(0, 2, 0.2)
# plt.plot(a, a, 'bo')
# plt.plot(a, a**2, color='#e35f62', marker='*', linewidth=2)
# plt.plot(a, a**3, color='springgreen', marker='^', markersize=9)
# plt.show()


# # 1. 그리드 설정하기
# # 데이터의 위치를 더 명확하게 하기 위해 그래프에 그리드 (Grid, 격자)를 표시할 수 있습니다.
# # matplotlib.pyplot 모듈의 grid() 함수를 이용해서 그래프에 다양하게 그리드를 설정해 보겠습니다.
# a = np.arange(0, 2, 0.2)
# plt.plot(a, a, 'bo')
# plt.plot(a, a**2, color='#e35f62', marker='*', linewidth=2)
# plt.plot(a, a**3, color='springgreen', marker='^', markersize=9)
# plt.grid(True)
# plt.show()


# # 1. 축 지정하기
# # axis=y로 설정하면 가로 방향의 그리드만 표시됩니다.
# # {‘both’, ‘x’, ‘y’} 중 선택할 수 있고 디폴트는 ‘both’입니다.
# a = np.arange(0, 2, 0.2)
# plt.plot(a, a, 'bo')
# plt.plot(a, a**2, color='#e35f62', marker='*', linewidth=2)
# plt.plot(a, a**3, color='springgreen', marker='^', markersize=9)
# plt.grid(True, axis='y')
# plt.show()


# # 1. 그리드의 스타일 설정하기 (color, alpha, linestyle 파라미터 사용)
# # color, alpha, linestyle 파라미터(인자)를 사용해서 그리드 선의 스타일을 바꿉니다.
# # 또한 which 파라미터를 ‘major’, ‘minor’, ‘both’ 등으로 사용하면 주눈금, 보조눈금에 각각 그리드를 표시할 수 있습니다.
# a = np.arange(0, 2, 0.2)
# plt.plot(a, a, 'bo')
# plt.plot(a, a**2, color='#e35f62', marker='*', linewidth=2)
# plt.plot(a, a**3, color='springgreen', marker='^', markersize=9)
# plt.grid(True, axis='y', color='red', alpha=0.5, linestyle='--', which='major')
# plt.show()