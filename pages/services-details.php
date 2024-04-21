<?php
$title = 'Service';
require '../includes/styles.php';
require '../includes/navbar.php';


$id = $_GET['id'];
$query = "SELECT * FROM `services` WHERE `Id` = $id";
$queryForImage = "SELECT * FROM `servicesimages` WHERE `ServicesId` = ?";
$service = selectOne($query);
$image = selectOne($queryForImage, [$id]);
require(pathOf('blog/utils.php'));
$blogPostMarkup = readBlogFile($service['ContentFileName']);


?>
<!--Sevice Details Start-->
<section class="service-details">
	<div class="container">
		<div class="row">
			<div class="col-xl-4 col-lg-5">
				<div class="service-details__sidebar">
					<div class="service-details__sidebar-service">
						<ul class="service-details__sidebar-service-list list-unstyled">
							<?php
							foreach ($allServices as $service) {
							?>
								<li><a href="<?= urlOf('pages/services-details.php?id=' . $service['Id'] . '') ?>"><?= $service['Name'] ?><span class="fa fa-angle-right"></span></a></li>
							<?php
							}
							?>

						</ul>
					</div>
				</div>
			</div>
			<div class="col-xl-8 col-lg-7">
				<div class="service-details__right">
					<div class="service-details__img">
						<img src="<?= urlOf('assets/uploads/service-images/' . $image['ImageName'] . '') ?>" alt="">

					</div>
					<div class="service-details__content">
						<?= $blogPostMarkup ?>
						<!-- <p class="project-full-width__text-1">Triotronick Systems Provides entire range of Desktop / Laptop / Personal Computing solution as per enterprise and individual client’s requirements. We also provide 24X7 Support for entire range of products.</p>
						<p class="project-full-width__text-1 fw-bold">Triotronick Systems provides Personal computing sells and support for products as under:</p>
						<ul class="list-unstyled service-details__benefits-list ">
							<li>
								<div class="icon">
									<span class="icon-check"></span>
								</div>
								<div class="text">
									<p>Workstation</p>
								</div>
							</li>
							<li>
								<div class="icon">
									<span class="icon-check"></span>
								</div>
								<div class="text">
									<p>Desktop Computer</p>
								</div>
							</li>
							<li>
								<div class="icon">
									<span class="icon-check"></span>
								</div>
								<div class="text">
									<p>Laptop</p>
								</div>
							</li>
							<li>
								<div class="icon">
									<span class="icon-check"></span>
								</div>
								<div class="text">
									<p>Notebook</p>
								</div>
							</li>
							<li>
								<div class="icon">
									<span class="icon-check"></span>
								</div>
								<div class="text">
									<p>Tablet PC</p>
								</div>
							</li>
							<li>
								<div class="icon">
									<span class="icon-check"></span>
								</div>
								<div class="text">
									<p>Server Computers</p>
								</div>
							</li>
						</ul>
						<p class="project-full-width__text mt-5">At Triotronick Systems, we are committed to offer you the best branded Dell, HP, Lenovo, Asus, Acer, Sony laptops & desktops, as one of reputed authorized dealers & distributors in Jamnagar, Gujarat.</p> -->
					</div>
				</div>
			</div>
		</div>
</section>
<!--Sevice Details End-->
<?php
require '../includes/footer.php';
require '../includes/scripts.php';
?>