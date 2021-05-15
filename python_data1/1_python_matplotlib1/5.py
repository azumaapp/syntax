# matplotlib을 이용해서 자신이 만든 통계 분석 자료를 보여주기 (2)
# 참조자료:
# https://matplotlib.org/ (API - 튜토리얼)
# https://matplotlib.org/stable/tutorials/introductory/pyplot.html
# https://wikidocs.net/92089

import matplotlib.pyplot as plt
import numpy as np
plt.xlabel('X-Label')
plt.ylabel('Y-Label')

# # 2. 눈금 표시하기
# # 2. 틱 표시하기
# # 틱(Tick)은 그래프의 축에 간격을 구분하기 위해 표시하는 눈금입니다.
# # xticks(), yticks() 함수는 각각 x축, y축에 수동으로 준 표시합니다.
# # 해당하는 위치에 눈금과 숫자 레이블이 표시됩니다.
# a = np.arange(0, 2, 0.2)
# plt.plot(a, a, 'bo')
# plt.plot(a, a**2, color='#e35f62', marker='*', linewidth=2)
# plt.plot(a, a**3, color='springgreen', marker='^', markersize=9)
# plt.xticks([0, 1, 2])
# plt.yticks(np.arange(1, 6))
# plt.show()


# # 2. 눈금 레이블 지정하기
# # labels 파라미터를 사용하면 눈금 레이블을 명시적으로 지정할 수 있습니다.
# a = np.arange(0, 2, 0.2)
# plt.plot(a, a, 'bo')
# plt.plot(a, a**2, color='#e35f62', marker='*', linewidth=2)
# plt.plot(a, a**3, color='springgreen', marker='^', markersize=9)
# plt.xticks(np.arange(0, 2, 0.2), labels=['Jan', '', 'Feb', '', 'Mar', '', 'May', '', 'June', ''])
# plt.yticks(np.arange(0, 7), ('0', '1GB', '2GB', '3GB', '4GB', '5GB', '6GB'))
# plt.show()


# # 2. 눈금 스타일 지정하기
# # tick_params() 함수를 사용하면 눈금의 스타일을 다양하게 설정할 수 있습니다.
# # axis는 설정이 적용될 축을 지정합니다. {‘x’, ‘y’, ‘both’} 중 선택할 수 있습니다.
# # direction을 ‘in’, ‘out’으로 설정하면 눈금이 안/밖으로 표시됩니다. {‘in’, ‘out’, ‘inout’} 중 선택할 수 있습니다.
# # length는 눈금의 길이를 지정합니다.
# # pad는 눈금과 레이블과의 거리를 지정합니다.
# # labelsize는 레이블의 크기를 지정합니다.
# # labelcolor는 레이블의 색상을 지정합니다.
# # top/bottom/left/right를 True/False로 지정하면 눈금이 표시될 위치를 선택할 수 있습니다.
# # width는 눈금의 너비를 지정합니다.
# # color는 눈금의 색상을 지정합니다.
# a = np.arange(0, 2, 0.2)
# plt.plot(a, a, 'bo')
# plt.plot(a, a**2, color='#e35f62', marker='*', linewidth=2)
# plt.plot(a, a**3, color='springgreen', marker='^', markersize=9)
# plt.xticks(np.arange(0, 2, 0.2), labels=['Jan', '', 'Feb', '', 'Mar', '', 'May', '', 'June', ''])
# plt.yticks(np.arange(0, 7), ('0', '1GB', '2GB', '3GB', '4GB', '5GB', '6GB'))
# plt.tick_params(axis='x', direction='in', length=3, pad=6,
#                 labelsize=14, labelcolor='green', top=True)
# plt.tick_params(axis='y', direction='inout', length=10,
#                 pad=15, labelsize=12, width=2, color='r')
# plt.show()


# # 2. 타이틀 지정하기
# # title() 함수를 이용해서 그래프의 타이틀을 ‘Sample graph’로 설정했습니다.
# # 결과는 아래와 같습니다.
# a = np.arange(0, 2, 0.2)
# plt.plot(a, a, 'bo')
# plt.plot(a, a**2, color='#e35f62', marker='*', linewidth=2)
# plt.plot(a, a**3, color='springgreen', marker='^', markersize=9)
# plt.grid(True, axis='y', color='gray', alpha=0.5, linestyle='--')
# plt.tick_params(axis='both', direction='in', length=3, pad=6, labelsize=14)
# plt.title('Sample graph')  # 타이틀 지정부분
# plt.show()


