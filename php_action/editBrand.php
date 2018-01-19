<?php
require_once 'core.php';

$valid['success'] = array(
    'success' => false,
    'messages' => array()
);

if ($_POST) {
    $brandName = $_POST['editBrandName'];
    $brandStatus = $_POST['editBrandStatus'];
    $brandId = $_POST['brandId'];
    
    $sql = "update brands set brand_name = '$brandName', brand_active = '$brandStatus' where brand_id = '$brandId'";
    if ($connect->query($sql) === true) {
        $valid['success'] = true;
        $valid['messages'] = "Successfully Updated";
    } else {
        $valid['success'] = false;
        $valid['messages'] = "Error while updating the brand";
    }
    
    $connect->close();
    
    echo json_encode($valid);
}

?>
