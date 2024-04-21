<?php
$title = "Services";
require '../includes/styles.php';
require '../includes/navbar.php';

$services = select('SELECT services.Name as serviceName,services.Description as serviceDescription,services.Id as Id,  servicesimages.ImageName FROM servicesImages INNER JOIN services WHERE Servicesimages.ServicesId = services.Id');
?>


<section class="services-one services-page">
    <div class="container">
        <div class="row">
            <?php foreach ($services as $key => $service) { ?>
                <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                    <!--Services One Single-->
                    <div class="services-one__single">
                        <div class="services-one__img">
                            <img src="<?= urlOf('assets/uploads/service-images/' . $service['ImageName'] . '') ?>" alt="">

                        </div>
                        <div class="services-one__content">
                            <h3 class="services-one__title"><a href="<?= urlOf('pages/services-details.php?id=' . $service['Id'] . '') ?>"><?= $service["serviceName"] ?></a>
                            </h3>
                            <p class="services-one__text"><?= $service["serviceDescription"] ?></p>
                            <div class="services-one__arrow">
                                <a href="<?= urlOf('pages/services-details.php?id=' . $service['Id'] . '') ?>"><span class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<!--Services One End-->
<?php
require '../includes/footer.php';
require '../includes/scripts.php';
?>