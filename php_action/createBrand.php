<?php
require_once 'core.php';

$valid['success'] = array(
    'success' => false,
    'messages' => array()
);

if ($_POST) {
    $brandName = $_POST['brandName'];
    $brandStatus = $_POST['brandStatus'];
    
    $sql = "insert into brands (brand_name, brand_active, brand_status) values ('$brandName', '$brandStatus', 1)";
    if ($connect->query($sql) === true) {
        $valid['success'] = true;
        $valid['messages'] = 'Successfully Added';
    } else {
        $valid['success'] = false;
        $valid['messages'] = 'Error while adding the brands';
    }
    
    $connect->close();
    
    echo json_encode($valid);
}

?>