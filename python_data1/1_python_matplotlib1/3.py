# 이제 다시 파이썬으로 돌아와서,
# 배열과 집합, 파일 읽고 쓰기를 (다시) 공부해보도록 하겠습니다.



# 1. 파이썬 리스트(배열), 셋(집합) 다루는 법

# 중복요소를 제거
arr1 = ['LTE', 'LTE', '5G', '5G', 'WCDMA', '5G', 'WCDMA', 'LTE']
arr2 = [1, 1, 2, 2, 3, 2, 3, 3]
set1 = set(arr1)
set2 = set(arr2)
arr1 = list(set1)
arr2 = list(set2)
print(arr1)
print(arr2)

# 요소의 추가 : arr는 arr.append(el), set은 set.add(el)로 추가

# 요소의 삭제 : discard (el) 없는데 빼면 무시, remove (el) 없는데 빼면 에러, pop () : 마지막 요소를 리턴 후 뺌, clear () : 전부 뺌
# pop()의 동작
print(arr2.pop())  # "마지막 요소를 리턴" 확인
print(arr2)  # "마지막 요소를 뺌" 확인



# 2. 파일 읽고 쓰는 법

# 파일은 open() 함수를 사용하여,
# "파일객체 = open(파일이름, 파일열기모드)" 와 같은 형식으로 접근합니다. *예시에서 파일객체 이름은 f로 하겠습니다.
# 파일 열기모드는 읽기모드(r), 쓰기모드(w), 추가모드(a)가 있습니다.
# 파일 쓰기는 f.write(문자열)로 이뤄지니다.
# 마지막으로 f.close()를 통해서 닫아주면 됩니다.
# 하나씩 예시를 보겠습니다. * 주석 하나씩 해제해가며 진행합니다.

# 파일에 문자열 덮어씌우기 : f.write("string") w
f = open("newFile.txt", "w")
a = "Hello Again Python!"
f.write(a)
f.close()

# 파일에 문자열 추가 : f.write("string") a
f = open("newFile.txt", "a")
a = "Added Line!"
f.write(a)
f.close()

# 파일을 초기화 : f.write("") w
f = open("newFile.txt", "w")
a = ""
f.write(a)
f.close()

# 파일에 배열 추가 : 'delimiter'.join(arr) a
f = open("newFile.txt", "a")
f.write('\n'.join(arr1))
f.close()

# 파일에 구분자 없이 배열 한줄로 추가 : f.writelines(arr) a
f = open("newFile.txt", "a")
f.write('\n') # 위 데이터로부터 한 행 아래로 이동
f.writelines(arr1) # WCDMA5GLTE 기록
f.close

# 파일 읽기1 (문자열 전체 반환) : f.read() r
f = open("newFile.txt", "r")
text = f.read()
f.close
print(text)

# 파일 읽기2 (한줄씩 반환) : f.readline() r
f = open("newFile.txt", "r")
text = f.readline()
f.close
print(text)  # 첫번째 줄만 반환됨
# f.readline() 함수를 이용해 전체를 출력하려면 while, for 반복문을 사용하면 됨
f = open("newFile.txt", "r")
while 1:  # 무한반복 설정
    a = f.readline()
    if not a:  # a 값에 None 값이 들어갈 때까지 출력
        break
    print(a)

# 파일 읽기3 (리스트로 결과값을 반환) : f.readlines() r
f = open("newFile.txt", "r")
text = f.readlines()
f.close
print(text)
