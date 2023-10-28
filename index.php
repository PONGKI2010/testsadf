<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // 아래의 SQL 쿼리는 사용자로부터 입력을 받고 실행합니다.
    // 이는 SQL 인젝션을 시뮬레이션하기 위한 예제입니다.
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

    echo "실행된 SQL 쿼리: $sql";
    // 위의 쿼리를 실행하고 결과를 출력하는 대신, 이것은 SQL 인젝션 테스트를 시뮬레이션하기 위한 예제입니다.

    // 이 부분은 실제 시험 환경과 관련된 코드일 수 있습니다.
    if ($username === '사용자명' && $password === '비밀번호') {
        echo "로그인 성공";
    } else {
        echo "로그인 실패";
    }
}
?>

<form method="POST">
    <label for="username">사용자 이름:</label>
    <input type="text" name="username" id="username">
    <br>
    <label for="password">비밀번호:</label>
    <input type="text" name="password" id="password">
    <br>
    <input type="submit" value="로그인">
</form>
