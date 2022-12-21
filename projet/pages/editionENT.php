
<?php
    require_once("connectiondb.php");

     
    $idE=isset($_GET['idE'])?$_GET['idE']:null;
  

    $result="select * from entreprise where idE=$idE";

    $resultats=$pdo->query($result);
    $entreprise=$resultats->fetch();
    
    $nom=$entreprise['nomE'];
    $adress=$entreprise['adressE'];
    $villeE=$entreprise['villeE'];

    
    
    
    
    ?>

<! DOCTYPE HTML>
<HTML>
    <Head>
        <meta charset="utf-8">
        <title>Edition entreprise</title>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
         <link rel="stylesheet" type="text/css" href="../css/style.css">

    </Head>
    <body>
        <?php include("menu.php"); ?>
        
       <div class="container">
            
            <div class="panel panel-primary margetop">
                <div class="panel-heading">Edition d'entreprise</div>
                <div class="panel-body">
                    <form method="post" action="editENT.php" class="form">
                        
                        <!-- ............ -->
                        <input type="hidden" name="idE" class="form-control" value="<?php echo $idE ?>">
                        <!-- ............ -->
                        <div class="form-group">
                            <label for="nomE">Nom d'entreprise : </label>
                            <input type="text" name="nomE" placeholder="nom" class="form-control" value="<?php echo $nom ?>">
                        </div>
                        <!-- ............ -->
                        <div class="form-group">
                            <label for="adressE">adresse : </label>
                            <input type="text" name="adressE" placeholder="addresse" class="form-control" value="<?php echo $adress ?>">
                        </div>
                        <!-- ............ -->
                    <div class="form-group">
                            <label for="villeE">ville : </label>
                            <input type="text" name="villeE" placeholder="ville" class="form-control" value="<?php echo $villeE ?>">
                        </div>
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