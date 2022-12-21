<?php
    require_once("connectiondb.php");
    $res="select * from encadrant ";
    $resultatENC=$pdo->query($res);
    $requeteCount="select count(*) countENC from encadrant";
    $ENCCount=$pdo->query($requeteCount);
    $tabCount=$ENCCount->fetch();
    $nbrENC=$tabCount['countENC'];
?>

<! DOCTYPE HTML>
<HTML>
    <Head>
        <meta charset="utf-8">
        <title>les encadrants</title>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
         <style>
            body{
                background-image: url(../images/Dark.jpg);
                

                

            }
        </style>
    </Head>
    <body>
        <?php include("menu.php"); ?>
        
        <div class="container">
            <div class="panel panel-success margetop margetop"> 
                <div class="panel-heading">L'ajout...</div>
                <div class="panel-body">
                    <a href="nouvelleencadrant.php" style="color:white">
                     <button type="button" class="btn btn-success btn-block" >
                          <span class="glyphicon glyphicon-plus" style="color:white"></span>
                        Ajouter un encadrant                                             
                        </button>
                        </a>
                </div>
                </div>
            </div>
            <div class="container">
                <div class="panel panel-info">
                    <div class="panel-heading">Les encadrants : (<?php echo $nbrENC ?>)encadrants</div>
                    <div class="panel-body">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr class="danger">
                                    <th>id</th><th>Nom</th><th>Prenom</th><th colspan="2">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <style>
                                    tbody {
                                        font-weight: bolder
                                    }
                                </style>
                                <?php if( $nbrENC > 0 ) { ?>
                                    <?php while($encadrant=$resultatENC->fetch()){ ?>
                                    <tr class="success">
                                        <td><?php echo $encadrant['idENCADRANT'] ?></td>
                                        <td><?php echo $encadrant['nomS'] ?></td>
                                        <td><?php echo $encadrant['preS'] ?></td>
                                        <td>
                                            <a href="editerENC.php?idENCADRANT=<?php echo $encadrant['idENCADRANT'] ?>">
                                            <button type="button" class="btn btn-success btn-block" >
                                                
                                                <span class="glyphicon glyphicon-edit" style="color:white"></span>
                                                
                                            </button>
                                                </a>

                                        </td>
                                        <td>
                                            <a onclick="return confirm('etes vous sur de vouloir supprimer cet encadrant ?')" href="suppressionENC.php?idENCADRANT=<?php echo $encadrant['idENCADRANT'] ?>">
                                            <button type="button" class="btn btn-success btn-block" >
                                                 
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