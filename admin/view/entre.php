<?php 
    session_start();
    require_once "entete.php";
    require_once "../model/function.php";

    require_once "../model/deleteEntree.php";

    $id = $_GET['id'];
    if(!empty($id)){
      $entre = getEntreById($id);
    }
    
  ?>
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <?php include('error_success.php'); ?>
            <h1>Entre</h1>
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
              <form method="post" action="<?= !empty($id) ? "../model/modiEntree.php" : "../model/ajoutEntree.php"?>">
                <div class="card-body">
                  <input type="hidden" name="id_update" value="<?=$entre['idE']?>">
                  <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" class="form-control" name="type" value="<?= !empty($id) ? $entre['typeE'] : ""?>" id="type" placeholder="@Enter le type">
                  </div>
                  
                  <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" class="form-control" value="<?=$entre['dateE']?>" name="date" id="date" placeholder="@Date">
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
                <h3 class="card-title">Liste des Entrés</h3>

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
                      <th>Type</th>
                      <th>Date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $entree = getEntre();

                      if(!empty($entree) && is_array($entree))
                      {
                      foreach($entree as $key =>$value){
                        ?>
                          <tr>
                            <td><?=$value['typeE']?></td>
                            <td><?=$value['dateE']?></td>
                            <td><a href="?id=<?=$value['idE']?>"><i class="bx bx-edit-alt"></i></a></td>
                            <td><a href="../model/deleteEntree.php?supprimer=<?=$value['idE']?>" onclick="return Confirmation();">supprimer</a></td>

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