<?php
    require_once("connectiondb.php");

    $filliere="select id_filliere,nomFILLIERE from filiere ";
    $encadr="select idENCADRANT,preS,nomS from encadrant ";
$entreprise="select idE,nomE from entreprise ";
   
    $resultF=$pdo->query($filliere);
    $resultENC=$pdo->query($encadr);
$resultENT=$pdo->query($entreprise);
    
    
    
    
    ?>

<! DOCTYPE HTML>
<HTML>
    <Head>
        <meta charset="utf-8">
        <title>Nouveau stagiaire</title>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
         <link rel="stylesheet" type="text/css" href="../css/style.css">

    </Head>
    <body>
        <?php include("menu.php"); ?>
        
       <div class="container">
            
            <div class="panel panel-primary margetop">
                <div class="panel-heading">L'ajout du stagiaire</div>
                <div class="panel-body">
                    <form method="post" action="insertstag.php" class="form">
                        <!-- ............ -->
                          <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="nom">Nom du stagiaire :</label>
                                <input type="text" name="NomST" placeholder="nom" class="form-control" >
                              </div>
                              <div class="form-group col-md-6">
                                <label for="prenom">Prenom du stagiaire :</label>
                                <input type="text" name="preST" placeholder="prenom" class="form-control">
                              </div>
                          </div>
                                   <div class="form-row">
                        <div class="form-group col-md-6">
                               <label for="Cin">Cin :</label>
                                <input type="text" name="cin" placeholder="CIN" class="form-control" >
                                                      </div>

                            <div class="form-group col-md-6">
                             <label for="idE">Entreprise :</label>
                            <select name="idE" class="form-control" id="idE">
                                    <?php 
                                        while($_ENT=$resultENT->fetch()){ ?>
                                            <option value="<?php echo $_ENT['idE'] ?>" 
                                            <?php if($entreprise===$_ENT['idE']) echo "selected" ?>>
                                            <?php echo $_ENT['nomE'] ?>
                                            </option>
                                       <?php }?>


                            </select>
                            </div>
 </div>
          
                                   <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="FILLIERES">Fillieres :</label>
                            <select name="id_filliere" class="form-control" id="FILLIERES">
                                    <?php 
                                        while($_filliere=$resultF->fetch()){ ?>
                                            <option value="<?php echo $_filliere['id_filliere'] ?>" 
                                            <?php if($filliere===$_filliere['id_filliere']) echo "selected" ?>>
                                            <?php echo $_filliere['nomFILLIERE'] ?>
                                            </option>
                                       <?php }?>


                            </select>
                            </div>
                          <!-- ............ -->             
                <!-- ............ -->
                            <div class="form-group col-md-6">
                        <label for="id_encadrant">Encadrant(e)s :</label>
                        <select name="id_encadrant" class="form-control" id="id_encadrant">
                            <?php 
                                    while($encadrant=$resultENC->fetch()){ ?>
                                        <option value="<?php echo $encadrant['idENCADRANT'] ?>" 
                                        <?php if($encadr===$encadrant['idENCADRANT']) echo "selected" ?>>
                                        <?php echo $encadrant['preS'] ?>
                                        <div><?php echo $encadrant['nomS'] ?></div>
                                        </option>
                                   <?php }?>
                        </select>
                            
                            </div>
                            </div>

                        <!-- ............ -->
                       
                  
                        <!-- ............ -->
                         <div class="form-row">
                            <div class="form-group col-md-6">
                                <div>
                                    <label for="date_debut">
                             Date de debut :
                                </label>

                            <input type="date" name="date_debut" placeholder="yyyy-mm-dd" min="2021-04-01" max="2021-06-30">
                                </div>&nbsp
                                <div>
                                        <label for="date_fin">
                              Date du fin :
                                </label>

                            <input type="date" name="date_fin" placeholder="yyyy-mm-dd"  min="2021-07-01" max="2021-08-30">
                                    </div>
                             </div>
                            <div class="form-group col-md-6">
                                     <label for="sexe">Sexe :</label>
                            <div class="radio">
                                <label><input type="radio" name="sexe" value="femme" checked/>FEMME</label> &nbsp  &nbsp
                                <label><input type="radio" name="sexe" value="homme"/>HOMME</label>
                            </div>
                            </div>
                        </div>
                        <!-- ............ -->
                      
                         &nbsp
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