<?php  

	include_once "db.php";
	
	// session_start();


	function  count_no_hs()
	{	
		global $con;
		$sql = "SELECT * FROM h_products WHERE pro_tmp_del = 0";
		$qry = mysqli_query($con, $sql);
		if ($qry) 
		{
			$count =mysqli_num_rows($qry);
			echo $count;
		}
	}


	function get_login_user($data)
	{
		global $con;
		$response = true;
		$username = $data['username'];
		$password = $data['password'];

		$sql = "SELECT * FROM h_users WHERE u_name = '$username' AND u_password = '$password' ";
		$qry = mysqli_query($con,$sql);
		if ($qry) {
			$row_count = mysqli_num_rows($qry);
			if ($row_count > 0) 
			{
				while ($row = mysqli_fetch_array($qry)) 
				{
					$username = $row['u_name'];
					// echo "<pre>";
					// print_r($row);
					// die();
				}
				session_start();
				// $_SESSION["user_status"] = false;
				$_SESSION["sess_status"] = true;
				$_SESSION["username"] = $username;
            	header('Location: dashboard.php'); 
	            die(); 
				
			} else {
				echo "<script> alert('Invalid credentials'); </script>";
			}
		} else {
			echo "<script> alert('somthing went wrong'); </script>";
		}
	}



	function add_product($data)
	{
		global $con;
		$response = true;
		$pro_name = $data['pro_name'];
		$pro_desc = $data['pro_desc'];
		$pro_price = $data['pro_price'];
		$pro_status = $data['pro_status'];
		$pro_img = strtolower($data['pro_img_name']);
		$img_tmp = $data['pro_img_name_tmp'];
		$img_ext = $data['pro_img_ext'];
		$img_size = $data['pro_img_size'];
        $pro_created_by = strtolower($_SESSION['username']);
        date_default_timezone_set('Asia/Kolkata');
        $pro_created_at = date('Y-m-d H:i:s');
        $pro_updated_by = "admin"; //strtolower($_SESSION['username']);
        date_default_timezone_set('Asia/Kolkata');
        $pro_updated_at = date('Y-m-d H:i:s');
		$extensions = array("jpeg","jpg","png");
		$isswiggy = $data['isswiggy']?1:0;
		if(in_array($img_ext, $extensions) === false) {
			$response = "Extension not allowed, please choose a JPEG or PNG file.";
		}
		if($img_size > 2097152) {
			$response = "File size must be less than 2 MB";
		}
		$destination = "../images/store/".$pro_img;
		if($response === true) {
			$up_status = move_uploaded_file($img_tmp, $destination);
			if ($up_status) {
				$qry = "INSERT INTO h_products(pro_name, pro_desc, pro_price, pro_status, pro_image, pro_created_by, pro_created_at, pro_updated_by, pro_updated_at, isswiggy) values('$pro_name','$pro_desc','$pro_price','$pro_status','$pro_img','$pro_created_by','$pro_created_at', '$pro_updated_by', '$pro_updated_at', '$isswiggy')";
				$qry_result	= mysqli_query($con, $qry);
				if ($qry_result) {
					$response = true;
				} else {
					$response = "Mysqli insertion failed";					
				}
			} else {
				$response = "Image uploaded failed";
			}
		} else {
			$response = "FAILED FAILED";
		}
		return $response;
	}

	function get_products()
	{
		global $con;
		$sql = "SELECT * FROM h_products WHERE pro_tmp_del = 0";
		$qry = mysqli_query($con, $sql);
		if ($qry) {
			if (mysqli_num_rows($qry) > 0) {
				$sl_no = 0;
				while ($row = mysqli_fetch_array($qry)) 
				{
					$sl_no ++;
					$pro_id = $row['pro_id'];
					$pro_name = $row['pro_name'];
					$pro_desc = $row['pro_desc'];
					$pro_price = $row['pro_price'];
					$pro_status = $row['pro_status'];
					$pro_img = $row['pro_image'];
					$isswiggy = $row['isswiggy'];
					if ($pro_status == 1) 
					{
						$pro_status = "Available";
						$pro_status_c = "badge badge-success";
					} else {
						$pro_status = "Not-Available";
						$pro_status_c = "badge badge-danger";
					}
				?>
					
					<tr>	
						<td><?php echo $sl_no; ?></td>
						<td><?php echo $pro_name; ?></td>
						<td><img class="cat-img-preview" src=<?php echo '"../images/store/'.$pro_img.'"'; ?> width="150px" alt="<?php echo $pro_name; ?>"></td>
						<td><?php echo $pro_desc; ?></td>
						<td><?php echo $pro_price; ?></td>
						<td><span class="<?php echo $pro_status_c; ?> availBtn" data-id=<?php echo $pro_id; ?>><?php echo $pro_status; ?></span>
						<br/><?php if ($isswiggy==1) echo '(swiggy product)'; ?>
						</td>
                        <td><a href="update-products.php?id=<?php echo $pro_id; ?>" class="btn btn-info btn-action"><i class="fas fa-pencil-alt"></i></a>
                            <button class="btn btn-danger btn-action btnDelInfo" data-id="<?php echo $pro_id; ?>" type="button"><i class="fas fa-trash-alt"></i></button>
                           
                        </td>
                    </tr>
                <?php
				}
			}
		} else {
			return false;
		}
	}

	function display_products()
	 {
	 	global $con;
		$sql = "SELECT * FROM h_products WHERE pro_tmp_del = 0 ORDER BY pro_status DESC";
		$qry = mysqli_query($con, $sql);
		if ($qry) 
		{
			if (mysqli_num_rows($qry) > 0) 
			{
				$sl_no = 0;
				while ($row = mysqli_fetch_array($qry)) 
				{
					$sl_no ++;
					$pro_id = $row['pro_id'];
					$pro_name = $row['pro_name'];
					$pro_desc = $row['pro_desc'];
					$pro_price = $row['pro_price'];
					$pro_status = $row['pro_status'];
					$pro_img = $row['pro_image'];
					$isswiggy = $row['isswiggy'];
					if ($pro_status == 1) 
					{
						$pro_status = "Available";
						$pro_status_c = "badge badge-success";
					} else {
						$pro_status = "Not Available";
						$pro_status_c = "badge badge-danger";
					}
				?>
				<div class="col-md-4 col-sm-6 col-xs-6 ">
					<div class="farm-products rbcol">
						<div class="product-img">
							<img src="images/store/<?php echo $pro_img; ?>">
						</div>
						<div class="product-content text-center">
							<form method="POST" class="addcartfrom_<?php echo $pro_id; ?>" >
								<h3><?php echo $pro_name; ?></h3>
								<span class="decor"></span>
								<p><?php echo $pro_desc; ?></p>
								<hr>

								<div class="row">
									<div class="col-md-6">
										<p><strong>Price:</strong> <?php echo $pro_price; ?></p>
									</div>
									<div class="col-md-6">
										<div class="<?php echo $pro_status_c; ?> mdiv">
											<span><?php echo $pro_status; ?></span>
										</div>
									</div>
								</div>
								
								<?php if ($isswiggy!=1){
									?>
								<hr>
								<div class="w3agile-button">
									<input type="hidden" name="pro_id" class="pro_id" value="<?php echo $pro_id; ?>"  />
									<!-- <input type="number" name="pro_quantity" class="pro_quantity" pattern="[0-9]*" value="0" size="2" min="0" max="10" /> -->
									<select name="pro_quantity" class="pro_quantity">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                    </select>
									<button type="button" data-id="<?php echo $pro_id; ?>" class="btn btn-popup btnAddAction btnAddCartAction">Add to cart</button>
								</div>

								<?php } else {?>


									<div > 
										<br/>
								<a  target="_blank" href='https://www.swiggy.com/restaurants/h-o-m-e-kitchen-and-salads-h-o-m-e-heaven-on-my-earth-kalena-agrahara-bangalore-303344'>	<button type="button" class="btn btn-light"><img style="width:100px" src="ad_min/images/swiggy.png"/></button></a>
	
									<a href="#"> </a></div>

								<?php } ?>
							</form>
						</div>
					</div>
				</div>
				<?php 
				}
			}
		}
	} 

	function update_status($id)
	{
	 	global $con;
		$sql = "UPDATE h_products SET pro_status = CASE WHEN pro_status = 1 THEN 0 ELSE 1 END WHERE pro_id='$id'";
		$qry = mysqli_query($con, $sql);
		if ($qry) 
		{
			$response = array(
				'success' => true, 
				'message' => "Successfull"
			);
		} else {
			$response = array(
				'success' => false, 
				'message' => "Failed"
			);
		}
		echo json_encode($response);
	}


	function update_product($data)
	{
		global $con;
		$response = true;
		$pro_id = $data['pro_id'];
		$pro_name = $data['pro_name'];
		$pro_desc = $data['pro_desc'];
		$pro_price = $data['pro_price'];
		$pro_status = $data['pro_status'];
		$isswiggy = $data['isswiggy']?1:0;
		// $pro_img = strtolower($data['pro_img_name']);
		// $img_tmp = $data['pro_img_name_tmp'];
		// $img_ext = $data['pro_img_ext'];
		// $img_size = $data['pro_img_size'];
        // $pro_created_by = "admin"; //strtolower($_SESSION['username']);
        // date_default_timezone_set('Asia/Kolkata');
        // $pro_created_at = date('Y-m-d H:i:s');
        $pro_updated_by = strtolower($_SESSION['username']);
        date_default_timezone_set('Asia/Kolkata');
        $pro_updated_at = date('Y-m-d H:i:s');
		//$extensions = array("jpeg","jpg","png");
		// if(in_array($img_ext, $extensions) === false) {
		// 	$response = "Extension not allowed, please choose a JPEG or PNG file.";
		// }
		// if($img_size > 2097152) {
		// 	$response = "File size must be less than 2 MB";
		// }
		// $destination = "../images/store/".$pro_img;
		if($response === true) 
		{
			// $up_status = move_uploaded_file($img_tmp, $destination);
			// if ($up_status) {
				$qry = "UPDATE h_products SET pro_name = '$pro_name', pro_desc = '$pro_desc', pro_price = '$pro_price', pro_status = '$pro_status', pro_updated_by = '$pro_updated_by', pro_updated_at = '$pro_updated_at', isswiggy='$isswiggy' WHERE pro_id = '$pro_id' ";
					echo $qry;
				$qry_result	= mysqli_query($con, $qry);
				if ($qry_result) {
					$response = true;
				} else {
					$response = "Mysqli updation failed";					
				}
			// } else {
			// 	$response = "Image uploaded failed";
			//}
		} else {
			$response = "FAILED FAILED";
		}
		return $response;
	}




	function tmp_del_pro_info($id)
	{
	 	global $con;
		$sql = "UPDATE h_products SET pro_tmp_del = 1 WHERE pro_id= '$id'";
		$qry = mysqli_query($con, $sql);
		if ($qry) 
		{
			$response = array(
				'success' => true, 
				'message' => "Successfull"
			);
		} else {
			$response = array(
				'success' => false, 
				'message' => "Failed"
			);
		}
		echo json_encode($response);
	}

	// function update_pro_info($id);
	// {
	//  	global $con;
	// 	$sql = "UPDATE h_products SET pro_status = CASE WHEN pro_status = 1 THEN 0 ELSE 1 END WHERE pro_id='$id'";
	// 	$qry = mysqli_query($con, $sql);
	// 	if ($qry) 
	// 	{
	// 		$response = array(
	// 			'success' => true, 
	// 			'message' => "Successfull"
	// 		);
	// 	} else {
	// 		$response = array(
	// 			'success' => false, 
	// 			'message' => "Failed"
	// 		);
	// 	}
	// 	echo json_encode($response);
	// }


	function add_product_cart($id,$quantity)
	{
		global $con;
		$pro_id =  $id;
		$quantity = $quantity;
		if(!empty($quantity)) 
		{
			$query = "SELECT * FROM h_products WHERE pro_id= '$pro_id'";
			$result = mysqli_query($con,$query);
			while($row=mysqli_fetch_assoc($result)) {
				$resultset[] = $row;
			}
			$productByName = $resultset;
			$itemArray = array(
				$productByName[0]["pro_name"]=>array(
					'pro_name'=>$productByName[0]["pro_name"],
					'quantity'=>$quantity, 
					'pro_price'=>$productByName[0]["pro_price"]
				)
			);

			session_start();
			
			if(!empty($_SESSION["cart_item"])) 
			{
				if(in_array($productByName[0]["pro_name"],array_keys($_SESSION["cart_item"]))) 
				{
					foreach($_SESSION["cart_item"] as $k => $v) 
					{
						if($productByName[0]["pro_name"] == $k) 
						{
							if(empty($_SESSION["cart_item"][$k]["quantity"])) {
								$_SESSION["cart_item"][$k]["quantity"] = 0;
							}
							$_SESSION["cart_item"][$k]["quantity"] += $quantity;
						}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}

			if ($_SESSION["cart_item"]) 
			{
				$response = array(
					'success' => true, 
					'message' => "Successfull",
					'sess_count' => count($_SESSION['cart_item']),
					'sess_data' => $_SESSION['cart_item']
				);
			} else {
				$response = array(
					'success' => false, 
					'message' => "Failed"
				);
			}

		} else {
			$response = array(
				'success' => false, 
				'message' => "Add products by mentioning quantity"
			);			
		}
		echo json_encode($response);
	}


?>