# error 처리 : 코드 자체에서 해결하기 (내가 에러를 해결)
# number = [(1,2),(10,0),(3,3),(5,7)]
# for a, b in number:
#     if b == 0:
#         print("0으로 나눌 수 없어요.")
#     else:
#         c = a/b
#         print("{}를 {}로 나누면 {}가 됩니다.".format(a,b,c))

a = int(input())
b = int(input())
if (b == 0):
    print("0으로 나누기를 시도했습니다.")
else:
    print("값은 ",a/b,"입니다.")

# error 처리 : try except문 사용하기 (사용자가 에러를 해결)
# try:
#     number = [(1,2),(10,0),(3,3),(5,7)]
#     for a, b in number:
#         c = a/b
#         print("{}를 {}로 나누면 {}가 됩니다.".format(a,b,c))
# except Exception as log1:
#     print(log1,"의 오류가 발생했습니다.")

# a = int(input())
# b = int(input())
# try:
#     print("값은 ",a/b,"입니다.")
# except Exception as log1:
#     print(log1)