<?php include 'include/head.php'; ?>
<title><?php getContent("yellaDev", "common"); ?> - <?php getContent("about", "common"); ?></title>
</head>
<body>

    <?php include 'include/loader.php'; ?>
    <?php include 'include/menu.php'; ?>

    
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-12 mb-4 mb-lg-0">
                <h1 class="mb-3"><?php getContent("about_yellaDev", "about"); ?></h1>
                <p>
                    <?php getContent("yellaDev_is_a_team", "about"); ?>
                </p>

                <h2 class="mb-3"><?php getContent("technologies_we_use", "about"); ?></h2>
                <p>
                    <?php getContent("our_team_is_skilled", "about"); ?>
                </p>
                <p>
                    <?php getContent("your_success", "about"); ?>
                </p>
            </div>
        </div>
    </div>

    <?php include 'include/footer.php'; ?>
</body>
</html>