<?php 
    require_once "entete.php";
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
              <form method="post" action="../model/AjoutProduit.php">
                <div class="card-body">
                  <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" name="nom" id="nom" placeholder="@Enter produit">
                  </div>
                  <div class="form-group">

                    <label for="categorie">Categorie</label>
                    
                    <select name="categorie" class="form-control" id="categorie">
                        <option value="pondeuse">Pondeuse</option>
                        <option value="oeuf">oeuf</option>
                        <option value="provende">provende</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="quantite">Quantite</label>
                    <input type="number" class="form-control" name="quantite" id="quantite" placeholder="@Quantite">
                  </div>
                  <div class="form-group">
                    <label for="quantite">Prix Unitaire</label>
                    <input type="number" class="form-control" name="prix" id="prix" placeholder="@Prix">
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