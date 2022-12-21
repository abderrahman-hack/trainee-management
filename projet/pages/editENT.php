<?php
        require_once("connectiondb.php");
    $idE=isset($_POST['idE'])?$_POST['idE']:0;
    $nom=isset($_POST['nomE'])?$_POST['nomE']:null;
    $adress=isset($_POST['adressE'])?$_POST['adressE']:null;
$ville=isset($_POST['villeE'])?$_POST['villeE']:null;


    $requete="update entreprise set nomE=? ,adressE=?,villeE=? where idE=?";
    $params=array($nom,$adress,$ville,$idE);

    $resultat=$pdo->prepare($requete);
    $resultat->execute($params);
    

header('location:entreprise.php');


?>