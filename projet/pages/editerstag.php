<?php
    require_once("connectiondb.php");

     
    $idS=isset($_GET['idSTAG'])?$_GET['idSTAG']:null ;
  

    $result="select * from stagiaire where idSTAG=$idS";
    $filliere="select id_filliere,nomFILLIERE from filiere ";
    $encadr="select idENCADRANT,preS,nomS from encadrant ";
    $entreprise="select idE,nomE from entreprise ";

    $resultats=$pdo->query($result);
    $stagiaire=$resultats->fetch();

    $Cin=$stagiaire['cin'];
    $nom=$stagiaire['nomS'];
 $prenom=$stagiaire['preS'];
   $sexe=$stagiaire['sexe'];
  $dateD=$stagiaire['date_debut'];
  $dateF=$stagiaire['date_fin'];
    $ENC=$stagiaire['id_encadrant'];
    $FIL=$stagiaire['id_filliere'];
   $ENT=$stagiaire['id_entreprise'];

    $resultF=$pdo->query($filliere);
    $resultENC=$pdo->query($encadr);
$resultENT=$pdo->query($entreprise);
    
    
    
    
    ?>

<! DOCTYPE HTML>
<HTML>
    <Head>
        <meta charset="utf-8">
        <title>Editer stagiaire</title>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
         <link rel="stylesheet" type="text/css" href="../css/style.css">

    </Head>
    <body>
        <?php include("menu.php"); ?>
        
       <div class="container">
            
            <div class="panel panel-primary margetop">
                <div class="panel-heading">Edition du stagiaire</div>
                <div class="panel-body">
                    
                    <form method="post" action="updatestag.php" class="form">
                        
                        <!-- ............ -->
                           
                      <input type="hidden" name="idSTAG" class="form-control" value="<?php echo $idS ?>">
                        
                        <!-- ............ -->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="nomST">Nom du stagiaire </label>
                            <input type="text" name="nomST" placeholder="nom" class="form-control" value="<?php echo $nom ?>">
                            </div>
                        <!-- ............ -->
                        <div class="form-group col-md-6">
                            <label for="preST">Prenom du stagiaire </label>
                            <input type="text" name="preST" placeholder="prenom" class="form-control" value="<?php echo $prenom ?>">
                            </div>
                        </div>
                        
                        
                        <div class="form-row">
                            <div class="form-group col-md-6">
                               <label for="cin">Cin :</label>
                                <input type="text" name="cin" placeholder="CIN" class="form-control" value="<?php echo $Cin ?>" >
                             </div>
                            <div class="form-group col-md-6">
                                      <label for="idE">Entreprise :</label>
                            <select name="idE" class="form-control" id="idE">
                                    <?php 
                                        while($_ENT=$resultENT->fetch()){ ?>
                                            <option value="<?php echo $_ENT['idE'] ?>" 
                                            <?php if($ENT===$_ENT['idE']) echo "selected" ?>>
                                            <?php echo $_ENT['nomE'] ?>
                                            </option>
                                       <?php }?>


                            </select>
                        </div>
                        </div>
                           <!-- ............ --> 
                          <!-- ............ -->
                        <div class="form-row">
                                
                        <div class="form-group col-md-6">
                                 <label for="id_filliere">Fillieres :</label>
                            <select name="id_filliere" class="form-control" id="id_filliere">
                                    <?php 
                                        while($_filliere=$resultF->fetch()){ ?>
                                            <option value="<?php echo $_filliere['id_filliere'] ?>" 
                                            <?php if($FIL===$_filliere['id_filliere']) echo "selected" ?>>
                                            <?php echo $_filliere['nomFILLIERE'] ?>
                                            </option>
                                       <?php }?>


                            </select>
                            </div>
                            <!-- ............ -->
                            <div class="form-group col-md-6">
                                <label for="id_encadrant">Encadrant(e)s :</label>
                        <select name="id_encadrant" class="form-control" id="id_encadrant">
                            <?php 
                                    while($encadrant=$resultENC->fetch()){ ?>
                                        <option value="<?php echo $encadrant['idENCADRANT'] ?>" 
                                        <?php if($ENC===$encadrant['idENCADRANT']) echo "selected" ?>>
                                        <?php echo $encadrant['preS'] ?>
                                        <div><?php echo $encadrant['nomS'] ?></div>
                                        </option>
                                   <?php }?>
                        </select>
                            </div>
                    
                        </div>
                             <!-- ............ -->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                          <div>
                            <label for="date_debut">
                             Date de debut :
                                </label>

                            <input type="date" name="date_debut" placeholder="yyyy-mm-dd" value="<?php echo $dateD ?>" min="2021-04-01" max="2021-08-30">
                                                
                        </div>
                                                         &nbsp
                              <div>
                        
                            <label for="date_fin">
                              Date du fin :
                                </label>

                            <input type="date" name="date_fin" placeholder="yyyy-mm-dd" value="<?php echo $dateF ?>" min="2021-04-01" max="2021-08-30">
                        </div>
                            </div>
                            
                        <!-- ............ -->
                        <div class="form-group col-md-6">
                        
                           <div class="form-group col-md-6">
                                 <label for="sexe">Sexe :</label>
                            <div>
                                <label><input type="radio" name="sexe" value="femme" <?php if($sexe==="femme") echo "checked" ?>/>FEMME</label><br> 
                                <label><input type="radio" name="sexe" value="homme" <?php if($sexe==="homme") echo "checked" ?>/>HOMME</label>
                            </div>
                              </div>
                        <!-- ............ -->
                    

                            </div>
                        </div>
                        <!-- ............ -->
               
                        <br>
                        <button type="submit" class="btn btn-success">
                            <span class="glyphicon glyphicon-save"></span>
                            Enregistrer
                            
                        </button>
                        <script href="../"></script>
                        <script>
                            
                        </script>
                        
                    </form>
                </div>
            </div>
        </div>
    </body>
</HTML>