<?php
require_once 'core.php';

$valid['success'] = array(
    'success' => false,
    'messages' => array()
);
$brandId = $_POST['brandId'];

if ($brandId) {
    $sql = "update brands set brand_status = 2 where brand_id = {$brandId}";
    if ($connect->query($sql) === true) {
        $valid['success'] = true;
        $valid['messages'] = "Successfully Removed";
    } else {
        $valid['success'] = false;
        $valid['messages'] = "Error while removing the brand";
    }
    $connect->close();
    
    echo json_encode($valid);
}

?>
