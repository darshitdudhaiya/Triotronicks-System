<?php

require("../../includes/init.php");
require(pathOf('admin/includes/auth.php'));
require(pathOf('blog/utils.php'));

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    header('Content-Type: application/json');
    $uploadedFiles = array();
    if (isset($_FILES['images'])) {

        $time = time();
        for ($i = 0; $i < count($_FILES['images']['name']); $i++) {
            $tmpFileName = $_FILES['images']['tmp_name'][$i];
            $fileName = "$time-" . $_FILES['images']['name'][$i];

            $fileUploaded = move_uploaded_file($tmpFileName, pathOf("assets/uploads/service-images/$fileName"));
            if (!$fileUploaded) {
                echo json_encode(["status" => false, "message" => "Error uploading image(s)."]);
                exit();
            }

            array_push($uploadedFiles, $fileName);
        }
    }
    $serviceName = $_POST['serviceName'];
    $serviceDescription = $_POST['serviceDescription'];

    $blogPostMarkup = $_POST['blogPostMarkup'];

    $dateTime = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
    $currentDateTime = $dateTime->format('Y-m-d H:i:s');
    $currentTimestamp = $dateTime->getTimestamp();

    $blogFileName = "$currentTimestamp.txt";
    createBlogFile("$blogFileName", $blogPostMarkup);

    $query = "INSERT INTO `Services` (`Name`, `Description`,`ContentFileName`) VALUES (?, ?,?)";
    $params = [$serviceName, $serviceDescription, $blogFileName];
    $inserted = execute($query, $params);

    if ($inserted) {
        $serviceId = lastInsertId();
        foreach ($uploadedFiles as $file)
            execute("INSERT INTO `ServicesImages` (`ServicesId`, `ImageName`) VALUES (?, ?)", [$serviceId, $file]);
    }
    echo json_encode(["status" => true, "message" => "Services created successfully."]);
    exit();
}
$title = "Create New Services";
$thumbnailFileName = urlOf('assets/images/borders.png');

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
                    <h1>Create New Services</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= urlOf('admin/') ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= urlOf('admin/services') ?>">Services</a></li>
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
                <form onsubmit="return createServices();">
                    <div class="card card-outline card-info">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="col col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="Services-name">Services Name</label>
                                            <input type="text" class="form-control" id="service-name" placeholder="Enter Services Name" autofocus required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="Services-description">Services Description</label>
                                            <textarea rows="5" class="form-control" id="service-description" placeholder="Enter Services Description" required></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="images">Service Images</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="images" multiple onchange="serviceImagesSelected();">
                                                <label class="custom-file-label" for="images">Select
                                                    images...</label>
                                            </div>
                                            <div class="input-group-append">
                                                <button type="button" class="btn btn-outline-danger" onclick="clearServiceImages()">Clear</span>
                                            </div>
                                        </div>
                                        <div>&nbsp;</div>
                                        <div>Preview</div>
                                        <div>&nbsp;</div>
                                        <div id="img-preview-list">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="summernote">Blog Content</label>
                            </div>
                            <div id="summernote">

                            </div>
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
<script src="<?= urlOf('admin/js/services.js') ?>"></script>
<?php
require(pathOf('admin/includes/footer-part2.php'));
?>