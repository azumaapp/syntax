# 배열(Array) 변수에 대해서 알아보자.
# 배열 : 여러개의 값을 넣을 수 있는 변수
# 배열의 종류
# a = [ , , , ] 리스트 list
# b = { id:'admin', pw:'bbbb', name:'아무개', ... } 딕셔너리 dict : key와 value값으로 구성
# c = ( 2 , 4 ) 튜플 tuple : 보통 쌍쌍으로 구성
        #0부터 시작
# list1 = [1,2,3,4,5]
# print(list1)
# print(list1[0])
# print(list1[1])
# print(list1[2])
# print(list1[3])
# print(list1[4])
# print(list1[-1])
# print(list1[-2])
# print(list1[-3])


# random 라이브러리 가져와서
import random
# rainbow = ['빨','주','노','초','파','남','보']
# # 셔플해
# random.shuffle(rainbow)
# first = rainbow[0]
# last = rainbow[-1]
# print ("{}은 퍼스트이고 {}은 라스트입니다".format(first,last))

a = input()
enemy = ['가위','바위','보']
b = random.choice(enemy)
print ("당신이 낸 값 : {}\n컴퓨터가 낸 값 : {}".format(a, b))

if (a == '가위'): 
    if (b == '가위'):    
        print("\n비겼습니다!")
    elif (b == '바위'):
        print("\n졌습니다!")
    elif (b == '보'):
        print("\n이겼습니다!")
elif (a == '바위'): 
    if (b == '바위'):    
        print("\n비겼습니다!")
    elif (b == '보'):
        print("\n졌습니다!")
    elif (b == '가위'):
        print("\n이겼습니다!")
elif (a == '보'): 
    if (b == '보'):    
        print("\n비겼습니다!")
    elif (b == '가위'):
        print("\n졌습니다!")
    elif (b == '바위'):
        print("\n이겼습니다!")
else:
    print('\n가위, 바위, 보 중 하나를 내세요.')


# 리스트 추가
list2 = [1,2,3]
list2.append(4)
print(list2)

# # 리스트 삭제
# list2.remove(4)
# print(list2)

# # 리스트 추가2
# list2 = list2+[5]
# print(list2)

# 리스트 검색
# list3 = [1, 2, 3, 4, 5]
# n = int(input())
# if n in list3:
#     print('{}가 있네요'.format(n))
# else:
#     print('{}가 없네요'.format(n))