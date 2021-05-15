# input을 받아서 1이면 one 2이면 two 3이면 three을 출력하고, 그 외의 숫자이면 "모르겠어요"를 출력하게 코딩해보세요.
number = input('입력하세요 : ') 
if number == '1': 
    print('one')
elif number == '2': 
    print('two')
elif number == '3': 
    print('three')
else:
    print('모르겠어요')

# input을 받아서 1부터 그 숫자만큼의 배열안에서 짝수를 다 출력해보세요.
num = int(input('숫자를 입력하세요. : '))
for i in range(num):
    num2 = i+1  
    if(num2 % 2 == 0):
        print(i+1)

# input을 받아서, ',' 로 나눠서 총 몇개가 되는지 출력하세요.
# a = input('인풋? ')
# b = a.split(',') # 배열의 형태로 담아주죠.
# print(len(b))

# input을 받아서, '_' 로 나눠서 몇개가 되는지 띄우고, 각각 잘라서 표시하세요.
   # 예 ) 입력값 : passion_열정 이면, ( 2, passion, 열정 ) 이렇게 나오게 각각 표시하세요
   # 힌트 ) 변수.split('_') 구글: 파이썬 글자 자르기
# a = input("인풋? ")
# b = a.split('_')
# result = len(b)
# print(result) # 몇개
# for i in range(len(b)):
#     num2 = i + 1
#     print(b[i])

# 파일명을 input으로 받아서 뒷글자가 .jpg로 시작하는 경우, 그림파일입니다. .txt이면 메모장, .xlsx면 엑셀파일, .doc ms오피스 파일입니다 라고 알려주세요. 그외는 "모르겠어요"라고 띄우세요.
# a = input('파일명을 입력해주세요? ')
# b = a[-4:] # 문자열 변수에서 "뒤에서 4글자"를 추출하기
# if b == '.txt':
#     print('메모장 파일입니다.')
# elif b == 'xlsx':
#     print('엑셀 파일입니다.')
# elif (b == '.jpg'):
#     print('그림 파일입니다.')
# elif (b == '.doc'):
#     print('오피스 파일입니다.')
# else:
#     print('모르겠어요.')

# input을 받아서 1부터 그 숫자만큼의 배열안에서 홀수를 다 출력해보세요.
# num = int(input('숫자를 입력하세요. : ')) # 10
# for i in range(num): # 0, 1, 2 ... 9
#     num2 = i+1 # 1, 2, .. 10
#     if(num2 % 2 != 0): # 홀수를 추출
#         print(num2)

# input을 받아서 1부터 그 숫자만큼의 배열안에서 3의 배수를 다 출력해보세요.
# num = int(input('숫자를 입력하세요. : ')) # 10
# for i in range(num):
#     num2 = i+1
#     if(num2 % 3 == 0): # 3의 배수를 추출
#         print(num2)

# input을 받아서 1부터 그 숫자만큼의 배열안에서 n의 배수를 다 출력해보세요.
# num = int(input('몇까지 찾아볼까요? : '))
# n = int(input('몇의 배수를 출력할까요? : '))
# for i in range(num):
#     num2 = i+1
#     if(num2 % n == 0): # n의 배수를 추출
#         print(num2)

# 첫번째 인풋값과 두번째 인풋값의 최소공배수를 출력해보세요.
# a = int(input('첫번째 배수? : '))
# b = int(input('두번째 배수? : '))
# c = []
# for i in range(100):
#     num2 = i+1
#     if(num2 % a == 0 and num2 % b == 0): # 100까지의 a의 배수        
#         c.append(num2)
#         # num2는 a와 b의 모든 공배수들이 나올건데, 그중 최소공배수 = 수가 제일 적은 것 = 첫번째 것 ===> 배열에 담아서, [0]를 출력
# print('최소공배수 :', c[0]) # c = [30, 60, 90]

# input을 받아서 해당 숫자의 구구단을 출력해보세요. (예 : 3을 입력하면 3 6 9 12 ... 27까지 출력)
# a = int(input('? '))
# for i in range(a*9):
#     num = i+1 # num = 1 ~ 27 
#     if num % a == 0:
#         print(num) # 3 6 9 ~ 27

# 2부터 9단까지 한번에 출력되는 구구단을 만들어보세요. (배수 구하는 방식)
# a = [2,3,4,5,6,7,8,9]
# for i in range(2, 10): # 2, 3, 4 ... 9
#     print(i, '단을 시작합니다. >>>')
#     for j in range(i * 9): # 9 * 9 = range(81) = 0 ~ 80
#         num = j + 1 # 1 ~ 81
#         if num % i == 0: # 9의 배수
#             print(num) # 9 18 27 36 ...

# 2부터 9단까지 한번에 출력되는 구구단을 만들어보세요. (곱하는 방식)
# for first in range(2, 10): # 2, 3, 4 ... 9
#     print(first, '단을 시작합니다. >>>')
#     for j in range(9): # 0, 8
#         second = j + 1 # 1~9
#         print(first, 'x', second, '=', first * second)

# 아래와 같이, 하나의 정수를 입력 받고 정수를 나눌 수를 입력 받은 다음 몫과 나머지를 화면에 출력하세요.
    # 정수를 입력하세요 : 90
    # 나눌 수를 입력하세요 : 4
    # 몫 : 22
    # 나머지 : 2
# a = int(input('정수 입력하세요: '))
# b = int(input('나눌 수를 입력하세요: '))
# print('몫', a // b)
# print('나머지', a % b)

# 4칙연산이 가능한 계산기를 만들어보세요. (앞항의 수, 뒤항의 수, +, -, *, /를 입력받아서 계산되는)
try:
    a = int(input('앞항의 수 입력 :'))
    b = int(input('뒷항의 수 입력 :'))
    c = input('연산 입력( +, -, *, / ) :')

    if(c != '+' and c != '-' and c !=  '*' and c != '/'):
        print('연산자가 아닙니다.')
    else:
        if(c == '+'):
            result = a + b
            print("{} + {} = {}".format(a, b, result))
        elif(c == '-'):
            result = a - b
            print("{} - {} = {}".format(a, b, result))
        elif(c == '*'):
            result = a * b
            print("{} * {} = {}".format(a, b, result))
        elif(c == '/'):
            result = a / b
            print("{} / {} = {}".format(a, b, result))

except Exception as log:
    print('에러발생. 원인: ', log)