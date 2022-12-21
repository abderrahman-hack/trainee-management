<?php
    require_once("connectiondb.php");
    
    $nom=isset($_POST['nomE'])?$_POST['nomE']:"";
    $adress=isset($_POST['adressE'])?$_POST['adressE']:"";
 $ville=isset($_POST['villeE'])?$_POST['villeE']:"";


    $requete="insert into entreprise(nomE,adressE,villeE)
    values(?,?,?)";
    $params=array($nom,$adress,$ville);

    $resultat=$pdo->prepare($requete);
    $resultat->execute($params);
   
header('location:entreprise.php');


?>