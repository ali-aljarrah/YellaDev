<?php include 'include/head.php'; ?>
<title><?php getContent("yellaDev", "common"); ?> - <?php getContent("terms_and_conditions", "common"); ?></title>

<meta name="description" content="Review YellaDev's Terms & Conditions outlining website use, intellectual property rights, and service agreements.">

<link rel="canonical" href="https://yelladev.com/terms_and_conditions">
<meta property="og:url" content="https://yelladev.com/terms_and_conditions">
<meta property="og:title" content="<?php getContent("yellaDev", "common"); ?> - <?php getContent("terms_and_conditions", "common"); ?>">
<meta property="og:description" content="Review YellaDev's Terms & Conditions outlining website use, intellectual property rights, and service agreements.">
</head>
<body class="pt-0">

    <?php include 'include/loader.php'; ?>
    <?php include 'include/menu.php'; ?>

    <main>
        <section class="pages-hero-section d-flex justify-content-center align-items-center pt-180">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 text-center mx-auto">
                        <h1 class="mb-3 text"><?php getContent("terms_and_conditions", "terms_and_conditions"); ?></h1>
                        <p class="text-white">
                        <?php getContent("welcome_to_yellaDev", "terms_and_conditions"); ?>
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
                            <h2 class="h3 fw-bold text-white"><?php getContent("use_of_our", "terms_and_conditions"); ?></h2>
                            <ul>
                                <li class="text-white">
                                <?php getContent("you_may_use_our", "terms_and_conditions"); ?>
                                </li>
                                <li class="text-white">
                                <?php getContent("you_are_prohibited", "terms_and_conditions"); ?>
                                </li>
                            </ul>
                        </div>
                        <div class="mb-5">
                            <h3 class="h3 fw-bold text-white"><?php getContent("intellectual_property", "terms_and_conditions"); ?></h3>
                            <ul>
                                <li class="text-white">
                               <?php getContent("all_content_on_this", "terms_and_conditions"); ?>
                                </li>
                                <li class="text-white">
                                <?php getContent("you_may_not", "terms_and_conditions"); ?>
                                </li>
                            </ul>
                        </div>
                        <div class="mb-5">
                            <h3 class="h3 fw-bold text-white"><?php getContent("services", "terms_and_conditions"); ?></h3>
                            <ul>
                                <li class="text-white">
                               <?php getContent("we_provide_website", "terms_and_conditions"); ?>
                                </li>
                                <li class="text-white">
                                <?php getContent("all_projects_are", "terms_and_conditions"); ?>
                                </li>
                            </ul>
                        </div>
                        <div class="mb-5">
                            <h3 class="h3 fw-bold text-white"><?php getContent("payment_terms", "terms_and_conditions"); ?></h3>
                            <ul>
                                <li class="text-white">
                               <?php getContent("payment_terms_will", "terms_and_conditions"); ?>
                                </li>
                                <li class="text-white">
                                <?php getContent("late_payments_may", "terms_and_conditions"); ?>
                                </li>
                            </ul>
                        </div>
                        <div class="mb-5">
                            <h3 class="h3 fw-bold text-white"><?php getContent("limitation_of_liability", "terms_and_conditions"); ?></h3>
                            <ul>
                                <li class="text-white">
                               <?php getContent("yelladev_is_not_liable", "terms_and_conditions"); ?>
                                </li>
                                <li class="text-white">
                                <?php getContent("we_strive_to_provide", "terms_and_conditions"); ?>
                                </li>
                            </ul>
                        </div>
                        <div class="mb-5">
                            <h3 class="h3 fw-bold text-white"><?php getContent("third_party_links", "terms_and_conditions"); ?></h3>
                            <p class="text-white">
                            <?php getContent("our_website_may", "terms_and_conditions"); ?>
                            </p>
                        </div>
                        <div class="mb-5">
                            <h3 class="h3 fw-bold text-white"><?php getContent("termination", "terms_and_conditions"); ?></h3>
                            <p class="text-white">
                            <?php getContent("we_reserve_the", "terms_and_conditions"); ?>
                            </p>
                        </div>
                        <div class="mb-5">
                            <h3 class="h3 fw-bold text-white"><?php getContent("governing_law", "terms_and_conditions"); ?></h3>
                            <p class="text-white">
                            <?php getContent("these_terms_and", "terms_and_conditions"); ?>
                            </p>
                        </div>
                        <div class="mb-5">
                            <h3 class="h3 fw-bold text-white"><?php getContent("changes_to_These", "terms_and_conditions"); ?></h3>
                            <p class="text-white">
                            <?php getContent("we_may_update", "terms_and_conditions"); ?>
                            </p>
                        </div>
                        

                        <div class="mb-5">
                            <h3 class="h3 fw-bold text-white"><?php getContent("contact_us", "terms_and_conditions"); ?></h3>
                            <p class="text-white">
                            <?php getContent("if_you_have", "terms_and_conditions"); ?>
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