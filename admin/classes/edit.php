<?php

require("../../includes/init.php");
require(pathOf('admin/includes/auth.php'));

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id = $_POST['id'];
    $className = $_POST['class-name'];
    $description = $_POST['class-description'];
    $uploadedFiles = array();
    if (isset($_FILES['images'])) {
        $imageName = selectOne("SELECT * FROM `classesimages` WHERE `ClassId` = ?", [$id]);
        $imagesDeleteFromFolder = unlink(pathOf('assets/uploads/class-images/' . $imageName['ImageName'] . ''));
        
        $time = time();
        for ($i = 0; $i < count($_FILES['images']['name']); $i++) {
            $tmpFileName = $_FILES['images']['tmp_name'][$i];
            $fileName = "$time-" . $_FILES['images']['name'][$i];

            $fileUploaded = move_uploaded_file($tmpFileName, pathOf("assets/uploads/class-images/$fileName"));
            if (!$fileUploaded) {
                echo json_encode(["status" => false, "message" => "Error uploading image(s)."]);
                exit();
            }

            array_push($uploadedFiles, $fileName);
        }
    }

    $query = "UPDATE `Classes` SET `ClassName` = ?, `Description` = ? WHERE `Id` = ?";
    $params = [$className, $description, $id];

    $edited = execute($query, $params);
    if ($edited) {
        $classId = $_POST['id'];
        foreach ($uploadedFiles as $file) {
            execute("UPDATE `ClassesImages` SET `ImageName` =  ? WHERE `ClassId` = ?", [$file, $classId]);
        }
    }
    header('Content-Type: application/json');
    echo json_encode(["status" => true, "message" => "Classes edited successfully."]);

    exit();
} elseif (!isset($_GET['id'])) {
    header('Location: ' . urlOf('admin/classes'));
    exit();
}

$title = "Edit Classes";

$id = $_GET['id'];
$query = "SELECT * FROM `classes` WHERE `Id` = ?";
$queryForImage = "SELECT * FROM `classesimages` WHERE `ClassId` = ?";

$class = selectOne($query, [$id]);
$image = selectOne($queryForImage, [$id]);


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
                    <h1>Edit Classes</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= urlOf('admin/') ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= urlOf('admin/classes') ?>">Classes</a></li>
                        <li class="breadcrumb-item active">Edit Classes</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col col-md-12">
                <form onsubmit="return editClass(<?= $id ?>);">
                    <div class="card card-outline card-info">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="col col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="class-name">Class Name</label>
                                            <input type="text" class="form-control" id="class-name" placeholder="Enter Service Name" autofocus required value="<?= $class['ClassName'] ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                         
                            <div class="col col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="class-description">Class Description</label>
                                            <textarea rows="5" class="form-control" id="class-description" placeholder="Enter Service Description" required><?= $class['Description'] ?></textarea>
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
                                                <input type="file" class="custom-file-input" value="<?= urlOf('assets/uploads/class-images/' . $image['ImageName'] . '') ?>" id="images" multiple onchange="classImagesSelected();">
                                                <label class="custom-file-label" for="images">Select
                                                    images...</label>
                                            </div>
                                            <div class="input-group-append">
                                                <button type="button" class="btn btn-outline-danger" onclick="clearClassImages()">Clear</span>
                                            </div>
                                        </div>
                                        <div>&nbsp;</div>
                                        <div>Preview</div>
                                        <div>&nbsp;</div>
                                        <div id="img-preview-list">
                                            <img src="<?= urlOf('assets/uploads/class-images/' . $image['ImageName'] . '') ?>" class="img-preview">
                                        </div>
                                    </div>
                                </div>
                            </div>
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
<script src="<?= urlOf('admin/js/classes.js') ?>"></script>
<?php
require(pathOf('admin/includes/footer-part2.php'));
?>