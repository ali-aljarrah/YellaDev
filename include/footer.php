<section class="contact-section section-padding" id="section_5">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12">
                <em class="text-white"><?php getContent("say_hello", "contact"); ?></em>
                <h2 class="text-white mb-4 pb-lg-2"><?php getContent("contact", "common"); ?></h2>
            </div>

            <div class="col-lg-6 col-12">
                <form id="contactForm" class="custom-form contact-form" role="form">

                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <label for="name" class="form-label"><?php getContent("name", "contact"); ?> <sup class="text-danger">*</sup></label>

                            <input type="text" name="name" id="name" class="form-control" placeholder="Jackson" required="">
                        </div>

                        <div class="col-lg-6 col-12">
                            <label for="email" class="form-label"><?php getContent("email", "contact"); ?></label>

                            <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Jack@gmail.com" required="">
                        </div>

                        <div class="col-12">
                            <label for="message" class="form-label"><?php getContent("how_can_we_help", "contact"); ?></label>

                            <textarea name="message" rows="4" class="form-control" id="message" placeholder="Message" required=""></textarea>

                        </div>

                        <!-- Hidden input for reCAPTCHA token -->
                        <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
                        <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                        <input type="hidden" name="hb" value="">
                    </div>

                    <div class="col-lg-5 col-12 mx-auto mt-3">
                        <button id="contactBtn" type="submit" class="form-control"><?php getContent("send_message", "contact"); ?></button>
                    </div>
                </form>
            </div>

            <div class="col-lg-6 col-12 mx-auto mt-5 mt-lg-0 ps-lg-5">
                <iframe class="google-map img-fluid h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6652.750346403488!2d36.287702691960384!3d33.51763002549413!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1518e703bd037f1d%3A0xe8bcdc5c749e2648!2z2KfZhNi02LnZhNin2YY!5e0!3m2!1sen!2s!4v1742981048859!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div>
    </div>
</section>

<footer class="site-footer">
    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-12 me-auto">
                <a href="/" class="p-3">
                    <img width="183" height="61" class="img-fluid bg-dark rounded" loading="lazy" src="/assets/imgs/logo.webp" alt="YellaDev Site Logo footer">
                </a>
            </div>

            <div class="col-lg-3 col-12 mt-4 mb-3 mt-lg-0 mb-lg-0">
                <em class="text-white d-block mb-4"><?php getContent("contact", "common"); ?></em>

                <p class="d-flex mb-1">
                    <strong class="mx-2"><?php getContent("phone", "contact"); ?> </strong> 
                    <a href="tel: 305-240-9671" class="site-footer-link">
                        (65)
                        305 2409 671
                    </a>
                </p>

                <p class="d-flex">
                    <strong class="mx-2"><?php getContent("email", "contact"); ?> </strong> 
                    <a href="mailto:info@yourgmail.com" class="site-footer-link">
                        hello@barista.co
                    </a>
                </p>
            </div>


            <div class="col-lg-5 col-12">
                <?php 
                    $iconPos = "text-start text-lg-end";
                    if($lang == "ar") {
                        $iconPos = "text-end text-lg-start";
                    }
                ?>
                <ul class="social-icon mt-4 <?php echo $iconPos; ?>">
                    <li class="social-icon-item">
                        <a href="#">
                            <svg class="scale-0-6" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
                                <path fill="#3F51B5" d="M42,37c0,2.762-2.238,5-5,5H11c-2.761,0-5-2.238-5-5V11c0-2.762,2.239-5,5-5h26c2.762,0,5,2.238,5,5V37z"></path><path fill="#FFF" d="M34.368,25H31v13h-5V25h-3v-4h3v-2.41c0.002-3.508,1.459-5.59,5.592-5.59H35v4h-2.287C31.104,17,31,17.6,31,18.723V21h4L34.368,25z"></path>
                            </svg>
                        </a>
                    </li>

                    <li class="social-icon-item">
                        <a href="#" target="_blank">
                            <svg class="scale-0-6" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
                                <radialGradient id="yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1" cx="19.38" cy="42.035" r="44.899" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fd5"></stop><stop offset=".328" stop-color="#ff543f"></stop><stop offset=".348" stop-color="#fc5245"></stop><stop offset=".504" stop-color="#e64771"></stop><stop offset=".643" stop-color="#d53e91"></stop><stop offset=".761" stop-color="#cc39a4"></stop><stop offset=".841" stop-color="#c837ab"></stop></radialGradient><path fill="url(#yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1)" d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z"></path><radialGradient id="yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2" cx="11.786" cy="5.54" r="29.813" gradientTransform="matrix(1 0 0 .6663 0 1.849)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#4168c9"></stop><stop offset=".999" stop-color="#4168c9" stop-opacity="0"></stop></radialGradient><path fill="url(#yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2)" d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z"></path><path fill="#fff" d="M24,31c-3.859,0-7-3.14-7-7s3.141-7,7-7s7,3.14,7,7S27.859,31,24,31z M24,19c-2.757,0-5,2.243-5,5	s2.243,5,5,5s5-2.243,5-5S26.757,19,24,19z"></path><circle cx="31.5" cy="16.5" r="1.5" fill="#fff"></circle><path fill="#fff" d="M30,37H18c-3.859,0-7-3.14-7-7V18c0-3.86,3.141-7,7-7h12c3.859,0,7,3.14,7,7v12	C37,33.86,33.859,37,30,37z M18,13c-2.757,0-5,2.243-5,5v12c0,2.757,2.243,5,5,5h12c2.757,0,5-2.243,5-5V18c0-2.757-2.243-5-5-5H18z"></path>
                            </svg>
                        </a>
                    </li>

                    <li class="social-icon-item">
                        <a href="#">
                            <svg class="scale-0-6" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
                                <path fill="#fff" d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z"></path><path fill="#fff" d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z"></path><path fill="#cfd8dc" d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z"></path><path fill="#40c351" d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z"></path><path fill="#fff" fill-rule="evenodd" d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-6 mb-4 mb-lg-0 mt-4">
                <p class="copyright-text mb-0">
                &copy; <?php getContent("copyright", "common"); ?> <?php getContent("yellaDev", "common"); ?> <span id="footer-date"></span>.   
                </p>
            </div>
            <div class="col-lg-6 text-center text-lg-end mt-4">
                <div class="d-flex justify-content-end align-items-end h-100">
                    <a class="copyright-text fs-14" href="/privacy_policy"><?php getContent("privacy_policy", "common"); ?></a>
                    <div class="mx-3"></div>
                    <a class="copyright-text fs-14" href="/terms_and_conditions"><?php getContent("terms_and_conditions", "common"); ?></a>
                </div>
            </div>
        </div>
