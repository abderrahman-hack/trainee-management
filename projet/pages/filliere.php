<?php
    require_once("connectiondb.php");
    $resu="select * from filiere ";
    $resultatFi=$pdo->query($resu);
    $requeteCount="select count(*) countF from filiere";
    $filCount=$pdo->query($requeteCount);
    $tabCount=$filCount->fetch();
    $nbrfil=$tabCount['countF'];
?>

<! DOCTYPE HTML>
<HTML>
    <Head>
        <meta charset="utf-8">
        <title>les fillieres</title>
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
                <div class="panel-heading">L'ajout du filliere...</div>
                <div class="panel-body">
                    <a href="nouvellefilliere.php" style="color:white">
                    <button class="btn btn-success btn-block">
                    
                            <span class="glyphicon glyphicon-plus" style="color:white"></span>
                        Ajouter un filliere
                        </button>
                        </a>
                </div>
            </div>
            
            <div class="panel panel-info ">
                <div class="panel-heading">Les fillieres : (<?php echo $nbrfil ?>)FILLIERES</div>
                <div class="panel-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr class="danger">
                                <th>Id</th><th>Nom</th><th>Ecole</th><th >Action</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                            <style>
                                tbody {
                                        font-weight: bolder
                                    }
                                </style>
                            <?php if( $nbrfil > 0 ) { ?>
                                <?php while($filiere=$resultatFi->fetch()){ ?>
                                <tr class="success">
                                    <td><?php echo $filiere['id_filliere'] ?></td>
                                    <td><?php echo $filiere['nomFILLIERE'] ?></td>
                                    <td><?php echo $filiere['niveau'] ?></td>
                                    <td>
                                        <a onclick="return confirm('etes vous sur de vouloir supprimer cette filliere ?')" href="suppressionFIL.php?id_filliere=<?php echo $filiere['id_filliere'] ?>">
                                            <button class="btn btn-success btn-block">
                                            <span class="glyphicon glyphicon-trash" style="color:white"></span>
                                            </button>
                                        </a>
                                    </td>
                                    
                                </tr>
                               <?php } ?>
                                
                            <?php } else { ?>
                                <tr>
                                    <td>
                                        Aucune résultat
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    
                    </table>
                </div>
            </div>
        </div>
    </body>
</HTML>