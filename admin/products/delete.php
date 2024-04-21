<?php

require("../../includes/init.php");
require(pathOf('admin/includes/auth.php'));

if (!isset($_GET['id'])) {
    header('Location: ' . urlOf('admin/products'));
    exit();
}
$productId = $_GET['id'];

$imageName = selectOne("SELECT * FROM `productsimages` WHERE `ProductsId` = ?", [$productId]);
$imagesDeleteFromFolder = unlink(pathOf('assets/uploads/products-images/' . $imageName['ImageName'] . ''));

if ($imagesDeleteFromFolder === true) {
    $imagesDelete = execute("DELETE FROM `productsimages` WHERE `ProductsId` = ?", [$productId]);

    if ($imagesDelete) {
        execute("DELETE FROM `products` WHERE `Id` = ?", [$productId]);
    }
    header('Location: ' . urlOf('admin/products'));
}
