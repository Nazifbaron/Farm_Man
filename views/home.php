<?php
	require_once "../views/partials/entete.php";
	require_once "../admin/model/function.php";
?>
		<!-- desktop menu ending here -->

		<!-- Banner Section Start Here -->
		<section class="banner">
			<div class="banner-slider">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="banner-slider-part"
							style="background-image: url(../public/assets/images/banner/bg-images/01.jpg);">
							<div class="overlay"></div>
							<div class="container">
								<div class="row flex-row-reverse justify-content-center align-items-center">
									<div class="col-12">
										<div class="banner-content">
											<h1 class="banner-title"><B class="d-lg-block">Volaille fraîchement abattue </B>
												Poulets, viandes de gibier spécialisées, œufs et plus encore !!! </h1>
											<a href="#" class="lab-btn"><span>DÉCOUVRIR MAINTENANT</span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="banner-slider-part"
							style="background-image: url(../public/assets/images/banner/bg-images/02.jpg);">
							<div class="overlay"></div>
							<div class="container">
								<div class="row flex-row-reverse justify-content-center align-items-center">
									<div class="col-12">
										<div class="banner-content">
											<h1 class="banner-title"><B class="d-lg-block">Volaille fraîchement abattue</B>
												Poulets, viandes de gibier spécialisées, œufs et plus encore !!! </h1>
											<a href="#" class="lab-btn"><span>DÉCOUVRIR MAINTENANT</span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="banner-slider-part"
							style="background-image: url(../public/assets/images/banner/bg-images/01.jpg);">
							<div class="overlay"></div>
							<div class="container">
								<div class="row flex-row-reverse justify-content-center align-items-center">
									<div class="col-12">
										<div class="banner-content">
											<h1 class="banner-title"><B class="d-lg-block">Volaille fraîchement abattue</B>
												Poulets, viandes de gibier spécialisées, œufs et plus encore !!! </h1>
											<a href="#" class="lab-btn"><span>DÉCOUVRIR MAINTENANT</span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-pagination"></div>
			</div>
		</section>
		<!-- Banner Section Ending Here -->

		<!-- about section start here -->
		<section class="about-section relative padding-tb">
			<div class="container">
				<div class="row align-items-center mb-15">
					<div class="col-lg-6 col-12">
						<div class="about-thumb">
							<img src="../public/assets/images/about/01.png" alt="about-thumb">
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="about-wrapper p-0">
							<div class="about-title">
								<h2><span class="d-lg-block"> Bienvenue sur notre site de volaille et de </span>Ferme d'élevage d'œufs.</h2>
								<p>Produire en permanance un produit d'une qualité convaincante, rempli de tout ce qui les enthousiasme.
									 Mise en place du site web et création de pages.</p>
							</div>
							<div class="about-content">
								<ul class="lab-ul list-group">
									<li class="list-group-item py-1 px-0 border-none">
										<i class="icofont-tick-boxed mr-2 color-theme"></i>Nous fournissons différents services
									</li>
									<li class="list-group-item py-1 px-0 border-none">
										<i class="icofont-tick-boxed mr-2 color-theme"></i>Nous sommes l'une des principales entreprises
									</li>
									<li class="list-group-item py-1 px-0 border-none">
										<i class="icofont-tick-boxed mr-2 color-theme"></i>La rentabilité est l'objectif premier de toute entreprise
									</li>
									<li class="list-group-item py-1 px-0 border-none">
										<i class="icofont-tick-boxed mr-2 color-theme"></i>Apprenez à développer votre entreprise
									</li>
									<li class="list-group-item py-1 px-0 border-none">
										<i class="icofont-tick-boxed mr-2 color-theme"></i>Professional solutions for your business
									</li>
								</ul>
								<a href="#" class="lab-btn mt-4"><span>Lire la Suite</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- about section ending here -->

		<!-- product category section start here -->
		<section class="product-section relative padding-tb bg-ash">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-header">
							<h3>Produits de la ferme Avicole</h3>
							<p>Personnaliser facilement les services web proactifs pour les interfaces utilisées 
								sans avoir besoin d'un système d'information global. </p>
						</div>
					</div>
					<div class="col-12">
						<div class="section-wrapper">
							<div class="row justify-content-center">
							<?php
                      $produits = getProduit();

                      if(!empty($produits) && is_array($produits))
                      {
                     foreach($produits as $key => $value){ 
                        ?>
							
								<div class="col-xl-3 col-lg-4 col-sm-6 col-12">
									<div class="card mb-4 text-center bg-ash border-none relative">
										<div class="addcart-overlay">
											<div class="addcart-content">
												<div class="addcart-icon">
													<a href="#"><i class="far fa-heart"></i></a>
													<a href="#"><i class="fas fa-sync-alt"></i></a>
													<a href="../public/assets/images/product/01.php" data-rel="lightcase"><i class="fas fa-search"></i></a>
												</div>
												<a href="#" class="lab-btn d-inline-b" data-toggle="modal">Ajouter au panier</a>
											</div>
										</div>
										<img src="../admin/<?=$value['images']?>" class="card-img-top mb-2"
											alt="product">
										<div class="card-body">
											<div class="rating mb-2">
												<span><a href="#"><i class="far fa-star"></i></a></span>
												<span><a href="#"><i class="far fa-star"></i></a></span>
												<span><a href="#"><i class="far fa-star"></i></a></span>
												<span><a href="#"><i class="far fa-star"></i></a></span>
												<span><a href="#"><i class="far fa-star"></i></a></span>
											</div>
											<a href="#">
												<h6 class="card-title"><?=$value['nom']?></h6>
											</a>
											<h6 class="product-price"> <span class="d-price"><?=$value['prix']?></span> <del>$49.99</del>
											</h6>
										</div>
									</div>
								</div>
								<?php             
                            }
                        }
                     ?>
							
							</div>
							<div class="text-center mt-3">
								<a href="#" class="lab-btn"><span>Acheter</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		
		</section>
		<!-- product category section ending here -->

		<!-- service section start here -->
		<section class="service-section padding-tb">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-header">
							<h3>Services d'Elevage de Volailles</h3>
							<p>Personnaliser facilement les services web proactifs pour les interfaces utilisées 
								sans avoir besoin d'un système d'information globa </p>
						</div>
					</div>
					<div class="col-12">
						<div class="service-content">
							<div class="row">
								<div class="col-lg-4 col-md-6">
									<div class="lab-item service-item">
										<div class="lab-inner p-4 mb-4 text-left">
											<div class="service-top d-flex align-items-center mb-4">
												<div class="st-thumb mr-3">
													<img src="../public/assets/images/service/01.png" alt="service image">
												</div>
												<div class="st-content mt-2">
													<a href="#">
														<h6>Œuf de Remplacement</h6>
													</a>
												</div>
											</div>
											<div class="service-bottom">
												<p>Agréger continuellement des enthousiasmes frictionnels, générer des portails 
													conviviaux, responsabiliser sans résultats globaux.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">
									<div class="lab-item service-item">
										<div class="lab-inner p-4 mb-4 text-left">
											<div class="service-top d-flex align-items-center mb-4">
												<div class="st-thumb mr-3">
													<img src="../public/assets/images/service/02.png" alt="service image">
												</div>
												<div class="st-content mt-2">
													<a href="#">
														<h6>Cages à Volailles</h6>
													</a>
												</div>
											</div>
											<div class="service-bottom">
												<p>Agréger continuellement des enthousiasmes frictionnels, générer des portails conviviaux, 
													responsabiliser sans résultats globaux.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">
									<div class="lab-item service-item">
										<div class="lab-inner p-4 mb-4 text-left">
											<div class="service-top d-flex align-items-center mb-4">
												<div class="st-thumb mr-3">
													<img src="../public/assets/images/service/03.png" alt="service image">
												</div>
												<div class="st-content mt-2">
													<a href="#">
														<h6>Gestion des Eleveurs</h6>
													</a>
												</div>
											</div>
											<div class="service-bottom">
												<p>Agréger continuellement des enthousiasmes frictionnels, 
													générer des portails conviviaux, responsabiliser sans résultats globaux.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">
									<div class="lab-item service-item">
										<div class="lab-inner p-4 mb-4 text-left">
											<div class="service-top d-flex align-items-center mb-4">
												<div class="st-thumb mr-3">
													<img src="../public/assets/images/service/04.png" alt="service image">
												</div>
												<div class="st-content mt-2">
													<a href="#">
														<h6>Climat de la volaille</h6>
													</a>
												</div>
											</div>
											<div class="service-bottom">
												<p>Agréger continuellement des enthousiasmes frictionnels, 
													générer des portails conviviaux, responsabiliser sans résultats globaux.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">
									<div class="lab-item service-item">
										<div class="lab-inner p-4 mb-4 text-left">
											<div class="service-top d-flex align-items-center mb-4">
												<div class="st-thumb mr-3">
													<img src="../public/assets/images/service/05.png" alt="service image">
												</div>
												<div class="st-content mt-2">
													<a href="#">
														<h6>Traitement Des Résidus</h6>
													</a>
												</div>
											</div>
											<div class="service-bottom">
												<p>Agréger continuellement des enthousiasmes frictionnels, générer des portails conviviaux, 
													responsabiliser sans résultats globaux.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">
									<div class="lab-item service-item">
										<div class="lab-inner p-4 mb-4 text-left">
											<div class="service-top d-flex align-items-center mb-4">
												<div class="st-thumb mr-3">
													<img src="../public/assets/images/service/06.png" alt="service image">
												</div>
												<div class="st-content mt-2">
													<a href="#">
														<h6>Traitement de l'air vicié</h6>
													</a>
												</div>
											</div>
											<div class="service-bottom">
												<p>Agréger continuellement des enthousiasmes frictionnels, générer des portails conviviaux, 
													responsabiliser sans résultats globaux.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</section>
		<!-- service section ends here -->

		<!-- Gallery section start here -->
		<section class="gallery-section padding-tb bg-ash">
			<div class="container-fluid p-0 m-0">
				<div class="row">
					<div class="col-12">
						<div class="section-header">
							<h3>Galerie de la ferme avicole</h3>
							<p>Personnaliser facilement les services web proactifs pour les interfaces utilisées 
								sans avoir besoin d'un système d'information global </p>
						</div>
					</div>
					<div class="col-12">
						<div class="gallery-content">
							<div class="gallery-grid text-center">
								<a href="../public/assets/images/gallery/01.jpg" data-rel="lightcase:myCollection:slideshow" class="grid-image">
									<img src="../public/assets/images/gallery/01.jpg" alt="gallery-image">
								</a>
								<a href="../public/assets/images/gallery/02.jpg" data-rel="lightcase:myCollection:slideshow" class="grid-image">
									<img src="../public/assets/images/gallery/02.jpg" alt="gallery-image">
								</a>
								<a href="../public/assets/images/gallery/03.jpg" data-rel="lightcase:myCollection:slideshow" class="grid-image">
									<img src="../public/assets/images/gallery/03.jpg" alt="gallery-image">
								</a>
								<a href="../public/assets/images/gallery/04.jpg" data-rel="lightcase:myCollection:slideshow" class="grid-image">
									<img src="../public/assets/images/gallery/04.jpg" alt="gallery-image">
								</a>
								<a href="../public/assets/images/gallery/05.jpg" data-rel="lightcase:myCollection:slideshow" class="grid-image">
									<img src="../public/assets/images/gallery/05.jpg" alt="gallery-image">
								</a>
								<a href="../public/assets/images/gallery/06.jpg" data-rel="lightcase:myCollection:slideshow" class="grid-image">
									<img src="../public/assets/images/gallery/06.jpg" alt="gallery-image">
								</a>
								<a href="../public/assets/images/gallery/07.jpg" data-rel="lightcase:myCollection:slideshow" class="grid-image">
									<img src="../public/assets/images/gallery/07.jpg" alt="gallery-image">
								</a>
								<a href="../public/assets/images/gallery/08.jpg" data-rel="lightcase:myCollection:slideshow" class="grid-image">
									<img src="../public/assets/images/gallery/08.jpg" alt="gallery-image">
								</a>
							</div>
							<div class="gallery-btn text-center mt-5">
								<a href="#" class="lab-btn"><span>Galerie de chargement</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Gallery section ends here -->

		<!-- team section start here -->
		<section class="team-section padding-tb">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-header">
							<h3>Notre membre de l'équipe</h3>
							<p>Personnaliser facilement les services web proactifs pour les interfaces utilisées 
								sans avoir besoin d'un système d'information global </p>
						</div>
					</div>
					<div class="col-12">
						<div class="section-wrapper">
							<div class="row justify-content-center">
								<div class="col-xl-3 col-lg-4 col-sm-6 col-12">
									<div class="card mb-4 text-center border-none">
										<img src="../public/assets/images/team/01.jpg" class="card-img-top" alt="product">
										<div class="card-body">
											<a href="#">
												<h6 class="card-title mb-0">Jason Roy</h6>
											</a>
											<p class="card-text mb-2">Gestionnaire</p>
											<div class="social-share">
												<a href="#" class="m-1 twitter"><i class="icofont-twitter"></i></a>
												<a href="#" class="m-1 behance"><i class="icofont-behance"></i></a>
												<a href="#" class="m-1 instagram"><i class="icofont-instagram"></i></a>
												<a href="#" class="m-1 vimeo"><i class="icofont-vimeo"></i></a>
												<a href="#" class="m-1 linkedin"><i class="icofont-linkedin"></i></a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-4 col-sm-6 col-12">
									<div class="card mb-4 text-center border-none">
										<img src="../public/assets/images/team/02.jpg" class="card-img-top" alt="product">
										<div class="card-body">
											<a href="#">
												<h6 class="card-title mb-0">Sahjahan Sagor</h6>
											</a>
											<p class="card-text mb-2">Fondateur et Directeur Général</p>
											<div class="social-share">
												<a href="#" class="m-1 twitter"><i class="icofont-twitter"></i></a>
												<a href="#" class="m-1 behance"><i class="icofont-behance"></i></a>
												<a href="#" class="m-1 instagram"><i class="icofont-instagram"></i></a>
												<a href="#" class="m-1 vimeo"><i class="icofont-vimeo"></i></a>
												<a href="#" class="m-1 linkedin"><i class="icofont-linkedin"></i></a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-4 col-sm-6 col-12">
									<div class="card mb-4 text-center border-none">
										<img src="../public/assets/images/team/03.jpg" class="card-img-top" alt="product">
										<div class="card-body">
											<a href="#">
												<h6 class="card-title mb-0">Alisha Kabir</h6>
											</a>
											<p class="card-text mb-2">Responsable Marketing</p>
											<div class="social-share">
												<a href="#" class="m-1 twitter"><i class="icofont-twitter"></i></a>
												<a href="#" class="m-1 behance"><i class="icofont-behance"></i></a>
												<a href="#" class="m-1 instagram"><i class="icofont-instagram"></i></a>
												<a href="#" class="m-1 vimeo"><i class="icofont-vimeo"></i></a>
												<a href="#" class="m-1 linkedin"><i class="icofont-linkedin"></i></a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-4 col-sm-6 col-12">
									<div class="card mb-4 text-center border-none">
										<img src="../public/assets/images/team/04.jpg" class="card-img-top" alt="product">
										<div class="card-body">
											<a href="#">
												<h6 class="card-title mb-0">Jeson Smith</h6>
											</a>
											<p class="card-text mb-2">Agriculteur</p>
											<div class="social-share">
												<a href="#" class="m-1 twitter"><i class="icofont-twitter"></i></a>
												<a href="#" class="m-1 behance"><i class="icofont-behance"></i></a>
												<a href="#" class="m-1 instagram"><i class="icofont-instagram"></i></a>
												<a href="#" class="m-1 vimeo"><i class="icofont-vimeo"></i></a>
												<a href="#" class="m-1 linkedin"><i class="icofont-linkedin"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- team section ending here -->

		<!-- testimonial Section start here -->
		<section class="testimonial-section padding-tb bg-ash">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-header">
							<h3>Ce que disent les clients Notre ferme avicole</h3>
							<p>Personnaliser facilement les services web proactifs pour les interfaces utilisées 
								sans avoir besoin d'un système d'information global </p>
						</div>
					</div>
					<div class="col-12">
						<div class="testimonial-content">
							<div class="row">
								<div class="col-lg-4 col-12">
									<div class="lab-item testi-item-2 mb-3">
										<div class="lab-inner">
											<div class="testi-top">
												<div class="testi-t-thumb">
													<img src="../public/assets/images/testimonial/01.jpg" alt="author-image">
												</div>
												<div class="testi-t-content">
													<a href="#">
														<h6>Jeson smith</h6>
													</a>
													<p>Fondateur et PDG</p>
													<div class="rating">
														<span><a href="#"><i class="far fa-star"></i></a></span>
														<span><a href="#"><i class="far fa-star"></i></a></span>
														<span><a href="#"><i class="far fa-star"></i></a></span>
														<span><a href="#"><i class="far fa-star"></i></a></span>
														<span><a href="#"><i class="far fa-star"></i></a></span>
													</div>
												</div>
											</div>
											<div class="testi-bottom">
												<p><img class="q1" src="../public/assets/images/testimonial/q1.png" alt='"'>
													Continuellement conceptualiser des initiatives
													techniques professionnelles pour les monétiser, 
													tester des fonctionnalités professionnelles activées 
													par le commerce électronique en Turquie.
													<img class="q2" src="../public/assets/images/testimonial/q2.png" alt='"'>
												</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-12">
									<div class="lab-item testi-item-2 mb-3">
										<div class="lab-inner">
											<div class="testi-top">
												<div class="testi-t-thumb">
													<img src="../public/assets/images/testimonial/02.jpg" alt="author-image">
												</div>
												<div class="testi-t-content">
													<a href="#">
														<h6>Sahjahan Sagor</h6>
													</a>
													<p>Fondateur et PDG</p>
													<div class="rating">
														<span><a href="#"><i class="far fa-star"></i></a></span>
														<span><a href="#"><i class="far fa-star"></i></a></span>
														<span><a href="#"><i class="far fa-star"></i></a></span>
														<span><a href="#"><i class="far fa-star"></i></a></span>
														<span><a href="#"><i class="far fa-star"></i></a></span>
													</div>
												</div>
											</div>
											<div class="testi-bottom">
												<p><img class="q1" src="../public/assets/images/testimonial/q1.png" alt='"'>
													Continuellement conceptualiser des initiatives 
													techniques professionnelles pour les monétiser, 
													tester des fonctionnalités professionnelles activées 
													par le commerce électronique en Turquie.
													<img class="q2" src="../public/assets/images/testimonial/q2.png" alt='"'>
												</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-12">
									<div class="lab-item testi-item-2 mb-3">
										<div class="lab-inner">
											<div class="testi-top">
												<div class="testi-t-thumb">
													<img src="../public/assets/images/testimonial/03.jpg" alt="author-image">
												</div>
												<div class="testi-t-content">
													<a href="#">
														<h6>Alisha Kabir</h6>
													</a>
													<p>Fondateur et PDG</p>
													<div class="rating">
														<span><a href="#"><i class="far fa-star"></i></a></span>
														<span><a href="#"><i class="far fa-star"></i></a></span>
														<span><a href="#"><i class="far fa-star"></i></a></span>
														<span><a href="#"><i class="far fa-star"></i></a></span>
														<span><a href="#"><i class="far fa-star"></i></a></span>
													</div>
												</div>
											</div>
											<div class="testi-bottom">
												<p><img class="q1" src="../public/assets/images/testimonial/q1.png" alt='"'>
													Continuellement conceptualiser des initiatives
													techniques professionnelles pour les monétiser, 
													tester des fonctionnalités professionnelles activées 
													par le commerce électronique en Turquie.
													<img class="q2" src="../public/assets/images/testimonial/q2.png" alt='"'>
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- testimonial Section end here -->

		<!-- blog section start here -->
		<section class="blog-section relative padding-tb">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-header">
							<h3>Nos Dernières Nouvelles</h3>
							<p>Personnaliser facilement les services web proactifs pour les interfaces utilisées sans avoir
								 besoin d'un système d'information global</p>
						</div>
					</div>
					<div class="col-12">
						<div class="section-wrapper">
							<div class="row justify-content-center">
								<div class="col-lg-4 col-sm-6 col-12">
									<div class="card border-none">
										<img src="../public/assets/images/blog/01.jpg" class="card-img-top" alt="blog">
										<div class="card-body p-1 mt-3">
											<a href="#">
												<h6 class="card-title">Des canetons pour lutter contre l'obésité...</h6>
											</a>
											<p class="card-text mb-3">Personnalisez commodément des services web proactifs sans Globalement. 
												oe-enablfunctaizede-come rce Onceptualiser les initiatives techniques.</p>
											<div class="text-btn">
												<a href="blog-single.php"><span>Lire la suite</span></a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-sm-6 col-12">
									<div class="card border-none">
										<img src="../public/assets/images/blog/02.jpg" class="card-img-top" alt="blog">
										<div class="card-body p-1 mt-3">
											<a href="#">
												<h6 class="card-title">Les œufs seront-ils une nouvelle source de médicaments contre le cancer ?...</h6>
											</a>
											<p class="card-text mb-3">Personnalisez facilement des services web proactifs sans recourir à une approche globale. Conceptualisez des initiatives techniques pour activer la fonctionnalité e-commerce.</p>
											<div class="text-btn">
												<a href="blog-single.php"><span>Lire la suite</span></a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-sm-6 col-12">
									<div class="card border-none">
										<img src="../public/assets/images/blog/03.jpg" class="card-img-top" alt="blog">
										<div class="card-body p-1 mt-3">
											<a href="#">
												<h6 class="card-title">Les oméga-3 du poulet et de l'œuf peuvent réduire les risques de crise cardiaque ...</h6>
											</a>
											<p class="card-text mb-3">Personnalisez facilement des services web proactifs sans recourir à une approche globale. Conceptualisez des initiatives techniques pour activer la fonctionnalité e-commerce.</p>
											<div class="text-btn">
												<a href="blog-single.php">Lire la suite<span></span></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- blog section ending here -->

		<!-- sponsor section start here -->
		<div class="sponsor-section padding-tb bg-ash">
			<div class="container">
				<div class="section-wrapper">
					<div class="sponsor-slider">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="sponsor-item">
									<div class="sponsor-thumb">
										<a href="#"><img src="../public/assets/images/sponsor/01.png" alt="sponsor"></a>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="sponsor-item">
									<div class="sponsor-thumb">
										<a href="#"><img src="../public/assets/images/sponsor/02.png" alt="sponsor"></a>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="sponsor-item">
									<div class="sponsor-thumb">
										<a href="#"><img src="../public/assets/images/sponsor/03.png" alt="sponsor"></a>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="sponsor-item">
									<div class="sponsor-thumb">
										<a href="#"><img src="assets/images/sponsor/04.png" alt="sponsor"></a>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="sponsor-item">
									<div class="sponsor-thumb">
										<a href="#"><img src="../public/assets/images/sponsor/05.png" alt="sponsor"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- sponsor section ending here -->
		<!-- Feature section start here -->
		<section class="feature-section padding-tb">
			<div class="container">
				<div class="row text-center justify-content-center">
					<div class="col-lg-3 col-sm-6 col-12">
						<div class="lab-item">
							<div class="lab-inner">
								<div class="lab-thumb">
									<img src="../public/assets/images/feature/01.png" alt="Feature Image">
								</div>
								<div class="lab-content">
									<h6>Gamme de produits</h6>
									<p>Personnaliser de manière pratique recaptiualiser l'information ciblée sans avoir recours à l'échelle mondiale </p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 col-12">
						<div class="lab-item">
							<div class="lab-inner">
								<div class="lab-thumb">
									<img src="../public/assets/images/feature/02.png" alt="Feature image">
								</div>
								<div class="lab-content">
									<h6>La qualité compte</h6>
									<p>Personnaliser de manière pratique recaptiualiser l'information ciblée sans 
										avoir recours à l'échelle mondiale </p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 col-12">
						<div class="lab-item">
							<div class="lab-inner">
								<div class="lab-thumb">
									<img src="../public/assets/images/feature/03.png" alt="Feature image">
								</div>
								<div class="lab-content">
									<h6>Livraison gratuite</h6>
									<p>Personnaliser de manière pratique recaptiualiser l'information ciblée sans avoir recours à l'échelle mondiale </p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 col-12">
						<div class="lab-item">
							<div class="lab-inner">
								<div class="lab-thumb">
									<img src="assets/images/feature/04.png" alt="Feature image">
								</div>
								<div class="lab-content">
									<h6>Satisfaction des clients</h6>
									<p>Personnaliser de manière pratique recaptiualiser l'information ciblée sans avoir recours à l'échelle mondiale </p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Feature section ending here -->

		<!-- footer section start here -->
		
<!-- Mirrored from labartisan.net/demo/PoultryFarm/poultry-farm/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Mar 2023 16:31:10 GMT -->
</php>
<?php
	require_once "../views/partials/footer.php";
?>
