<?php 

include 'include/head.php'; 

if ($lang == 'ar') {
    echo '
        <style>
            @media(min-width: 991px) {
                .timeline-container-left {
                    left: -50%;
                }
                .timeline-container-right {
                    left: 0px;
                }
                .timeline-container-right::after {
                    right: 98%;
                }
            }
            @media(max-width: 991px) {
                .timeline-container-left::before {
                    right: auto;
                }
                .timeline-container::before {
                    left: 52px;
                }
                .timeline-container-left::after, .timeline-container-right::after {
                    left: 1%;
                    right: auto;
                }       
            }
        </style>
    ';
} 
?>
<title><?php getContent("yellaDev", "common"); ?> - <?php getContent("services", "common"); ?></title>
</head>
<body class="pt-0">

    <?php include 'include/loader.php'; ?>
    <?php include 'include/menu.php'; ?>

    <main>
        <section class="pages-hero-section d-flex justify-content-center align-items-center pt-180">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 text-center mx-auto">
                        <h1 class="mb-3 text"><?php getContent("our_services_designed", "services"); ?></h1>
                        <p class="text-white">
                            <?php getContent("at_yelladev_we_offer", "services"); ?>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="timeline">
                        <div class="timeline-container timeline-container-left">
                            <div class="timeline-content">
                                <div class="reviews-block">
                                    <div class="reviews-block-image-wrap d-flex align-items-center" style="background-image: url(/assets/imgs/services/services-1.webp);"></div>

                                    <div class="reviews-block-info">
                                        <h2 class="fw-bold text-white h4"><?php getContent("website_design", "services"); ?></h2>
                                        <p><?php getContent("your_website_is_the", "services"); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="timeline-container timeline-container-right">
                            <div class="timeline-content">
                                <div class="reviews-block">
                                    <div class="reviews-block-image-wrap d-flex align-items-center" style="background-image: url(/assets/imgs/services/services-2.webp);"></div>

                                    <div class="reviews-block-info">
                                        <h3 class="fw-bold text-white h4"><?php getContent("ecommerce_website", "services"); ?></h3>
                                        <p><?php getContent("ready_to_sell_online", "services"); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="timeline-container timeline-container-left">
                            <div class="timeline-content">
                                <div class="reviews-block">
                                    <div class="reviews-block-image-wrap d-flex align-items-center" style="background-image: url(/assets/imgs/services/services-3.webp);"></div>

                                    <div class="reviews-block-info">
                                        <h3 class="fw-bold text-white h4"><?php getContent("brand_identity", "services"); ?></h3>
                                        <p><?php getContent("your_brand_is_more", "services"); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="timeline-container timeline-container-right">
                            <div class="timeline-content">
                                <div class="reviews-block">
                                    <div class="reviews-block-image-wrap d-flex align-items-center" style="background-image: url(/assets/imgs/services/services-4.webp);"></div>

                                    <div class="reviews-block-info">
                                        <h3 class="fw-bold text-white h4"><?php getContent("seo_friendly_development", "services"); ?></h3>
                                        <p><?php getContent("a_beautiful_website", "services"); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="timeline-container timeline-container-left">
                            <div class="timeline-content">
                                <div class="reviews-block">
                                    <div class="reviews-block-image-wrap d-flex align-items-center" style="background-image: url(/assets/imgs/services/services-3.webp);"></div>

                                    <div class="reviews-block-info">
                                        <h3 class="fw-bold text-white h4"><?php getContent("hosting_and_domain", "services"); ?></h3>
                                        <p><?php getContent("we_provide_reliable", "services"); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="timeline-container timeline-container-right">
                            <div class="timeline-content">
                                <div class="reviews-block">
                                    <div class="reviews-block-image-wrap d-flex align-items-center" style="background-image: url(/assets/imgs/services/services-4.webp);"></div>

                                    <div class="reviews-block-info">
                                        <h3 class="fw-bold text-white h4"><?php getContent("website_maintenance", "services"); ?></h3>
                                        <p><?php getContent("your_website_is_a_living", "services"); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="timeline-container timeline-container-left">
                            <div class="timeline-content">
                                <div class="reviews-block">
                                    <div class="reviews-block-image-wrap d-flex align-items-center" style="background-image: url(/assets/imgs/services/services-3.webp);"></div>

                                    <div class="reviews-block-info">
                                        <h3 class="fw-bold text-white h4"><?php getContent("hosting_and_domain", "services"); ?></h3>
                                        <p><?php getContent("we_provide_reliable", "services"); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <section class="py-5">
            <div class="container">
                <div class="row py-5 my-5">
                    <div class="col-lg-12 text-center">
                        <h2 class="fw-bold h2 text-white mb-5">
                            <?php getContent("lets_build_something", "services"); ?>
                        </h2>
                        <div>
                            <a class="btn custom-btn custom-border-btn smoothscroll" href="/contact">
                                <?php getContent("contact", "common"); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'include/footer.php'; ?>
</body>
</html>