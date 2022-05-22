import pymysql

# DDL : Dababase Definition Language

# CREATE : 데이터베이스 내 개체 (테이블, 인덱스 제약조건, 프로시저, 펑션 등)을 생성 할 때
# 예) CREATE TABLE My_table( my_field1 INT, my_field2 VARCHAR(50), my_field3 DATE NOT NULL, PRIMARY KEY (my_field1, my_field2) ); 
def create(table):
    conn = pymysql.connect(user='root',passwd='',host='127.0.0.1',db='mysql',charset='utf8')
    cursor = conn.cursor()
    sql="CREATE TABLE "+table+"(my_field1 INT AUTO_INCREMENT, my_field2 VARCHAR(50) NOT NULL, my_field3 DATE, PRIMARY KEY (my_field1, my_field2)) character set utf8;"
    cursor.execute(sql)
    # conn.commit() # DDL은 단독으로 쓰여 커밋이 필요없음
    conn.close()

# RENAME : 데이터베이스내 개체의 이름을 변경 할 때
# 예) ALTER TABLE WEX001H RENAME TO TMP_WEX001H_20171029175532;
def rename(table):
    conn = pymysql.connect(user='root',passwd='',host='127.0.0.1',db='mysql',charset='utf8')
    cursor = conn.cursor()
    sql = "ALTER TABLE "+table+" RENAME TO table_renamed;"
    cursor.execute(sql)
    conn.close()

# TRUNCATE : 테이블 내 모든 데이터를 빠르게 삭제할 때
# 예) DELETE FROM My_table; 
# 예) TRUNCATE TABLE My_table;
# 결과가 똑같은데 TRUNCATE를 쓰면 : 속도가 빠르나, 롤백이 안됨. 대량의 데이터 전체삭제에 주로 씀. 일부 삭제는 안됨. 커밋을 안해도 실행됨. DDL.
# 결과가 똑같은데 DELETE FROM을 쓰면 : 속도가 느리나, 롤백이 됨. 몇안되는 데이터 전체삭제나, 조건부 삭제에 주로 씀. (몇백만건 이상의 데이타가 있을 때는 상당히 속도가 느리다.) 커밋을 안하면 실행이 안됨. DML. 
# ★ 아쉽게도, pymysql에서는 TRUNCATE를 지원하지 않는 관계로, DELETE FROM으로 대체한다.
def truncate(table):
    conn = pymysql.connect(user='root',passwd='',host='127.0.0.1',db='mysql',charset='utf8')
    cursor = conn.cursor()
    sql = "TRUNCATE TABLE "+table+";"
    cursor.execute(sql)
    conn.close()
    
# ALTER : 데이터베이스 내 개체의 속성 및 정의를 변경할 때
# 예) ALTER TABLE My_table ADD my_field4 NUMBER(3); 
def alter(table):
    conn = pymysql.connect(user='root',passwd='',host='127.0.0.1',db='mysql',charset='utf8')
    cursor = conn.cursor()
    sql = "ALTER TABLE "+table+" ADD my_field4 INT(3) NULL AFTER my_field3;"
    cursor.execute(sql)
    conn.close()

# DROP : 데이터베이스내 개체를 삭제할 때
# 예) DROP TABLE My_table; 
def drop(table):
    conn = pymysql.connect(user='root',passwd='',host='127.0.0.1',db='mysql',charset='utf8')
    cursor = conn.cursor()
    sql = "DROP TABLE "+table+";"
    cursor.execute(sql)
    conn.close()

# ★ 순서대로 하나씩 열어서 실행해보기
if __name__ == "__main__":
    # create("table_1st") # 1
    # rename("table_1st") # 2
    # truncate("table_renamed") # 3
    # alter("table_renamed") # 4
    # drop("table_renamed") # 5
    
    # DML 작업을 위해 만들어놓기
    drop("table_1st") # 6
    create("table_1st") # 6