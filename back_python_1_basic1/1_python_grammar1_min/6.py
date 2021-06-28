# 반복문 for : ~가 끝날때까지
list1 = [1,2,3,4]
for n in list1:
    print((n+1)*13/2)

# range
for i in range(5):
    print(i+1)

rainbow = ['빨','주','노','초','파','남','보']
for i in range(len(rainbow)):
    color = rainbow[i]
    print('무지개의 {}번째 색깔은 {}입니다.'.format(i+1, color))

# break
list3 = [1, 2, 3, 4, 5, 6, 7, 8, 9]
for value in list3:
    if value % 3 == 0:
        print(value)
        break

# continue
for i in range(10):
    if i % 2 == 0:
        continue
    print(i)

# enumerate
sizes = [33, 34, 35, 36, 33, 35, 36, 31, 32, 33, 28, 27, 26, 29, 30, 32]
for index, size in enumerate(sizes): # enumerate를 쓰면, 인덱스값, 밸류값 두개를 뱉습니다.       
    if size == 32:
        print("32 사이즈가 {}번째 항목에 존재합니다.".format(index+1))
        break

names = ['Aoki', 'Suzuki', 'Yang', 'Ha']
for i, name in enumerate(names):
    print('명단의 {}번째 고객님은 {}입니다.'.format(i+1, name))

# 이중배열 () tuple {} dictionary, [] list
number = [(1,2),(10,0),(3,3),(5,7)]
for a, b in number:
    if b == 0:
        print("0으로 나눌 수 없어요.")
    else:
        print("{}를 {}로 나누면 {}가 됩니다.".format(a,b,a/b))   


# 반복문 while : ~의 조건이 충족되는 한 계속
list2 = [1,2,3]
length = len(list2)
i = 0
while i < length:
    # print(list2[i]) # ctrl + c로 끄기 전까지는 무한반복된다.
    i = i + 1 # 이 부분을 주석을 풀면 언젠가 조건 충족상태가 풀리게되서 정지가 됩니다.