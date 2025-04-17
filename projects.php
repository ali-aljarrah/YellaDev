<?php include 'include/head.php'; ?>
<title><?php getContent("yellaDev", "common"); ?> - <?php getContent("projects", "common"); ?></title>
<meta name="description" content="Explore YellaDev's portfolio of stunning, high-performance websites & digital solutions. See how we transform ideas into results for our clients.">
<link rel="canonical" href="https://yelladev.com/projects">
<meta property="og:url" content="https://yelladev.com/projects">
<meta property="og:title" content="<?php getContent("yellaDev", "common"); ?> - <?php getContent("projects", "common"); ?>">
<meta property="og:description" content="Explore YellaDev's portfolio of stunning, high-performance websites & digital solutions. See how we transform ideas into results for our clients.">
</head>

<body class="pt-0">

    <?php include 'include/loader.php'; ?>
    <?php include 'include/menu.php'; ?>

    <main>
        <section class="pages-hero-section d-flex justify-content-center align-items-center pt-180">
            <div class="container wow animate__animated animate__fadeIn" data-wow-duration="2s" data-wow-delay=".2s">
                <div class="row">
                    <div class="col-lg-10 text-center mx-auto">
                        <h1 class="mb-3 text"><?php getContent("our_work_speaks", "projects"); ?></h1>
                        <p class="text-white">
                            <?php getContent("explore_some_of", "projects"); ?>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-3">
            <div class="container">
                <div class="project-tags text-center mb-4">
                    <button class="btn custom-btn custom-border-btn active" data-filter="all"><?php getContent("all", "projects"); ?></button>

                    <button class="btn custom-btn custom-border-btn" data-filter="ecommerce"><?php getContent("ecommerce", "projects"); ?></button> 
                    <button class="btn custom-btn custom-border-btn" data-filter="food"><?php getContent("food", "projects"); ?></button>
                    <button class="btn custom-btn custom-border-btn" data-filter="health"><?php getContent("health", "projects"); ?></button>
                    <button class="btn custom-btn custom-border-btn" data-filter="technology"><?php getContent("technology", "projects"); ?></button>
                    <button class="btn custom-btn custom-border-btn" data-filter="beauty"><?php getContent("beauty", "projects"); ?></button>
                    <button class="btn custom-btn custom-border-btn" data-filter="fashion"><?php getContent("fashion", "projects"); ?></button>
                    <button class="btn custom-btn custom-border-btn" data-filter="clinic"><?php getContent("clinic", "projects"); ?></button>

                    <button class="btn custom-btn custom-border-btn" data-filter="education"><?php getContent("education", "projects"); ?></button>
                    <button class="btn custom-btn custom-border-btn" data-filter="sms"><?php getContent("sms_services", "projects"); ?></button>
                    <button class="btn custom-btn custom-border-btn" data-filter="help"><?php getContent("help_center", "projects"); ?></button>
                </div>
            </div>
        </section>

        <section class="py-5">
            <div class="container">
                <div class="row" id="projects-container">

                    <div class="col-lg-3 mb-4" data-tags="ecommerce">
                        <a href="/assets/imgs/projects/topysale.webp" data-lightbox="project-gallery" data-title="TopySale.com">
                            <img class="img-fluid rounded" width="306" height="140" loading="lazy"
                                src="/assets/imgs/projects/topysale.webp"
                                alt="<?php getContent('yellaDev', 'common'); ?> - <?php getContent('projects', 'common'); ?> - 1">
                        </a>
                        <h2 class="text-white h5 mt-3">TopySale.com</h2>
                    </div>

                    <div class="col-lg-3 mb-4" data-tags="health">
                        <a href="/assets/imgs/projects/sehati.webp" data-lightbox="project-gallery" data-title="sehati.perkeso.gov.my">
                            <img class="img-fluid rounded" width="306" height="140" loading="lazy" src="/assets/imgs/projects/sehati.webp" alt="<?php getContent('yellaDev', 'common'); ?> - <?php getContent('projects', 'common'); ?> - 1">
                        </a>
                        <h3 class="text-white h5 mt-3">sehati.perkeso.gov.my</h3>
                    </div>

                    <div class="col-lg-3 mb-4" data-tags="technology">
                        <a href="/assets/imgs/projects/wideover.webp" data-lightbox="project-gallery" data-title="wideover.com">
                            <img class="img-fluid rounded" width="306" height="140" loading="lazy" src="/assets/imgs/projects/wideover.webp" alt="<?php getContent('yellaDev', 'common'); ?> - <?php getContent('projects', 'common'); ?> - 1">
                        </a>
                        <h3 class="text-white h5 mt-3">wideover.com</h3>
                    </div>

                    <div class="col-lg-3 mb-4" data-tags="technology">
                        <a href="/assets/imgs/projects/wideover-tools.webp" data-lightbox="project-gallery" data-title="seo.wideover.com">
                            <img class="img-fluid rounded" width="306" height="140" loading="lazy" src="/assets/imgs/projects/wideover-tools.webp" alt="<?php getContent('yellaDev', 'common'); ?> - <?php getContent('projects', 'common'); ?> - 1">
                        </a>
                        <h3 class="text-white h5 mt-3">seo.wideover.com</h3>
                    </div>

                    <div class="col-lg-3 mb-4" data-tags="technology">
                        <a href="/assets/imgs/projects/nexotech.webp" data-lightbox="project-gallery" data-title="nexotech.my">
                            <img class="img-fluid rounded" width="306" height="140" loading="lazy" src="/assets/imgs/projects/nexotech.webp" alt="<?php getContent('yellaDev', 'common'); ?> - <?php getContent('projects', 'common'); ?> - 1">
                        </a>
                        <h3 class="text-white h5 mt-3">nexotech.my</h3>
                    </div>

                    <div class="col-lg-3 mb-4" data-tags="technology sms">
                        <a href="/assets/imgs/projects/floppysend.webp" data-lightbox="project-gallery" data-title="FloppySend.com">
                            <img class="img-fluid rounded" width="306" height="140" loading="lazy" src="/assets/imgs/projects/floppysend.webp" alt="<?php getContent('yellaDev', 'common'); ?> - <?php getContent('projects', 'common'); ?> - 1">
                        </a>
                        <h3 class="text-white h5 mt-3">FloppySend.com</h3>
                    </div>

                    <div class="col-lg-3 mb-4" data-tags="technology sms help">
                        <a href="/assets/imgs/projects/floppysend-help.webp" data-lightbox="project-gallery" data-title="help.FloppySend.com">
                            <img class="img-fluid rounded" width="306" height="140" loading="lazy" src="/assets/imgs/projects/floppysend-help.webp" alt="<?php getContent('yellaDev', 'common'); ?> - <?php getContent('projects', 'common'); ?> - 1">
                        </a>
                        <h3 class="text-white h5 mt-3">help.FloppySend.com</h3>
                    </div>

                    <div class="col-lg-3 mb-4" data-tags="technology sms">
                        <a href="/assets/imgs/projects/easysendsms.webp" data-lightbox="project-gallery" data-title="EasySendSMS.com">
                            <img class="img-fluid rounded" width="306" height="140" loading="lazy" src="/assets/imgs/projects/easysendsms.webp" alt="<?php getContent('yellaDev', 'common'); ?> - <?php getContent('projects', 'common'); ?> - 2">
                        </a>
                        <h3 class="text-white h5 mt-3">EasySendSMS.com</h3>
                    </div>

                    <div class="col-lg-3 mb-4" data-tags="technology sms help">
                        <a href="/assets/imgs/projects/easysendsms-help.webp" data-lightbox="project-gallery" data-title="help.EasySendSMS.app">
                            <img class="img-fluid rounded" width="306" height="140" loading="lazy" src="/assets/imgs/projects/easysendsms-help.webp" alt="<?php getContent('yellaDev', 'common'); ?> - <?php getContent('projects', 'common'); ?> - 2">
                        </a>
                        <h3 class="text-white h5 mt-3">help.EasySendSMS.app</h3>
                    </div>

                    <div class="col-lg-3 mb-4" data-tags="technology sms">
                        <a href="/assets/imgs/projects/1s2u.webp" data-lightbox="project-gallery" data-title="1s2u.com">
                            <img class="img-fluid rounded" width="306" height="140" loading="lazy" src="/assets/imgs/projects/1s2u.webp" alt="<?php getContent('yellaDev', 'common'); ?> - <?php getContent('projects', 'common'); ?> - 3">
                        </a>
                        <h3 class="text-white h5 mt-3">1s2u.com</h3>
                    </div>

                    <div class="col-lg-3 mb-4" data-tags="technology sms help">
                        <a href="/assets/imgs/projects/1s2u-help.webp" data-lightbox="project-gallery" data-title="support.1s2u.io">
                            <img class="img-fluid rounded" width="306" height="140" loading="lazy" src="/assets/imgs/projects/1s2u-help.webp" alt="<?php getContent('yellaDev', 'common'); ?> - <?php getContent('projects', 'common'); ?> - 3">
                        </a>
                        <h3 class="text-white h5 mt-3">support.1s2u.io</h3>
                    </div>

                    <div class="col-lg-3 mb-4" data-tags="beauty ecommerce">
                        <a href="/assets/imgs/projects/sensy_co.png" data-lightbox="project-gallery" data-title="sensy-co.com">
                            <img class="img-fluid rounded" width="306" height="140" loading="lazy" src="/assets/imgs/projects/sensy_co.png" alt="<?php getContent('yellaDev', 'common'); ?> - <?php getContent('projects', 'common'); ?> - 3">
                        </a>
                        <h3 class="text-white h5 mt-3">sensy-co.com</h3>
                    </div>

                    <div class="col-lg-3 mb-4" data-tags="food ecommerce">
                        <a href="/assets/imgs/projects/tazahasathome1.png" data-lightbox="project-gallery" data-title="tazahasat.com">
                            <img class="img-fluid rounded" width="306" height="140" loading="lazy" src="/assets/imgs/projects/tazahasathome1.png" alt="<?php getContent('yellaDev', 'common'); ?> - <?php getContent('projects', 'common'); ?> - 3">
                        </a>
                        <h3 class="text-white h5 mt-3">tazahasat.com</h3>
                    </div>

                    <div class="col-lg-3 mb-4" data-tags="fashion ecommerce">
                        <a href="/assets/imgs/projects/luxurygirlstore.png" data-lightbox="project-gallery" data-title="luxurygirlstore.com">
                            <img class="img-fluid rounded" width="306" height="140" loading="lazy" src="/assets/imgs/projects/luxurygirlstore.png" alt="<?php getContent('yellaDev', 'common'); ?> - <?php getContent('projects', 'common'); ?> - 3">
                        </a>
                        <h3 class="text-white h5 mt-3">luxurygirlstore.com</h3>
                    </div>

                    <div class="col-lg-3 mb-4" data-tags="food ecommerce">
                        <a href="/assets/imgs/projects/enfeshome1.png" data-lightbox="project-gallery" data-title="enfes.shop">
                            <img class="img-fluid rounded" width="306" height="140" loading="lazy" src="/assets/imgs/projects/enfeshome1.png" alt="<?php getContent('yellaDev', 'common'); ?> - <?php getContent('projects', 'common'); ?> - 3">
                        </a>
                        <h3 class="text-white h5 mt-3">enfes.shop</h3>
                    </div>

                    <div class="col-lg-3 mb-4" data-tags="ecommerce">
                        <a href="/assets/imgs/projects/dollaratystore.png" data-lightbox="project-gallery" data-title="dollaraty.com">
                            <img class="img-fluid rounded" width="306" height="140" loading="lazy" src="/assets/imgs/projects/dollaratystore.png" alt="<?php getContent('yellaDev', 'common'); ?> - <?php getContent('projects', 'common'); ?> - 3">
                        </a>
                        <h3 class="text-white h5 mt-3">dollaraty.com</h3>
                    </div>

                    <div class="col-lg-3 mb-4" data-tags="clinic">
                        <a href="/assets/imgs/projects/hadeeljanood.png" data-lightbox="project-gallery" data-title="hadeel-jannoud.com">
                            <img class="img-fluid rounded" width="306" height="140" loading="lazy" src="/assets/imgs/projects/hadeeljanood.png" alt="<?php getContent('yellaDev', 'common'); ?> - <?php getContent('projects', 'common'); ?> - 3">
                        </a>
                        <h3 class="text-white h5 mt-3">hadeel-jannoud.com</h3>
                    </div>

                    <div class="col-lg-3 mb-4" data-tags="clinic beauty health">
                        <a href="/assets/imgs/projects/royalclinica.png" data-lightbox="project-gallery" data-title="royalclinica.com">
                            <img class="img-fluid rounded" width="306" height="140" loading="lazy" src="/assets/imgs/projects/royalclinica.png" alt="<?php getContent('yellaDev', 'common'); ?> - <?php getContent('projects', 'common'); ?> - 3">
                        </a>
                        <h3 class="text-white h5 mt-3">royalclinica.com</h3>
                    </div>

                    <div class="col-lg-3 mb-4" data-tags="clinic beauty health">
                        <a href="/assets/imgs/projects/biusmile.png" data-lightbox="project-gallery" data-title="biusmile.com">
                            <img class="img-fluid rounded" width="306" height="140" loading="lazy" src="/assets/imgs/projects/biusmile.png" alt="<?php getContent('yellaDev', 'common'); ?> - <?php getContent('projects', 'common'); ?> - 3">
                        </a>
                        <h3 class="text-white h5 mt-3">biusmile.com</h3>
                    </div>

                    <div class="col-lg-3 mb-4" data-tags="education">
                        <a href="/assets/imgs/projects/learn.png" data-lightbox="project-gallery" data-title="learntaswik.com">
                            <img class="img-fluid rounded" width="306" height="140" loading="lazy" src="/assets/imgs/projects/learn.png" alt="<?php getContent('yellaDev', 'common'); ?> - <?php getContent('projects', 'common'); ?> - 3">
                        </a>
                        <h3 class="text-white h5 mt-3">learntaswik.com</h3>
                    </div>

                    <div class="col-lg-3 mb-4" data-tags="health">
                        <a href="/assets/imgs/projects/salama.png" data-lightbox="project-gallery" data-title="salamanutrition.com">
                            <img class="img-fluid rounded" width="306" height="140" loading="lazy" src="/assets/imgs/projects/salama.png" alt="<?php getContent('yellaDev', 'common'); ?> - <?php getContent('projects', 'common'); ?> - 3">
                        </a>
                        <h3 class="text-white h5 mt-3">salamanutrition.com</h3>
                    </div>

                    <div class="col-lg-3 mb-4" data-tags="clinic beauty health">
                        <a href="/assets/imgs/projects/wellnessbd.png" data-lightbox="project-gallery" data-title="wellnessbd.com">
                            <img class="img-fluid rounded" width="306" height="140" loading="lazy" src="/assets/imgs/projects/wellnessbd.png" alt="<?php getContent('yellaDev', 'common'); ?> - <?php getContent('projects', 'common'); ?> - 3">
                        </a>
                        <h3 class="text-white h5 mt-3">wellnessbd.com</h3>
                    </div>

                </div>
            </div>
        </section>

        <section class="py-5 contact-section">
            <div class="container" data-wow-duration="2s" data-wow-delay=".2s">
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filterButtons = document.querySelectorAll('.project-tags button');
            const projects = document.querySelectorAll('#projects-container .col-lg-3');

            // Add click event to each filter button
            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    filterButtons.forEach(btn => btn.classList.remove('active'));

                    // Add active class to clicked button
                    this.classList.add('active', 'custom-btn');

                    const filterValue = this.getAttribute('data-filter');

                    // Filter projects
                    projects.forEach(project => {
                        const projectTags = project.getAttribute('data-tags').split(' ');

                        if (filterValue === 'all' || projectTags.includes(filterValue)) {
                            project.style.display = 'block';
                        } else {
                            project.style.display = 'none';
                        }
                    });
                });
            });
        });
    </script>
</body>

</html>