<?php
 header('Content-Type: text/html; charset=utf-8');
 setlocale(LC_ALL, 'ru_RU.65001', 'rus_RUS.65001', 'Russian_Russia. 65001', 'russian');
 #mysql_query('SET names "utf8"');
 echo "<a href=index.php>Home</a>";
 echo "<table style='border: solid 1px black;'>";
 echo "<h2>Last 20 log messages</h2>"; 
 echo "<tr><th>Id</th><th>Msg</th><th>Cod</th><th>Date</th></tr>";
class TableRows extends RecursiveIteratorIterator {  
    function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
    }
 
    function current() {
        return "<td style='border:1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() { 
        echo "<tr>"; 
    } 

    function endChildren() { 
        echo "</tr>" . "\n";
    } 
} 

$servername = "185.104.248.240";
$username = "abbot";
$password = "dupel";
$dbname = "abbotdb";

 try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
#    $xxx = $conn->prepare('SET NAMES UTF8');
#    $xxx->execute();  
    $stmt = $conn->prepare("SELECT id, msg, cod, date FROM log order by id DESC LIMIT 25"); 
    $stmt->execute();
 
    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?> 