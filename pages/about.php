<?php
$title = "About";
require '../includes/styles.php';
require '../includes/navbar.php';

$services = select('SELECT services.Name as serviceName,services.Description as serviceDescription,  servicesimages.ImageName FROM servicesImages INNER JOIN services WHERE Servicesimages.ServicesId = services.Id ');
?>

<!--About Page Start-->
<section class="about-page">
    <div class="container">
        <div class="row">
            <div class="col-xl-6" style="padding-top: 50px;">
                <!-- <div class="about-page__images-box">
                    <ul class="list-unstyled about-page__img-list">
                        <li>
                            <div class="about-page__img">
                                <img src="<?= urlOf('assets/images/resources/IMG-20230817-WA0014.jpg') ?>" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="about-page__img">
                                <img src="<?= urlOf('assets/images/resources/IMG-20230817-WA0010.jpg') ?>" alt="">
                            </div>
                        </li>
                    </ul>
                </div> -->
                <div class="welcome-one__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <div class="welcome-one__img-box">
                        <div class="welcome-one__img">
                            <img src="<?= urlOf('assets/images/resources/IMG-20230817-WA0010.jpg') ?>" alt="">
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
                <div class="about-page__right">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">Complete work list</span>
                        <h2 class="section-title__title">We Build Effective Top Buildings</h2>
                    </div>
                    <p class="project-full-width__text-1">The company boasts an extensive network of service stations in Shuthi, catering to the needs of top brands such as HP, Canon, Dell, Lenovo, Logitech, and Western Digital. In the mobile segment, they proudly serve as authorized service stations for renowned brands like Huawei, Motorola, Blackberry, Nokia, Honor, and more. Their expertise in handling these premium brands sets them apart from the competition.</p>
                    <p class="project-full-width__text-1">Triotronick Systems also excels in computerized data conversion of AMC (Annual Maintenance Contract) staff for various esteemed clients, including Corporate Companies, Government Institutions, Semi-Government Companies, Training Institutes, and Zilla Panchayats. Their dedication to precision and quality has earned them the trust of numerous satisfied customers.</p>
                    <p class="project-full-width__text-1">Under the leadership of Shri Ashvinbhai Bhatt and Nileshbhai Bhatt, the company continues to evolve, adapting to the ever-changing technological landscape, and striving for excellence in all aspects of their operations.</p>
                    <p class="project-full-width__text-1">With a strong focus on customer satisfaction and a commitment to delivering top-notch services, Triotronick Systems remains a dominant force in the industry.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--About Page End-->

<!--Team One Start-->

<!--Team One End-->
<!--CTA One Start-->
<section class="cta-one">
    <div class="cta-one-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%" style="background-image: url(<?= urlOf('assets/images/backgrounds/cta-one-bg.jpg') ?>)"></div>
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
require '../includes/footer.php';
require '../includes/scripts.php';
?>