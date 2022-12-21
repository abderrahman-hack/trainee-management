<?php
    require_once("connectiondb.php");
    
    $id=isset($_GET['idSTAG'])?$_GET['idSTAG']:null;
 

    
    $requete="DELETE from stagiaire where idSTAG=?";
    $params=array($id);

    $resultat=$pdo->prepare($requete);
    $ana=$resultat->execute($params);

header('location:stagiaire.php');


?>