<?php
        require_once("connectiondb.php");
    $idS=isset($_POST['idSTAG'])?$_POST['idSTAG']:0;
 $Cin=isset($_POST['cin'])?$_POST['cin']:null;
    $nom=isset($_POST['nomST'])?$_POST['nomST']:null;
 $prenom=isset($_POST['preST'])?$_POST['preST']:null;
   $sexe=isset($_POST['sexe'])?$_POST['sexe']:null;
  $dateD=isset($_POST['date_debut'])?$_POST['date_debut']:null;
  $dateF=isset($_POST['date_fin'])?$_POST['date_fin']:null;
    $ENC=isset($_POST['id_encadrant'])?$_POST['id_encadrant']:null;
    $FIL=isset($_POST['id_filliere'])?$_POST['id_filliere']:null;
$ENT=isset($_POST['idE'])?$_POST['idE']:null;

    $requete="update stagiaire set cin=?,
              nomST=? ,preST=?, sexe=?, date_debut=?,date_fin=?,id_encadrant=?,id_filliere=? ,id_entreprise=?
              where idSTAG=?";
    $params=array($Cin,$nom,$prenom,$sexe,$dateD,$dateF,$ENC,$FIL,$ENT,$idS);


    $resultat=$pdo->prepare($requete);
    $resultat->execute($params);
header('location:stagiaire.php');


?>