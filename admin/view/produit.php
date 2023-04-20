<?php 
    session_start();
    require_once "entete.php";
    require_once "../model/function.php";

    require_once "../model/delete.php";

    $id = $_GET['id'];
    if(!empty($id)){
      $produit = getProduitById($id);
    }
    
    $cat = getCategorie();

  
  ?>
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <?php include('error_success.php'); ?>
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
              <form method="post" enctype="multipart/form-data" action="<?= !empty($id) ? "../model/modiProduit.php" : "../model/AjoutProduit.php"?>">
                <div class="card-body">
                  <input type="hidden" name="id_update" value="<?=$produit['id']?>">
                  <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" name="nom" value="<?= !empty($id) ? $produit['nom'] : ""?>" id="nom" placeholder="@Enter produit">
                  </div>
                  <div class="form-group">

                    <label for="categorie">Categorie</label>

                    <select name="categorie" class="form-control" id="categorie">
                      <option value="<?=$produit['Categorie_idCat']?>" selected><?=getCategorieById($produit['Categorie_idCat'])['libelleCat']?></option>
                        
                      <?php foreach ($cat as $categorie) : ?>
                        <option value="<?=$categorie['id']?>"><?=$categorie['libelleCat']?></option>
                         
                            
                          
                      <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="quantite">Quantite</label>
                    <input type="number" class="form-control" value="<?=$produit['quantite']?>" name="quantite" id="quantite" placeholder="@Quantite">
                  </div>
                  <div class="form-group">
                    <label for="prix">Prix Unitaire</label>
                    <input type="number" class="form-control" value="<?=$produit['prix']?>" name="prix" id="prix" placeholder="@Prix">
                  </div>
                  <div class="form-group">
                    <label for="img">Photo du produit</label>
                    <input type="file" class="form-control"  name="img" id="img" >
                  </div>

                  
                <div class="card-footer">
                  <button type="submit" name="envoie" class="btn btn-primary">Valider</button>
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
                      <th>Image</th>
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
                            <td><img src="../<?=$value['images']?>" width="100px" height="100px"/></td>
                            <td><a href="?id=<?=$value['id']?>"><i class="bx bx-edit-alt"></i></a></td>
                            <td><a href="../model/delete.php?supprimer=<?=$value['id']?>" onclick="return Confirmation();">supprimer</a></td>

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