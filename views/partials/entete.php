<!DOCTYPE html>
	<html lang="en">

	<!-- Mirrored from labartisan.net/demo/PoultryFarm/poultry-farm/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Mar 2023 16:30:41 GMT -->

	<head>
		<title>Elevage de Volaille</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- google fonts -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
		<link rel="shortcut icon" type="image/x-icon" href="assets/images/x-icon/01.png">

		<link rel="stylesheet" href="../public/assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="../public/assets/css/icofont.min.css">
		<link rel="stylesheet" href="../public/assets/css/all.min.css">
		<link rel="stylesheet" href="../public/assets/css/animate.css">
		<link rel="stylesheet" href="../public/assets/css/lightcase.css">
		<link rel="stylesheet" href="../public/assets/css/swiper.min.css">
		<link rel="stylesheet" href="../public/assets/css/style.css">
		<link rel="stylesheet" href="../admin/dist/css/styles.css">
		


	</head>

	<body onclick="showCartPreview()">

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
					<a href="#"><img src="../public/assets/images/logo/01.png" alt="logo"></a>
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
								<a href="/"><img src="../public/assets/images/logo/03.png" alt="logo" max-height="30px"></a>
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
											<span class="d-block text-bold">poultryfarm229@gmail.com</span>
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
										<a href="home.php"><img src="../public/assets/images/logo/02.png" alt="logo"></a>
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
										<li>
											<a href="#0">Gallery</a>
											<ul class="lab-ul">
												<li><a href="gallery-1.php">Gallery 1</a></li>

											</ul>
										</li>
										<li><a href="contact.php">Contact</a></li>
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
															<a href="#" class="lab-btn"><span>View Cart</span></a>
															<a href="#" class="lab-btn"><span>Check Out</span></a>
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