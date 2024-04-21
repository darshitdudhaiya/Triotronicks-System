<?php

$allServices = select('SELECT * FROM  `Services`');
?>

<!--Site Footer One Start-->
<footer class="site-footer">
    <div class="site-footer__top">
        <div class="container">
            <div class="site-footer__top-inner">
                <div class="site-footer-map" style="background-image: url(<?= urlOf('assets/images/shapes/site-footer-mape.png') ?>)"></div>
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="footer-widget__column footer-widget__about">
                            <div class="footer-widget__about-logo">
                                <a href="<? urlOf('index.php') ?>" class="footer-widget__about-text"><img src="<?= urlOf('assets/images/resources/logo-1.png') ?>" alt=""> Triotronick Systems</a>
                            </div>
                            <p class="footer-widget__about-text">Great Experience for Building Construction &
                                Materials</p>
                            <div class="footer-widget__about-social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="footer-widget__column footer-widget__links clearfix">
                            <h3 class="footer-widget__title">Links</h3>
                            <ul class="footer-widget__links-list list-unstyled">
                                <li><a href="<?= urlOf('pages/about.php') ?>">About Us</a></li>
                                <li><a href="<?= urlOf('pages/products.php') ?>">Products</a></li>
                                <li><a href="<?= urlOf('pages/services.php') ?>">Services</a></li>
                                <li><a href="<?= urlOf('pages/contact.php') ?>">Contacts</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="footer-widget__column footer-widget__links clearfix">
                            <h3 class="footer-widget__title">Services</h3>
                            <ul class="footer-widget__links-list list-unstyled">


                                <?php
                                foreach ($allServices as $service) {
                                ?>
                                    <li><a href="<?= urlOf('pages/services-details.php?id=' . $service['Id'] . '') ?>"><?= $service['Name'] ?></a></li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="footer-widget__column footer-widget__contact">
                            <h3 class="footer-widget__title">Contact</h3>
                            <ul class="list-unstyled footer-widget__contact-list">
                                <li>
                                    <div class="icon">
                                        <span class="icon-telephone"></span>
                                    </div>
                                    <div class="text">
                                        <p><a href="tel:+91 79843 85938">+91 79843 85938</a></p>
                                        <p><a href="tel:+91 79844 93532">+91 79844 93532</a></p>
                                    </div>
                                    <div class="text">
                                        <p><a href="tel:+91 94262 29400">+91 94262 29400</a></p>
                                        <p><a href="tel:+91 94269 13150">+91 94269 13150</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-email"></span>
                                    </div>
                                    <div class="text">
                                        <p><a href="mailto:triotronick@gmail.com">triotronick@gmail.com</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-pin"></span>
                                    </div>
                                    <div class="text">
                                        <p>206, Siddharth Shoping Center, Nr. Jolly Bunglow, Summair Club Road,<br /> Jamnagar - 361005</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-footer__bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="site-footer__bottom-inner">
                        <p class="site-footer__bottom-text">© All Copyright 2023 by <a href="https://trioinfotech.in">Trioinfotech.in</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Site Footer One End-->
</div><!-- /.page-wrapper -->
<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="<?= urlOf('index.php') ?>" class="fs-4 text-white" aria-label="logo"><img src="<?= urlOf('assets/images/resources/logo-1.png') ?>" width="50" height="50" alt="" /> Triotronick Systems</a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto:triotronick@gmail.com">triotronick@gmail.com</a>
            </li>
            <li>
                <i class="fa fa-phone-alt"></i>
                <a href="tel:+91 79843 85938">+91 79843 85938</a>
            </li>
            <li>
                <i class="fa fa-phone-alt"></i>
                <a href="tel:+91 94262 29400">+91 94262 29400</a>
            </li>
            <li>
                <i class="fa fa-phone-alt"></i>
                <a href="tel:+91 79844 93532">+91 79844 93532</a>
            </li>
            <li>
                <i class="fa fa-phone-alt"></i>
                <a href="tel:+91 94269 13150">+91 94269 13150</a>
            </li>
        </ul><!-- /.mobile-nav__contact -->
        <div class="mobile-nav__top">
            <div class="mobile-nav__social">
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-facebook-square"></a>
                <a href="#" class="fab fa-pinterest-p"></a>
                <a href="#" class="fab fa-instagram"></a>
            </div><!-- /.mobile-nav__social -->
        </div><!-- /.mobile-nav__top -->



    </div>
    <!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->

<div class="search-popup">
    <div class="search-popup__overlay search-toggler"></div>
    <!-- /.search-popup__overlay -->
    <div class="search-popup__content">
        <form action="#">
            <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
            <input type="text" id="search" placeholder="Search Here..." />
            <button type="submit" aria-label="search submit" class="thm-btn">
                <i class="icon-magnifying-glass"></i>
            </button>
        </form>
    </div>
    <!-- /.search-popup__content -->
</div>
<!-- /.search-popup -->
<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>