<?php include 'include/head.php'; ?>
<title><?php getContent("yellaDev", "common"); ?> - <?php getContent("home", "common"); ?></title>
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

        <!-- end section 1  -->

        <!-- section 2  -->

        <section class="about-section section-padding">
            <div class="section-overlay"></div>
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-6 col-12">
                        <div class="ratio ratio-1x1">
                            <video autoplay="" loop="" muted="" class="custom-video" poster="">
                                <source src="assets/videos/pexels-mike-jones-9046237.mp4" type="video/mp4">

                                Your browser does not support the video tag.
                            </video>

                            <div class="about-video-info d-flex flex-column">
                                <h2 class="mt-auto"><?php getContent("we_started", "home") ?></h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-12 mt-4 mt-lg-0 mx-auto">
                        <em class="text-white"><?php getContent("about", "common"); ?></em>

                        <h2 class="text-white mb-3"><?php getContent("yellaDev", "common"); ?></h2>

                        <p class="text-white"><?php getContent("yellaDev_is_a_team", "about"); ?></p>
                        <p class="text-white"><?php getContent("our_experties_lies", "home"); ?></p>

                        <a href="/about" class="smoothscroll btn custom-btn custom-border-btn mt-3 mb-4"><?php getContent("about", "common"); ?></a>
                    </div>

                </div>
            </div>
        </section>


        <section class="barista-section section-padding section-bg">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-lg-12 text-center mb-4 pb-lg-2">

                        <h2 class="text-white"><?php getContent("services", "common"); ?></h2>
                        <h3 class="text-white"><?php getContent("what_sets_us", "home"); ?></h3>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 h-100 mb-4">
                        <div class="team-block-wrap h-100">
                            <div class="team-block-info d-flex flex-column">
                                <div class="d-flex mt-auto mb-3">
                                    <p class="text-white mb-0"><?php getContent("seo_friendly", "home"); ?></p>
                                </div>
                            </div>

                            <div class="team-block-image-wrap h-100">
                                <img loading="lazy" src="/assets/imgs/team/seo.jpg" class="team-block-image img-fluid" alt="<?php getContent("seo_friendly", "home"); ?>">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 h-100 mb-4">
                        <div class="team-block-wrap h-100">
                            <div class="team-block-info d-flex flex-column">
                                <div class="d-flex mt-auto mb-3">
                                    <p class="text-white mb-0"><?php getContent("blazing_fase", "home"); ?></p>
                                </div>

                            </div>

                            <div class="team-block-image-wrap h-100">
                                <img src="/assets/imgs/team/Hosting.png" class="team-block-image img-fluid" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 h-100 mb-4">
                        <div class="team-block-wrap h-100">
                            <div class="team-block-info d-flex flex-column">
                                <div class="d-flex mt-auto mb-3">
                                    <p class="text-white mb-0"><?php getContent("mobile_first", "home"); ?></p>
                                </div>

                            </div>

                            <div class="team-block-image-wrap h-100">
                                <img src="/assets/imgs/team/ecomm.png" class="team-block-image img-fluid" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 h-100">
                        <div class="team-block-wrap h-100">
                            <div class="team-block-info d-flex flex-column">
                                <div class="d-flex mt-auto mb-3">
                                    <p class="text-white mb-0"><?php getContent("end_to_end", "home"); ?></p>
                                </div>

                            </div>

                            <div class="team-block-image-wrap h-100">
                                <img src="/assets/imgs/team/web.png" class="team-block-image img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="menu-section section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 mb-4 mb-lg-0">
                        <div class="menu-block-wrap">
                            <div class="text-center mb-5 pb-lg-2">
                                <h2 class="text-white"><?php getContent("technologies_we_use", "home"); ?></h2>
                            </div>

                            <div class="menu-block text-center">
                                <div>
                                    <h6><?php getContent("we_leverage_cutting", "home"); ?></h6>
                                </div>

                                <div class="border-top mt-3 pt-2"></div>
                            </div>

                            <div class="menu-block my-5 text-center">
                                <div>
                                    <h6><?php getContent("lets_transform_your_vision", "home"); ?></h6>
                                </div>

                                <div class="border-top mt-3 pt-2"></div>
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </section>

        <!-- <section class="reviews-section section-padding section-bg">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-lg-12 col-12 text-center mb-4 pb-lg-2">
                        <em class="text-white">Reviews by Customers</em>

                        <h2 class="text-white">Testimonials</h2>
                    </div>

                    <div class="timeline">
                        <div class="timeline-container timeline-container-left">
                            <div class="timeline-content">
                                <div class="reviews-block">
                                    <div class="reviews-block-image-wrap d-flex align-items-center">
                                        <img src="/assets/imgs/reviews/young-woman-with-round-glasses-yellow-sweater.jpg" class="reviews-block-image img-fluid" alt="">

                                        <div class="">
                                            <h6 class="text-white mb-0">Sandra</h6>
                                            <em class="text-white"> Customers</em>
                                        </div>
                                    </div>

                                    <div class="reviews-block-info">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                                        <div class="d-flex border-top pt-3 mt-4">
                                            <strong class="text-white">4.5 <small class="ms-2">Rating</small></strong>

                                            <div class="reviews-group ms-auto">
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="timeline-container timeline-container-right">
                            <div class="timeline-content">
                                <div class="reviews-block">
                                    <div class="reviews-block-image-wrap d-flex align-items-center">
                                        <img src="/assets/imgs/reviews/senior-man-white-sweater-eyeglasses.jpg" class="reviews-block-image img-fluid" alt="">

                                        <div class="">
                                            <h6 class="text-white mb-0">Don</h6>
                                            <em class="text-white"> Customers</em>
                                        </div>
                                    </div>

                                    <div class="reviews-block-info">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                                        <div class="d-flex border-top pt-3 mt-4">
                                            <strong class="text-white">4.5 <small class="ms-2">Rating</small></strong>

                                            <div class="reviews-group ms-auto">
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="timeline-container timeline-container-left">
                            <div class="timeline-content">
                                <div class="reviews-block">
                                    <div class="reviews-block-image-wrap d-flex align-items-center">
                                        <img src="/assets/imgs/reviews/young-beautiful-woman-pink-warm-sweater-natural-look-smiling-portrait-isolated-long-hair.jpg" class="reviews-block-image img-fluid" alt="">

                                        <div class="">
                                            <h6 class="text-white mb-0">Olivia</h6>
                                            <em class="text-white"> Customers</em>
                                        </div>
                                    </div>

                                    <div class="reviews-block-info">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                                        <div class="d-flex border-top pt-3 mt-4">
                                            <strong class="text-white">4.5 <small class="ms-2">Rating</small></strong>

                                            <div class="reviews-group ms-auto">
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section> -->
    </main>




    <?php include 'include/footer.php'; ?>
</body>

</html>