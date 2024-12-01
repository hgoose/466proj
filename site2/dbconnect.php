<?php
    try {
        $user = "datura";
        $password = "goose";
        $host = "localhost";
        $db = "app";
        $dsn = "mysql:host=$host;dbname=$db";
        $pdo = new PDO($dsn, $user, $password);
    } catch (PDOexception $e) {
        echo "Error: " . $e->getMessage();
    }

?>

<?php
    try {
        $user = "z1979867";
        $password = "2004May31";
        $host = "courses";
        $db = "z1979867";
        $dsn = "mysql:host=$host;dbname=$db";
        $pdo = new PDO($dsn, $user, $password);
    } catch (PDOexception $e) {
        echo "Error: " . $e->getMessage();
    }
?>



