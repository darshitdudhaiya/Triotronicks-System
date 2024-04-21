<?php
$title = "Products";
require '../includes/styles.php';
require '../includes/navbar.php';

$products = select('SELECT Products.Name as productName,Products.Description as productDescription,  Productsimages.ImageName FROM ProductsImages INNER JOIN Products WHERE Productsimages.ProductsId = Products.Id');
?>


<section class="services-one services-page">
    <div class="container">
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
    </div>
</section>
<!--Services One End-->
<?php
require '../includes/footer.php';
require '../includes/scripts.php';
?>