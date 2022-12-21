<?php
    require_once("connectiondb.php");

     
    $idENC=isset($_GET['idENCADRANT'])?$_GET['idENCADRANT']:null ;
  

    $result="select * from encadrant where idENCADRANT=$idENC";

    $resultats=$pdo->query($result);
    $encadrant=$resultats->fetch();
    
    $nomENC=$encadrant['nomENC'];
    $prenomENC=$encadrant['preENC'];

    
    
    
    
    ?>

<! DOCTYPE HTML>
<HTML>
    <Head>
        <meta charset="utf-8">
        <title>Edition encadrant</title>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
         <link rel="stylesheet" type="text/css" href="../css/style.css">

    </Head>
    <body>
        <?php include("menu.php"); ?>
        
       <div class="container">
            
            <div class="panel panel-primary margetop">
                <div class="panel-heading">Edition d'encadrant</div>
                <div class="panel-body">
                    <form method="post" action="editionENC.php" class="form">
                        
                        <!-- ............ -->
                        <input type="hidden" name="idENCADRANT" class="form-control" value="<?php echo $idENC ?>">
                        <!-- ............ -->
                        <div class="form-group">
                            <label for="nomENC">Nom du encadrant </label>
                            <input type="text" name="nomENC" placeholder="nom" class="form-control" value="<?php echo $nomENC ?>">
                        </div>
                        <!-- ............ -->
                        <div class="form-group">
                            <label for="preENC">Prenom du encadrant </label>
                            <input type="text" name="preENC" placeholder="prenom" class="form-control" value="<?php echo $prenomENC ?>">
                        </div>
                        <!-- ............ -->
      
                        <!-- ............ -->
                        <br>
                        <button type="submit" class="btn btn-success">
                            <span class="glyphicon glyphicon-save"></span>
                            Enregistrer
                            
                        </button>
                     
                        
                    </form>
                </div>
            </div>
        </div>
    </body>
</HTML>