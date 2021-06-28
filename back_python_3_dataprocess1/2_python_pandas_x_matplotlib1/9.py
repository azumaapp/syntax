# matplotlib x pands : Correlation Analysis, =상관분석(산점도, 공분산, 상관계수, 검정)
# 둘 이상의 사건이 서로 연관성을 가질 때, 그 관계를 상관분석과 회귀분석 둘중 하나로 분석할 수 있다.
# 상관분석(Correlation Analysis)의 예 : GDP와 기대수명간의 관계, 키와 몸무게 간의 관계, 당뇨와 그에 영향을 미치는 변수간의 상관을 분석
# 이번에는 당뇨와 그에 영향을 미치는 변수간의 관계를 분석해보자.
# 데이터는 sklearn에서 제공하는 datasets을 불러왔다.

# 1. import
import pandas as pd
import numpy as np
from sklearn import datasets # pip install sklearn # 혹시 안될 경우 260자 제한 풀기 (링크: https://www.howtogeek.com/266621/how-to-make-windows-10-accept-file-paths-over-260-characters/)

# 1. data의 준비
data = datasets.load_diabetes()
print(data.keys()) # dict 형태이므로 어떤 key를 가지는 지 먼저 확인해본다.
# dict_keys(['data', 'target', 'frame', 'DESCR', 'feature_names', 'data_filename', 'target_filename']) # 여기서 data, target, feature_name 3가지 key만 쓰겠다. 당연히 데이터 형태의 길이가 같은지부터 확인해봐야한다.
data['data'].shape
data['target'].shape
len(data['feature_names'])
df = pd.DataFrame(data['data'], index=data['target'], columns=data['feature_names'])
print(df)
# 여기서 target이 당뇨병의 수치이고 나머지 feature names에 속하는 age, sex, bmi 등등은 변수라고 보면 된다. 즉, 442명의 사람들을 상대로 10가지의 특성을 나열한 것.

# 1. 산점도(Scatter Plot) : bmi(체질량지수)와 target(당뇨병의 수치)이 어떤 관계를 가지는 지 살펴본다.
X = df.bmi.values # 체질량지수 값
Y = df.index.values # 당뇨병치수 값
import matplotlib.pyplot as plt
plt.scatter(X, Y, alpha=0.5)
plt.title('TARGET - BMI')
plt.xlabel('BMI')
plt.ylabel('TARGET')
plt.show()
# 대략 봤을 때 변수는 서로 양의 관계를 이루고 있는 것 같다.

# 1. 공분산(Covariance) 및 상관계수(Correlation Coefficient)
# 산점도를 이용하면 두 변수간 직선관계를 대략 파악은 가능하지만, 
# 두 변수 사이의 관계를 어떠한 수치로 표현하진 않는다.
# 이를 수치로 표현하기 위해 공분산 및 상관계수를 이용한다.

# 공분산 : 2개의 확률변수의 상관정도를 나타내는 값. 
# 만약 2개 변수중 하나의 값이 상승하는 경향을 보일 때, 다른 값도 상승하면 양수가 되고, 
# 하강할 때 하강하는 경향을 보이면 음수가 된다.
# 공분산의 식은 다음과 같다.
cov_value = (np.sum(X*Y) - len(X)*np.mean(X)*np.mean(Y))/len(X)
print(cov_value) # 2.148043.... # 양수가 나왔다. 값이 상승하면 상승한다(서로 양의 관계다)라는 결론이 나온다.
# 더 편하게는 numpy의 cov()를 이용하면 된다.
cov_value = np.cov(X, Y)[0, 1]
print(cov_value)
# 둘다 비슷한 값이 나왔고 양의 값이 나왔다.
# 그러나 공분산은 상관관계의 상승 혹은 하강하는 경향을 이해는 할 수 있으나,
# 2개 변수의 측정 단위 크기에 따라 값이 달라지므로,
# 절대적 정도를 파악하기에는 한계가 있다.
# 즉 2.15가 어느 정도 양의 상관관계인지를 가늠하기가 쉽지 않다.
# 그래서 공분산을 표준화시킨 상관계수를 보다 많이 이용한다.
# 상관계수는 각 변수의 표준편차를 분모로 나눠주면 된다.

# 1. 상관계수 구하기
# 상관계수 공식대로 코딩해서 얻는 방법이다.
corr_value=cov_value/(np.std(X)*np.std(Y))
print(corr_value)
# 당연히 numpy는 없는 게 없다. corrcoef() 함수를 이용해도 구할 수 있다.
corr_value=np.corrcoef(X, Y)[0, 1]
print(corr_value)
# 상관계수는 -1에서 1 사이의 값을 가지기에 0일 경우에는 두 변수간 선형관계가 전혀 없다는 뜻이고,
# 0.3과 0.7 사이이면, 뚜렷한 양적 선형관계로 0.7과 1.0 사이는 강한 양적 선형관계로 간주한다.
# 그러나 데이터 특성과 샘플의 대표성 등 상황에 따라 상관계수 값 자체를 해석하는 데 있어 정확한 기준은 없다.
# 위에 나온 0.58은 BMI(체질량지수)와 Target(당뇨병수치)는 뚜렷한 양적 선형관계를 이루고 있다고 볼 수 있다.

# 1. 상관관계를 해석함에 있어서 주의할 점
# 상관관계는 두 변수간 관련성을 의미할 뿐, 원인과 결과의 방향을 알려주지 않는다.
# 상관계수 분석 자체가 특이값에 민감하게 반응하기 때문에, 데이터 검정(pre-processing)에 항상 주의를 기울여야 한다.

# 1. 상관계수의 검정
# 상관계수의 값 자체가 유의미한가를 검정
# p-value를 많이 이용하는데, scipy 패키지의 stats.pearsonr()을 이용하면 상관계수와 p-value를 동시에 얻을 수 있음
import scipy.stats as stats # pip install scipy
corr_test=stats.pearsonr(X, Y)
print(corr_test)
# 0.586... , 3.466...e-42 : 뒤 결과 값이 p-value인데, 귀무가설 "상관관계가 없다"에 대한 검정 결과,
# p-value가 3.46e-42라는 0에 아주 매우 가까운 값이 나왔으므로, 귀무가설을 기각할 수 있음을 알 수 있음.

# 1. 나머지 변수들도 상관계수를 확인해보기
for item in ['age', 'sex', 'bmi', 'bp']:
    print(item)
    X = df[item].values
    print('Covariance: {:.2f}'.format(np.cov(X, Y)[0, 1]))
    print('Correlation: {:.2f}'.format(stats.pearsonr(X, Y)[0]))
    print('P-Value: {:.4f}'.format(stats.pearsonr(X, Y)[1]))
    print('\n')
# 결과의 해석
# P-Value가 0.0001, 0.3664인 age와 sex는 큰 관련이 없다.
# 당뇨병수치와 가장 상관관계가 높은 것은 bmi이다.

# 숙제1 : 두 데이터를 토대로 상관관계를 분석하는 앱(각종 수치를 내고 산점도도 보여주기)을 만들어보자.
# 숙제2 : 엑셀데이터로부터 판다스를 통해 파이썬 클래스로 정보를 받아온 뒤 맷플롯립과 연동하여 그래프를 보여주는 앱을 만들어보자.