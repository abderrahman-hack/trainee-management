<?php
    require_once("connectiondb.php");

     $Cin=isset($_GET['cin'])?$_GET['cin']:null ;
    $name=isset($_GET['name'])?$_GET['name']:null ;
    $prenom=isset($_GET['prenom'])?$_GET['prenom']:null ;
    $sexe=isset($_GET['sexe']) && $_GET['sexe'] != "all" ?$_GET['sexe']:null;
    $FILLIERES=isset($_GET['FILLIERES']) && $_GET['FILLIERES'] != "all" ?$_GET['FILLIERES']:null;
    $id_encadrant=isset($_GET['id_encadrant']) && $_GET['id_encadrant'] != "all" ?$_GET['id_encadrant']:null;
    

    $size=6;  
    $page=isset($_GET['page'])?$_GET['page']:1;
    $offset = $size * ( $page - 1 );
    
    
    $requete="select idSTAG,cin, nomST,preST, sexe, date_debut, date_fin,nomS ,preS, nomFILLIERE,nomE from stagiaire , filiere , encadrant,entreprise where stagiaire.id_filliere = filiere.id_filliere and encadrant.idENCADRANT = stagiaire.id_encadrant and stagiaire.id_entreprise = entreprise.idE ORDER BY nomST";

 $requete="select idSTAG,cin, nomST,preST, sexe, date_debut, date_fin,nomS ,preS, nomFILLIERE,nomE from stagiaire , filiere , encadrant,entreprise where stagiaire.id_filliere = filiere.id_filliere and encadrant.idENCADRANT = stagiaire.id_encadrant and stagiaire.id_entreprise = entreprise.idE";

    $result="select id_filliere,nomFILLIERE from filiere ";
    $resulta="select idENCADRANT,preS from encadrant ";
    $requeteCount="select count(*) countS from stagiaire , filiere , encadrant where stagiaire.id_filliere = filiere.id_filliere and encadrant.idENCADRANT = stagiaire.id_encadrant";
    if($Cin || $name || $prenom || $sexe || $FILLIERES || $id_encadrant) {
        $where_requete = "";
        if($Cin) {
            $where_requete .= " and stagiaire.cin like '%$Cin%'";
        }
        if($name) {
            $where_requete .= " and stagiaire.nomST like '%$name%'";
        }
        if($prenom) {
            $where_requete .= " and stagiaire.preST like '%$prenom%'";
        }
        if($sexe) {
            $where_requete .= " and stagiaire.sexe = '$sexe'";
        }
        if($FILLIERES) {
            $where_requete .= " and stagiaire.id_filliere = '$FILLIERES'";
        }
        if($id_encadrant) {
            $where_requete .= " and stagiaire.id_encadrant = '$id_encadrant'";
        }
        
        $requete .= $where_requete;
        $requeteCount .= $where_requete;
    }

    $requete .= " limit $offset, $size"; 
    
    $resultatF=$pdo->query($requete);
var_dump($resultatF);
    $resultF=$pdo->query($result);
    $resultat=$pdo->query($resulta);
    $resCount=$pdo->query($requeteCount);
    $tabCount=$resCount->fetch();
    $nbrSTAG=$tabCount['countS'];
    //$nbrSTAG = 0;
     $reste = $nbrSTAG % $size;
    if($reste ===0)
        $nbrpage= $nbrSTAG/$size;
    else
        $nbrpage=floor($nbrSTAG/$size  + 1);
       
?>

