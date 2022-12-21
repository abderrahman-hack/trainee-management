<?php
    require_once("connectiondb.php");

  

    
    ?>

<! DOCTYPE HTML>
<HTML>
    <Head>
        <meta charset="utf-8">
        <title>nouveau encadrant</title>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
         <link rel="stylesheet" type="text/css" href="../css/style.css">

    </Head>
    <body>
        <?php include("menu.php"); ?>
        
       <div class="container">
            
            <div class="panel panel-primary margetop">
                <div class="panel-heading">Nouvelle encadrant(e)</div>
                <div class="panel-body">
                    <form method="post" action="ajoutencadrant.php" class="form">
            
                        <!-- ............ -->
                       <div class="form-group">
                        
                           <label for="nomS"><strong>Nom d'encadrant(e) :</strong></label>
                                <input type="text" name="nomS" placeholder="nom d'encadrant" class="form-control">
                          
                        </div>
                        <!-- ............. -->
                       <div class="form-group">
                            <label for="preS"><strong>Prenom d'encadrant(e) : </strong></label>
                            <input type="hidder" name="preS"placeholder="prenom d'encadrant" class="form-control">
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