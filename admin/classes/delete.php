<?php

require("../../includes/init.php");
require(pathOf('admin/includes/auth.php'));

if (!isset($_GET['id']))
{
    header('Location: ' . urlOf('admin/classes'));
    exit();
}

$classId = $_GET['id'];
echo $classId;
$imageName = selectOne("SELECT * FROM `classesimages` WHERE `ClassId` = ?", [$classId]);
$imagesDeleteFromFolder = unlink(pathOf('assets/uploads/class-images/' . $imageName['ImageName'] . ''));

if ($imagesDeleteFromFolder === true) {
    $imagesDelete = execute("DELETE FROM `classesimages` WHERE `ClassID` = ?", [$classId]);

    if ($imagesDelete) {
        execute("DELETE FROM `classes` WHERE `Id` = ?", [$classId]);
    }
    header('Location: ' . urlOf('admin/classes'));
}
