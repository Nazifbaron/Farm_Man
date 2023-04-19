<?php 
    session_start();
    require_once "entete.php";
    require_once "../model/function.php";



    $id = $_GET['id'];
    if(!empty($id)){
      $deta =  getDetailEntreById($id);
      $id_u = $deta['id'];
      $prod_id = $deta['Produit_id'];
      $entree_id = $deta['Entree_idE'];
      $quantite = $deta['quantite'];
      $prix = $deta['prix'];
      
    }
   

    
    $details = getDetailEntre(); 

  ?>

  
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <?php include('error_success.php'); ?>
            <h1>Mise à jour</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Mise à jour</h3>
              </div>
              <form method="post" action="../model/modiDetEnt.php">
                <div class="card-body">
                  <input type="hidden" name="id_update" value="<?= $id_u ?>">
                  <div class="form-group">
              
                    <label for="produit">Produit</label>

                    <select name="produit" class="form-control" id="produit">

                      <?php 
                        $_produit = getAllProduit();

                        while($produit = $_produit->fetch()){
                            echo '<option value="'.$produit['id'].'">'.$produit['nom'].'</option>';
                        }
                     ?>
                        
                            

                    </select>
                  </div>
                  <div class="form-group">
                 
                    <label for="entre">Type d'Entrée</label>

                    <select name="entre" class="form-control" id="entre">
                        
                      <?php 
                        $_entre = getAllEntre();

                        while($entre = $_entre->fetch()){
                          echo '<option value="'.$entre['idE'].'">'.$entre['typeE'].'</option>';
                        }
                      ?>
                    </select>
                  </div>
                  
                  <div class="form-group">
                    <label for="quantite">Quantite</label>
                    <input type="number" class="form-control" value="<?= $quantite ?>" name="quantite" id="quantite" placeholder="@Quantite">
                  </div>

                  <div class="form-group">
                    <label for="prix">Prix</label>
                    <input type="number" class="form-control" value="<?= $prix ?>" name="prix" id="prix" placeholder="@Prix">
                  </div>
                 
                  
                <div class="card-footer">
                  <button type="submit" name="envoie" class="btn btn-primary">Valider</button>
                </div>
              </form>
            </div>
        </div>
        
      </div>
     
    </section>
    
  </div>
  

<?php 
    require_once "pied.php";
  ?>