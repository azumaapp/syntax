# library : 다른 사람이 만들어놓은 클라스를 가져다 쓰는 것
# class : 명령문과 변수의 집합체

import math

pi = math.pi
print(pi)
a = round(pi) # 반올림
b = math.floor(pi) # 내림
c = math.ceil(pi) # 올림
print(a)
print(b)
print(c)

import random

rainbow = ['빨','주','노','초','파','남','보']
choice = random.choice(rainbow)
print(choice)
random.shuffle(rainbow)
print(rainbow)

import datetime

today = datetime.date.today()

print(today)

