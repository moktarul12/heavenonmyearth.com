<?php 
    include_once 'templates/header.php';
    include_once 'templates/side-nav.php';
    include_once 'templates/top-nav.php';
 ?>
        
            <!-- Tables content -->
            <section class="tables-section">
                <!-- table7 -->
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Products</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">S.L</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <?php 
                                        get_products();
                                     ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>


            
        </div>
    </div>
<?php 
    include_once 'templates/footer.php';
    include_once 'templates/footer-bottom.php';
 ?>