<?php include 'include/head.php'; ?>
<title><?php getContent("yellaDev", "common"); ?> - <?php getContent("home", "common"); ?></title>
<meta name="description" content="YellaDev builds high-performance websites & digital experiences to help startups and brands stand out online. Creative, technical, results-driven.">

<link rel="canonical" href="https://yelladev.com/">
<meta property="og:url" content="https://yelladev.com/">
<meta property="og:title" content="<?php getContent("yellaDev", "common"); ?> - <?php getContent("home", "common"); ?>">
<meta property="og:description" content="YellaDev builds high-performance websites & digital experiences to help startups and brands stand out online. Creative, technical, results-driven.">

<style>
    .domain-checker {
        max-width: 600px;
        margin: 2rem auto;
        padding: 2rem;
        border-radius: 8px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }

    .domain-input-group {
        display: flex;
        margin-bottom: 1rem;
    }

    <?php
    if ($lang == "ar") {
        echo '
                 #domain-name {
                    border-top-left-radius: 0;
                    border-bottom-left-radius: 0;
                }
                #domain-suffix {
                    border-top-right-radius: 0;
                    border-bottom-right-radius: 0;
                    width: 120px;
                    height: 52px;
                    background: 0 0;
                    border: 2px solid #FFFFFF;
                    color: #FFFFFF;
                    font-weight: bold;
                    font-size: 16px;
                    padding: 12px 28px !important;
                }
                ';
    } else {
        echo '
                 #domain-name {
                    border-top-right-radius: 0;
                    border-bottom-right-radius: 0;
                }
                #domain-suffix {
                    border-top-left-radius: 0;
                    border-bottom-left-radius: 0;
                    width: 120px;
                    height: 52px;
                }
                ';
    }

    ?>
</style>

</head>

