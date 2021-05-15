# [조건문]
# if

people = 5
apple = 4

# 비교연산자
# print(people == apple) # false
# print(people >= apple) # false
# print(people <= apple) # true

# if(true):
#   이부분이 실행됩니다.

# if(false):
#   이부분은 실행되지 않아요.

# if people == apple:
#     print('딱 맞다.')
# if people > apple:
#     print('사과가 부족해')
# if people < apple:
#     print('사과가 충분해')

# 라이브러리 호출하고 안에있는 함수를 쓰는 방법
from datetime import datetime
hour = datetime.now().hour

# elif : 위가 아니면 그다음 if문.
# else : 위가 아니면... 마지막

# if hour < 12:
#     print('am')
# elif hour == 12:
#     print('noon')
# else:
#     print('pm')

# and와 or의 사용법
# a = 1
# b = 1 
# c = 1
# if a == 1 and b == 1 and c == 1: # 교집합
#     print('공동 1위: a, b, c')
    
# a = 1
# b = 2 
# c = 3
# if a == 1 or b == 1 or c == 1:  # 합집합
#     print('1등이 1명이상 있습니다.')

# a = 1
# if a != 1: # a가 1이 아닐 때
#     print('실행하세요.')

a = 1
b = 1
c = 2
# if a != 1 or b != 1 or c != 1:
    # print('실행하세요.') # c때매 실행됨
if a != 1 and b != 1 and c != 1:
    print('실행하세요.') # a, b때매 실행안됨