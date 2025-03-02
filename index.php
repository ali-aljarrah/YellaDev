<?php include 'include/head.php'; ?>
<title><?php getContent("yellaDev", "common"); ?> - <?php getContent("home", "common"); ?></title>
</head>
<body>

    <?php include 'include/loader.php'; ?>
    <?php include 'include/menu.php'; ?>

    
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-12 mb-4 mb-lg-0">
                <h1 class="mb-3"><?php getContent("welcome_to_yelladev", "home"); ?></h1>
                <p>
                    <?php getContent("we_dont_just_build_websites", "home"); ?>
                </p>
                <p>
                    <?php getContent("our_experties_lies", "home"); ?>
                </p>
                <div class="my-4">
                    <h2 class="mb-3">
                        <?php getContent("what_sets_us", "home"); ?>
                    </h2>
                    <ul>
                        <li><?php getContent("seo_friendly", "home"); ?></li>
                        <li><?php getContent("blazing_fase", "home"); ?></li>
                        <li><?php getContent("mobile_first", "home"); ?></li>
                        <li><?php getContent("end_to_end", "home"); ?></li>
                    </ul>
                </div>
                <div class="mb-5">
                    <h3 class="mb-3"><?php getContent("technologies_we_use", "home"); ?></h3>
                    <p>
                        <?php getContent("we_leverage_cutting", "home"); ?>
                    </p>
                </div>
                <p>
                    <?php getContent("lets_transform_your_vision", "home"); ?>
                </p>
            </div>
        </div>
    </div>

    <?php include 'include/footer.php'; ?>
</body>
</html>