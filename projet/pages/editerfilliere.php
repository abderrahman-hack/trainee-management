<?php
    require_once("connectiondb.php");
    
    $nomfilliere=isset($_POST['nomFILLIERE'])?$_POST['nomFILLIERE']:"";
    $ecole=isset($_POST['ecole'])?$_POST['ecole']:"";


    $requete="insert into filiere(nomFILLIERE,ecole)
    values(?,?)";
    $params=array($nomfilliere,$ecole);

    $resultat=$pdo->prepare($requete);
    $resultat->execute($params);
   
header('location:filliere.php');


?>