<?php
	include_once 'templates/header.php';
	include_once 'templates/nav.php';
	include_once 'ad_min/inc/db.php';
	include_once 'ad_min/inc/functions.php';
	$action = $pro_name = $quantity = "";
	if (isset($_GET["action"])) {
		$action = mysqli_real_escape_string($con, $_GET["action"]);
	}
	if (isset($_GET["pro_name"])) {
		$pro_name = mysqli_real_escape_string($con, $_GET["pro_name"]);
	}
	if (isset($_POST["quantity"])) {
		$quantity = mysqli_real_escape_string($con, $_POST["quantity"]);
	}
	
	if(!empty($action))
	{
		switch($action) 
		{
			case "remove":
				if(!empty($_SESSION["cart_item"])) 
				{
					foreach($_SESSION["cart_item"] as $k => $v) 
					{
							if($_GET["pro_name"] == $k)
								unset($_SESSION["cart_item"][$k]);				
							if(empty($_SESSION["cart_item"]))
								unset($_SESSION["cart_item"]);
					}
				}
			break;
			case "empty":
				unset($_SESSION["cart_item"]);
			break;	
		}
	}

	unset($_SESSION["cart_item"]);
 ?>

<?php
include_once 'templates/popup.php';
?>
  <script>
	$(document).ready(function(){
        $("#popup").attr("src", "images/offers.png")
          
		$("#myModal").modal('show');
	});
</script>    


	<!-- products -->
	<!-- main-textgrids -->
	<div class="product-banner">
		<div class="w3ls-heading page-subject">
			<h2 class="h-two">URBAN STORE</h2>
			<span class="decor"></span>
			<p class="sub two">Eat Local, Buy Local, Grow Local</p>
		</div>
	</div>
	<?php include_once 'inc/logo-title.php' ?>
	<div class="main-textgrids">
		<div class="container">
			<div class="w3ls-heading">
				<h2 class="h-two">At the herb terrace garden this week </h2>
			</div>
			<br>
			<div class="row">
				<div class="col-md-12">
					<div class="row rbcol-container">
						<?php display_products(); ?>
					</div>
				</div>
			<!--	<div class="col-md-4">
					<div class="agileits_mail_grid_left modalform orderform">
						<h3 class="text-center"><strong>Take Me Home</strong></h3>
						<form action="#" method="post" class="orderForm" id="orderForm">
							<h5>Your Name*</h5>
							<input type="text" name="name" id="" placeholder="Name..." required="">
							<h5>Your Email*</h5>
							<input type="email" name="email" placeholder="Email..." required="">
							<h5>Your Phone Number*</h5>
							<input type="text" name="phone" placeholder="Phone..." required="">
							<h5>Address*</h5>
							<textarea name="address" id="address" placeholder="Address..." rows="3"  required=""></textarea>
							<p style="color: red;">Note: Delivery Charges extra</p>
							<hr>

							<input type="hidden" name="cart_c" id="cart_c" value="0">
							<p class='badge badge-danger' id='pstatus' style='width: 100%'>Please select a product first...!</p>

							
							<div id="shoppingCart_1" style="display: none;">
								<div class="txt-heading"><h5 class="pull-left">Shopping Cart</h5> 
									<button id="btnEmpty" onclick="location.href = 'products.php';" class="btn btn-popup btnemptycartAction pull-right">Empty Cart</button>
								</div>
								<br>

								<div id="dataHidden">
								</div>
								<br>

								<table class="table table-sm table-bordered" id="table_cart" cellpadding="10" cellspacing="1">
									<thead class="thead-light">
										<tr>
											<th><strong>Name</strong></th>
											<th><strong>Quantity</strong></th>
											<th><strong>Price</strong></th>
										</tr>
									</thead>
									<tbody id="dataShow">											
									</tbody>
								</table>

								<br>
								<br>
								<input type="button" class="btn btn-popup btnProductCartMail" name="btnProductCartMail" id="btnProductCartMail" value="Order Now">
							</div>

						</form>
						<br>
						<div id="statusmessage"></div>
					</div>
				</div>-->
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //main-textgrids
<?php
	include_once 'templates/footer.php';
	include_once 'templates/footer-bottom.php';

?>
	 
