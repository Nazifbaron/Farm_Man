<?php 
    session_start();
    require_once "entete.php";
    require_once "../model/function.php";

    //require_once "../model/deleteSortie.php";

    $id = $_GET['id'];
    if(!empty($id)){
      $sortie = getSortieById($id);
    }
    
  ?>
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <?php include('error_success.php'); ?>
            <h1>Sortie</h1>
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
              <form method="post" action="<?= !empty($id) ? "../model/modiSortie.php" : "../model/ajoutSortie.php"?>">
                <div class="card-body">
                  <input type="hidden" name="id_update" value="<?=$sortie['idS']?>">
                  <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" class="form-control" name="type" value="<?= !empty($id) ? $sortie['typeS'] : ""?>" id="type" placeholder="@Enter le type">
                  </div>
                  
                  <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" class="form-control" value="<?=$sortie['dateS']?>" name="date" id="date" placeholder="@Date">
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
                <h3 class="card-title">Liste des Sorties</h3>

                <div class="card-tools">
                <form method="post" action="../model/searchSor.php">
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
                      <th>Type</th>
                      <th>Date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $sortir = getSortie();

                      if(!empty($sortir) && is_array($sortir))
                      {
                      foreach($sortir as $key =>$value){
                        ?>
                          <tr>
                            <td><?=$value['typeS']?></td>
                            <td><?=$value['dateS']?></td>
                            <td><a href="?id=<?=$value['idS']?>"><i class="bx bx-edit-alt"></i></a></td>
                            <!--<td><a href="../model/deleteSortie.php?supprimer=<?=$value['idS']?>" onclick="return Confirmation();">supprimer</a></td>-->
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