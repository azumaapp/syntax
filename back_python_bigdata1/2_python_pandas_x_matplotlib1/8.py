# https://ordo.tistory.com/70?category=732886

# 1. matplotlib x pands : 누적영역형 차트 그리기

# 누적영역형 차트(Stacked Area Graph)란?
# 두개 이상의 데이터 계열을 서로 누적하는 영역형 차트.
# 특히, 제품별로 매출에 기여하는 정도를 시계열로 나열해 한 눈에 쉽게 볼 수 있어 성과 분석을 위한 기본적인 그래프중 하나.

# import
import matplotlib.pyplot as plt

# 차트의 색, 제목, X축, Y축 이름 설정
plt.xlabel('Beer Number')
plt.ylabel('Features')
plt.title('Stackploy of Beer Info')

# 그래프를 만들 임의의 데이터 생성 (정말 아무 의미 없는 값)
beernum=[1,2,3,4,5]
price=[5,2,6,8,1]
amount=[3,3,2,4,3]
country=[3,6,2,10,12]

# plt.stackplot() 함수 안에 4개의 리스트 데이터 입력 : 첫번째 데이터인 beernum이 X축 기준이 되고 그 외의 데이터들은 순차적으로 누적되어 그래프를 그려줌
plt.stackplot(beernum, price, amount, country, colors=['r', 'm', 'g', 'c', 'b'])
plt.show()



# 1. matplotlib x pands : 파이 차트 그리기
plt.pie(price,
        labels=beernum,
        colors=['r', 'm', 'g', 'c', 'b'],
        startangle=90,
        shadow=True,
        explode=(0,0.1,0,0,0),
        autopct='%1.1f%%')
plt.show()