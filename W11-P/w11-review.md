# 새로 배운 내용
```
- JDBC: 자바와 데이터베이스를 연동할 수 있는 API
- JDBC 프로그래밍 과정: JDBC 드라이버 로드 -> DB 연결 -> DB에 데이터 읽기/쓰기 -> DB 연결 종료
- 트랜잭션: DB의 상태를 변환시키는 하나의 논리적 기능을 수행하기 위한 작업의 단위
- 트랜잭션의 성질: 원자성, 일관성, 독립성, 지속성
- INSERT INTO 테이블명 VALUES (값1, 값2, ... );
- UPDATE 테이블명 SET 컬럼1 = 변경할 값, 컬럼2 =  변경할 값 ... WHERE 조건;
- DELETE FROM 테이블명 WHERE 조건;
```
　
 
# 문제가 발생하거나 고민한 내용 + 해결 과정
<img src="https://user-images.githubusercontent.com/53859836/99214834-8d4ca700-2814-11eb-8980-7fc73004a41f.PNG" width=500>

```
- 문제: 가장 마지막 값을 조회하는 쿼리가 제대로 작동하지 않았다.
- 해결 과정
Slack qna에서 다른 친구가 올려준 해결과정을 보고 해결했다.
select e.* from ( select a.* from employees a order by a.employee_id desc ) e where rownum = 1;
```


<img src="https://user-images.githubusercontent.com/53859836/99214743-4ced2900-2814-11eb-9872-5697e59060a8.png" width=500>

```
- 문제: eclipse에서 select()만 실행되고 다른 SQL문은 실행되지 않았다.
- 해결 과정: Oracle SQL Developer 재실행했다.
```

　
　
 
# 참고할 만한 내용
```
Slack qna
```


　
　
 　

# 회고
```
➕ 문제를 해결해 뿌듯했다.
➖ 문제를 6일동안 고민했는데 오늘 다시 해보니 쉽게 해결되어서 허무하다.
❗ 오라클과 자바를 연동해 실습하는게 신기했다.
```

　
　
 
# 동작화면
https://www.youtube.com/watch?v=OmUsvmnNfRQ&feature=youtu.be
