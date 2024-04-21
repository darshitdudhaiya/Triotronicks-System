<?php

require("../../includes/init.php");
require(pathOf('admin/includes/auth.php'));

if (!isset($_GET['id']))
{
    header('Location: ' . urlOf('admin/contacts'));
    exit();
}

$contactId = $_GET['id'];

execute("DELETE FROM `contacts` WHERE `Id` = ?", [$contactId]);

// execute("UPDATE `business` SET `IsDeleted` = 1 WHERE `Id` = ?", [$businessId]);
header('Location: ' . urlOf('admin/contacts'));
