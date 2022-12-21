<?php
        require_once("connectiondb.php");
    $idENC=isset($_POST['idENCADRANT'])?$_POST['idENCADRANT']:0;
    $nom=isset($_POST['nomENC'])?$_POST['nomENC']:null;
    $prenom=isset($_POST['preENC'])?$_POST['preENC']:null;


    $requete="update encadrant set nomENC=? ,preENC=? where idENCADRANT=?";
    $params=array($nom,$prenom,$idENC);

    $resultat=$pdo->prepare($requete);
    $resultat->execute($params);
    

header('location:encadrant.php');


?>