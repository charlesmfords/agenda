<?php
    $servername = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "agenda";
    try {
        $conn = new PDO("mysql:host=$servername;port=3306; dbname=$dbname", $user, $pass);
        if($conn){
            echo "Conexao realizada com sucesso! :)<br>";
        }else{
            echo "Falha na conexao. :(<br>";
        }
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage(); 
    }
?>