<?php
	include_once 'templates/header.php';
	include_once 'templates/nav.php';
	include_once 'ad_min/inc/db.php';
	
?>

<div class="banner organic-banner">
			<div class="w3ls-heading page-subject">
				<h2 class="h-two">ORGANIC FOOD</h2>
				<span class="decor"></span>
				<p class="sub two"></p>
			</div>
			<?php include_once 'inc/logo-title.php' ?>
		</div>
		<!-- welcome -->
		<div class="features">
			<div class="container">
				<div class="">	
					<div class="w3-welcome-grids">
						<div class="col-md-7 w3-welcome-left">
                            <p>Organic food is healthier because it is produced naturally. This means that no pesticides are used in the production of fruit and vegetables and it is richer in nutrients such as vitamin C and minerals.</p>
                            <p>The nitrate content is also lower and it contains fewer waste materials from pesticides.</p>
                            <p>As organic vegetables and fruit can grow at a slow and natural rate, no unnecessary, and often toxic, chemicals need to be used.</p>
                            
							<button class="btn btn-popup" data-toggle="modal" data-target="#subscribeModal" onclick="reset()" >Order Now</button>
							<div id="subscribeModal" class="modal fade" role="dialog">
								<div class="modal-dialog"  style="margin-top:108px"; >
								<!-- Modal content-->
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close btnclose" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">Order Now</h4>
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
													
													<input type="button" class="btn btn-popup" name="btnContactsubmit" id="btnContactsubmit" value="Submit">
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
							<img src="images/organicstore/organicfood1.jpg" alt="" />
						</div>
						<div class="clearfix"> </div>
					</div>
                    <br><br>
                    <div class="w3-welcome-grids">
						<div class="col-md-7 w3-welcome-left">
							<p>Organic food is healthier because it is produced naturally. This means that no pesticides are used in the production of fruit and vegetables and it is richer in nutrients such as vitamin C and minerals.</p>
                            <p>The nitrate content is also lower and it contains fewer waste materials from pesticides.</p>
                            <p>As organic vegetables and fruit can grow at a slow and natural rate, no unnecessary, and often toxic, chemicals need to be used.</p>
							
							<button class="btn btn-popup" data-toggle="modal" data-target="#subscribeModal" onclick="reset()" >Order Now</button>
							<div id="subscribeModal" class="modal fade" role="dialog">
								<div class="modal-dialog">
								<!-- Modal content-->
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close btnclose" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">Order Now</h4>
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
													
													<input type="button" class="btn btn-popup" name="btnContactsubmit" id="btnContactsubmit" value="Submit">
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
							<img src="images/organicstore/organicfood2.jpg" alt="" />
						</div>
						<div class="clearfix"> </div>
					</div>
                    
                    <br><br>
                    <div class="w3-welcome-grids">
						<div class="col-md-7 w3-welcome-left">
							<p>Organic food is healthier because it is produced naturally. This means that no pesticides are used in the production of fruit and vegetables and it is richer in nutrients such as vitamin C and minerals.</p>
                            <p>The nitrate content is also lower and it contains fewer waste materials from pesticides.</p>
                            <p>As organic vegetables and fruit can grow at a slow and natural rate, no unnecessary, and often toxic, chemicals need to be used.</p>
							
							<button class="btn btn-popup" data-toggle="modal" data-target="#subscribeModal" onclick="reset()" >Order Now</button>
							<div id="subscribeModal" class="modal fade" role="dialog">
								<div class="modal-dialog">
								<!-- Modal content-->
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close btnclose" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">Order Now</h4>
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
													
													<input type="button" class="btn btn-popup" name="btnContactsubmit" id="btnContactsubmit" value="Submit">
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
							<img src="images/organicstore/organicfood3.jpg" alt="" />
						</div>
						<div class="clearfix"> </div>
					</div>
                    
                        <br><br>
                    <div class="w3-welcome-grids">
						<div class="col-md-7 w3-welcome-left">
							<p>Organic food is healthier because it is produced naturally. This means that no pesticides are used in the production of fruit and vegetables and it is richer in nutrients such as vitamin C and minerals.</p>
                            <p>The nitrate content is also lower and it contains fewer waste materials from pesticides.</p>
                            <p>As organic vegetables and fruit can grow at a slow and natural rate, no unnecessary, and often toxic, chemicals need to be used.</p>
							
							<button class="btn btn-popup" data-toggle="modal" data-target="#subscribeModal" onclick="reset()" >Order Now</button>
							<div id="subscribeModal" class="modal fade" role="dialog">
								<div class="modal-dialog">
								<!-- Modal content-->
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close btnclose" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">Order Now</h4>
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
													
													<input type="button" class="btn btn-popup" name="btnContactsubmit" id="btnContactsubmit" value="Submit">
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
							<img src="images/organicstore/organicfood4.jpg" alt="" />
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