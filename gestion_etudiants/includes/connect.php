<?php 
$server="localhost";
$dbname="db_sco";
$dsn="mysql:host=$server;dbname=$dbname";
$user="root";
$pass="";

//try to connect ----------------------------------------------------------------------
try{
    $con = new PDO($dsn,$user,$pass); 
     //echo "Successfully connected"; 
    }catch (PDOException $e) 
    { echo "Erreur : " . $e->getMessage(); }

?>