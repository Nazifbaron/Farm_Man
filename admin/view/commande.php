<?php 
    session_start();
    require_once "entete.php";
    require_once "../model/function.php";

    //require_once "../model/deleteEntree.php";

    
  ?>
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <?php include('error_success.php'); ?>
            <h1>Commande</h1>
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
      <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Liste des Commandes</h3>
                <div class="card-tools">
                  <form action="../model/searchCmd.php">
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
                      <th>Montant</th>
                      <th>Date Commande</th>
                      <th>Payer</th>
                      <th>Adresse</th>
                      <th>Client</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $commande = getCommande();

                      if(!empty($commande) && is_array($commande))
                      {
                      foreach($commande as $key =>$value){
                        ?>
                          <tr>
                            <td><?=$value['montant']?></td>
                            <td><?=$value['dateCmd']?></td>
                            <td><?=$value['payer']?></td>
                            <td><?=$value['adrLiv']?></td>
                            <td><?=$value['nomCli'].' '.$value['prenomCli']?></td>
                            <td><a href="?id=<?=$value['idCmd']?>"><i class="bx bx-edit-alt"></i></a></td>
                           <!-- <td><a href="../model/deleteEntree.php?supprimer=<?=$value['idCmd']?>" onclick="return Confirmation();">supprimer</a></td>-->

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