<?php 
    // Global Variable connection
    $connection = getConnection();
    $data = array();
    
    // Consult
    $select = "select * from products";
    $ret = $connection ->query($select);
    $products = $ret->fetchAll();
    var_dump($products);
    var_dump($products[0]['id_product']);
    exit;
    return $data;
?>