<! DOCTYPE HTML>
<HTML>
    <Head>
        <meta charset="utf-8">
        <title>les stagiaires</title>
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
            .panel-heading{
                display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 60px; 
            }
        </style>
    </Head>
    <body>
        
       
        
        <?php include("menu.php"); ?>
        
        <div class="container-fluid margetop">
  <div class="row">
    <div class="col-sm-3">
      <div class="panel panel-success">
                <div class="panel-heading">Rechercher des stagiaires...</div>
                <div class="panel-body">
                    
                    <form method="get" action="stagiaire.php" class="form-inline">
                        <table class="table table-striped table-bordered">
                            <!------------------->
                           <tr class="success">
                                <td>
                                    <div class="form-group">
                                       Cin: <br>
                                        <input type="text" name="Cin" placeholder="taper Cin" class="form-control" value="<?php echo    $Cin ?>" style="width:95%">
                                    </div>
                                </td>
                            </tr>
                            <!------------------->
                           <tr class="success">
                                <td>
                                    <div class="form-group">
                                        Nom: <br>
                                        <input type="text" name="name" placeholder="taper le nom" class="form-control" value="<?php echo    $name ?>" style="width:95%">
                                    </div>
                                </td>
                            </tr>
                          <!------------------->
                           <tr class="success">
                                <td>
                                    <div class="form-group">
                                        Prenom : <br>
                                        <input type="text" name="prenom" placeholder="taper le prenom" class="form-control" value="<?php echo $prenom ?>" style="width:95%">
                                    </div>
                                </td>
                            </tr>                                    
                        <!------------------->
                            <tr class="success">
                                <td>
                                    <label for="sexe">Sexe : </label><br>
                                    <select name="sexe" class="form-control" id="sexe" onchange="this.form.submit()" style="width:95%">
                                        <option value="all" <?php if($sexe==="all") echo "selected" ?>>tous les SEXE</option>
                                        <option value="femme" <?php if($sexe==="femme") echo "selected" ?>>FEMME</option>
                                        <option value="homme" <?php if($sexe==="homme") echo "selected" ?>>HOMME</option>

                                    </select>
                                </td>
                            </tr>
                          <!------------------->
                            <tr class="success">
                                <td>
                                    <label for="FILLIERES">Fillieres :</label><br>
                                    <select name="FILLIERES" class="form-control" id="FILLIERES" onchange="this.form.submit()" style="width:95%">

                                        <option value="all" <?php if($FILLIERES==="all") echo "selected" ?>>
                                            tous les fillieres</option>

                                        <?php 
                                        while($FILLIERE=$resultF->fetch()){ ?>
                                            <option value="<?php echo $FILLIERE['id_filliere'] ?>" <?php if($FILLIERES===$FILLIERE['id_filliere']) echo "selected" ?>>
                                            <?php echo $FILLIERE['nomFILLIERE'] ?>
                                            </option>
                                       <?php }?>
                                    </select>
                                </td>
                            </tr>
                          <!------------------->
                            <tr class="success">
                                <td>
                                    <label for="id_encadrant">Encadrants :  </label><br>
                                    <select name="id_encadrant" class="form-control" id="id_encadrant" onchange="this.form.submit()" style="width:95%">
                                    <option value="all" <?php if($id_encadrant==="all") echo "selected" ?>>
                                        tous les encadrants</option>
                                        <?php 
                                        while($encadrant=$resultat->fetch()){ ?>
                                            <option value="<?php echo $encadrant['idENCADRANT'] ?>" 
                                            <?php if($id_encadrant===$encadrant['idENCADRANT']) echo "selected" ?>>
                                            <?php echo $encadrant['preS'] ?>
                                            </option>
                                        <?php }?>
                                    </select>
                                </td>
                            </tr>
                              <!------------------->
                            <tr class="success">
                                <td>
                                    <button type="submit" class="btn btn-success" style="width:95%">
                                        <span class="glyphicon glyphicon-search"></span>
                                        Rechecher
                                    </button>
                                </td>
                            </tr>
                        &nbsp 
                              <!------------------->
                         
                      </table>

                    </form>
                </div>
            </div>
    </div>
    <div class="col-sm-9">
       <div class="panel panel-info ">
                <div class="panel-heading">
                    <div class="col-sm-6">
						Liste des stagiaires : (<?php echo $nbrSTAG ?>)stagiaires:
					</div>
					<div class="col-sm-6">
                         <div class="text-right">
                                        <a href="nouvellestag.php" style="color:white">
                                            <button type="button" class="btn btn-success btn-lg" style="width:70%;">
                                                <span class="glyphicon glyphicon-plus" style="color:white"></span>
                                                Nouvelle stagiaire                                      
                                            </button>
                                        </a>
                         </div> 
                    </div>
                    
           </div>
                <div class="panel-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr class="danger">
                                <th>Id</th><th>Cin</th><th>Nom</th><th>Prenom</th><th>Sexe</th><th>date_debut</th><th>Date_fin</th><th>Encadrant</th><th>Filliere</th><th>Entreprise</th><th>Action</th>
                            
                            </tr>
                        </thead>
                        
                        <tbody >
                            <style>
                               tbody {
                                        font-weight: bolder
                                    }
                                </style>
                           <?php if( $nbrSTAG > 0 ) { ?> 
                                <?php while($stagiaire=$resultatF->fetch()){ ?>
                                <tr class="success">
                                    <td><?php echo $stagiaire['idSTAG'] ?></td>
                                    <td><?php echo $stagiaire['cin'] ?></td>
                                    <td><?php echo $stagiaire['nomST'] ?></td>
                                    <td><?php echo $stagiaire['preST'] ?></td>
                                    <td><?php echo $stagiaire['sexe'] ?></td>
                                    <td><?php echo $stagiaire['date_debut'] ?></td>
                                    <td><?php echo $stagiaire['date_fin'] ?></td>
                                    <td><?php echo $stagiaire['nomS'] . " " . $stagiaire['preS'] ?></td>
                                    <td><?php echo $stagiaire['nomFILLIERE'] ?></td>
                                    <td><?php echo $stagiaire['nomE'] ?></td>
                       
                                    <td> 
                                          <a href="editerstag.php?idSTAG=<?php echo $stagiaire['idSTAG'] ?>">
                                            <button class="btn btn-success ">
                                                <span class="glyphicon glyphicon-edit" style="color:white"></span>
                                            </button>
                                        </a>
                                        &nbsp 
                                         <a onclick="return confirm('etes vous sur de vouloir supprimer CE ENCADRANT ?')" href="suppressionstag.php?idSTAG=<?php echo $stagiaire['idSTAG'] ?>">     
                                            <button class="btn btn-success ">
                                                <span class="glyphicon glyphicon-trash" style="color:white"></span>
                                            </button>
                                        </a>
                                    </td>
                                    
                                </tr>
                                <?php } ?>
                                
                            <?php  } else { ?>
                                <tr>
                                    <td>
                                        Aucune résultat
                                    </td>
                                </tr>
                            <?php } ?> 
                           
                        </tbody>
                    
                    </table>
                <!--------------->   
                              <div>
                                <ul class="pagination">
                                    <?php for ($i=1;$i<=$nbrpage;$i++) { ?>
                                        <li class="<?php if($i == $page) echo 'active' ?>">
                                            <a href="stagiaire.php?page=<?php echo $i; ?>&Cin=<?php echo  $Cin ?>&name=<?php echo  $name ?>&prenom=<?php echo  $prenom ?>&sexe=<?php echo  $sexe ?>&FILLIERES=<?php echo  $FILLIERES ?>&id_encadrant=<?php echo  $id_encadrant ?>"> <?php echo  $i; ?>
                                            </a> 
                                        </li>
                                    <?php } ?>
                                </ul>
                              </div>
                   

                </div>
       </div>
    </div>
</div>
  </div>
    </body>
</HTML>