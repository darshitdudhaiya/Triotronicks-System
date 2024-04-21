<?php

require("../../includes/init.php");
require(pathOf('admin/includes/auth.php'));

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id = $_POST['id'];
    $name = $_POST['contact-name'];
    $email = $_POST['contact-email'];
    $address = $_POST['contact-address'];
    $mobile = $_POST['contact-mobile'];
    // $serviceDescription = $_POST['service-description'];

    $query = "UPDATE `Contacts` SET `Name` = ?,`Email` = ?,`Address` = ?,`Mobile` = ? WHERE `Id` = ?";
    $params = [$name,$email,$address,$mobile, $id];

    execute($query, $params);

    header('Content-Type: application/json');
    echo json_encode(["status" => true, "message" => "Classes edited successfully."]);

    exit();
} elseif (!isset($_GET['id'])) {
    header('Location: ' . urlOf('admin/contacts'));
    exit();
}

$title = "Edit Contacts";

$id = $_GET['id'];
$query = "SELECT * FROM `contacts` WHERE `Id` = ?";
$contact = selectOne($query, [$id]);

require(pathOf('admin/includes/header.php'));
require(pathOf('admin/includes/nav.php'));
require(pathOf('admin/includes/sidebar.php'));

?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Contacts</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= urlOf('admin/') ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= urlOf('admin/contacts') ?>">Contacts</a></li>
                        <li class="breadcrumb-item active">Edit Contacts</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col col-md-12">
                <form onsubmit="return editContact(<?= $id ?>);">
                    <div class="card card-outline card-info">
                        <!-- /.card-header -->
                        <div class="card-body">
                        <div class="card-body">
                            <div class="col col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="Services-name">Name</label>
                                            <input type="text" class="form-control" id="contact-name" placeholder="Enter Name" autofocus required value="<?=$contact['Name']?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="Services-name">Email</label>
                                            <input type="email" class="form-control" id="contact-email" placeholder="Enter Email" autofocus required value="<?=$contact['Email']?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="Services-name">Address</label>
                                            <textarea rows="5" class="form-control" id="contact-address"
                                                placeholder="Enter Address" required><?=$contact['Address']?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="Services-name">Mobile</label>
                                            <input type="text" class="form-control" id="contact-mobile"
                                                placeholder="Enter Mobile Number" autofocus required value="<?=$contact['Mobile']?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                         
                            <!-- <div class="col col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="service-description">Service Description</label>
                                            <textarea rows="5" class="form-control" id="service-description" placeholder="Enter Service Description" required><?= $service['Description'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="card-footer">
                                <button id="btn-submit" type="submit" class="btn btn-success">
                                    <span id="btn-submit-text">Save</span>
                                    <span id="btn-submit-text-saved" style="display: none">Saved!</span>
                                    <div id="btn-submit-spinner" class="spinner-border spinner-border-sm" role="status" style="display: none">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
<?php
require(pathOf('admin/includes/footer-part1.php'));
require(pathOf('admin/includes/scripts.php'));
?>
<script src="<?= urlOf('admin/js/contacts.js') ?>"></script>
<?php
require(pathOf('admin/includes/footer-part2.php'));
?>