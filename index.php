<?php include 'include/head.php'; ?>
<title><?php getContent("yellaDev", "common"); ?> - <?php getContent("home", "common"); ?></title>
<meta name="description" content="YellaDev builds high-performance websites & digital experiences to help startups and brands stand out online. Creative, technical, results-driven.">

<link rel="canonical" href="https://yelladev.com/">
<meta property="og:url" content="https://yelladev.com/">
<meta property="og:title" content="<?php getContent("yellaDev", "common"); ?> - <?php getContent("home", "common"); ?>">
<meta property="og:description" content="YellaDev builds high-performance websites & digital experiences to help startups and brands stand out online. Creative, technical, results-driven.">

</head>

<body class="pt-0">

    <?php include 'include/loader.php'; ?>
    <?php include 'include/menu.php'; ?>

    <main>
        <!-- section 1  -->

        <section class="hero-section d-flex justify-content-center align-items-center">

            <div class="container wow animate__animated animate__fadeIn" data-wow-duration="2s" data-wow-delay=".2s">
                <div class="row align-items-center">

                    <div class="col-lg-6 col-12 mx-auto">
                        <em class="small-text"><?php getContent("welcome_to", "home"); ?></em>

                        <h1><?php getContent("yellaDev", "common"); ?> test</h1>

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
</body>

</html>