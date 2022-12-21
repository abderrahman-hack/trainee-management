<?php
    
    $message=isset($_GET['msg'])?$_GET['msg']:"ereur";
 
?>
<! DOCTYPE HTML>
<HTML>
    <Head>
        <meta charset="utf-8">
        <title>message d'erreur</title>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
         <style>
            body{
                background-image: url(../images/Dark.jpg);
               -webkit-transition: all 1s ease;
                   -moz-transition: all 1s ease;
                        -o-transition: all 1s ease;
                     -ms-transition: all 1s ease;
                            transition: all 1s ease; 
        

            }
        </style>
    </Head>
    <body>
        <?php include("menu.php"); ?>
        <div class="container ">
            <div class="panel panel-success margetop">
                <div class="panel-heading">ERREUR</div>
                <div class="panel-body">
                    <h3 style="text-align:center;color:red;font-weight: bold;"><?php echo $message ?></h3>
                    
                    <button type="submit" class="btn btn-success" style="margin:auto;display:block">
                        <a href="filliere.php" style="color:white">
                            <span class="glyphicon glyphicon-backward" style="color:white"></span> retour
                        </a>
                    </button>

                    

                </div>
            </div>
            
           
                </div>
            
        
    </body>
</HTML>