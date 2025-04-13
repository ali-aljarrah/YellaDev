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

                            <input type="text" name="name" id="name" class="form-control" >
                        </div>

                        <div class="col-lg-6 col-12">
                            <label for="lastname" class="form-label"><?php getContent("last_name", "contact"); ?> <sup class="text-danger">*</sup></label>

                            <input type="text" name="lastname" id="lastname" class="form-control" >
                        </div>

                        <div class="col-lg-6 col-12">
                            <label for="email" class="form-label"><?php getContent("email", "contact"); ?> <sup class="text-danger">*</sup></label>

                            <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" >
                        </div>

                        <div class="col-lg-6 col-12">
                            <label for="phone" class="form-label"><?php getContent("phone", "contact"); ?> <sup class="text-danger">*</sup></label>

                            <input type="tel" name="phone" id="phone" class="form-control" >
                        </div>

                        <div class="col-12">
                            <label for="message" class="form-label"><?php getContent("how_can_we_help", "contact"); ?> <sup class="text-danger">*</sup></label>

                            <textarea name="message" rows="4" class="form-control" id="message" ></textarea>

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
                <img class="img-fluid rounded-4" width="600" height="400" loading="lazy" src="/assets/imgs/abo.webp" alt="<?php getContent("yellaDev", "common"); ?> - <?php getContent("contact", "common"); ?>">
            </div>

        </div>
    </div>
</section>
