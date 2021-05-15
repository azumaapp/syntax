# # 예제 0~1000 정수내에서 (i * 2) + 263 / 18 적용해서 출력
# for i in range (1000):  
#     print((i*2)+263/18)

# # 예제 0~100 정수내에서 2의 승수만 출력
for i in range (1,10):
    a = pow(2,i)
    if (a < 100):
        print (a)
# # 예제 0~100 정수내에서 3의 승수만 출력
for i in range (1,10):
    a = pow(3,i)
    if (a < 100):
        print (a)
# # 예제 24와 36의 최대공약수
from math import gcd
print(gcd(24,36))

# 예제 12과 9의 최소공배수
print(12*9//gcd(12,9))

# 예제 구구단 만들기 (3 * 1 = 3 '\n' 3 * 2 = 6 ...)
for i in range (1,10):
    for a in range (1,10):
        print ("{} x {} = {}\n".format(i,a,i*a))
