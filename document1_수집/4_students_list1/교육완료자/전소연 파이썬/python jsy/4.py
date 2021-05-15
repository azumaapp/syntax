# 메소드 : 명령어
# 파라미터 : 명령을 수행할 값

# 파라미터가 없는 메소드
def a_print():
    print('a')

def b_print():
    print('b')

# 메소드 호출
# a_print()
# b_print()

# 파라미터가 있는 메소드
def plus(a, b):
    result = a + b
    # print(a,'+',b,'=',result) # 기본 프린트 방식
    print("{} + {} = {}".format(a, b, result)) # 프린트에 포맷 다는 법!

def multiAndRound(a, b):
    result = round(a * b)
    print(result)

# 변수명, 메소드명을 만드는 규칙 : 첫단어는 소문자, 그 뒤의 단어는 첫문자만 대문자로 (=low camel case 규칙)
theFirstRankScore = 87.5

## 숙제 : 마이너스, 곱하기, 나누기 만들기

# 메소드 호출
plus(10, 2)
multiAndRound(3, 33.333)