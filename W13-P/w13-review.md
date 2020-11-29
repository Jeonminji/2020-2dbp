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
<img src="https://user-images.githubusercontent.com/53859836/100549278-5ca94a80-32b5-11eb-87d4-6669920e36ef.png" width=500>

```
- 문제: 가장 마지막 값을 조회하는 쿼리가 제대로 작동하지 않았다.
- 해결 과정
Slack qna에서 다른 친구가 올려준 해결과정을 보고 해결했다.
select e.* from ( select a.* from employees a order by a.employee_id desc ) e where rownum = 1;
```


<img src="https://user-images.githubusercontent.com/53859836/100549274-5b781d80-32b5-11eb-8dbd-f95fe1e29483.png" width=500>

```
- 문제: eclipse에서 select()만 실행되고 다른 SQL문은 실행되지 않았다.
- 해결 과정: Oracle SQL Developer 재실행했다.
```


<img src="https://user-images.githubusercontent.com/53859836/100549275-5c10b400-32b5-11eb-84ec-263ffbe9ac20.png" width=500>

```
- 문제: eclipse에서 select()만 실행되고 다른 SQL문은 실행되지 않았다.
- 해결 과정: Oracle SQL Developer 재실행했다.
```


<img src="https://user-images.githubusercontent.com/53859836/100549276-5ca94a80-32b5-11eb-9dd7-7d72d3c73bd9.PNG" width=500>

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
➕ 이클립스와 새로운 서버를 연결하는게 재미있었고, 많은 오류들을 해결해 기분이 좋았다.
➖ 이클립스를 설치하는데 오류가 너무 많았다.
❗ 이클립스에서도 DB와 연결하여 내가 원하는 웹 페이지를 만들 수 있다는 사실이 신기했다.
```

　
　
 
# 동작화면
https://www.youtube.com/watch?v=7PrOah5nIRs&feature=youtu.be
