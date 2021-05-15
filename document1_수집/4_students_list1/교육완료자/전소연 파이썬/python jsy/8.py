# 웹크롤링(3) : try catch문으로 에러처리하기(예상 외의 모든 사용자 에러는 사용자에게 넘기기)

# 터미널 안에서 입력 # pip install bs4 : bs4를 설치한다.
from bs4 import BeautifulSoup
from urllib.request import urlopen
import sys

# 에러처리1
try:
    # 대상 인터넷 주소 : 인풋은 기본적으로 str 변수로 담깁니다. 1 => '1', 만약에 숫자로 바꾸고 싶다면, int(input('')) 감싸주셔야 적용이 됩니다.
    webAddress = input('크롤링할 주소를 입력해주세요: ')

    # http://, https:// 입력 안했으면, 자동으로 넣어주기 
    if webAddress[0:7] != 'http://' and webAddress[0:7] != 'https:/':
        webAddress = 'http://' + webAddress

    # url 파싱 : 분석할 수 있도록 소스를 추출하는 것
    response = urlopen(webAddress)
    soup = BeautifulSoup(response, 'html.parser')

    # 이어쓰기 모드로 메모장 다시 실행
    fileNameInput = input('파일명을 입력해주세요: ')
    print(fileNameInput[-4:])
    # .txt를 입력하지 않은 경우에, 입력되도록 함
    if fileNameInput[-4:] != '.txt':
        fileNameInput = fileNameInput + '.txt'
    fileName = open('savedata/'+fileNameInput,'w') # w 가 덮어쓰기, a 가 이어쓰기
    # 메모장 "초기화"
    fileName.write('')

    # a태그에서 링크 추출
    for anchor in soup.select('a'): # soup.select('a') : a 태그만 담긴 소스들이 배열의 형태로 존재하게 됨
        link = anchor.get('href', '/')
        first7Chr = link[0:7] # http://
        if first7Chr != 'https:/' and first7Chr != 'http://':
            continue
        # print(link)
        # if first7Chr == 'https:/' or first7Chr == 'http://':
        #     print(link)
        fileName.write(link+'\n') # 파이썬 코드 내에서 띄어쓰기는 역슬 + n

# 에러처리2 : 에러 발생시에 log라는 변수안에 모든 에러 메시지를 넣어라.
except Exception as log:
    print('에러가 발생했습니다. 원인은 다음과 같습니다. :', log)