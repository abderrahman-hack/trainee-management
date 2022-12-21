<?php
    require_once("connectiondb.php");

  

    
    ?>

<! DOCTYPE HTML>
<HTML>
    <Head>
        <meta charset="utf-8">
        <title>Nouvelle filliere</title>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
         <link rel="stylesheet" type="text/css" href="../css/style.css">

    </Head>
    <body>
        <?php include("menu.php"); ?>
        
       <div class="container">
            
            <div class="panel panel-primary margetop">
                <div class="panel-heading">L'jout d'une entreprise</div>
                <div class="panel-body">
                    <form method="post" action="editerENT.php" class="form">
            
                        <!-- ............ -->
                       <div class="form-group">
                        
                           <label for="nomE"><strong>Nom d'entreprise :</strong></label>
                                <input type="text" name="nomE" placeholder="nom d'entreprise'" class="form-control">
                          
                        </div>
                        <!-- ............. -->
                       <div class="form-group">
                            <label for="adressE"><strong>adress :</strong></label>
                            <input type="hidder" name="adressE"placeholder="adress" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="villeE"><strong>ville :</strong></label>
                            <input type="hidder" name="villeE"placeholder="ville" class="form-control">
                        </div>
             
                        <!-- ............ -->
               
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