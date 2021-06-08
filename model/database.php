<?php
    $dsn = 'mysql:host=hwr4wkxs079mtb19.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=ug20x9abexpao2nr';
    $username = 'ur2e3p7129us8h23';
    $password = 'zw14qvu2f0t0u9ax';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = 'Database Error: ';
        $error_message .= $e->getMessage();
        echo $error_message;
        exit();
    }
?>