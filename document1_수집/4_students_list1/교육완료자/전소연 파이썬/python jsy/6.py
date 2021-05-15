# 웹크롤링(1) : 웹 검색해서 기본적인 파이썬 웹크롤러 만들기
## 숙제: 인터넷주소도 인풋으로 받아서 크롤링하도록 만들어보세요. + 심화학습 (http:// 입력 안했으면 자동으로 넣어주기)

# 터미널 안에서 입력 # pip install bs4 : bs4를 설치한다.
from bs4 import BeautifulSoup
from urllib.request import urlopen
import sys

# url 파싱 : 분석할 수 있도록 소스를 추출하는 것
response = urlopen('http://naver.com')
soup = BeautifulSoup(response, 'html.parser')

# 이어쓰기 모드로 메모장 다시 실행
fileNameInput = input('파일명을 입력해주세요: ')
fileName = open('savedata/'+fileNameInput+'.txt','w') # w 가 덮어쓰기, a 가 이어쓰기 

# 메모장 "초기화"
fileName.write('')

# a태그에서 링크 추출
for anchor in soup.select('a'): # soup.select('a') : a 태그만 담긴 소스들이 배열의 형태로 존재하게 됨
    link = anchor.get('href', '/')
    first7Chr = link[0:7] # http://
    if first7Chr != 'https:/' and first7Chr != 'http://':
        continue
    print(link)
    # if first7Chr == 'https:/' or first7Chr == 'http://':
    #     print(link)
    fileName.write(link+'\n') # 파이썬 코드 내에서 띄어쓰기는 역슬 + n
