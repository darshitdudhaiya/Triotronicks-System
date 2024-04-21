<?php

require('../../includes/init.php');
header('Content-Type: application/json');

if (!isset($_GET['id']))
{
    echo json_encode(['status' => false, 'message' => 'Could not delete image.']);
    exit();
}

$id = $_GET['id'];

$image = selectOne("SELECT `ImageName` FROM `SalesImages` WHERE `Id` = ?", [$id]);
unlink(pathOf('assets/uploads/sales-images/' . $image['ImageName']));

execute("DELETE FROM `SalesImages` WHERE `Id` = ?", [$id]);
echo json_encode(['status' => true, 'message' => 'Image deleted.']);