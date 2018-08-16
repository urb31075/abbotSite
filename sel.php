<?php
// Вывод заголовка с данными о кодировке страницы
header('Content-Type: text/html; charset=utf-8');
echo "<a href=index.php>Home</a><p>";
// Настройка локали
setlocale(LC_ALL, 'ru_RU.65001', 'rus_RUS.65001', 'Russian_Russia. 65001', 'russian');
// Настройка подключения к базе данных
$servername = "185.104.248.240";
$username = "abbot";
$password = "dupel";
$dbname = "abbotdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
 } 

$conn->set_charset('utf8');
$sql = "SELECT id, msg, cod FROM log";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  $row["id"]. ";" . $row["msg"]. ";" . $row["cod"]. "<br>";
    }
} else {
    echo "0 results";
}
 $conn->close();
?>