<?php 
	$banner = 1;
	include_once 'templates/header.php';
	include_once 'templates/nav.php';
 ?>
 		<div class="banner contact-banner">
			<div class="w3ls-heading page-subject">
				<h2 class="h-two">Contact us</h2>
				<span class="decor"></span>
				<p class="sub two">Drop us a line, or give us a heads up if your intrested in visiting us</p>
			</div>
		</div>
		<?php include_once 'inc/logo-title.php' ?>
	<!-- contact -->
			
		<div class="map">	
			<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d124467.39418749695!2d77.51649865773828!3d12.868701004908667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3bae6bd1caeaca31%3A0x84b9fb91e1a4ccfb!2sheavenonmyearth!3m2!1d12.8687103!2d77.58653919999999!5e0!3m2!1sen!2sin!4v1534937027039" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class="mail">
			<div class="container">
				<div class="w3ls-heading">
					<h2 class="h-two">Get In Touch With Us</h2>
				</div>
				<div class="agileits_mail_grids">
					<div class="col-md-6 agileits_mail_grid_left">
						<form action="#" method="post" id="contactForm">
							<input type="hidden" name="mailfrom" value="contact from">
							<h4>Your Name*</h4>
							<input type="text" name="name" placeholder="Name..." required="">
							<h4>Your Email*</h4>
							<input type="email" name="email" placeholder="Email..." required="">
							<h4>Your Phone Number*</h4>
							<input type="text" name="phone" placeholder="Phone..." required="">
							<h4>Your Message*</h4>
							<textarea placeholder="Message..." name="message"></textarea>
							<br>
							<input type="button" class="btn btn-popup" name="btnContactSub" id="btnContactSub" value="Send message">
						</form>
						<br>
						<div id="statusmessage"></div>
					</div>
					<div class="col-md-6 agileits_mail_grid_right">
						<div class="left-agileits">
							<h3>Address</h3>
								<ul>
									<li><span class="glyphicon glyphicon-home" aria-hidden="true"></span>#6, HOME, 1st Cross, Venkateshwara Layout, <br> 1st Main Rd, 8th Phase, JP Nagar,<br> Bengaluru, Karnataka 560076</li>
									<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">ann.vinya@heavenonmyearth.com</a></li>
									<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> (+91) 9886398948</li>
								</ul>
						</div>
					</div>
						<div class="clearfix"></div>
				</div>
			</div>
		</div>
	<!-- //contact -->
<?php
	include_once 'templates/footer.php';
	include_once 'templates/footer-bottom.php';

?>
	 
