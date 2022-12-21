<?php
    require_once("connectiondb.php");
    $resu="select * from entreprise ";
    $resultatFi=$pdo->query($resu);
    $requeteCount="select count(*) countF from entreprise";
    $filCount=$pdo->query($requeteCount);
    $tabCount=$filCount->fetch();
    $nbrfil=$tabCount['countF'];
?>

<! DOCTYPE HTML>
<HTML>
    <Head>
        <meta charset="utf-8">
        <title>les entreprises</title>
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
                <div class="panel-heading">L'ajout d'une entreprise:...</div>
                <div class="panel-body">
                    <a href="nouvelleentreprise.php" style="color:white">
                    <button class="btn btn-success btn-block">
                    
                            <span class="glyphicon glyphicon-plus" style="color:white"></span>
                        Ajouter une entreprise
                        </button>
                        </a>
                </div>
            </div>
            
            <div class="panel panel-info ">
                <div class="panel-heading">Les entreprises : (<?php echo $nbrfil ?>)entreprises</div>
                <div class="panel-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr class="danger">
                                <th>Id</th><th>Nom</th><th>Adresse</th><th>Ville</th><th colspan="2">Action</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                            <style>
                                tbody {
                                        font-weight: bolder
                                    }
                                </style>
                            <?php if( $nbrfil > 0 ) { ?>
                                <?php while($entreprise=$resultatFi->fetch()){ ?>
                                <tr class="success">
                                    <td><?php echo $entreprise['idE'] ?></td>
                                    <td><?php echo $entreprise['nomE'] ?></td>
                                    <td><?php echo $entreprise['adressE'] ?></td>
                                    <td><?php echo $entreprise['villeE'] ?></td>
                                    <td>
                                            <a href="editionENT.php?idE=<?php echo $entreprise['idE'] ?>">
                                            <button type="button" class="btn btn-success btn-block" >
                                                
                                                <span class="glyphicon glyphicon-edit" style="color:white"></span>
                                                
                                            </button>
                                                </a>

                                        </td>
                                    <td>
                                        <a onclick="return confirm('etes vous sur de vouloir supprimer cette entreprise ?')" href="suppressionENT.php?idE=<?php echo $entreprise['idE'] ?>">
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