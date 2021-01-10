<?php 
    include_once 'templates/header.php';
    include_once 'templates/side-nav.php';
    include_once 'templates/top-nav.php';
 ?>
        
    <div class="container-fluid">
        <div class="row">
            <!-- Stats -->
            <div class="outer-w3-agile col-xl">
                <div class="stat-grid p-3 d-flex align-items-center justify-content-between bg-primary">
                    <div class="s-l">
                        <h5><a href="Products.php">Products</a></h5>
                        <p class="paragraph-agileits-w3layouts text-white">Available</p>
                    </div>
                    <div class="s-r">
                        <h6><?php count_no_hs(); ?>
                            <i class="far fa-edit"></i>
                        </h6>
                    </div>
                </div>
                <!-- <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-success">
                    <div class="s-l">
                        <h5>Clients</h5>
                        <p class="paragraph-agileits-w3layouts">Lorem Ipsum</p>
                    </div>
                    <div class="s-r">
                        <h6>250
                            <i class="far fa-smile"></i>
                        </h6>
                    </div>
                </div>
                <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-danger">
                    <div class="s-l">
                        <h5>Tasks</h5>
                        <p class="paragraph-agileits-w3layouts">Lorem Ipsum</p>
                    </div>
                    <div class="s-r">
                        <h6>232
                            <i class="fas fa-tasks"></i>
                        </h6>
                    </div>
                </div>
                <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-warning">
                    <div class="s-l">
                        <h5>Employees</h5>
                        <p class="paragraph-agileits-w3layouts">Lorem Ipsum</p>
                    </div>
                    <div class="s-r">
                        <h6>190
                            <i class="fas fa-users"></i>
                        </h6>
                    </div>
                </div> -->
            </div>
            <!--// Stats -->
            <!-- Pie-chart -->
            <div class="outer-w3-agile col-xl ml-xl-3 mt-xl-0 mt-3">
                <h4 class="tittle-w3-agileits mb-4">Heaven On My Earth</h4>
                <img src="../images/rgb-file.png" width="100%">
                <div id="chartdiv"></div>
            </div>
            <!--// Pie-chart -->
        </div>
    </div>
    <!-- Copyright -->
    <div class="copyright-w3layouts py-xl-3 py-2 mt-xl-5 mt-4 text-center">
        <p>© 2018 Modernize . All Rights Reserved | Design by
            <a href="http://w3layouts.com/"> W3layouts </a>
        </p>
    </div>
    <!--// Copyright -->
</div>
</div>

<?php 
    include_once 'templates/footer-bottom.php';
 ?>