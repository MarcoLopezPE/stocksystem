<?php
require_once 'core.php';

$valid['success'] = array(
    'success' => false,
    'messages' => array()
);

if ($_POST) {
    $categoriesName = $_POST['categoriesName'];
    $categoriesStatus = $_POST['categoriesStatus'];
    
    $sql = "insert into category (categories_name, categories_active, categories_status) values ('$categoriesName', '$categoriesStatus', 1)";
    if ($connect->query($sql) === true) {
        $valid['success'] = true;
        $valid['messages'] = 'Successfully Added';
    } else {
        $valid['success'] = false;
        $valid['messages'] = 'Error while adding the categories';
    }
    
    $connect->close();
    
    echo json_encode($valid);
}

?>