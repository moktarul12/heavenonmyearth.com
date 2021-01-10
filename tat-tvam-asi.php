<?php 
	$banner = 1;
	include_once 'templates/header.php';
	include_once 'templates/nav.php';
 ?>
		<!-- portfolio -->
		<div class="banner why-banner">
			<div class="w3ls-heading page-subject">
				<h2 class="h-two">TAT TVAM ASI</h2>
				<span class="decor"></span>
				<p class="sub two">Let food be thy medicine and medicine be thy food.</p>
			</div>
			<?php include_once 'inc/logo-title.php' ?>
		</div>
		<!-- welcome -->
		<div class="features">
			<div class="container">
				<div class="">	
					<div class="w3-welcome-grids">
						<div class="col-md-7 w3-welcome-left">
							<p>Self-realization leads to God realization in the sense that we need to get rid of Avidya (ignorance and delusion) to realize! </p>
							<p><b>Food reveals our connection to the earth. Each bite contains the life of the sun and the earth. We can see and taste the whole universe in a piece of bread – Thich Nhat Hanh.</b></p>
							<p>My mission is to empower, educate and inspire as many people as possible to love and enjoy fresh produce. A Food anarchist, spreading truth and awareness of eating  locally grown fresh food, supporting local economy &  Farmers, preserving energy and choosing chemical free produce.</p>
							<p>After all realization leads to enlightenment.</p>
							<button class="btn btn-popup" data-toggle="modal" data-target="#subscribeModal" onclick="reset()" > Subscribe for our weekly crop list broadcast</button>
							<div id="subscribeModal" class="modal fade" role="dialog">
								<div class="modal-dialog">
								<!-- Modal content-->
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close btnclose" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">Subscribe for our weekly crop list broadcast</h4>
										</div>
										<div class="modal-body">
											<div class="agileits_mail_grid_left modalform">
												<form action="#" method="post" id="contactForm">
													<input type="hidden" name="mailfrom" value="Subscribe for our weekly crop list broadcast">
													<h5>Your Name*</h5>
													<input type="text" name="Name" placeholder="Name..." required="">
													<h5>Your Email*</h5>
													<input type="email" name="Email" placeholder="Email..." required="">
													<h5>Your Phone Number*</h5>
													<input type="text" name="Phone" placeholder="Phone..." required="">
													<h5>Your Message*</h5>
													<textarea placeholder="Message..." name="Message"></textarea>
													<input type="button" class="btn btn-popup" name="btnContactSub" id="btnContactSub" value="Subscribe Now">
												</form>											
												<br>
												<div id="statusmessage"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-5 w3ls-welcome-img1">
							<img src="images/tat-tvam-asi-img.jpg" alt="" />
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
		<!-- portfolio -->
<?php
	include_once 'templates/footer.php';
	include_once 'templates/footer-bottom.php';

?>
	 
