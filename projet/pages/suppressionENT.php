<?php
        require_once("connectiondb.php");
    
    $idE=isset($_GET['idE'])?$_GET['idE']:null;
 

    
    $requete="DELETE from entreprise where idE=?";
    $impossible="select count(*) countstag from stagiaire where idE =$idE ";
    
    $resultatIMP=$pdo->query($impossible);
    $stag=$resultatIMP->fetch();
    $nbrstag=$stag['countstag'];

    if($nbrstag==0){
        $params=array($idE);
        $resultat=$pdo->prepare($requete);
        $ana=$resultat->execute($params);
        header('location:entreprise.php');
    }else{
        $message="impossible de supprimer cette entreprise :supprimer d'abords les stagiaires inscrits dans celle-la";
        header("location:message3.php?msg=$message");
    }
    
  




?>