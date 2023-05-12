<?php
session_start();
	
    if(!empty($_SESSION['email'])){
			
    }else{
        header('location: partials/connexion.php');
    }
    require_once "../views/partials/entete.php";
?>

        <!-- Page Header Section Start Here -->
        <section class="page-header bg_img padding-tb">
            <div class="overlay"></div>
            <div class="container">
                <div class="page-header-content-area">
                    <h4 class="ph-title">Produits de la ferme avicole</h4>
                    <ul class="lab-ul">
                        <li><a href="home.php">Domicile</a></li>
                        <li><a class="active">Produits</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- Page Header Section Ending Here -->

        <!-- shop page Section Start Here -->
        <div class="shop-page padding-tb">
            <div class="container">
                <div class="section-wrapper">
                    <div class="row justify-content-center">
                        <div class="col-lg-9 col-12">
                            <article>
                                <div class="shop-title d-flex flex-wrap justify-content-between bg-ash">
                                    <p>Affichage 01 - 12 de 139 résultats</p>
                                    <div class="product-view-mode">
                                        <a class="active" data-target="grids"><i class="icofont-ghost"></i></a>
                                        <a data-target="lists"><i class="icofont-listing-box"></i></a>
                                    </div>
                                </div>

                                <div class="shop-product-wrap grids row justify-content-center">
                              

                               
                                    <?php
                                require_once "../admin/model/function.php";
                      //$produit = getProduit();
                      $produit = getProduitFini();

                      if(!empty($produit) && is_array($produit))
                      {
                     foreach($produit as $key => $value){ 

                        ?>
                         <div class="col-lg-4 col-md-6 col-12">
                      
                                        <div class="product-item">
                                            <div class="product-thumb">
                                                <img src="../admin/<?=$value['images']?>" alt="shope">
                                                <div class="product-action-link">
                                                    <a href="../admin/<?=$value['images']?>" data-rel="lightcase"><i
                                                            class="icofont-eye"></i></a>
                                                    <a href="#"><i class="icofont-heart-alt"></i></a>
                                                    <a onclick="addToCart('<?=$value['nom']?>', '<?=$value['prix']?>', 1 , '<?=$value['images']?>', '<?=$value['id']?>')"><i class="icofont-cart-alt"></i></a>
                                                    <!--<button onclick="addToCart('<?=$value['nom']?>', '<?=$value['prix']?>', 1 , '<?=$value['images']?>', '<?=$value['id']?>')" class="lab-btn d-inline-b" data-toggle="modal"><i class="icofont-cart-alt"></i></button>-->
												
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h6><a href="#"><?=$value['nom']?></a></h6>
                                                <div class="rating mb-1">
                                                    <span><a href="#"><i class="far fa-star"></i></a></span>
                                                    <span><a href="#"><i class="far fa-star"></i></a></span>
                                                    <span><a href="#"><i class="far fa-star"></i></a></span>
                                                    <span><a href="#"><i class="far fa-star"></i></a></span>
                                                    <span><a href="#"><i class="far fa-star"></i></a></span>
                                                </div>
                                                <h6><?=$value['prix']?> FCFA</h6>
                                            </div>
                                        </div>
                                        <div class="product-list-item">
                                            <div class="product-thumb">
                                                <img src="../admin/<?=$value['images']?>" alt="shope">
                                                <div class="product-action-link">
                                                    <a href="../public/assets/images/product/01.jpg" data-rel="lightcase"><i
                                                            class="icofont-eye"></i></a>
                                                    <a href="#"><i class="icofont-heart-alt"></i></a>
                                                    <a href="#"><i class="icofont-cart-alt"></i></a>
                                                </div>
                                            </div>
                                           
                                        </div>
                                        </div>
                                        <?php             
                            }
                        }
                     ?>
                                   
                                </div>

                               
                            </article>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- shop page Section ENding Here -->

<?php
	require_once "../views/partials/footer.php";
?>