<?php 
	$banner = 1;
	include_once 'templates/header.php';
	include_once 'templates/nav.php';
 ?>
		<!-- portfolio -->
		<div class="banner banner-1">
			<div class="w3ls-heading page-subject">
				<h2 class="h-two">SATCHITANANADA</h2>
				<span class="decor"></span>
				<p class="sub two">Truth of pure being and awareness!</p>
			</div>
		</div>
		<?php include_once 'inc/logo-title.php' ?>
		<!-- welcome -->
		<div class="features">
			<div class="container">
				<div class="row w3-welcome-grids">
					<div class="col-md-7 w3-welcome-left">
						<h4>It came from a plant, eat it. If it was made in a plant, don’t.</h4>
						<p><b>The greatest change we need to make is from CONSUMPTION to PRODUCTION</b>, even if on a small scale, in our gardens. If only 10% of us do this, there is enough for everyone.</p>
						<p>I whole heartedly welcome you to be part of an Food anarchist journey, freedom in the field of all possibilities.</p>	
					</div>
					<div class="col-md-5 w3ls-welcome-img1">
						<img src="images/satchitananada.jpg" alt="" />
					</div>
				</div>
			</div>
		</div>
		<div class="features">
			<div class="container">
				<div class="">	
					<div class="row w3-welcome-grids">
						<div class="col-md-4 w3-welcome-left sub">
							<h4>Aspire to create a small Vegetable and/or Herb garden at your HOME?</h4>
							<p><b>Big Dreams Small Spaces!</b> The future is all about small and medium sized brands and A plurality of voices out there. Someone needs to stop and say the answer isn’t in the pill, The answer is Fresh leafy greens.</p>
						</div>
						<div class="col-md-4 w3-welcome-left sub">
							<h4>Growing your own food is like printing your own money.</h4>
							<p>We can help manifest, if you just have the intention!</p>
							<p>We can help you build a small yet beautiful terrace garden in a budget set by you, all we charge is for our ideas and consulting services.</p>
						</div>
						<div class="col-md-4 w3-welcome-left sub">
							<h4>Want to bring home a bountiful of Fresh & Unadulterated produce from your local Urban Farmer?</h4>
							<p>Mindfulness gives you time. Time gives you choices. Choices, skillfully made, lead to freedom.</p>
						</div>
					</div>
					<div class="text-center">
						<h4 class="text-center mb-10px">Buy Fresh Produce from our Urban Store</h4>
						<a href="products.php" class="btn btn-popup  mb-10px">Fresh Produce <i class="fa fa-shopping-cart"></i></a>
					</div>
					<div class="mb-10px">
						<ul class="list-inline">
							<li><button class="btn btn-popup" data-toggle="modal" data-target="#preorderModal">Place a pre-order for fresh herb varieties </button></li>
							<li><button class="btn btn-popup" data-toggle="modal" data-target="#dreamsModal">Big Dreams Small spaces</button></li>
							<li><button class="btn btn-popup" data-toggle="modal" data-target="#volunteerModal">Volunteer for a farm week</button></li>
							<li><button class="btn btn-popup" data-toggle="modal" data-target="#becomeModal">Become an urban farmer</button></li>
						</ul>
					</div>
					<div id="preorderModal" class="modal fade" role="dialog">
						<div class="modal-dialog w3-welcome-grids">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close btnclose" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">pre-order for fresh herb varieties</h4>
								</div>
								<div class="modal-body">
									<div class="agileits_mail_grid_left modalform">
										<form method="post" id="satchitananadaFrom">
											<h5>Your Name*</h5>
											<input type="text" name="name" placeholder="Name..." required="">
											<input type="text" name="from" hidden placeholder="Name..." value="pre-order for fresh herb varieties">
											<h5>Your Email*</h5>
											<input type="email" name="email" placeholder="Email..." required="">
											<h5>Your Phone Number*</h5>
											<input type="text" name="phone" placeholder="Phone..." required="">
											<br>
											<input type="button" class="btn btn-popup" id="btnPageFrom" value="Send message">
										</form>
										<br>
										<div id="statusmessage"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="dreamsModal" class="modal fade" role="dialog">
						<div class="modal-dialog w3-welcome-grids">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close btnclose" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">Big Dreams Small spaces</h4>
								</div>
								<div class="modal-body">
									<div class="agileits_mail_grid_left modalform">
										<form method="post" id="satchitananadaFrom2">
											<h5>Your Name*</h5>
											<input type="text" name="name" placeholder="Name..." required="">
											<input type="text" name="from" hidden placeholder="Name..." value="Big Dreams Small spaces">
											<h5>Your Email*</h5>
											<input type="email" name="email" placeholder="Email..." required="">
											<h5>Your Phone Number*</h5>
											<input type="text" name="phone" placeholder="Phone..." required="">
											<br>
											<input type="button" class="btn btn-popup" id="btnPageFrom2" value="Send message">
										</form>
										<br>
										<div id="statusmessage2"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="volunteerModal" class="modal fade" role="dialog">
						<div class="modal-dialog w3-welcome-grids">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close btnclose" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">Volunteer for a farm week</h4>
								</div>
								<div class="modal-body">
									<div class="agileits_mail_grid_left modalform">
										<form method="post" id="satchitananadaFrom3">
											<h5>Your Name*</h5>
											<input type="text" name="name" placeholder="Name..." required="">
											<input type="text" name="from" hidden placeholder="Name..." value="Volunteer for a farm week">
											<h5>Your Email*</h5>
											<input type="email" name="email" placeholder="Email..." required="">
											<h5>Your Phone Number*</h5>
											<input type="text" name="phone" placeholder="Phone..." required="">
											<br>
											<input type="button" class="btn btn-popup" id="btnPageFrom3" value="Send message">
										</form>
										<br>
										<div id="statusmessage3"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="becomeModal" class="modal fade" role="dialog">
						<div class="modal-dialog w3-welcome-grids">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close btnclose" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">Become An Urban Farmer</h4>
								</div>
								<div class="modal-body">
									<div class="agileits_mail_grid_left modalform">
										<form  method="post" id="satchitananadaFrom4">
											<h5>Your Name*</h5>
											<input type="text" name="name" placeholder="Name..." required="">
											<input type="text" name="from" hidden placeholder="Name..." value="Become An Urban Farmer">
											<h5>Your Email*</h5>
											<input type="email" name="email" placeholder="Email..." required="">
											<h5>Your Phone Number*</h5>
											<input type="text" name="phone" placeholder="Phone..." required="">
											<br>
											<input type="button" class="btn btn-popup" id="btnPageFrom4" value="Send message">
										</form>
										<br>
										<div id="statusmessage4"></div>
									</div>
								</div>
							</div>
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
	 