</footer>

 <!-- JAVASCRIPT FILES -->
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/jquery.sticky.js" defer></script>
<!-- <script src="/assets/js/click-scroll.js" defer></script> -->
<script src="/assets/js/vegas.min.js" defer></script>
<script src="/assets/js/custom.js" defer></script>
<script src="/assets/js/bootstrap.bundle.min.js" defer></script>
<script src="/assets/js/toastr.min.js"defer></script>
<script src="/assets/js/main.js" defer></script>
<script src="https://www.google.com/recaptcha/api.js?render=6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></script>
<script>
    $(document).ready(function() {
        // Execute reCAPTCHA v3 on form submission
        $('#contactForm').on('submit', function(e) {
            e.preventDefault(); // Prevent default form submission

            $("#contactBtn").prop("disabled", true);

            if($('#name').val().trim() === '') {
                toastr.error("<?php echo getContent("error_name", "contact"); ?>");
                $("#contactBtn").prop("disabled", false);
                return;
            }

            var email = $('#email').val().trim();
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if(email === '') {
                toastr.error("<?php echo getContent("error_email", "contact"); ?>");
                $("#contactBtn").prop("disabled", false);
                return;
            }

            if (!emailPattern.test(email)) {
                toastr.error("<?php echo getContent("error_email", "contact"); ?>");
                $("#contactBtn").prop("disabled", false);
                return;
            }

            if($('#message').val().trim() === '') {
                toastr.error("<?php echo getContent("error_message", "contact"); ?>");
                $("#contactBtn").prop("disabled", false);
                return;
            }

            // Execute reCAPTCHA and get the token
            grecaptcha.ready(function() {
                grecaptcha.execute("<?php echo captcha_siteKey ?>", { action: 'submit' }).then(function(token) {
                    // Add the token to the hidden input
                    $('#g-recaptcha-response').val(token);

                    // Serialize form data
                    var formData = $('#contactForm').serialize();

                    // Send AJAX request
                    $.ajax({
                        url: '/helper/mail.php',
                        type: 'POST',
                        data: formData,
                        success: function(response) {
                            var response = JSON.parse(response);
                            $("#contactBtn").prop("disabled", false);

                            if (response.error) {
                                if (response.message == "name") {
                                    toastr.error("<?php echo getContent("error_name", "contact"); ?>");
                                    return;
                                }
                                if (response.message == "email") {
                                    toastr.error("<?php echo getContent("error_email", "contact"); ?>");
                                    return;
                                }
                                if (response.message == "message") {
                                    toastr.error("<?php echo getContent("error_message", "contact"); ?>");
                                    return;
                                }

                                toastr.error("<?php echo getContent("error_general", "contact"); ?>");
                                return;
                            }

                            toastr.success("<?php echo getContent("success_message", "contact"); ?>");
                            $('#contactForm')[0].reset(); // Reset the form
                        },
                        error: function(xhr, status, error) {
                            console.log(response)
                            $("#contactBtn").prop("disabled", false);
                            toastr.error("<?php echo getContent("error_general", "contact"); ?>");
                        }
                    });
                });
            });
        });
    });
</script>