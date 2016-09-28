<html>
<body>
<h1>Hello Docker!</h1>
<?php
$servername = "db";
$username = "docker";
$password = "docker";
$dbname = "docker_db";
echo "Ready to use php<br>";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    echo "<strong>- With Mysql!</strong>";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;

?>
</body>
</html>
