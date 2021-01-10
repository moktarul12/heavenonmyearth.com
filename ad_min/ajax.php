<?php  
    include_once "inc/db.php";
    include_once "inc/functions.php";

    if (isset($_POST['avail_pro_id'])) {
        $id = mysqli_real_escape_string($con, $_POST['avail_pro_id']);
        update_status($id);
    } else if (isset($_POST['edit_pro_id'])) {
        $id = mysqli_real_escape_string($con, $_POST['edit_pro_id']);
        update_pro_info($id);
    } else if (isset($_POST['pro_del_id'])) {
        $id =  mysqli_real_escape_string($con,$_POST['pro_del_id']);
        tmp_del_pro_info($id);
    } else if (isset($_POST['pro_quantity'])) {
        $pro_id =  mysqli_real_escape_string($con,$_POST['pro_id']);
        $pro_quantity =  mysqli_real_escape_string($con,$_POST['pro_quantity']);
        add_product_cart($pro_id, $pro_quantity);
    } else {
        $response = array(
            'success' => false,
            'message' => 'un-authorised'
        );
        echo json_encode($response, JSON_PRETTY_PRINT);
    }
?>