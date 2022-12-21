<?php
        require_once("connectiondb.php");
     $Cin=isset($_POST['cin'])?$_POST['cin']:null;
    $nom=isset($_POST['NomST'])?$_POST['NomST']:null;
    $prenom=isset($_POST['preST'])?$_POST['preST']:null;
    $sexe=isset($_POST['sexe'])?$_POST['sexe']:null;
    $dateD=isset($_POST['date_debut'])?$_POST['date_debut']:null;
    $dateF=isset($_POST['date_fin'])?$_POST['date_fin']:null;
    $ENC=isset($_POST['id_encadrant'])?$_POST['id_encadrant']:null;
    $FIL=isset($_POST['id_filliere'])?$_POST['id_filliere']:null;
$ENT=isset($_POST['idE'])?$_POST['idE']:null;


    $requete="insert into stagiaire(cin,NomST,preST,sexe, date_debut,date_fin,id_encadrant,id_filliere,id_entreprise)
    values(?,?,?,?,?,?,?,?,?)";
    $params=array($Cin,$nom,$prenom,$sexe,$dateD,$dateF,$ENC,$FIL,$ENT);

    $resultat=$pdo->prepare($requete);
    $etat = $resultat->execute($params);
    
header('location:stagiaire.php');


?>