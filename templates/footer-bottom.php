
	<!-- //Flexslider-js for-testimonials -->
	<script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
	<script type="text/javascript" src="js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="js/farming.js"></script>
	<!-- start-smooth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>	
	<script type="text/javascript" src="js/shuffletext.jquery.min.js"></script>
	
		<!-- FlexSlider --> 
	<script defer src="js/jquery.flexslider.js"></script>
		<script type="text/javascript">
			$(window).load(function(){
			  $('.flexslider').flexslider({
				animation: "slide",
				start: function(slider){
				  $('body').removeClass('loading');
				}
			  });
			});
		</script>
	<!-- End-slider-script --> 
	<script>
    	$(function() {
	        $('#wrapper').ShuffleText([
	            'Know where your food comes from',
	            "Grow your own",
	            "Support your <strong>Local farmer</strong>",
	            "<strong>Buy Local</strong>"
	        ],{loop: true, delay: 3000});
	        $('#logoTitle').ShuffleText([
	            'An Urban Farming Anarchist',
	            "An Urban Farming Anarchist",
	            "An Urban Farming Anarchist",
	            "An Urban Farming Anarchist"
	        ],{loop: true, delay: 3000});
	    });
	</script>
	<!-- Flexslider-js for-testimonials -->
	<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo1").flexisel({
				visibleItems:1,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 1
					}, 
					landscape: { 
						changePoint:640,
						visibleItems:1
					},
					tablet: { 
						changePoint:768,
						visibleItems: 1
					}
				}
			});
		});
	</script>
	<script type="text/javascript" src="js/jquery.flexisel.js"></script>
	<script src="js/lightcase.js"></script>
	<script>
		$('.showcase').lightcase();
	</script>
	<!-- //light-case -->
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
	<!-- //end-smooth-scrolling   -->	
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->  
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>