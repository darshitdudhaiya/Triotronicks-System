<?php

$title = "Home";
require './includes/styles.php';
require './includes/navbar.php';

$services = select('SELECT services.Name as serviceName,services.Description as serviceDescription,services.Id as Id,  servicesimages.ImageName FROM servicesImages INNER JOIN services WHERE Servicesimages.ServicesId = services.Id LIMIT 3');

$classes = select("SELECT * FROM `classes` LIMIT 4");

$products = select('SELECT Products.Name as productName,Products.Description as productDescription,  Productsimages.ImageName FROM ProductsImages INNER JOIN Products WHERE Productsimages.ProductsId = Products.Id LIMIT 3');

?>
<!-- Banner One Start -->
<section class="main-slider">
    <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                    "pagination": {
                    "el": "#main-slider-pagination",
                    "type": "bullets",
                    "clickable": true
                },
                    "navigation": {
                    "nextEl": "#main-slider__swiper-button-next",
                    "prevEl": "#main-slider__swiper-button-prev"
                    },
                    "autoplay": {
                    "delay": 5000
                }}'>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url(assets/images/backgrounds/rooftop-solar.jpg);"></div>
                <div class="image-layer-overlay"></div>
                <!-- /.image-layer -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-slider__content">
                                <h2>We Provide <span class="highlight">Quality</span> <br> solar material
                                </h2>

                                <a href="<?= urlOf('pages/services.php') ?>" class="btn-style-one">
                                    <i class="btn-curve"></i>
                                    <span class="btn-title">Discover More</span>
                                </a>
                                <div class="main-slider__side-text">Triotronick </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url(assets/images/backgrounds/main-slider-1-2.jpg);">
                </div>

                <div class="image-layer-overlay"></div>
                <!-- /.image-layer -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-slider__content">
                                <h2>We Provide <span class="highlight">Quality</span> <br> with best service
                                </h2>

                                <a href="<?= urlOf('pages/services.php') ?>" class="btn-style-one">
                                    <i class="btn-curve"></i>
                                    <span class="btn-title">Discover More</span>
                                </a>
                                <div class="main-slider__side-text">Triotronick </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url(assets/images/backgrounds/main-slider-1-3.jpg);">
                </div>

                <div class="image-layer-overlay"></div>
                <!-- /.image-layer -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-slider__content">
                                <h2>We Provide <span class="highlight">Quality</span> <br> in hardware - peripherals
                                </h2>

                                <a href="<?= urlOf('pages/services.php') ?>" class="btn-style-one">
                                    <i class="btn-curve"></i>
                                    <span class="btn-title">Discover More</span>
                                </a>
                                <div class="main-slider__side-text">Triotronick </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- If we need navigation buttons -->
        <div class="swiper-pagination" id="main-slider-pagination"></div>
        <div class="main-slider__nav">
            <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                <i class="icon-right-arrow icon-left-arrow"></i>
            </div>
            <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                <i class="icon-right-arrow"></i>
            </div>
        </div>
    </div>
</section>
<!--Banner One End-->

<!--Welcome One Start-->

<section class="welcome-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="welcome-one__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <div class="welcome-one__img-box">
                        <div class="welcome-one__img">
                            <img src="<?= urlOf('assets/images/resources/IMG-20230817-WA0000.jpg') ?>" alt="">
                        </div>

                        <!-- <div class="welcome-one__completed">
                            <div class="welcome-one__completed-icon">
                                <span class="icon-creative-design"></span>
                            </div>
                            <div class="welcome-one__completed-text">
                                <h6><span class="odometer" data-count="8800">00</span> Industry <br> Projects
                                    Completed</h6>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="welcome-one__right">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">Welcome to company</span>
                        <h2 class="section-title__title">Let’s Build Something Creative Together</h2>
                    </div>
                    <p class="project-full-width__text-1">Triotronick Systems, a renowned Proprietorship Firm, was established on August 23, 1992, by the visionary entrepreneurs, Shri Ashvinbhai Bhatt and Nileshbhai Bhatt. With a strong commitment to excellence, the company has been at the forefront of providing exceptional sales and servicing solutions for various technological products.</p>

                    <p class="project-full-width__text-1">Their comprehensive range of services includes sales and servicing of computers, printers, stabilizers, CCTV cameras, and solar rooftops. Over the years, Triotronic Systems has built a reputation for reliability and professionalism, becoming a preferred choice for individuals and businesses alike.</p>

                    <div class="d-flex justify-content-center">
                        <a href="<?= urlOf('pages/about.php') ?>" class="btn-style-one">
                            <i class="btn-curve"></i>
                            <span class="btn-title">Discover More</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Welcome One End-->

