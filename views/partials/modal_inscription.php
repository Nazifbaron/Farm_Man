

<div class="modal fade" id="Modal1" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Formulaire d'inscription</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <div class="register-photo">
            <div class="form-container">
                
                <form method="post" action="../model/Ajout.php">

                    <h2 class="text-center"><strong>Inscrivez-vous</strong> </h2>
                    <div class="form-group"><input class="form-control" type="text" name="nom" placeholder="@Nom" /></div>
                    <div class="form-group"><input class="form-control" type="text" name="prenom" placeholder="@Prenom" /></div>
                    <div class="form-group"><input class="form-control" type="number" name="telephone" placeholder="@Telephone" /></div>
                    <div class="form-group"><input class="form-control" type="email" name="email" placeholder="@Email" /></div>
                    <div class="form-group"><input class="form-control" type="text" name="ville" placeholder="@Ville" /></div>
                    <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password" /></div>
                    <div class="form-group"><input class="form-control" type="password" name="conf_password" placeholder="@Confirmer Password (repeat)" /></div>
                    <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="envoie">Envoyer</button></div>
                    <a class="already" href="#" data-toggle="modal" data-target="#Modal2" data-dismiss="modal">Vous avez déjà un compte ? Connectez-vous ici.</a>
                    
                </form>
            </div>
        </div>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>