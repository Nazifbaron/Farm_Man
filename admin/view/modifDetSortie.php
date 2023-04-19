<?php 
    session_start();
    require_once "entete.php";
    require_once "../model/function.php";



    $id = $_GET['id'];
    if(!empty($id)){
      $details = getDetailSortieById($id);
      $detail= getDetailSortieById($id);
    }
    $sort = getSortie();
    $prod = getProduit();

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
              <form method="post" action="../model/modiDetSor.php">
                <div class="card-body">
                  <input type="hidden" name="id_update" value="<?= $id ?>">
                  
                  <div class="form-group">

                    <label for="produit">Produit</label>

                    <select name="produit" class="form-control" id="produit">
                    <option value="<?=$detail['Produit_id']?>" selected><?=getDetailSortieById($detail['Produit_id'])['nom']?></option>
                            
                      <?php foreach ($prod as $produit) : ?>
                        <option value="<?=$produit['id']?>"><?=$produit['nom']?></option>
                            
                        <?php endforeach; ?>
                    </select>
                    </div>

                
                  <div class="form-group">

                    <label for="sortie">Sortie</label>

                    <select name="sortie" class="form-control" id="sortie">
                      <option value="<?=$details['Sortie_idS']?>" selected><?=getSortieById($details['Sortie_idS'])['typeS']?></option>
                            
                        <?php foreach ($sort as $sortie) : ?>
                          <option value="<?=$sortie['idS']?>"><?=$sortie['typeS']?></option>
                                 
                          <?php endforeach; ?>
                    </select>
                  </div>
                  
                  <div class="form-group">
                    <label for="quantite">Quantite</label>
                    <input type="number" class="form-control" value="<?= $quantite ?>" name="quantite" id="quantite" placeholder="@Quantite">
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