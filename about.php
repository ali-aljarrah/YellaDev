<?php include 'include/head.php'; ?>
<title><?php getContent("yellaDev", "common"); ?> - <?php getContent("about", "common"); ?></title>
<meta name="description" content="YellaDev: Expert designers & developers crafting high-performance, stunning websites. We blend creativity & tech to help your business thrive online.">
<link rel="canonical" href="https://yelladev.com/about">
<meta property="og:url" content="https://yelladev.com/about">
<meta property="og:title" content="<?php getContent("yellaDev", "common"); ?> - <?php getContent("about", "common"); ?>">
<meta property="og:description" content="YellaDev: Expert designers & developers crafting high-performance, stunning websites. We blend creativity & tech to help your business thrive online.">
</head>
<body class="pt-0">

    <?php include 'include/loader.php'; ?>
    <?php include 'include/menu.php'; ?>

    <main>
        <section class="pages-hero-section d-flex justify-content-center align-items-center pt-180">
            <div class="container wow animate__animated animate__fadeIn" data-wow-duration="2s" data-wow-delay=".2s">
                <div class="row">
                    <div class="col-lg-10 text-center mx-auto">
                        <h1 class="mb-3 text"><?php getContent("about_yellaDev", "about"); ?></h1>
                        <p class="text-white">
                        <?php getContent("yellaDev_is_a_team", "about"); ?>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5 my-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 text-center mb-4 mb-lg-0 wow animate__animated <?php echo ($lang == "ar") ? 'animate__fadeInRight' : 'animate__fadeInLeft'; ?>" data-wow-duration="2s" data-wow-delay=".2s">
                        <img class="img-fluid rounded-4" width="413" height="267" loading="lazy" src="/assets/imgs/about.webp" alt="<?php getContent("about_yellaDev", "about"); ?>">
                    </div>
                    
                    <div class="col-lg-6 wow animate__animated <?php echo ($lang == "ar") ? 'animate__fadeInLeft' : 'animate__fadeInRight'; ?>"  data-wow-duration="2s" data-wow-delay=".2s">
                        <h2 class="mb-3 text-white"><?php getContent("Who We Are?", "about"); ?></h2>
                        <p class="text-white">
                            <?php getContent("yelladev_company", "about"); ?>
                        </p>
                        <p class="text-white">
                            <?php getContent("your_success", "about"); ?>
                        </p>
                    </div>

                  
                </div>
            </div>
        </section>
    </main>
    
    <?php include 'include/email_form.php'; ?>

    <?php include 'include/footer.php'; ?>
</body>
</html>