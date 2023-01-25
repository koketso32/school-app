<?php
    $host="localhost";
    $dbname="stdregist";
    $username="koketso";
    $password="koketso";

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connected Successfully";
    } catch (PDOException $e) {
        //throw $th;
        echo "Cannot Connect: ".$e->getMessage();
    }
?>