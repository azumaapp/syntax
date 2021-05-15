# [변수와 데이터타입]
# 주석(comment) : # 입력 또는 ctrl + / 로 표현한다. 메모같은 것
# 변수(variable) : 변하는 수
id = "pencil"
print(id)
print("뭐로 쓸까요? - ",id,"으로 쓰죠.")

# 숫자 변수 : ""를 입력하지 않으며, 숫자. 연산가능. 데이터타입이 숫자인 변수.
num = 10
plus = 1
minus = 2
multiply = 3
divide = 5
print(num + plus)
print(num - minus)
print(num * multiply) # 30
print(num / divide) # 2

# int 정수 : 1, 2, 3, 4
# float 실수 : 1.0, 1.1 ...
num2 = 1.0
print(num2 + 2)

a = 5 # int
b = 1.1 # float
c = 'hello' # string
# print(c/b) # error
a = a + 2
a = a + 3
a = ((a-5)*3/5) + 2
print(a)
print(c,a+b)

# 문자열 변수 : ""안에 입력하며, 문자. 연산불가
a = 'hello' # character
b = "world!" # string
c = "안녕하세요, 저는 'D.Yang'입니다."
d = """ 
안녕하세요, 저는 "D.Yang"입니다. """ # long string
e = """ 
안녕하세요, 
저는 "D.Yang"입니다. 
긴 글을 작성할 때도 이런식으로 스트링 지정을 
해줄 수 있습니다.
줄 바꿈이 적용이 되니깐요.
"""
print(a,b,c,d,e)

# 논리 변수 boolean
a = 0
b = 2
c = bool(a < b)
print(c) # true

# null값(비어있는 값) = false, 그 외에는 전부 true
a = bool(a)  # false
b = bool("")  # false
c = bool([])  # false
d = bool(None)  # false # null
print(a, b, c, d)


# 배열 변수 list > dict > tuple
# list 리스트 a = []
# dict 딕셔너리 a ={}
# tuple 튜플 a = ()
a = [1, 2, 3]
b = {1, 2, 3}
c = (1, 2, 3)
print(a)
print(b)
print(c)
a = [{1, 2, 3}, {4, 5, 6}]  # ok 2중배열!

# 총정리! : 변수의 데이터타입
# int 정수 1
# float 실수 0.1, 1.0
# string 문자열 "", ''
# boolean 참, 거짓 true, flase 
# list 리스트 a = []
# dict 딕셔너리 a ={}
# tuple 튜플 a = ()

# 배열의 인덱스 : 0부터 시작
rainbow = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'purple']
first = rainbow[0]
last = rainbow[-1] # = rainbow[6] 끝에서 첫번째
# print(first)
# print(last)
print('무지개 첫번째 색깔은 {}, 마지막 색깔은 {}이네요.'.format(first, last))

# 배열은 arrayList 또는 array라고 불려요. 이제는 array라고 할께요.
# append : array 추가
list1 = [1, 2]
list1.append(3) # 새 배열 인덱스를 생성하면서 그 안에 값 3을 추가
list1.append(4)
list1.append(5)
print(list1)

list2 = []
a = 1
b = 2
list2.append(a)
list2.append(b)
print(list2)

list3 = []
list3.append(list1)
list3.append(list1)
print(list3) # list3 == [[1,2,3,4,5], [1,2,3,4,5]] # 이중배열

list4 = []
list4 = list4 + [1, 2]
list4 = list4 + [3, 4, 5]
print(list4)

# array 삭제
list1 = [1,2,3,4,5,6,7,8,9,10]
del list1[-1] # 인덱스를 찾아서 삭제
list1.remove(8) # 값을 찾아서 삭제
print(list1)

# array의 종류
list1 = [1, 2, 3, 4] # 가장 일반적인 배열
dict1 = { 'id': 'lala', 'password': 'lalala', 'name': 'lee' } # Dictionary, 사전같이 "키 : 값" 형태의 배열
tuple1 = (1, 4) # 짝끼리 묶는 느낌의 배열

# array와 if문의 조합 : "검색"
list1 = [1, 2, 3]
if 4 in list1:
    print('있네')
else:
    print('없네')
    