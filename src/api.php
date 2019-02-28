<?php

$connect = new mysqli("localhost", "root", "", "silveradmin");
if ($connect->connect_error) {
    die("Database connection failed...");
}
$response = array('error' => false);

$action = 'read';

if(isset($_GET['action'])) {
    $result = $connect->query("SELECT * FROM 'products'");
    $products = array();

    while ($row = $result->fetch_assoc()){
        array_push($products, $row);
    }
    $response['products'] = $products;
}

if ($action == 'create') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $result = $connect->query("INSERT INTO 'products' ('title', 'description', 'price') VALUES ('$title', '$description', '$price') ");
    if ($result) {
        $response['message'] = "Product added successfully";
    } else {
        $response['error'] = true;
        $response['message'] = "Product insert failed";
    }
}
if ($action == 'update') {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $result = $connect->query("UPDATE 'products' SET 'title' = '$title', 'description' = '$description', 'price' = '$price' WHERE 'id' = '$id'");
    if ($result) {
        $response['message'] = "Product updated successfully";
    } else {
        $response['error'] = true;
        $response['message'] = "Product update failed";
    }
}
if ($action == 'delete') {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $result = $connect->query("DELETE FROM 'product' WHERE 'id' = '$id'");
    if ($result) {
        $response['message'] = "Product deleted successfully";
    } else {
        $response['error'] = true;
        $response['message'] = "Product delete failed";
    }
}



$connect -> close();
header("Content-type: application/json");
echo json_encode($response);
die();
?>