<?php
    require_once("connectiondb.php");
    
    $idENC=isset($_GET['idENCADRANT'])?$_GET['idENCADRANT']:0;
 

    
    $requete="DELETE from ENCADRANT where idENCADRANT=?";

    $impossible="select count(*) countstag from stagiaire where id_encadrant =$idENC ";
    
    $resultatIMP=$pdo->query($impossible);
    $stag=$resultatIMP->fetch();
    $nbrstag=$stag['countstag'];

    if($nbrstag==0){
         $params=array($idENC);
        $resultat=$pdo->prepare($requete);
        $resultat->execute($params);
        header('location:encadrant.php');
    }else{
        $message="impossible de supprimer cet encadrant  :supprimer d'abords les stagiaires encadré par celui-ci";
        header("location:message2.php?msg=$message");
    }






?>