<?php
        require_once("connectiondb.php");
    
    $idFIL=isset($_GET['id_filliere'])?$_GET['id_filliere']:null;
 

    
    $requete="DELETE from filiere where id_filliere=?";
    $impossible="select count(*) countstag from stagiaire where id_filliere =$idFIL ";
    
    $resultatIMP=$pdo->query($impossible);
    $stag=$resultatIMP->fetch();
    $nbrstag=$stag['countstag'];

    if($nbrstag==0){
        $params=array($idFIL);
        $resultat=$pdo->prepare($requete);
        $ana=$resultat->execute($params);
        header('location:filliere.php');
    }else{
        $message="impossible de supprimer cette filliere :supprimer d'abords les stagiaires inscrits dans celle-la";
        header("location:message.php?msg=$message");
    }
    
  




?>