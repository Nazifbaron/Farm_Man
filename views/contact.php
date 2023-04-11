<?php
	require_once "app/core/views/partials/entete.php";
?>
		<!-- desktop menu ending here -->

		<!-- Page Header Section Start Here -->
		<section class="page-header bg_img padding-tb">
			<div class="overlay"></div>
			<div class="container">
				<div class="page-header-content-area">
					<h4 class="ph-title">Poultry Farm Contact us</h4>
					<ul class="lab-ul">
						<li><a href="index.html">Home</a></li>
						<li><a class="active">Contact us</a></li>
					</ul>
				</div>
			</div>
		</section>
		<!-- Page Header Section Ending Here -->

		<!-- Contact Us Section Start Here -->
		<div class="contact-section padding-tb">
			<div class="container">
				<div class="contac-top">
					<div class="row justify-content-center">
						<div class="col-xl-4 col-lg-6 col-12">
							<div class="contact-item">
								<div class="contact-icon">
									<i class="icofont-google-map"></i>
								</div>
								<div class="contact-details">
									<p>Sector # 48,123 Street,Melbourn City Australia.</p>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-lg-6 col-12">
							<div class="contact-item">
								<div class="contact-icon">
									<i class="icofont-phone"></i>
								</div>
								<div class="contact-details">
									<p>+88978-658-125, 0078-98-954 012-859-6510003</p>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-lg-6 col-12">
							<div class="contact-item">
								<div class="contact-icon">
									<i class="icofont-envelope"></i>
								</div>
								<div class="contact-details">
									<p>poultryfarm@gmail.com www.poultryfarm.com</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="contac-bottom">
					<div class="row justify-content-center">
						<div class="col-lg-6 col-12">
							<div class="location-map">
								<div id="map">
									<iframe
										src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2171.6233168549234!2d90.38618271679425!3d23.739514243490834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b85c71927841%3A0xde102c300beb3f0c!2sWebCode%20Institute!5e0!3m2!1sen!2sbd!4v1605551468163!5m2!1sen!2sbd"
										allowfullscreen=""></iframe>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-12">
							<div class="contact-form">
								<form action="#" method="POST" id="commentform" class="comment-form">
									<input type="text" name="name" class="" placeholder="Name*">
									<input type="email" name="email" class="" placeholder="Email*">
									<input type="text" name="subject" class="" placeholder="Subject*">
									<textarea name="text" id="role" cols="30" rows="9" placeholder="Message*"></textarea>
									<button type="submit" class="lab-btn">
										<span>Submit Now</span>
									</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Contact Us Section ENding Here -->

		<!-- footer section start here -->
<?php
	require_once "app/core/views/partials/footer.php";
?>