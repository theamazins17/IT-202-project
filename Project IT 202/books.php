<!--
   David Villafranca
   IT 202-001
   Project Phase 3
   December 8, 2022
-->
<?php
    $dsn = 'mysql:host=localhost;dbname=bookstore';
    $username = 'admin';
    $password = 'admin';
 
    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>