<?php include 'include/head.php'; ?>
<title><?php getContent("yellaDev", "common"); ?> - <?php getContent("privacy_policy", "common"); ?></title>

<meta name="description" content="YellaDev values your privacy. Learn how we collect, use, and protect your data in our transparent Privacy Policy. Your trust matters to us.">

<link rel="canonical" href="https://yelladev.com/privacy_policy">
<meta property="og:url" content="https://yelladev.com/privacy_policy">
<meta property="og:title" content="<?php getContent("yellaDev", "common"); ?> - <?php getContent("privacy_policy", "common"); ?>">
<meta property="og:description" content="YellaDev values your privacy. Learn how we collect, use, and protect your data in our transparent Privacy Policy. Your trust matters to us.">
</head>
<body class="pt-0">

    <?php include 'include/loader.php'; ?>
    <?php include 'include/menu.php'; ?>

    <main>
        <section class="pages-hero-section d-flex justify-content-center align-items-center pt-180">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 text-center mx-auto">
                        <h1 class="mb-3 text"><?php getContent("privacy_policy", "privacy_policy"); ?></h1>
                        <p class="text-white">
                        <?php getContent("welcome_to_yelladev", "privacy_policy"); ?>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mb-5">
                            <h2 class="h3 fw-bold text-white"><?php getContent("information_we_collect", "privacy_policy"); ?></h2>
                            <p class="text-white">
                            <?php getContent("we_may_collect", "privacy_policy"); ?>
                            </p>
                            <ul>
                                <li class="text-white">
                                <strong><?php getContent("personal_information", "privacy_policy"); ?></strong> <?php getContent("name_email_address", "privacy_policy"); ?>
                                </li>
                                <li class="text-white">
                                <strong><?php getContent("technical_information", "privacy_policy"); ?></strong> <?php getContent("ip_address_browser", "privacy_policy"); ?>
                                </li>
                            </ul>
                        </div>
                        <div class="mb-5">
                            <h3 class="h3 fw-bold text-white"><?php getContent("how_we_use", "privacy_policy"); ?></h3>
                            <p class="text-white">
                            <?php getContent("we_use_your_information", "privacy_policy"); ?>
                            </p>
                            <ul>
                                <li class="text-white">
                               <?php getContent("to_provide_and", "privacy_policy"); ?>
                                </li>
                                <li class="text-white">
                                <?php getContent("to_communicate_with", "privacy_policy"); ?>
                                </li>
                                <li class="text-white">
                                <?php getContent("to_analyze_website", "privacy_policy"); ?>
                                </li>
                                <li class="text-white">
                                <?php getContent("to_comply_with", "privacy_policy"); ?>
                                </li>
                            </ul>
                        </div>
                        <div class="mb-5">
                            <h3 class="h3 fw-bold text-white"><?php getContent("sharing_your_information", "privacy_policy"); ?></h3>
                            <p class="text-white">
                            <?php getContent("we_do_not_sell", "privacy_policy"); ?>
                            </p>
                            <ul>
                                <li class="text-white">
                               <?php getContent("trusted_service_providers", "privacy_policy"); ?>
                                </li>
                                <li class="text-white">
                                <?php getContent("legal_authorities_if", "privacy_policy"); ?>
                                </li>
                            </ul>
                        </div>
                        <div class="mb-5">
                            <h3 class="h3 fw-bold text-white"><?php getContent("cookies_and_tracking", "privacy_policy"); ?></h3>
                            <p class="text-white">
                            <?php getContent("we_use_cookies_and", "privacy_policy"); ?>
                            </p>
                        </div>
                        <div class="mb-5">
                            <h3 class="h3 fw-bold text-white"><?php getContent("data_security", "privacy_policy"); ?></h3>
                            <p class="text-white">
                            <?php getContent("we_implement_industry", "privacy_policy"); ?>
                            </p>
                        </div>
                        <div class="mb-5">
                            <h3 class="h3 fw-bold text-white"><?php getContent("wour_rights", "privacy_policy"); ?></h3>
                            <p class="text-white">
                            <?php getContent("you_have_the", "privacy_policy"); ?>
                            </p>
                            <ul>
                                <li class="text-white">
                               <?php getContent("access_update_or", "privacy_policy"); ?>
                                </li>
                                <li class="text-white">
                                <?php getContent("optout_of_receiving", "privacy_policy"); ?>
                                </li>
                                <li class="text-white">
                                <?php getContent("request_a_copy", "privacy_policy"); ?>
                                </li>
                            </ul>
                        </div>
                        <div class="mb-5">
                            <h3 class="h3 fw-bold text-white"><?php getContent("changes_to_this", "privacy_policy"); ?></h3>
                            <p class="text-white">
                            <?php getContent("we_may_update_this", "privacy_policy"); ?>
                            </p>
                        </div>
                        <div class="mb-5">
                            <h3 class="h3 fw-bold text-white"><?php getContent("contact_us", "privacy_policy"); ?></h3>
                            <p class="text-white">
                            <?php getContent("if_you_have_any", "privacy_policy"); ?>
                            </p>
                            <p class="text-white">
                                <strong><?php getContent("email", "contact"); ?></strong> <a href="mailto:<?php echo EMAIL_ADDRESS; ?>"><?php echo EMAIL_ADDRESS; ?></a>
                            </p>
                            <p class="text-white">
                                <strong><?php getContent("phone", "contact"); ?></strong> <a href="tel:+<?php echo PHONE_NUMBER; ?>"><?php echo PHONE_NUMBER; ?></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5 contact-section">
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