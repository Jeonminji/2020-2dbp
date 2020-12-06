# 새로 배운 내용
```
- 톰캣 서버 실행 방법
- 이클립스에서 톰캣 서버 설정 방법
- JSP(Java Server Page): HTML 내부에 java 코드를 입력하여 웹 서버에서 동적으로 웹 브라우저를 관리하는 언어
- 템플릿 데이터: 클라이언트로 출력되는 콘텐츠
- JSP 내장 객체는 JSP에서 별도 선언 없이 사용 가능
- JSP 내장 객체 9개: request, response, pageContext, session, application, config, out, page, exception
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
- 문제: 이클립스에서 톰캣 서버 설정할 때 아파치 서버가 나오지 않았다.
- 해결 과정: Slack qna에 올라온 다른 설치 파일을 이용하여 설치하니 아파치 서버가 제대로 나왔다.
```


　
　
 　


# 참고할 만한 내용
```
- https://uulog.tistory.com/42
- https://coding-factory.tistory.com/13
```


　
　
 　

# 회고
```
➕ 이클립스와 새로운 서버를 연결하는게 재미있었고, 많은 오류들을 해결해 기분이 좋았다.
➖ 이클립스를 설치하는데 오류가 너무 많았다.
❗ 이클립스에서도 DB와 연결하여 내가 원하는 웹 페이지를 만들 수 있다는 사실이 신기했다.
```

　
　
 
# 동작화면
https://www.youtube.com/watch?v=CXxPyBtj8kQ&feature=youtu.be
