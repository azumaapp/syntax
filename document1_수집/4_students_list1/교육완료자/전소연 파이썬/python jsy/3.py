# [반복문]
# for : 지정된 구간동안 계속됨

number = [1,2,3,4,5,6,7]
for i in number:  # number 배열 안에 있는 모든 값들이 한번씩 다 i에 들어가서, 모든 값이 끝날 때까지 한바퀴 돈다.
    print(i)

# range
for j in range(3):
    print(j+1)

# enumberate
names = ['yang', 'jeon', 'park', 'lee'] # 인덱스 : 배열값의 주소로 0부터 시작.
# print(names[0]) # 0번째 인덱스의 값을 출력
# print(names[3]) # 3번째 인덱스의 값을 출력
for i, name in enumerate(names):  # enumberate는 "인덱스, 값" 두개를 리턴한다.
    print(i+1, '번째 사람 : ', name)

# len = length 즉 배열의 길이를 계산
print(len(names))

# 배열 길이를 계산해서 그만큼 값 꺼내기
rainbow = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'purple', '추가된 데이터']
for i in range(len(rainbow)):
    color = rainbow[i]
    print('무지개의 ',i+1,'번째 색은 ',color,'에요.')
    
# 이중배열
number = [(1, 2), (10, 0), (3, 3), (5, 7)]
for a, b in number:
    # b가 0일 경우에는 나누지 않는다.
    # a를 b로 나눈 값을 출력하라.
    if b == 0:
        print('0으로 나눌수 없어요')
    else:
        print(a/b)

# break
list1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
for i in list1:
    if i % 3 == 0:  # a % b: a를 b로 나눈 나머지
        print(i)

sizes = [33, 32, 31, 30, 29, 28, 27, 31, 30, 29, 33, 32, 32, 32, 29, 34, 33, 33]
for i, size in enumerate(sizes):
    if size == 32:
        print(i + 1, "번째 재고에 ",size,"사이즈가 있습니다.")
        # break

# continue
for i in range(10):
    if i % 2 == 0:
        continue # if문을 벗어나서 for(아빠)에게로 가서 반복문을 계속함.
    print(i)




# while : 조건이 충족되는 한 반복
a = 1

# while a < 5: # 무한반복 # 정지하려면 ctrl + c
#     print('조건충족')

while a < 5: # 4번반복
    print('조건충족')
    a = a + 1

number = [1, 2, 3]
length = len(number)
i = 0
while i < length:
    print(number[i])
    i = i + 1







