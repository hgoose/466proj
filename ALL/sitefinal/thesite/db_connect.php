<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php
$username = "z2004109";
$password = "2003Jun26";
$db = "z2004109";
$host = "courses";

try { 
    $dsn = "mysql:host=$host;dbname=$db";
    $pdo = new PDO($dsn, $username, $password);
}
catch(PDOexception $e) { 
    echo "Connection to database failed: " . $e->getMessage();
}

?>