<!--Services One Start-->
<section class="services-one">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">Services we’re offering</span>
            <h2 class="section-title__title">Popular Services</h2>
        </div>
        <div class="row">
            <?php foreach ($services as $service) { ?>
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
        <div class="d-flex justify-content-center">
            <a href="<?= urlOf('pages/services.php') ?>" class="btn-style-one">
                <i class="btn-curve"></i>
                <span class="btn-title">Discover More</span>
            </a>
        </div>
    </div>
</section>
<!--Services One End-->

<!--Tabs Box One Start-->
<section class="tabs-box-one">
    <div class="container">
        <div class="tabs-box-one__main-tab-box tabs-box">
            <ul class="tab-buttons clearfix list-unstyled">
                <li data-tab="#powerful" class="tab-btn "><span>Triotronick Hardware</span></li>
                <li data-tab="#leading" class="tab-btn active-btn"><span>Triotronick Classes</span></li>
                <li data-tab="#solutions" class="tab-btn"><span>Trio Infotech</span></li>
            </ul>
            <div class="tabs-content">
                <!--tab-->
                <div class="tab " id="powerful">
                    <div class="tabs-content__inner">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="tabs-content__inner-left">
                                    <div class="tabs-content__inner-img">
                                        <img src="<?= urlOf('assets/images/backgrounds/main-slider-1-1.jpg') ?>" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="tabs-content__inner-right">
                                    <p class="tabs-content__inner-right-text">The majority have suffered
                                        alteration in some form humour or words which don't look even
                                        believable. If you are going to use a of you need to be sure there isn't
                                        anything.</p>
                                    <ul class="list-unstyled tabs-content__inner-list">
                                        <li>
                                            <div class="text">
                                                <h4>We’re Building Better Products</h4>
                                                <p>We understands that customer satisfaction starts with
                                                    arriving at your location on time</p>
                                            </div>
                                        </li>
                                        <li>

                                            <div class="text">
                                                <h4>Effective Industrial Team Work</h4>
                                                <p>We understands that customer satisfaction starts with
                                                    arriving at your location on time</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--tab-->
                <div class="tab active-tab" id="leading">
                    <div class="tabs-content__inner">
                        <div class="row flex-row-reverse">
                            <div class="col-xl-6 col-lg-6">
                                <div class="tabs-content__inner-right">
                                    <ul class="list-unstyled tabs-content__inner-list">
                                        <?php
                                        for ($i = 0; $i < 2; $i++) {
                                        ?>
                                            <li>
                                                <div class="text">
                                                    <h4><?= $classes[$i]["ClassName"] ?></h4>
                                                    <p><?= $classes[$i]["Description"] ?></p>
                                                </div>
                                            </li>
                                        <?php }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="tabs-content__inner-left pt-5">
                                    <div class="tabs-content__inner-img">
                                        <img src="<?= urlOf('assets/images/resources/Why-self-inspections-or-internal-audits-are-essential-for-your-QMS.jpg') ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--tab-->
                <div class="tab " id="solutions">
                    <div class="tabs-content__inner">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="tabs-content__inner-left pt-5">
                                    <div class="tabs-content__inner-img">
                                        <img src="<?= urlOf('assets/images/resources/Why-self-inspections-or-internal-audits-are-essential-for-your-QMS.jpg') ?>" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="tabs-content__inner-right">
                                    <p class="tabs-content__inner-right-text">We are providing services like Website Development , Software Development , Android Application , SEO , ERP etc.</p>
                                    <ul class="list-unstyled tabs-content__inner-list">
                                        <li>

                                            <div class="text">
                                                <h4>Web designing</h4>
                                                <p>We design websites with international standards in such a way that it stands out from your competitors’ website. Website is a powerful tool that can represent your company on web globally.</p>
                                            </div>
                                        </li>
                                        <li>

                                            <div class="text">
                                                <h4>Desktop Application</h4>
                                                <p>We are a Microsoft Windows Application Development company and we specialize in custom application development of Microsoft .Net framework and applications.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Tabs Box One End-->


<!--News One Start-->
<section class="news-one">
    <div class="container">
        <div class="section-title text-left text-center">
            <span class="section-title__tagline">From the Sales</span>
            <h2 class="section-title__title">Popular Products</h2>
        </div>
        <div class="row">
            <?php foreach ($products as $product) { ?>
                <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                    <!--Services One Single-->
                    <div class="services-one__single">
                        <div class="services-one__img">
                            <img src="<?= urlOf('assets/uploads/products-images/' . $product['ImageName'] . '') ?>" alt="">

                        </div>
                        <div class="services-one__content">
                            <h3 class="services-one__title"><?= $product["productName"] ?>
                            </h3>
                            <p class="services-one__text"><?= $product["productDescription"] ?></p>

                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="d-flex justify-content-center">
            <a href="<?= urlOf('pages/products.php') ?>" class="btn-style-one">
                <i class="btn-curve"></i>
                <span class="btn-title">Discover More</span>
            </a>
        </div>
    </div>
</section>
<!--News One End-->

<!--CTA One Start-->
<section class="cta-one">
    <div class="cta-one-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%" style="background-image: url(assets/images/backgrounds/cta-one-bg.jpg)"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="cta-one__inner wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                    <div class="cta-one__title">
                        <h2>Provide You Quality Work that <br> Meets Your Expectation</h2>
                    </div>
                    <div class="cta-one__btn-box">
                        <a href="<?= urlOf('pages/contact.php') ?>" class="btn-style-one cta-one__btn">
                            <i class="btn-curve"></i>
                            <span class="btn-title">Discover More</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--CTA One End-->
<?php
require './includes/footer.php';
require './includes/scripts.php';
?>