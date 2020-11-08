# 새로 배운 내용
```
- DBP: DBMS에 데이터를 정의하고 저장된 데이터를 읽어와 데이터를 변경하는 프로그램을 작성하는 과정
- 데이터베이스 프로그래밍을 할 때 4가지 선택사항
- 외부에서 접속할 수 있도록 설정 변경: EXEC DBMS_XDB.SETLISTENERLOCALACCESS(FALSE);
- 샘플 계정인 HR의 잠금 풀기: ALTER USER HR ACCOUNT UNLOCK IDENTIFIED BY 1234;
- 오라클과 자바 연동하는 방법
- JDBC(Java Database Connectivity): 자바와 데이터베이스를 연동할 수 있는 API
```
　
 
# 문제가 발생하거나 고민한 내용 + 해결 과정
<img src="https://user-images.githubusercontent.com/53859836/98463783-4b62a600-2201-11eb-90b3-5e3da67dbd98.PNG" width=500>
```
- 문제: SQL Developer 연결하는 과정에서 사진처럼 계속 연결할 수 없다는 오류 메시지가 떴음
- 해결 과정
1. Service에서 Oracle 관련 서비스 모두 중지
2. D 드라이브에 있는 app > oracle 파일 모두 삭제
3. C 드라이브에 있는 sqldeveloper 파일 모두 삭제
4. oracle XE 11g R2와 SQL Developer 재설치
```

　
　
 
# 참고할 만한 내용
```
없음
```


　
　
 　

# 회고
```
➕ 데이터를 가져오는데 시간이 많이 걸렸지만 SQL문은 생각보다 금방 짜는 나의 모습을 보며 처음보다는 실력이 많이 좋아진 것 같아서 기분이 좋았다. 
➖ 처음에 Kaggle을 이용해 데이터를 가져오려고 했는데 하루종일해봐도 데이터가 가져와지지 않아 속상했다.
❗ 내가 원하는 데이터를 가져와서 정보를 제공하는 웹 페이지를 만들었다는 사실이 신기했다.
```

