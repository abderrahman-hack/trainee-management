<?php
        require_once("connectiondb.php");

    $nomS=isset($_POST['nomS'])?$_POST['nomS']:"";
    $preS=isset($_POST['preS'])?$_POST['preS']:"";


    $requete="insert into encadrant(nomS,preS)
    values(?,?)";
    $params=array($nomS,$preS);

    $resultat=$pdo->prepare($requete);
    $resultat->execute($params);
   
header('location:encadrant.php');


?>