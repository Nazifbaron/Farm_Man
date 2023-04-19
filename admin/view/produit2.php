<?php 
    require_once "entete.php";
    require_once "../model/function.php";

    
    if(!empty($id)){
     
    }
    
    $cat = getCategorie();
  ?>
  <?php
    if(isset($_GET['id'])){
      $id = $_GET['id'];
      $produit = getProduitById($id);
      if($produit == 1){
          $lire = $produit->fetch();
          $nom = $lire['nom'];
          $quantite = $lire['quantite'];
          $prix = $lire['prix'];
          $categorie = $lire['categorie'];

      }
  }
  ?>

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Produit</h1>
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
                <h3 class="card-title">Entrer les information</h3>
              </div>
              <form method="post" action="">
                <div class="card-body">
                  <input type="hidden" name="id_update" value="<?=$id?>">
                  <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" name="nom" value="<?=$nom?>" id="nom" placeholder="@Enter produit">
                  </div>
                  <div class="form-group">

                    <label for="categorie">Categorie</label>

                    <select name="categorie" class="form-control" id="categorie">
                    <option value="<?=$categorie ?>">select</option> 
                    <?php 
                      
                      $res = getCategorie();
                  
                    ?>
                                             
                      <?php foreach ($res as $categorie) : ?>
                        <option value="<?=$categorie['id']?>"><?=$categorie['libelleCat']?></option>
                         
                            
                          
                      <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="quantite">Quantite</label>
                    <input type="number" class="form-control" value="<?=$quantite?>" name="quantite" id="quantite" placeholder="@Quantite">
                  </div>
                  <div class="form-group">
                    <label for="prix">Prix Unitaire</label>
                    <input type="number" class="form-control" value="<?=$prix?>" name="prix" id="prix" placeholder="@Prix">
                  </div>
                  
                <div class="card-footer">
                <?php if($update == true) :?>
                
                  <button type="submit" name="update" class="btn btn-primary">Update</button>
                  <?php else :?>
                    <button type="submit" name="envoie" class="btn btn-primary">Valider</button>
                    <?php  endif?>
                  
                </div>
              </form>
            </div>
        </div>
        
      </div>
      <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Liste des Produits</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Nom</th>
                      <th>Categorie</th>
                      <th>Quantite</th>
                      <th>Prix unitaire</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $produits = getProduit();

                      if(!empty($produits) && is_array($produits))
                      {
                      foreach($produits as $key =>$value){
                        ?>
                          <tr>
                            <td><?=$value['nom']?></td>
                            <td><?=$value['libelleCat']?></td>
                            <td><?=$value['quantite']?></td>
                            <td><?=$value['prix']?></td>
                            <td><a href="produit.php?id=<?=$value['id']?>"><i class="bx bx-edit-alt"></i>modif</a></td>
                          </tr>
                            <?php             
                            }
                        }
                     ?>
                  </tbody>
                </table>
              </div>
             
            </div>
            
          </div>
        </div>
    </section>
    
  </div>
  

<?php 
    require_once "pied.php";
  ?>