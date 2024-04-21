<?php

$title = "Contact";


require '../includes/styles.php';
require '../includes/navbar.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    header('Content-Type: application/json');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $mobile = $_POST['mobile'];

    $query = "INSERT INTO `Contacts` (`Name`,`Email`,`Message`,`Mobile`) VALUES (?,?,?,?)";
    $params = [$name, $email, $message, $mobile];
    $inserted = execute($query, $params);

    echo json_encode(["status" => true, "message" => "Contact created successfully."]);
    exit();
}

?>


<!--Contact Page Start-->
<section class="contact-page mt-5">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">Ask Any question</span>
            <h2 class="section-title__title">Feel Free to Contact</h2>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="contact-page__form">
                    <form class="comment-one__form contact-form-validated" novalidate="novalidate">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Your name" name="name" id="contact-name">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="comment-form__input-box">
                                    <input type="email" placeholder="Email Address" name="email" id="contact-email">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Phone number" name="mobile" id="contact-mobile">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Subject" name="Subject">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="comment-form__input-box">
                                    <textarea name="message" placeholder="Write Message" id="contact-message"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="contact-page__btn-box">
                                    <button type="submit" class="btn-style-one comment-form__btn">
                                        <i class="btn-curve"></i>
                                        <span class="btn-title">Send a message</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Contact Page End-->

<!--Google Map Start-->
<section class="contact-page-google-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d921.7733816554929!2d70.06266826955286!3d22.463119438072777!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39576adbc84c1639%3A0xc4e6425c7b3deb45!2sTriotronick%20Systems!5e0!3m2!1sen!2sin!4v1690801546018!5m2!1sen!2sin" class="contact-page-google-map__one" allowfullscreen></iframe>

</section>
<!--Google Map End-->
<script src="<?= urlOf('assets/vendors/jquery/jquery-3.6.0.min.js') ?>"></script>
<script>
    $("#submit-btn").on("click", function() {
        // $('#btn-submit').attr('disabled', '');

        // $('#btn-submit-text').hide();
        // $('#btn-submit-text-saved').hide();
        // $('#btn-submit-spinner').show();

        let formData = new FormData();
        // formData.append('class-id', $('#service').val());
        formData.append('name', $('#contact-name').val());
        formData.append('email', $('#contact-email').val());
        formData.append('message', $('#contact-message').val());
        formData.append('mobile', $('#contact-mobile').val());


        // let files = $('#images')[0].files;
        // for (let i = 0; i < files.length; i++) {
        //     formData.append('images[]', files[i]);
        // }
        $.ajax({
            method: 'POST',
            url: './contact.php',
            contentType: false,
            processData: false,
            data: formData,
            success: (response) => {
                if (response.status) {
                    console.log(response);
                    // $('#btn-submit-text').hide();
                    // $('#btn-submit-text-saved').show();
                    // $('#btn-submit-spinner').hide();

                    setTimeout(() => window.location.href = '../index.php', 1000);
                }
            }
        });

        return false;
    });
</script>
<?php
require '../includes/footer.php';
require '../includes/scripts.php';
?>