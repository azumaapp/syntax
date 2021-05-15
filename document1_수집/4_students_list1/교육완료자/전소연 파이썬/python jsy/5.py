# [라이브러리 사용하기]
# 우리가 꼭 메소드를 만들지 않아도 남의 메소드를 사용할 수 있어요.
# 그러려면 남이 만든 라이브러리를 먼저 import해야돼요.
# math같은 라이브러리는 다운로드 안받아도 그냥 쓸 수 있어요. python 제작자가 만든 메소드는 그래요. 이런걸 내장메소드 라고 해요.
import math
print(math.ceil(1.4)) # 올림
print(math.floor(1.4)) # 내림
round(1.4)

from datetime import datetime
def print_now():
    print('현재시간: ',datetime.now().month,'월', datetime.now().day,'일', datetime.now().hour,'시')
print_now()

# 어떤 라이브러리는 다운로드를 받아야 import할 수 있어요. 
# 그 방법은 터미널에 "pip install 라이브러리명" 이렇게 치면 돼요.
# 어떤 기능에 어떤 라이브러리를 사용해야할지 모르는데요? python [기능명] 라이브러리 쳐보세요. 안되면 영어로 쳐보세요. (번역)
# 개발자는 코딩을 막 외워서 잘 하는게 아니에요. 검색을 통해서 문제해결능력이 되는 사람들! 검색능력이 가장 중요해요.
