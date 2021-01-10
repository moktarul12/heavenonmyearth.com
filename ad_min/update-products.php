<?php 
    include_once 'templates/header.php';
    include_once 'templates/side-nav.php';
    include_once 'templates/top-nav.php';
    if (isset($_POST['btnEditPro'])) {


        $data['pro_id'] = mysqli_real_escape_string($con, $_POST['productId']);
        $data['pro_name'] = mysqli_real_escape_string($con, $_POST['productName']);
        $data['pro_desc'] = mysqli_real_escape_string($con, $_POST['productDesc']);
        $data['pro_price'] = mysqli_real_escape_string($con, $_POST['productPrice']);
        $data['pro_status'] = mysqli_real_escape_string($con, $_POST['productStatus']);
        $data['isswiggy'] = $_POST['isswiggy']? true : false;
        // $data['pro_img_name'] = $_FILES['productImage']['name'];
        // $data['pro_img_name_tmp'] = $_FILES['productImage']['tmp_name'];
        // $data['pro_img_size'] = $_FILES['productImage']['size'];
        // $data['pro_img_ext'] = pathinfo($data['pro_img_name'], PATHINFO_EXTENSION);
        $result = update_product($data);
        if ($result === true) {
            echo "<script> alert('Updated Successfully'); window.location = 'products.php'; </script>";
            // header('Location: products.php', true, 303);
        } else {
            echo "<script> alert('".$result."'); </script>";
        }
    }


    if (isset($_GET['id'])) 
    {
        $id = mysqli_real_escape_string($con,$_GET['id']);
        global $con;
        $sql = "SELECT * FROM h_products WHERE pro_id = '$id'";
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

                    $pro_status_a = $pro_status_b = "";

                    $isswiggy = $row['isswiggy'];

                    if ($pro_status == 1) 
                    {
                        $pro_status_a = "selected";
                    } else {
                        $pro_status_b = "selected";
                    }
        ?>
                <!-- Tables content -->
                <section class="form-section">
                    <!-- Forms-4 -->
                    <div class="outer-w3-agile mt-3">
                        <h4 class="tittle-w3-agileits mb-4">Add New Product</h4>
                        <div class="row validform">
                            <div class="col-md-12 order-md-1 validform2">
                                <form  action="#" method="post" class="needs-validation" enctype="multipart/form-data">
                                    <div class="col-md-6 mb-3">
                                        <label for="productName">Product Name</label>
                                        <input type="text" hidden class="form-control" name="productId" id="productId" placeholder=""  required="" value=<?php echo $pro_id; ?>>
                                        <input type="text" class="form-control" name="productName" id="productName" placeholder=""  required="" value=<?php echo $pro_name; ?>>
                                        <div class="invalid-feedback">
                                            Valid first name is required.
                                        </div>
                                    </div><!-- 
                                    <div class="col-md-6 mb-3">
                                        <label for="productImage">Product Image</label>
                                        <input type="file" class="form-control" name="productImage" id="productImage" placeholder="" required="" value=<?php //echo $pro_desc; ?>>
                                        <div class="invalid-feedback">
                                            Valid first name is required.
                                        </div>
                                    </div> -->
                                    <div class="col-md-6 mb-3">
                                        <label for="productDesc">Product Description</label>
                                        <textarea class="form-control" name="productDesc" id="productDesc" placeholder="" required=""><?php echo $pro_desc; ?></textarea> 
                                        <div class="invalid-feedback">
                                            Valid first name is required.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="productPrice">Product Price</label>
                                        <input type="text" class="form-control" name="productPrice" id="productPrice" placeholder="" required="" value="<?php echo $pro_price; ?>">
                                        <div class="invalid-feedback">
                                            Valid first name is required.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="productStatus">Product Status</label>
                                        <select class="custom-select d-block w-100" name="productStatus" id="productStatus" required="">
                                            <option value="1" <?php echo $pro_status_a; ?> >Available</option>
                                            <option value="0" <?php echo $pro_status_b; ?> >Not Available</option>
                                        </select>

                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1"  <?php if ($isswiggy==1)  echo 'checked' ?> name="isswiggy" >
                                            <label class="form-check-label" for="exampleCheck1">is swiggy product</label>
                                        </div>
                                        <div class="invalid-feedback">
                                            Please select a valid country.
                                        </div>
                                    </div>  
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <button class="btn btn-primary btn-lg btn-block error-w3l-btn" name="btnEditPro" id="btnEditPro" type="submit">Submit Product</button>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <a href="products.php" class="btn btn-warning btn-lg btn-block error-w3l-btn" name="btnEditPro" id="btnEditPro">Back</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--// Forms-4 -->
                </section>
                <?php 
                        }
                    } else {
                        echo "<script>alert('Data not found');</script>";
                        header("Location: products.php");
                     } 
                } 
            } else {
                    header("Location: products.php");
            }
            ?>
                
        </div>
    </div>
<?php 
    include_once 'templates/footer.php';
    include_once 'templates/footer-bottom.php';
 ?>