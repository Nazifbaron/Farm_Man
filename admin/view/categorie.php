<?php 
 session_start();
    require_once "entete.php";
    require_once "../model/function.php";

    

    if(!empty(getCategorieById($_GET['id']))){
    
      $categorie=getCategorieById($_GET['id']);
    }
  ?>
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <?php include('error_success.php'); ?>
            <h1>Categorie</h1>
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
              <form method="post" action="<?= !empty($_GET['id']) ? "../model/modifCategorie.php" : "../model/AjoutCat.php"?>">
                <div class="card-body">
                  <div class="form-group">
                    <label for="libelle">Libelle</label>
                    <input value="<?= !empty(getCategorieById($_GET['id'])) ? $categorie['libelleCat'] : ""?>" type="text" class="form-control" name="libelle" id="libelle" placeholder="@Enter libelle">
                    <input type="hidden" name="id_update" value="<?=$categorie['id']?>">
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
                <h3 class="card-title">Liste de Categorie</h3>

                <div class="card-tools">
                  <form method="post" action="../model/searchCat.php">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                    <button type="submit" name="search" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                  </form>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Libelle</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $categories = getCategorie();

                    if(!empty($categories) && is_array($categories)){
                        foreach($categories as $key=>$value){
                          ?>
                          <tr>
                              <td><?=$value['libelleCat']?></td>
                              <td><a href="?id=<?=$value['id']?>"><i class="bx bx-edit-alt"></i></a></td>
                              <td><a href="../model/deleteCat.php?supprimer=<?=$value['id']?>" onclick="return Confirmation();"><img src="../../public/assets/images/del.png" alt="product" ></a></td>
                            
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