# # 2. 타이틀 위치와 오프셋 지정하기
# # loc=’right’로 설정하면, 타이틀이 그래프의 오른쪽 위에 나타나게 됩니다.
# # ‘left’, ‘center’, ‘right’로 설정할 수 있으며 디폴트는 ‘center’입니다.
# # pad=20은 타이틀과 그래프와의 간격 (오프셋)을 포인트 단위로 설정합니다.
# # 결과는 아래와 같습니다.
# a = np.arange(0, 2, 0.2)
# plt.plot(a, a, 'bo')
# plt.plot(a, a**2, color='#e35f62', marker='*', linewidth=2)
# plt.plot(a, a**3, color='springgreen', marker='^', markersize=9)
# plt.grid(True, axis='y', color='gray', alpha=0.5, linestyle='--')
# plt.tick_params(axis='both', direction='in', length=3, pad=6, labelsize=14)
# plt.title('Sample graph', loc='right', pad=20) # 타이틀 위치와 오프셋 지정부분
# plt.show()


# # 2. 타이틀 폰트 지정하기
# # fontdict에 딕셔너리 형태로 폰트에 대한 설정을 입력할 수 있습니다.
# # ‘fontsize’를 16으로, ‘fontweight’를 ‘bold’로 설정했습니다.
# # ‘fontsize’는 포인트 단위의 숫자를 입력하거나 ‘smaller’, ‘x-large’ 등의 상대적인 설정을 할 수 있습니다.
# # ‘fontweight’에는 ‘normal’, ‘bold’, ‘heavy’, ‘light’, ‘ultrabold’, ‘ultralight’의 설정을 할 수 있습니다.
# # 결과는 아래와 같습니다.
# a = np.arange(0, 2, 0.2)
# plt.plot(a, a, 'bo')
# plt.plot(a, a**2, color='#e35f62', marker='*', linewidth=2)
# plt.plot(a, a**3, color='springgreen', marker='^', markersize=9)
# plt.grid(True, axis='y', color='gray', alpha=0.5, linestyle='--')
# plt.tick_params(axis='both', direction='in', length=3, pad=6, labelsize=14)
# title_font = {  # 타이틀 폰트 지정 부분
#     'fontsize': 16,
#     'fontweight': 'bold'
# }
# plt.title('Sample graph', fontdict=title_font,
#           loc='right', pad=20)  # 폰트 지정 딕셔너리를 타이틀에 연동
# plt.show()


# # 2. axhline/axvline() : 수직선/수평선 표시하기1
# # axhline() 함수의 첫번째 인자는 y 값으로서 수평선의 위치가 됩니다.
# # 두, 세번째 인자는 xmin, xmax 값으로서 0에서 1 사이의 값을 입력합니다.
# # 0은 왼쪽 끝 (y축), 1은 오른쪽 끝을 의미합니다.
# # axvline() 함수의 첫번째 인자는 x 값으로서 수직선의 위치가 됩니다.
# # 두, 세번째 인자는 ymin, ymax 값으로서 0에서 1 사이의 값을 입력합니다.
# # 0은 아래쪽 끝 (x축), 1은 위쪽 끝을 의미합니다.
# # 결과는 아래와 같습니다.
# a = np.arange(0, 2, 0.2)
# plt.plot(a, a, 'bo')
# plt.plot(a, a**2, color='#e35f62', marker='*', linewidth=2)
# plt.plot(a, a**3, color='springgreen', marker='^', markersize=9)
# plt.xticks(np.arange(0, 2, 0.2), labels=['Jan', '', 'Feb', '', 'Mar', '', 'May', '', 'June', ''])
# plt.yticks(np.arange(0, 7), ('0', '1GB', '2GB', '3GB', '4GB', '5GB', '6GB'))
# plt.axhline(1, 0, 0.55, color='gray', linestyle='--', linewidth='1') # 아래 수평선
# plt.axvline(1, 0, 0.16, color='lightgray', linestyle=':', linewidth='2') # 아래 수직선
# plt.axhline(5.83, 0, 0.95, color='gray', linestyle='--', linewidth='1') # 위 수평선
# plt.axvline(1.8, 0, 0.95, color='lightgray', linestyle=':', linewidth='2') # 위 수직선
# plt.show()


# # 2. hlines/vlines() : 수직선/수평선 표시하기2
# # hlines() 함수에 y, xmin, xmax를 순서대로 입력하면, 점 (xmin, y)에서 점 (xmax, y)를 따라 수평선을 표시합니다.
# # vlines() 함수에 x, ymin, ymax를 순서대로 입력하면, 점 (x, ymin)에서 점 (x, ymax)를 따라 수평선을 표시합니다.
# # 결과는 아래와 같습니다.
# a = np.arange(0, 2, 0.2)
# plt.plot(a, a, 'bo')
# plt.plot(a, a**2, color='#e35f62', marker='*', linewidth=2)
# plt.plot(a, a**3, color='springgreen', marker='^', markersize=9)
# plt.xticks(np.arange(0, 2, 0.2), labels=['Jan', '', 'Feb', '', 'Mar', '', 'May', '', 'June', ''])
# plt.yticks(np.arange(0, 7), ('0', '1GB', '2GB', '3GB', '4GB', '5GB', '6GB'))
# plt.hlines(4, 1, 1.6, colors='pink', linewidth=3)  # 수평선
# plt.vlines(1, 1, 4, colors='pink', linewidth=3)  # 수직선
# plt.show()