<?php

$dsn = "mysql:host=localhost;dbname=feedbackinfo";
$dbusername = "root";
$dbpassword = "";

try {
    // Create a new PDO instance
    $pdo = new PDO($dsn, $dbusername, $dbpassword);

    // Set PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare and execute the query
    $stmt = $pdo->prepare("INSERT INTO feedbackinfo (message) VALUES (:message)");
    $stmt->bindParam(':message', $_POST['message']);
    $stmt->execute();

    echo "MESSAGE IS SENT";

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
