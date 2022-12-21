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
                <div class="panel-heading">L'jout du filliere</div>
                <div class="panel-body">
                    <form method="post" action="editerfilliere.php" class="form">
            
                        <!-- ............ -->
                       <div class="form-group">
                        
                           <label for="nomFILLIERE"><strong>Nom filliere :</strong></label>
                                <input type="text" name="nomFILLIERE" placeholder="nom du filliere" class="form-control">
                          
                        </div>
                        <!-- ............. -->
                       <div class="form-group">
                            <label for="ecole"><strong>Ecole :</strong></label>
                            <input type="hidder" name="ecole"placeholder="ecole" class="form-control">
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