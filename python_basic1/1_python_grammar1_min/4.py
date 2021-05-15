# Method(parameter) 만들기 
# 블럭 지정 후 ctrl + / = 주석처리

# definition 정의
# def add(a, b):
#     result = a + b
#     print(result)

# # 호출
# add(1, 3)

# def printHello():
#     print('Hello')

# printHello()

# def add10(a):
#     result = a + 10
#     print(result)

# add10(1)
# add10(10)

# def addmulti(a):
#     result = a * 10
#     print(result)
# addmulti(10)

# # 에러의 처리 방법
# try:
#     def adddiv(a):
#         result = a / 0
#         print(result)
#     adddiv(100)
# except Exception as log:
#     print("에러원인 :", log)


def add2(a, b):
    result = a + b
    print("{} + {} = {}".format(a,b,result))

def minus2(a, b):
    result = a - b
    print("{} - {} = {}".format(a,b,result))

def multi2(a, b):
    result = a * b
    print("{} * {} = {}".format(a,b,result))

# 에러의 처리 방법
try:
    def div2(a, b):
        result = a / b
        print("{} / {} = {}".format(a,b,result))
except Exception as log:
    print("에러원인 :", log)

# 캐스팅 : 데이터타입 바꾸기 int(), float(), str()
# 인풋 : 사용자 입력받기
a = int(input())
b = int(input())

add2(a, b)
minus2(a, b)
multi2(a, b)
div2(a, b)

