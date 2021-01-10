<?php 
    include_once 'templates/header.php';
    include_once 'templates/side-nav.php';
    include_once 'templates/top-nav.php';

    if (isset($_POST['btnSubmitPro'])) {
        $data['pro_name'] = mysqli_real_escape_string($con, $_POST['productName']);
        $data['pro_desc'] = mysqli_real_escape_string($con, $_POST['productDesc']);
        $data['pro_price'] = mysqli_real_escape_string($con, $_POST['productPrice']);
        $data['pro_status'] = mysqli_real_escape_string($con, $_POST['productStatus']);
        $data['pro_img_name'] = $_FILES['productImage']['name'];
        $data['pro_img_name_tmp'] = $_FILES['productImage']['tmp_name'];
        $data['pro_img_size'] = $_FILES['productImage']['size'];
        $data['pro_img_ext'] = pathinfo($data['pro_img_name'], PATHINFO_EXTENSION);
        $data['isswiggy'] = $_POST['isswiggy']? true : false;

        $result = add_product($data);
        if ($result === true) {
            echo "<script> alert('Uploaded successfully'); </script>";
        } else {
            echo "<script> alert('".$result."'); </script>";
        }
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
                                    <input type="text" class="form-control" name="productName" id="productName" placeholder=""  required="">
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="productImage">Product Image</label>
                                    <input type="file" class="form-control" name="productImage" id="productImage" placeholder="" required="">
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="productDesc">Product Description</label>
                                    <textarea class="form-control" name="productDesc" id="productDesc" placeholder="" required=""></textarea> 
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="productPrice">Product Price</label>
                                    <input type="text" class="form-control" name="productPrice" id="productPrice" placeholder="" required="">
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="productStatus">Product Status</label>
                                    <select class="custom-select d-block w-100" name="productStatus" id="productStatus" required="">
                                        <option value="1">Available</option>
                                        <option value="0">Not Available</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select a valid country.
                                    </div>
                                    <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1"  <?php if ($isswiggy==1)  echo 'checked' ?> name="isswiggy" >
                                            <label class="form-check-label" for="exampleCheck1">is swiggy product</label>
                                        </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <button class="btn btn-primary btn-lg btn-block error-w3l-btn" name="btnSubmitPro" id="btnSubmitPro" type="submit">Submit Product</button>
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


            
        </div>
    </div>
<?php 
    include_once 'templates/footer.php';
    include_once 'templates/footer-bottom.php';
 ?>