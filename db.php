<?php
$host = 'localhost'; // MySQL 호스트 주소
$dbname = 'your_database_name'; // 데이터베이스 이름
$username = 'your_username'; // MySQL 사용자 이름
$password = 'your_password'; // MySQL 비밀번호

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // 연결 성공 시 처리할 내용
} catch(PDOException $e) {
    // 연결 실패 시 처리할 내용
    echo "Connection failed: " . $e->getMessage();
}
?>