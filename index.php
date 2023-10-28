<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

    echo "응답 : $sql";



    if ($username === 'test1234123' && $password === 'test12313') {
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
