<?php
// required headers
// header("Access-Control-Allow-Origin: *");
// header("Content-Type: application/json; charset=UTF-8");
// database connection will be here
// include database and object files
include_once '../config/database.php';
include_once '../objects/product.php';
// instantiate database and product object
$database = new Database();
$db = $database->getConnection();
// initialize object
$product = new Product($db);
// create product here
// query products
echo "<pre>";
var_dump($_POST);

$insertInt = $_POST;

$result = $product->delete($insertInt);

?>

<form action="http://localhost/glu-base-api-feature-opdracht3-uitleg/product/delete.php" method="post">
    <input type="number" name="id" id="id" placeholder="id product">
    <input type="submit" value="Verzenden">
</form>