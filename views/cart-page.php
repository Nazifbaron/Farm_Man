<?php
		session_start();
		 
		if(!empty($_SESSION['email'])){
			
	}else{
			echo '<script>alert("Veuillez vous connecté")</script>';
			header('location: partials/connexions.php');
		}
	

?>
<!DOCTYPE html>
<html lang="en">

	
<!-- Mirrored from labartisan.net/demo/PoultryFarm/poultry-farm/cart-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Mar 2023 16:31:28 GMT -->
<head>
        <title>Ferme avicole</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- google fonts -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
		<link rel="shortcut icon" type="image/x-icon" href="../public/assets/images/x-icon/01.png">

		<link rel="stylesheet" href="../public/../public/assets/css/animate.css">
		<link rel="stylesheet" href="../public/../public/assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="../public/../public/assets/css/all.min.css">
		<link rel="stylesheet" href="../public/../public/assets/css/icofont.min.css">
		<link rel="stylesheet" href="../public/../public/assets/css/lightcase.css">
		<link rel="stylesheet" href="../public/../public/assets/css/swiper.min.css">
		<link rel="stylesheet" href="../public/../public/assets/css/style.css">
		<script src="https://cdn.fedapay.com/checkout.js?v=1.1.7"></script>
	</head>

	<body onload="showCartTable()">
	
		<!-- preloader start here -->
		<div class="preloader">
			<div class="preloader-inner">
				<div class="preloader-icon">
					<span></span>
					<span></span>
				</div>
			</div>
		</div>
		<!-- preloader ending here -->


		<!--search area-->
		<div class="search-input">
			<div class="search-close">
				<i class="icofont-close-circled"></i>
			</div>
			<form>
				<input type="text" name="text" placeholder="Search Heare">
				<button class="search-btn" type="submit">
					<i class="icofont-search-2"></i>
				</button>
			</form>
		</div>
		<!-- search area -->



		<div class="mobile-menu transparent-header">
			<nav class="mobile-header">
				<div class="header-logo">
					<a href="/"><img src="../public/assets/images/logo/01.png" alt="logo"></a>
				</div>
				<div class="header-bar">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</nav>
			<nav class="mobile-menu">
				<div class="mobile-menu-area">
					<div class="mobile-menu-area-inner">
						<ul class="lab-ul">



							<li>
								<a href="#0">Boutique</a>
								<ul class="lab-ul">
									<li><a href="product-page.php">Produits</a></li>
									<li><a href="product-single.php">Détails Produit</a></li>
									<li><a href="cart-page.php">Panier</a></li>
								</ul>
							</li>
							<li><a href="../app/core/views/contact.php">Contact</a></li>
							<li>
								<a href="#0">Se Connecter</a>
								<ul class="lab-ul">
									<li><a href="product-page.php">Inscription</a></li>
									<li><a href="product-single.php">Connect</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<!-- Mobile Menu Ending Here -->

		<!-- Modals include debut -->
		<?php include('modal_inscription.php'); ?>
		<?php include('modal_connexion.php'); ?>
		<!-- Modals include fin-->

		

		<!-- desktop menu start here -->
		<header class="header-section">
			<div class="header-top">
				<div class="container">
					<div class="row justify-content-center align-items-center">
						<div class="col-lg-5 col-12">
							<div class="logo py-2">
								<a href="/"><img src="../public/assets/images/logo/01.png" alt="logo"></a>
							</div>
						</div>
						<div class="col-lg-7 col-12">
							<div class="ht-left">
								<ul class="lab-ul d-flex flex-wrap justify-content-end">
									<li class="d-flex flex-wrap align-items-center">
										<div class="ht-add-thumb mr-2">
											<img src="../public/assets/images/header/01.png" alt="address">
										</div>
										<div class="ht-add-content">
											<span>AGOUE</span>
											<span class="d-block text-bold">Frontière TOGO BENIN</span>
										</div>
									</li>
									<li class="d-flex flex-wrap align-items-center">
										<div class="ht-add-thumb mr-2">
											<img src="../public/assets/images/header/02.png" alt="email">
										</div>
										<div class="ht-add-content">
											<span>Envoyer Mail </span>
											<span class="d-block text-bold">nazifi@gmail.com</span>
										</div>
									</li>
									<li class="d-flex flex-wrap align-items-center">
										<div class="ht-add-thumb mr-2">
											<img src="../public/assets/images/header/03.png" alt="call">
										</div>
										<div class="ht-add-content">
											<span>Tel : </span>
											<span class="d-block text-bold">+229 62130072</span>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--<?php include('../admin/view/error_success.php'); ?>-->

			<div class="header-bottom bg-theme">
				<div class="header-area">
					<div class="container">
						<div class="primary-menu">
							<div class="main-area w-100">
								<div class="main-menu d-flex flex-wrap align-items-center justify-content-between w-100">
									<div class="logo">
										<a href="index.php"><img src="../public/assets/images/logo/02.png" alt="logo"></a>
									</div>
									<ul class="lab-ul">



										<li>
											<a href="#0">Boutique</a>
											<ul class="lab-ul">
												<li><a href="product-page.php">Produits</a></li>
												<li><a href="product-single.php">Détails Produit</a></li>
												<li><a href="cart-page.php">Panier</a></li>
											</ul>
										</li>
										<li><a href="../contact.php">Contact</a></li>
										<li>
											<a href="#0">Se Connecter</a>
											<ul class="lab-ul">
												<li><a href="partials/inscription.php">Inscription</a></li>
												<li><a href="partials/connexion.php">Connection</a></li>
												
											</ul>
										</li>
										<li>
										<?php
											session_start();
													if(!empty($_SESSION['email'])){
														echo '<a href="../views/destroy.php">Déconnexion</button>';
													}
													
													
											?>
										</li>

										
									</ul>
									<ul class="lab-ul search-cart">
										<li>
											<div class="cart-option">
												<i class="icofont-cart-alt"></i>
												<div class="cart-content">
													<div  id='previewCart'>

													</div>
													<div class="cart-bottom">
														<div class="cart-subtotal">
															<p>Total: <b class="float-right"><span id="price"></span></b></p>
														</div>
														<div class="cart-action">
															<a href="#" class="lab-btn"><span>Voir le panier</span></a>
															<a href="#" class="lab-btn"><span>Sortir</span></a>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="search-option">
												<i class="icofont-search-2"></i>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- desktop menu ending here -->

		<!-- Page Header Section Start Here -->
		<section class="page-header bg_img padding-tb">
			<div class="overlay"></div>
			<div class="container">
				<div class="page-header-content-area">
					<h4 class="ph-title">Boutique de la ferme avicole</h4>
					<ul class="lab-ul">
						<li><a href="home.php">Accueil</a></li>
						<li><a class="active">Panier d'achat</a></li>
					</ul>
				</div>
			</div>
		</section>
		<!-- Page Header Section Ending Here -->

		<!-- Shop Cart Page Section start here -->
		<div class="shop-cart padding-tb">
			<div class="container">
				<div class="section-wrapper mb-15">
					<div class="cart-top">
						<table>
							<thead>
								<tr>
									<th>Produit</th>
									<th>Prix</th>
									<th>Quantité</th>
									<th>Prix Total</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody id="cartTable">
								
								<!--tbody dans le script-->

								
								
							
							</tbody>
							
						</table>
						<button class="lab-btn" id="pay-btn" onclick="feda()">Payer</button>
					</div>
					<div class="cart-bottom">
					
						<div class="shiping-box">
							<div class="row">
								<div class="col-md-6 col-12">
									
								</div>
								<div class="col-md-6 col-12">
									<div class="cart-overview">
										<h4>Totaux du panier</h4>
										<ul>
											<li>
												<span class="pull-left">Sous-total du panier</span>
												<p class="pull-right" id="tprice"></p>
											</li>
											<li>
												<span class="pull-left">Expédition et manutention</span>
												<p class="pull-right">Livraison gratuite</p>
											</li>
											<!--<li>
												<span class="pull-left">Commande Total</span>
												<p class="pull-right">$ 2940.00</p>
											</li> -->
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="cart-checkout-box">
							
								<input type="text" id="livraison" placeholder="Entrer le lieu de livraison" class="text">
													
							
								<button  class="lab-btn" onclick="send_order()" name="envoie">Envoyer la commande</button>

						
						
						</div>

					</div>
				</div>
			</div>
		</div>
		<!-- Shop Cart Page Section ending here -->

		<!-- footer section start here -->
		<footer>
			<div class="footer-top relative padding-tb bg-ash relative">
				<div class="shape-images">
					<img src="../public/assets/images/shape-img/01.png" alt="shape-images">
				</div>
				<div class="container">
					<div class="section-wrapper row">
						<div class="col-xl-3 col-md-6">
							<div class="post-item">
								<div class="footer-logo">
									<img src="../public/assets/images/logo/01.png" alt="footer-logo">
								</div>
								<p>Personnalisez facilement les services web en agrégeant sans friction l'internet sans personnaliser commodément. </p>
								<p>Développer avec enthousiasme des technologies synergiques pour tirer rapidement parti de la technologie.</p>
							</div>
						</div>
						<div class="col-xl-3 col-md-6">
							<div class="post-item">
								<div class="post-title">
									<h5>Garder le contact</h5>
								</div>
								<ul class="lab-ul footer-location">
									<li>
										<div class="icon-part">
											<i class="icofont-phone"></i>
										</div>
										<div class="content-part">
											<p>+22962130072</p>
											<p>+22996218474</p>
										</div>
									</li>
									<li>
										<div class="icon-part">
											<i class="icofont-wall-clock"></i>
										</div>
										<div class="content-part">
											<p>Mon - Fri 09:00 - 18:00</p>
											<p>(except public holidays)</p>
										</div>
									</li>
									<li>
										<div class="icon-part">
											<i class="icofont-location-pin"></i>
										</div>
										<div class="content-part">
											<p>25/2 Lane2 Vokte Street Building <br>Melborn City</p>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-xl-3 col-md-6">
							<div class="post-item">
								<div class="post-title">
									<h5>Produits de l'élevage de volailles</h5>
								</div>
								<div class="lab-ul footer-post">
									<div class="media mb-3">
										<div class="fp-thumb mr-3">
											<img src="../public/assets/images/products/product/01.png" alt="recent-post">
										</div>
										<div class="media-body">
											<a href="#">
												<h6 class="mt-0">Œufs marron clair</h6>
											</a>
											<span class="price">$25.99</span>
										</div>
									</div>
									<div class="media mb-3">
										<div class="fp-thumb mr-3">
											<img src="../public/assets/images/products/product/02.png" alt="recent-post">
										</div>
										<div class="media-body">
											<a href="#">
												<h6 class="mt-0">Petit poulet grillagé</h6>
											</a>
											<span class="price">$25.99</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-6">
							<div class="post-item">
								<div class="post-title">
									<h5>Instagram Alimentation</h5>
								</div>
								<div class="lab-ul footer-gellary">
									<figure class="figure">
										<a href="../public/assets/images/gallery/01.jpg" data-rel="lightcase:myCollection:slideshow"><img src="../public/assets/images/gallery/01.jpg" class="img-fluid rounded" alt="footer-gellary"></a>
									</figure>
									<figure class="figure">
										<a href="../public/assets/images/gallery/02.jpg" data-rel="lightcase:myCollection:slideshow"><img src="../public/assets/images/gallery/02.jpg" class="img-fluid rounded" alt="footer-gellary"></a>
									</figure>
									<figure class="figure">
										<a href="../public/assets/images/gallery/03.jpg" data-rel="lightcase:myCollection:slideshow"><img src="../public/assets/images/gallery/03.jpg" class="img-fluid rounded" alt="footer-gellary"></a>
									</figure>
									<figure class="figure">
										<a href="../public/assets/images/gallery/04.jpg" data-rel="lightcase:myCollection:slideshow"><img src="../public/assets/images/gallery/04.jpg" class="img-fluid rounded" alt="footer-gellary"></a>
									</figure>
									<figure class="figure">
										<a href="../public/assets/images/gallery/05.jpg" data-rel="lightcase:myCollection:slideshow"><img src="../public/assets/images/gallery/05.jpg" class="img-fluid rounded" alt="footer-gellary"></a>
									</figure>
									<figure class="figure">
										<a href="../public/assets/images/gallery/06.jpg" data-rel="lightcase:myCollection:slideshow"><img src="../public/assets/images/gallery/06.jpg" class="img-fluid rounded" alt="footer-gellary"></a>
									</figure>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="container">
					<div class="section-wrapper">
						<p class="text-center">&copy; 2023 <a href="home.php">Ferme avicole</a>.Tous droits réservés par <a href="https://themeforest.net/user/labartisan" target="_blank">AgroFarm</a></p>
					</div>
				</div>
			</div>
		</footer>
		<!-- footer section start here -->

		<!-- scrollToTop start here -->
		<a href="#" class="scrollToTop"><i class="icofont-swoosh-up"></i><span class="pluse_1"></span><span class="pluse_2"></span></a>
		<!-- scrollToTop ending here -->


		<script src="../public/assets/js/jquery.js"></script>
		<script src="../public/assets/js/fontawesome.min.js"></script>
		<script src="../public/assets/js/waypoints.min.js"></script>
		<script src="../public/assets/js/bootstrap.min.js"></script>
		<script src="../public/assets/js/swiper.min.js"></script>
		<script src="../public/assets/js/script.js"></script>
		<script src="../public/assets/js/jquery.countdown.min.js"></script>
		<script src="../public/assets/js/jquery.counterup.min.js"></script>
		<script src="../public/assets/js/isotope.pkgd.min.js"></script>
		<script src="../public/assets/js/lightcase.js"></script>
		<script src="../public/assets/js/functions.js"></script>
		


		<script>
			function click()
			{
				setTimeout(() => {
					simulateClick('.lab-ul li:nth-child(2) a[data-target="#Modal2"]');
				}, 1000);
			}
			 
			function simulateClick(targetSelector) 
			{
									const targetLink = document.querySelector(targetSelector);
									if (targetLink) {
									  const event = new MouseEvent('click', 
									  {
										view: window,
										bubbles: true,
										cancelable: true
									  });
									  targetLink.dispatchEvent(event);
									}
			}
		</script>
		<script> 

				
		</script>


	</body>

<!-- Mirrored from labartisan.net/demo/PoultryFarm/poultry-farm/cart-page.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Mar 2023 16:31:29 GMT -->
</html>