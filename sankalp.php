<?php 
	$banner = 1;
	include_once 'templates/header.php';
	include_once 'templates/nav.php';
 ?>
		<!-- portfolio -->
		<div class="banner about-banner">
			<div class="w3ls-heading page-subject">
				<h2 class="h-two">SANKALP</h2>
				<span class="decor"></span>
				<p class="sub two">Food is just not calories, It’s information. It talks to your DNA and tells you what to do.</p>
			</div>
			<?php include_once 'inc/logo-title.php' ?>
		</div>
		<!-- welcome -->
		<div class="features">
			<div class="container">
				<div class="row">	
					<div class="w3-welcome-grids">
						<div class="w3-welcome-left text-center">
							<p>This page I dedicate to my subtle intentions and let go by penning down my thoughts and sharing my trial & tribulations, along the way.</p>
							<p>Come know me, Come be a part…. Of my Subtle intentions, because we are all connected.</p>
							<br>	
							<div class="text-center">	
								<a data-toggle="modal" data-target="#sankalpModal"><img src="images/get-started.gif" alt="" width="25%"></a>
							</div>
							<br><br>
						</div>
						<div id="sankalpModal" class="modal fade" role="dialog">
							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close btnclose" data-dismiss="modal">&times;</button>
										<h4 class="modal-title">Subscribe Now</h4>
									</div>
									<div class="modal-body">
										<div class="agileits_mail_grid_left modalform">
											<form action="#" method="post" id="contactForm">
												<h5>Your Name*</h5>
												<input type="text" name="name" id="" placeholder="Name..." required="">
												<h5>Your Email*</h5>
												<input type="email" name="email" placeholder="Email..." required="">
												<h5>Your Phone Number*</h5>
												<input type="text" name="phone" placeholder="Phone..." required="">
												<h5>Your Message*</h5>
												<textarea placeholder="Message..." name="message"></textarea>
												<br>
												<input type="button" class="btn btn-popup" name="btnContactSub" id="btnContactSub" value="Send message">
											</form>
											<br>
											<div id="statusmessage"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>	
				<hr>
				<div class="row">
					<div class="w3-welcome-grids w3-welcome-left">
						<div class="col-md-5">
							<div class="profile-pic">
								<img src="images/profile-pic.jpg" width="100%" alt="">
							</div>
							<div class="profile-content">
								<h3>Ann Vinya Thomas </h3>
								<p>I grow plants for many reasons: to please my soul, to challenge the elements or to challenge my patience, for novelty, or for nostalgia, but mostly for the joy in seeing them grow.</p>
								<a href="https://www-thebetterindia-com.cdn.ampproject.org/c/s/www.thebetterindia.com/157032/news-bengaluru-urban-farming-hydroponics/amp/" class="lable lable-success">My Better India-Article</a>
							</div>
						</div>	
						<div class="col-md-7 about-info">
							<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FHomeDiaries%2F&tabs=timeline&width=500&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="600" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- portfolio -->
<?php
	include_once 'templates/footer.php';
	include_once 'templates/footer-bottom.php';

?>
	 
