<?php
    $user = 'root';
    $dbname = 'empresa';
    $host = 'localhost';
    $password = '';

    try{
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",$user,$password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo "erro". $e->getMessage();
    }

?>