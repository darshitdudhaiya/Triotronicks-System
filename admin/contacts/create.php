<?php

require("../../includes/init.php");
require(pathOf('admin/includes/auth.php'));

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    header('Content-Type: application/json');
    // $uploadedFiles = array();
    // if (isset($_FILES['images'])) {

    //     $time = time();
    //     for ($i = 0; $i < count($_FILES['images']['name']); $i++) {
    //         $tmpFileName = $_FILES['images']['tmp_name'][$i];
    //         $fileName = "$time-" . $_FILES['images']['name'][$i];

    //         $fileUploaded = move_uploaded_file($tmpFileName, pathOf("assets/uploads/service-images/$fileName"));
    //         if (!$fileUploaded) {
    //             echo json_encode(["status" => false, "message" => "Error uploading image(s)."]);
    //             exit();
    //         }

    //         array_push($uploadedFiles, $fileName);
    //     }
    // }
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];
    // $serviceDescription = $_POST['serviceDescription'];

    $query = "INSERT INTO `Contacts` (`Name`,`Email`,`Address`,`Mobile`) VALUES (?,?,?,?)";
    $params = [$name, $email, $address, $mobile];
    $inserted = execute($query, $params);

    // if ($inserted) {
    //     $serviceId = lastInsertId();
    //     foreach ($uploadedFiles as $file)
    //         execute("INSERT INTO `ServicesImages` (`ServicesId`, `ImageName`) VALUES (?, ?)", [$serviceId, $file]);
    // }
    echo json_encode(["status" => true, "message" => "Contact created successfully."]);
    exit();
}
$title = "Create New Contacts";

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
                    <h1>Create New Contacts</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= urlOf('admin/') ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= urlOf('admin/contacts') ?>">Contacts</a></li>
                        <li class="breadcrumb-item active">Create New</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col col-md-12">
                <form onsubmit="return createContacts();">
                    <div class="card card-outline card-info">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="col col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="Services-name">Name</label>
                                            <input type="text" class="form-control" id="contact-name" placeholder="Enter Name" autofocus required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="Services-name">Email</label>
                                            <input type="email" class="form-control" id="contact-email" placeholder="Enter Email" autofocus required>
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
                                                placeholder="Enter Address" required></textarea>
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
                                                placeholder="Enter Mobile Number" autofocus required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="Services-description">Services Description</label>
                                            <textarea rows="5" class="form-control" id="service-description"
                                                placeholder="Enter Services Description" required></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="images">Service Images</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="images" multiple
                                                    onchange="serviceImagesSelected();">
                                                <label class="custom-file-label" for="images">Select
                                                    images...</label>
                                            </div>
                                            <div class="input-group-append">
                                                <button type="button" class="btn btn-outline-danger"
                                                    onclick="clearServiceImages()">Clear</span>
                                            </div>
                                        </div>
                                        <div>&nbsp;</div>
                                        <div>Preview</div>
                                        <div>&nbsp;</div>
                                        <div id="img-preview-list">
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="card-footer">
                                <button id="btn-submit" type="submit" class="btn btn-success">
                                    <span id="btn-submit-text">Create</span>
                                    <span id="btn-submit-text-saved" style="display: none">Created!</span>
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