<body class="pt-0">

    <?php include 'include/loader.php'; ?>
    <?php include 'include/menu.php'; ?>

    <main>
        <!-- section 1  -->

        <section class="hero-section d-flex justify-content-center align-items-center">

            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-6 col-12 mx-auto">
                        <em class="small-text"><?php getContent("welcome_to", "home"); ?></em>

                        <h1><?php getContent("yellaDev", "common"); ?></h1>

                        <p class="text-white mb-4 pb-lg-2">
                            <?php getContent("where_innovation", "home"); ?>
                        </p>

                        <p class="text-white mb-4 pb-lg-2">
                            <?php getContent("we_dont_just_build_websites", "home"); ?>
                        </p>
                    </div>

                </div>
            </div>

            <div class="hero-slides vegas-container" style="padding: 0px;">
                <div class="vegas-slide vegas-transition-fade vegas-transition-fade-in vegas-transition-fade-out" style="transition: 1000ms;">
                    <div class="vegas-slide-inner vegas-animation-kenburns">
                    </div>
                </div>
                <div class="vegas-slide vegas-transition-fade vegas-transition-fade-in" style="transition: 1000ms;">
                    <div class="vegas-slide-inner vegas-animation-kenburns" style="background-color: rgba(0, 0, 0, 0); background-position: center center; background-size: cover; animation-duration: 5000ms;">
                    </div>
                </div>
                <div class="vegas-content-scrollable">
                    <div class="vegas-content" style="overflow: visible; padding: 0px;">
                    </div>
                </div>
            </div>

        </section>

        <section class="py-5 my-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 mb-5 mb-lg-0 wow animate__animated <?php echo ($lang == "ar") ? 'animate__fadeInRight' : 'animate__fadeInLeft'; ?>" data-wow-duration="2s" data-wow-delay=".2s">
                        <h2 class="text-white mb-4 h2"><?php getContent("domain_checker", "home") ?></h2>

                        <form method="post" id="domainForm" name="domainForm" class="mb-3 custom-form contact-form" role="form">
                            <div class="domain-input-group">
                                <input type="text" class="form-control" id="domain-name" name="domain_name"
                                    placeholder="yourdomain" required>
                                <select class="form-select" id="domain-suffix" name="suffix">
                                    <option value=".com">.com</option>
                                    <option value=".net">.net</option>
                                    <option value=".org">.org</option>
                                    <option value=".io">.io</option>
                                    <option value=".co">.co</option>
                                    <option value=".dev">.dev</option>
                                </select>
                            </div>

                            <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
                            <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                            <input type="hidden" name="hb" value="">

                            <button type="submit" name="DomainCheckBtn" id="DomainCheckBtn" class="form-control check-btn w-fit">
                                <?php getContent("check_availability", "home") ?>
                            </button>
                        </form>
                    </div>
                    <div class="col-lg-7 d-none d-lg-block wow animate__animated <?php echo ($lang == "ar") ? 'animate__fadeInLeft' : 'animate__fadeInRight'; ?>" data-wow-duration="2s" data-wow-delay=".2s">
                        <div class="text-center">
                            <svg width="300" height="300" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 256 256" enable-background="new 0 0 256 256" xml:space="preserve">
                                <g>
                                    <g>
                                        <g>
                                            <path fill="#FFFFFF" d="M99.4,10.7C68.9,15,41.6,32.6,25.6,58.4C-3.9,106,9.6,168.2,56.3,199.1c24,15.9,53.7,21,81.8,14c13.8-3.4,28.4-10.7,39.3-19.4l3.1-2.6l27.4,27.4l27.4,27.4l5.3-5.3l5.3-5.3l-27.4-27.4l-27.4-27.4l2.3-2.8c9.5-11.5,17.1-27.4,20.4-42.9c1.7-8,2.2-13.2,2.2-21.9c0-14.7-2.6-27.2-8.3-40.5c-14.1-33.1-45.6-57-81.2-61.6C119.7,9.9,105.6,9.9,99.4,10.7z M128.6,25.9c32.4,6.1,58.5,28.9,68.5,59.6c12.1,37.1-1.1,77-33.2,99.9c-5.4,3.9-16.7,9.6-23,11.6c-42.7,13.8-88-5.5-107.4-45.8c-10.9-22.5-11.7-48.1-2.1-71.6c6.4-15.9,18.4-30.4,33-40.2c10.4-6.9,23-11.8,35.9-13.9C105.7,24.6,122.9,24.8,128.6,25.9z" />
                                            <path fill="#FFFFFF" d="M40,95c0.1,0.6,2.2,9.1,4.5,18.9l4.3,17.9H53h4.2l3.6-13.9c2.5-9.6,3.8-13.6,4-13c0.3,0.7,2.4,8.7,6.8,24.9l0.6,2h4.1c3.5,0,4.1-0.1,4.3-0.8c0.1-0.4,1.8-7.4,3.7-15.5c2-8.1,3.7-14.9,3.9-15.1c0.2-0.2,1.9,6.4,3.9,14.8c1.9,8.3,3.7,15.4,3.8,15.9c0.2,0.7,0.7,0.8,4.5,0.7l4.2-0.1l3.6-13.6c2-7.5,3.6-13.6,3.7-13.7c0.1-0.1,1.2,3.5,2.4,8c1.2,4.5,2.9,10.7,3.7,13.7l1.5,5.5l4.1,0.1l4.1,0.1l3.9-15.9c2.1-8.8,4-15.8,4.1-15.7c0.2,0.1,1.9,7.2,4,15.8l3.7,15.5l4.2,0.1l4.2,0.1l0.4-1.5c0.2-0.8,1.8-6.9,3.5-13.5c1.8-6.6,3.3-12.1,3.4-12.3c0.2-0.2,1.9,5.9,4,13.5l3.7,13.8l4.1-0.1l4.1-0.1l4.5-18.4c2.5-10.1,4.5-18.6,4.5-18.8c0-0.2-1.7-0.3-3.8-0.3h-3.8l-2.7,12.3c-1.5,6.8-2.9,12.6-3,13c-0.2,0.3-1.8-5.2-3.6-12.2l-3.2-12.8h-4.6h-4.6l-3.3,12.3c-1.8,6.8-3.4,12.5-3.5,12.9c-0.1,0.3-1.3-4.5-2.6-10.7c-1.3-6.2-2.6-12-2.9-13l-0.5-1.8l-6.5,0.1l-6.5,0.1l-2.8,12.9c-1.6,7.1-2.9,12.7-3.1,12.5c-0.1-0.3-1.7-6.1-3.4-13l-3.2-12.6l-4.6,0.1l-4.6,0.1l-3.3,12.3c-1.8,6.8-3.4,12.4-3.5,12.5c-0.1,0.1-1.4-5.3-2.9-12.1c-1.5-6.8-2.8-12.5-2.9-12.7c-0.2-0.3-13-0.5-13-0.2c0,0.1-1.3,6-2.9,13.3L76,120.5L73.1,109c-1.6-6.4-3-12.3-3.3-13.3L69.4,94h-4.5h-4.6l-0.9,3.3c-0.5,1.8-2,7.6-3.4,12.7c-1.3,5.2-2.6,9.2-2.8,9c-0.1-0.2-1.5-5.9-3-12.7L47.6,94h-3.9C39.9,94,39.8,94,40,95z" />
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- end section 1  -->

        <!-- section 2  -->

        <section class="section-padding">
            <div class="section-overlay"></div>
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-6 col-12">
                        <div class="ratio ratio-1x1 wow animate__animated <?php echo ($lang == "ar") ? 'animate__fadeInRight' : 'animate__fadeInLeft'; ?>" data-wow-duration="2s" data-wow-delay=".2s">
                            <div class="custom-video h-100">
                                <img width="636" height="477" loading="lazy" src="/assets/imgs/aboutt.webp" class="img-fluid" alt="<?php getContent("yellaDev", "common"); ?> - <?php getContent("we_started", "home") ?>">
                            </div>

                            <div class="about-video-info d-flex flex-column">
                                <h2 class="mt-auto"><?php getContent("we_started", "home") ?></h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-12 mt-4 mt-lg-0 mx-auto">
                        <div class="wow animate__animated animate__fadeIn" data-wow-duration="2s" data-wow-delay=".2s">
                            <em class="text-white"><?php getContent("about", "common"); ?></em>

                            <h2 class="text-white mb-3"><?php getContent("yellaDev", "common"); ?></h2>

                            <p class="text-white"><?php getContent("yellaDev_is_a_team", "about"); ?></p>
                            <p class="text-white"><?php getContent("our_experties_lies", "home"); ?></p>

                            <a href="/about" class="smoothscroll btn custom-btn custom-border-btn mt-3 mb-4"><?php getContent("about", "common"); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="barista-section section-padding gra-bg">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 text-center mb-4 pb-lg-2 wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">

                        <h2 class="text-white"><?php getContent("services", "common"); ?></h2>
                        <h3 class="text-white"><?php getContent("what_sets_us", "home"); ?></h3>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 h-100 mb-4 wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                        <a href="/services" class="h-100 d-block">
                            <div class="team-block-wrap h-100">
                                <div class="team-block-info d-flex flex-column">
                                    <div class="d-flex mt-auto mb-3">
                                        <p class="text-white mb-0"><?php getContent("seo_friendly", "home"); ?></p>
                                    </div>
                                </div>

                                <div class="team-block-image-wrap h-100">
                                    <img loading="lazy" width="306" height="462" src="/assets/imgs/team/seo1.webp" class="team-block-image img-fluid" alt="<?php getContent("seo_friendly", "home"); ?>">
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 h-100 mb-4 wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                        <a href="/services" class="h-100 d-block">
                            <div class="team-block-wrap h-100">
                                <div class="team-block-info d-flex flex-column">
                                    <div class="d-flex mt-auto mb-3">
                                        <p class="text-white mb-0"><?php getContent("blazing_fase", "home"); ?></p>
                                    </div>

                                </div>

                                <div class="team-block-image-wrap h-100">
                                    <img loading="lazy" width="306" height="462" src="/assets/imgs/team/w2.webp" class="team-block-image img-fluid" alt="<?php getContent("blazing_fase", "home"); ?>">
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 h-100 mb-4 wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <a href="/services" class="h-100 d-block">
                            <div class="team-block-wrap h-100">
                                <div class="team-block-info d-flex flex-column">
                                    <div class="d-flex mt-auto mb-3">
                                        <p class="text-white mb-0"><?php getContent("mobile_first", "home"); ?></p>
                                    </div>

                                </div>

                                <div class="team-block-image-wrap h-100">
                                    <img loading="lazy" width="306" height="462" src="/assets/imgs/team/ecomm.webp" class="team-block-image img-fluid" alt="<?php getContent("mobile_first", "home"); ?>">
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 h-100 wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                        <a href="/services" class="h-100 d-block">
                            <div class="team-block-wrap h-100">
                                <div class="team-block-info d-flex flex-column">
                                    <div class="d-flex mt-auto mb-3">
                                        <p class="text-white mb-0"><?php getContent("end_to_end", "home"); ?></p>
                                    </div>

                                </div>

                                <div class="team-block-image-wrap h-100">
                                    <img loading="lazy" width="306" height="462" src="/assets/imgs/team/web.webp" class="team-block-image img-fluid" alt="<?php getContent("end_to_end", "home"); ?>">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>


        <section class="menu-section section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 mb-4 mb-lg-0">
                        <div class="menu-block-wrap">
                            <div class="text-center mb-5 pb-lg-2 wow animate__animated animate__fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                <h2 class="text-white"><?php getContent("technologies_we_use", "home"); ?></h2>
                            </div>

                            <div class="menu-block text-center wow animate__animated animate__fadeInUp" data-wow-duration="2s" data-wow-delay=".3s">
                                <div>
                                    <h2 class="h6"><?php getContent("we_leverage_cutting", "home"); ?></h2>
                                </div>

                                <div class="border-top mt-3 pt-2"></div>
                            </div>

                            <div class="menu-block my-5 text-center wow animate__animated animate__fadeInUp" data-wow-duration="2s" data-wow-delay=".4s">
                                <div>
                                    <h3 class="h6"><?php getContent("lets_transform_your_vision", "home"); ?></h3>
                                </div>

                                <div class="border-top mt-3 pt-2"></div>
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </section>
    </main>


    <?php include 'include/email_form.php'; ?>


    <?php include 'include/footer.php'; ?>


    <script>
        $(document).ready(function() {
            // Execute reCAPTCHA v3 on form submission
            $('#domainForm').on('submit', function(e) {
                e.preventDefault(); // Prevent default form submission

                $("#DomainCheckBtn").prop("disabled", true);

                var domain = $("#domain-name").val().trim();
                var suffix = $("#domain-suffix").val().trim();

                // Validate domain
                if (!domain) {
                    toastr.error("<?php echo getContent("empty_domain", "home"); ?>");
                    $("#DomainCheckBtn").prop("disabled", false);
                    return;
                } else if (!/^[a-z0-9-]+$/i.test(domain)) {
                    toastr.error("<?php echo getContent("domain_can_only_contain", "home"); ?>");
                    $("#DomainCheckBtn").prop("disabled", false);
                    return;
                } else if (domain.length > 63) {
                    toastr.error("<?php echo getContent("domain_name_too", "home"); ?>");
                    $("#DomainCheckBtn").prop("disabled", false);
                    return;
                } else if (/^-|-$/.test(domain)) {
                    toastr.error("<?php echo getContent("domain_cannot_start", "home"); ?>");
                    $("#DomainCheckBtn").prop("disabled", false);
                    return;
                }

                // Validate TLD
                const allowedTlds = ['.com', '.net', '.org', '.io', '.co', '.dev'];
                if (!allowedTlds.includes(suffix)) {
                    toastr.error("<?php echo getContent("invalid_domain_suffix", "home"); ?>");
                    $("#DomainCheckBtn").prop("disabled", false);
                    return;
                }

                //Execute reCAPTCHA and get the token
                grecaptcha.ready(function() {
                    grecaptcha.execute("<?php echo captcha_siteKey ?>", {
                        action: 'submit'
                    }).then(function(token) {
                        // Add the token to the hidden input
                        $('#g-recaptcha-response').val(token);

                        // Serialize form data
                        var formData = $('#domainForm').serialize();

                        // Send AJAX request
                        $.ajax({
                            url: '/helper/domain_checker.php',
                            type: 'POST',
                            data: formData,
                            success: function(response) {
                                var response = JSON.parse(response);

                                $("#DomainCheckBtn").prop("disabled", false);

                                if (response.error) {
                                    if (response.message == "name") {
                                        toastr.error("<?php echo getContent("domain_name_is_required", "home"); ?>");
                                        return;
                                    }
                                    if (response.message == "pattern") {
                                        toastr.error("<?php echo getContent("domain_can_only_contain", "home"); ?>");
                                        return;
                                    }
                                    if (response.message == "length") {
                                        toastr.error("<?php echo getContent("domain_name_too", "home"); ?>");
                                        return;
                                    }
                                    if (response.message == "symbol") {
                                        toastr.error("<?php echo getContent("domain_cannot_start", "home"); ?>");
                                        return;
                                    }
                                    if (response.message == "tld") {
                                        toastr.error("<?php echo getContent("invalid_domain_suffix", "home"); ?>");
                                        return;
                                    }
                                    if (response.message == "format") {
                                        toastr.error("<?php echo getContent("invalid_domain_format", "home"); ?>");
                                        return;
                                    }

                                    toastr.error("<?php echo getContent("error_general", "contact"); ?>");
                                    return;
                                }

                                if (!response.error) {
                                    if (response.available) {
                                        toastr.success("<?php echo getContent("domain_is_available", "home"); ?>");
                                    } else {
                                        toastr.error("<?php echo getContent("domain_is_not_available", "home"); ?>");
                                    }
                                    $('#contactForm')[0].reset(); // Reset the form
                                }

                            },
                            error: function(xhr, status, error) {
                                $("#DomainCheckBtn").prop("disabled", false);
                                toastr.error("<?php echo getContent("error_general", "contact"); ?>");
                            }
                        });
                    });
                });
            });
        });
    </script>
</body>

</html>