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
- 문제: 압축 푸는 파일의 경로가 255자를 넘어서 압축이 풀리지 않았다.
- 해결 과정: 경로를 수정하여 압축을 풀었다.
```

<img src="https://user-images.githubusercontent.com/53859836/100549633-69c73900-32b7-11eb-99df-8bae82299b0c.PNG" width=50>
<img src="https://user-images.githubusercontent.com/53859836/100549274-5b781d80-32b5-11eb-8dbd-f95fe1e29483.png" width=500>

```
- 문제: JDK 버전과 이클립스 버전이 맞지 않았다.
- 해결 과정: eclipse.ini 파일에서 Dosgi.requiredJavaVersion=11을 Dosgi.requiredJavaVersion=1.8로 수정했다.
```

<img src="https://user-images.githubusercontent.com/53859836/100549633-69c73900-32b7-11eb-99df-8bae82299b0c.PNG" width=50>
<img src="https://user-images.githubusercontent.com/53859836/100549275-5c10b400-32b5-11eb-84ec-263ffbe9ac20.png" width=500>

```
- 문제: 해당 포트를 이미 사용하고 있다는 오류 메시지가 떴다.
- 해결 과정: Tomcat admin port를 8006로 HTTP/1.1 포트를 8081로 수정해줬다.
```

<img src="https://user-images.githubusercontent.com/53859836/100549633-69c73900-32b7-11eb-99df-8bae82299b0c.PNG" width=50>
<img src="https://user-images.githubusercontent.com/53859836/100549276-5ca94a80-32b5-11eb-9dd7-7d72d3c73bd9.PNG" width=500>

```
- 문제: ping succeeded가 뜨지만 test.jsp를 실행하면 연결 실패 메시지가 떴다.
- 해결 과정: 자바 코드를 확인해보니 코드 내에 오타가 있어서 수정했더니 정상적으로 결과를 출력해줬다.
```
<img src="https://user-images.githubusercontent.com/53859836/100549633-69c73900-32b7-11eb-99df-8bae82299b0c.PNG" width=50>
```
- 문제: ping succeeded가 뜨지만 test.jsp를 실행하면 연결 실패 메시지가 떴다.
- 해결 과정: 자바 코드를 확인해보니 코드 내에 오타가 있어서 수정했더니 정상적으로 결과를 출력해줬다.
```
 
# 참고할 만한 내용
```
- https://uulog.tistory.com/42
- 
- 
- 
```


　
　
 　

# 회고
```
➕ 이클립스와 새로운 서버를 연결하는게 재미있었고, 많은 오류들을 해결해 기분이 좋았다.
➖ 이클립스를 설치하는데 오류가 너무 많았다.
❗ 이클립스에서도 DB와 연결하여 내가 원하는 웹 페이지를 만들 수 있다는 사실이 신기했다.
```

　
　
 
# 동작화면
https://www.youtube.com/watch?v=7PrOah5nIRs&feature=youtu.be
