<?php
    try{
        $pdo=new PDO("mysql:host:=localhost;dbname=app","root","");
    }catch(Exception $e){
        die('Erreur de connexion : ' .$e->getMessage());
    }
?>
