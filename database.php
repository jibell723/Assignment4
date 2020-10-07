<?php
    //session_start();
    $dsn = 'mysql:host=localhost;dbname=id15058743_assignment4_ictn6845';
    $username='id15058743_assignment4';
    $password='DbComment@020';
    
    try {
        $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();   
}
?>

