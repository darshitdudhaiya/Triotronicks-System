<?php

require("../../includes/init.php");
require(pathOf('admin/includes/auth.php'));

if (!isset($_GET['id']))
{
    header('Location: ' . urlOf('admin/services'));
    exit();
}

$serviceId = $_GET['id'];

$imageName = selectOne("SELECT * FROM `servicesimages` WHERE `ServicesId` = ?", [$serviceId]);
$imagesDeleteFromFolder = unlink(pathOf('assets/uploads/service-images/' . $imageName['ImageName'] . ''));

$contentFileName = selectOne('SELECT * FROM `services` WHERE  `Id` = ? ',[$serviceId]);
$contentFileDeleteFromFolder = unlink(pathOf('assets/uploads/blog-files/'.$contentFileName['ContentFileName'].''));

if ($imagesDeleteFromFolder === true) {
    $imagesDelete = execute("DELETE FROM `servicesimages` WHERE `ServicesId` = ?", [$serviceId]);

    if ($imagesDelete) {
        execute("DELETE FROM `services` WHERE `Id` = ?", [$serviceId]);
    }
    header('Location: ' . urlOf('admin/services'));
}
