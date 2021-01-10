<?php 
	$banner = 0;
	include_once 'templates/header.php';
	include_once 'templates/nav.php';
    
 ?>
<?php
include_once 'templates/popup.php';
?>
  <script>
	$(document).ready(function(){
        $("#popup").attr("src", "images/organicstore/popup.jpg")
          
		$("#myModal").modal('show');
	});
</script>        
 <div class="banner content">
		<div id="farmingCarousel" class="carousel slide" data-ride="carousel">
		    <!-- Indicators -->
		    <ol class="carousel-indicators">
		      <li data-target="#farmingCarousel" data-slide-to="0" class="active"></li>
		      <li data-target="#farmingCarousel" data-slide-to="1"></li>
		      <li data-target="#farmingCarousel" data-slide-to="2"></li>
		    </ol>

		    <!-- Wrapper for slides -->
		    <div class="carousel-inner disply-next-div">

		      <div class="item active">
		        <img src="images/1.jpg" alt="Heaven On My Earth">
		        <div class="carousel-caption slider-caption">
		          <h3>H.O.M.E is growing Fresh Organic Herbs in your local and adding varieties one day at a time, 365 days a year.</h3>
		        </div>
		      </div>

		      <div class="item">
		        <img src="images/2.jpg" alt="Heaven On My Earth">
		        <div class="carousel-caption slider-caption">
		          <h3>Every time you buy Organic you’re persuading more farmer to grow Organic.</h3>
		        </div>
		      </div>
		    
		      <div class="item">
		        <img src="images/3.jpg" alt="Heaven On My Earth">
		        <div class="carousel-caption slider-caption">
		          <h3>Eating Organic isn’t  a trend. It’s a return to tradition.</h3>
		        </div>
		      </div>
		    </div>
		    <!-- Left and right controls -->
		    <a class="left carousel-control" href="#farmingCarousel" data-slide="prev">
		      <span class="glyphicon glyphicon-chevron-left"></span>
		      <span class="sr-only">Previous</span>
		    </a>
		    <a class="right carousel-control" href="#farmingCarousel" data-slide="next">
		      <span class="glyphicon glyphicon-chevron-right"></span>
		      <span class="sr-only">Next</span>
		    </a>
		  </div>
	</div>
	<?php include_once 'inc/logo-title.php' ?>
	<!-- //banner --> 
	<!-- welcome -->
	<div class="features">
		<div class="container">
			<!-- <div class="w3ls-heading">
				<h2 class="h-two">Features</h2>
				<p class="sub two">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			</div> -->
			<div class="w3-agile-top-info">	
				<div class="w3-welcome-grids">
					<div class="col-md-7 w3-welcome-left">
						<h3>Aham Bramhasmi</h3>
						<p>Because we are what we eat, we can literally transform our bodies and minds by choosing an inspiring diet.</p>
						<p>“We do food every single day! Conscious Eating is a big step toward Conscious Living. Quality and Quantity of Food is directly related to our Health and state of mind. We can use food to help us recover from Stress and Disease. Not taking food seriously will eventually lead to Stress or/and Disease.” </p>
						<p>It has been my aspiration to provide fresh local herbs and greens to local consumers at a competitive price for a fresher, Zero Insecticides and sustainably produced product that which are grown locally.</p>
					</div>
					<div class="col-md-5 w3ls-welcome-img1">
						<img src="images/index-pic-aha.jpg" alt="" />
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="w3-welcome-grids w3-welcome-bottom">
					<div class="col-md-5 w3ls-welcome-img1 w3ls-welcome-img2">
						<img src="images/index-pic-tat.jpg" alt="" />
					</div>
					<div class="col-md-7 w3-welcome-left">
						<h3>Tat Tvam Asi</h3>
						<p>Self-realization leads to God realization in the sense that we need to get rid of Avidya (ignorance and delusion) to realize!</p>
						<p>Food reveals our connection to the earth. Each bite contains the life of the sun and the earth. We can see and taste the whole universe in a piece of bread – Thich Nhat Hanh.</p>
						<p>My mission is to empower, educate and inspire as many people as possible to love and enjoy fresh produce. A Food anarchist, spreading truth and awareness of eating  locally grown fresh food, supporting local economy &  Farmers, preserving energy and choosing chemical free produce.</p>
						<p>After all realization leads to enlightenment.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>

	<!-- //welcome -->
	<!-- banner-bottom1 -->

	<div class="banner-bottom1">
		<div class="col-md-6 agile_banner_bottom1_left">
			<video width="100%" height="450" controls>
			  <source src="images/home-video.mp4"  class="videowidth" type="video/mp4">
			</video>
		</div>
		<div class="col-md-6 w3-welcome-left text-center video-section">
			<h2>It came from a plant, eat it. If it was made in a plant, don’t.</h2>
			<p>The greatest change we need to make is from CONSUMPTION to PRODUCTION, even if on a small scale, in our gardens. If only 10% of us do this, there is enough for everyone.</p>
			<p>I whole heartedly welcome you to be part of an Food anarchist journey, freedom in the field of all possibilities</p>
			<a href="products.php" class="btn btn-popup">Buy Fresh Produce from our Urban Store</a>		
		</div>
		<div class="clearfix"> </div>
	</div>
	<!-- banner-bottom1 -->
	<!-- services -->

	<div class="services">
		<div class="container">
			<div class="w3ls-heading">
				<h3 class="h-two">Our Services</h3>
				<p class="sub two">FOOD IS JUST NOT CALORIES, IT’S INFORMATION. IT TALKS TO YOUR DNA AND TELLS YOU WHAT TO DO.</p>
			</div>
			<div class="w3-welcome-grids mt-35">
				<div class="col-md-4 w3-welcome-left sub">
					<div class="w3ls-welcome-img1 w3ls-welcome-img2 mb-15">
						<img src="images/index-service-pic1.jpg" alt="" />
					</div>
					<h4>Aspire to create a small Vegetable and/or Herb garden at your HOME?</h4>
					<p><b>Big Dreams Small Spaces!</b> The future is all about small and medium sized brands and A plurality of voices out there. Someone needs to stop and say the answer isn’t in the pill, The answer is Fresh leafy greens.</p>
				</div>
				<div class="col-md-4 w3-welcome-left sub">
					<div class="w3ls-welcome-img1 w3ls-welcome-img2 mb-15">
						<img src="images/index-service-pic2.jpg" alt="" />
					</div>
					<h4>Growing your own food is like printing your own money.</h4>
					<p>We can help manifest, if you just have the intention!</p>
					<p>We can help you build a small yet beautiful terrace garden in a budget set by you, all we charge is for our ideas and consulting services.</p>
				</div>
				<div class="col-md-4 w3-welcome-left sub">
					<div class="w3ls-welcome-img1 w3ls-welcome-img2 mb-15">
						<img src="images/index-service-pic3.jpg" alt="" />
					</div>
					<h4>Want to bring home a bountiful of Fresh & Unadulterated produce from your local Urban Farmer?</h4>
					<p>Mindfulness gives you time. Time gives you choices. Choices, skillfully made, lead to freedom.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="w3-agileits-services-grids"> 
				<div class="col-md-5 w3-agileits-services-right">
					<div class="services-right-grids">
						<div class="col-sm-offset-3 col-sm-offset-3 col-sm-6 col-xs-offset-3  col-xs-6 services-right-grid">
							<div class="services-icon hvr-radial-in">
								<i class="fa fa-anchor" aria-hidden="true"></i>
							</div>
							<div class="services-icon-info">
								<h5>Urban farming Produce</h5>
							</div>
						</div>
						<div class="col-sm-offset-3  col-sm-6  col-xs-offset-3 col-xs-6 services-right-grid">
							<div class="services-icon hvr-radial-in">
								<i class="fa fa-line-chart" aria-hidden="true"></i>
							</div>
							<div class="services-icon-info">
								<h5>Urban farming Training</h5>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-7 w3-agileits-services-left">
					<img src="images/index-service-pic.jpg" alt="" width="100%" />
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //services -->

	<!-- testimonials -->
	<div class="testimonials">
	   	<div class="test_agile_info">
			<div class="container">
				<div class="row">
					<div class="col-md-7">
						<ul id="flexiselDemo1">			
							<li>
								<div class="wthree_testimonials_grid_main">
									<div class="wthree_testimonials_grid">
										<h4>Testimonials</h4>
										<p>Ann Vinya you are doing a great job by producing premium quality veggies and selling it across local market rather than exporting. It was really nice talking to you and I hope in future we can work together. You are really a great consultant and doing a wonderful job by making more people aware of quality vegetables.</p>
											<h5>‎Vaibhav Agarwal‎ </h5>
										<!-- <div class="wthree_testimonials_grid_pos">
											<img src="images/t11.jpg" alt=" " class="img-responsive" />
										</div> -->
									</div>
								
								</div>
							</li>
							<li>
								<div class="wthree_testimonials_grid_main">
									<div class="wthree_testimonials_grid">
										<h4>Testimonials</h4>
										<img src="images/testimonials/t7.jpg" width="100%" alt="">
										<a href="https://www.facebook.com/ann.vinya/posts/10160918742735525?__xts__[0]=68.ARCDZBw65XmfsCnqR5FBFrpg66SUQUPaGGBF0moUd_6dmjhk1EsVbIa3LJeFz2fOnATe5b7B65c_I70Q30j7WWzPl_REUObzyuONLMNJstMxtXOMQ4p7lpBuVkIvxzpuxHdAioCT0rGgTuIo5o6FB7UpZTUXEQoXMQVQZ8BlxJxXQQN810An_g&__tn__=C-R"  target="_blank"><h5>Kannada Prabha Article</h5></a>
										<!-- <div class="wthree_testimonials_grid_pos">
											<img src="images/t21.jpg" alt=" " class="img-responsive" />
										</div> -->
									</div>
								
								</div>
							</li>
							<li>
								<div class="wthree_testimonials_grid_main">
									<div class="wthree_testimonials_grid">
										<h4>Testimonials</h4>
										<img src="images/testimonials/t8.jpg" width="100%" alt="">
										<a href="https://www-thebetterindia-com.cdn.ampproject.org/c/s/www.thebetterindia.com/157032/news-bengaluru-urban-farming-hydroponics/amp/" target="_blank"><h5>The Better India-Article</h5></a>
										<!-- <div class="wthree_testimonials_grid_pos">
											<img src="images/t21.jpg" alt=" " class="img-responsive" />
										</div> -->
									</div>
								
								</div>
							</li>
							
							<li>
								<div class="wthree_testimonials_grid_main">
									<div class="wthree_testimonials_grid">
										<h4>Testimonials</h4>
										<img src="images/testimonials/t3.jpg" width="100%" alt="">
										<h5>Love for Salad</h5>
										<!-- <div class="wthree_testimonials_grid_pos">
											<img src="images/t21.jpg" alt=" " class="img-responsive" />
										</div> -->
									</div>
								</div>
							</li>
							<li>
								<div class="wthree_testimonials_grid_main">
									<div class="wthree_testimonials_grid">
										<h4>Testimonials</h4>
										<img src="images/testimonials/t4.jpg" width="100%" alt="">
										<h5>Love for Salad</h5>
										<!-- <div class="wthree_testimonials_grid_pos">
											<img src="images/t21.jpg" alt=" " class="img-responsive" />
										</div> -->
									</div>
								</div>
							</li>
							<li>
								<div class="wthree_testimonials_grid_main">
									<div class="wthree_testimonials_grid">
										<h4>Testimonials</h4>
										<img src="images/testimonials/t5.jpg" width="100%" alt="">
										<h5>Love for Salad</h5>
										<!-- <div class="wthree_testimonials_grid_pos">
											<img src="images/t21.jpg" alt=" " class="img-responsive" />
										</div> -->
									</div>
								</div>
							</li>
							<li>
								<div class="wthree_testimonials_grid_main">
									<div class="wthree_testimonials_grid">
										<h4>Testimonials</h4>
										<img src="images/testimonials/t6.jpg" width="100%" alt="">
										<h5>Love for Salad</h5>
										<!-- <div class="wthree_testimonials_grid_pos">
											<img src="images/t21.jpg" alt=" " class="img-responsive" />
										</div> -->
									</div>
								</div>
							</li>
						</ul>
					</div>
					<div class="col-md-5">	
						<div class="facebook-iframe">
							<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FHomeDiaries%2F&tabs=timeline&width=500&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	

	
<?php
	include_once 'templates/footer.php';
	include_once 'templates/footer-bottom.php';

?>
	 
