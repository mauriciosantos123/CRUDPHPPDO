
<?php
$dsn = 'mysql:host=localhost;dbname=projeto';
$username = 'root';
$password = 'admin';
$options = [];
try {
$connection = new PDO($dsn, $username, $password, $options);
} catch(PDOException $e) {

}
?>