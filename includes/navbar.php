<?php

$allServices = select('SELECT * FROM  `Services`');

?>

<body>
    <div class="preloader">
        <img class="preloader__image" width="60" src="<?= urlOf('assets/images/resources/logo-1.png') ?>" alt="" />
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
        <header class="main-header clearfix">
            <div class="main-header__top">
                <div class="container">
                    <div class="main-header__top-inner clearfix">
                        <div class="main-header__top-left">
                            <ul class="list-unstyled main-header__top-address">
                                <li>
                                    <div class="icon">
                                        <span class="icon-pin"></span>
                                    </div>
                                    <div class="text">
                                        <p>206, Siddharth Shopping Center, India</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-email"></span>
                                    </div>
                                    <div class="text">
                                        <a href="mailto:triotronick@gmail.com">triotronick@gmail.com</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="main-header__top-right">
                            <div class="main-header__top-right-social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="main-menu clearfix">
                <div class="main-menu-wrapper clearfix">
                    <div class="container clearfix">
                        <div class="main-menu-wrapper-inner clearfix">
                            <div class="main-menu-wrapper__logo">
                                <a href="<?= urlOf('index.php') ?>"><img src="<?= urlOf('assets/images/resources/logo-1.png') ?>" alt="" height="50px" class="space">
                                </a>
                            </div>
                            <div class="main-menu-wrapper__name">
                                <h3>Triotronick Systems</h3>
                            </div>

                            <div class="main-menu-wrapper__left clearfix">

                                <div class="main-menu-wrapper__main-menu">
                                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                    <ul class="main-menu__list">
                                        <li>
                                            <a href="<?= urlOf('index.php') ?>">Home</a>
                                            <!-- <ul>
                                        <li>
                                            <a href="index-2.html">Home One</a>
                                        </li>
                                        <li><a href="index2.html">Home Two</a></li>
                                        <li class="dropdown">
                                            <a href="#">Header Styles</a>
                                            <ul>
                                                <li><a href="index-2.html">Header One</a></li>
                                                <li><a href="index-2.html">Header Two</a></li>
                                            </ul>
                                        </li>
                                    </ul> -->
                                        </li>
                                        <li>
                                            <a href="<?= urlOf('pages/about.php') ?>">About</a>
                                            <!-- <ul>
                                        <li><a href="<?= urlOf('includes/about') ?>">About</a></li>
                                        <li><a href="team.html">Team Members</a></li>
                                        <li><a href="faq.html">FAQs</a></li>
                                        <li><a href="404.html">404 Error</a></li>
                                    </ul> -->
                                        </li>

                                        <!-- <li class="dropdown">
                                    <a href="#">Projects</a>
                                    <ul>
                                        <li><a href="project.html">Projects</a></li>
                                        <li><a href="project-details.html">Project Details</a></li>
                                        <li><a href="project-details-full-width.html">Project Full width</a>
                                        </li>
                                    </ul>
                                </li> -->
                                        <li class="dropdown">
                                            <a href="<?= urlOf('pages/services.php') ?>">Services</a>
                                            <ul>

                                                <?php
                                                foreach ($allServices as $service) {
                                                ?>
                                                    <li><a href="<?= urlOf('pages/services-details.php?id=' . $service['Id'] . '') ?>"><?= $service['Name'] ?></a></li>
                                                <?php
                                                }
                                                ?>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="<?= urlOf('pages/products.php') ?>">Sales</a>
                                            <!-- <ul>
                                        <li><a href="<?= urlOf('includes/about') ?>">About</a></li>
                                        <li><a href="team.html">Team Members</a></li>
                                        <li><a href="faq.html">FAQs</a></li>
                                        <li><a href="404.html">404 Error</a></li>
                                    </ul> -->
                                        </li>
                                        <li>
                                            <a href="<?= urlOf('pages/classes.php') ?>">Classes</a>
                                            <!-- <ul>
                                        <li><a href="<?= urlOf('includes/about') ?>">About</a></li>
                                        <li><a href="team.html">Team Members</a></li>
                                        <li><a href="faq.html">FAQs</a></li>
                                        <li><a href="404.html">404 Error</a></li>
                                    </ul> -->
                                        </li>
                                        <li><a href="<?= urlOf('pages/contact.php') ?>">Contact</a></li>
                                    </ul>

                                </div>
                            </div>
                            <!-- <div class="main-menu-wrapper__right">
                                <div class="main-menu-wrapper__call">
                                    <div class="main-menu-wrapper__call-icon">
                                        <span class="icon-phone"></span>
                                    </div>
                                    <div class="main-menu-wrapper__call-number">
                                        <a href="tel:92-666-888-0000">+91 - 94262 29400</a>
                                        <p>Mon to Sat: 9:00am to 9:00pm</p>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->