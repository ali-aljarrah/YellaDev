<?php include 'include/head.php'; ?>
<title><?php getContent("yellaDev", "common"); ?> - <?php getContent("projects", "common"); ?></title>
<meta name="description" content="Explore YellaDev's portfolio of stunning, high-performance websites & digital solutions. See how we transform ideas into results for our clients.">
<link rel="canonical" href="https://yelladev.com/projects">
<meta property="og:url" content="https://yelladev.com/projects">
<meta property="og:title" content="<?php getContent("yellaDev", "common"); ?> - <?php getContent("projects", "common"); ?>">
<meta property="og:description" content="Explore YellaDev's portfolio of stunning, high-performance websites & digital solutions. See how we transform ideas into results for our clients.">
<!-- Lightbox CSS -->
<link rel="stylesheet" href="/assets/css/lightbox.min.css" />

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

                    <div class="col-lg-3 mb-5 mb-lg-4 mx-auto text-center" data-tags="ecommerce">
                        <a href="/assets/imgs/projects/sakdecoration.webp" data-lightbox="project-gallery" data-title="sakdecoration.com">
                            <img class="img-fluid rounded img-hover" width="306" height="140" loading="lazy"
                                src="/assets/imgs/projects/sakdecoration.webp"
                                alt="<?php getContent('yellaDev', 'common'); ?> - <?php getContent('projects', 'common'); ?> - 1">
                        </a>
                        <a class="text-white h5 mt-3 hover-underline" href="http://sakdecoration.com/" target="_blank" rel="noopener noreferrer">
                            <span class="ml-3">sakdecoration.com</span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"/>
                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"/>
                                </svg>
                            </span>
                        </a>
                    </div>

                    <div class="col-lg-3 mb-5 mb-lg-4 mx-auto text-center" data-tags="ecommerce">
                        <a href="/assets/imgs/projects/abxconsulting.webp" data-lightbox="project-gallery" data-title="abxconsulting.com">
                            <img class="img-fluid rounded img-hover" width="306" height="140" loading="lazy"
                                src="/assets/imgs/projects/abxconsulting.webp"
                                alt="<?php getContent('yellaDev', 'common'); ?> - <?php getContent('projects', 'common'); ?> - 1">
                        </a>
                        <a class="text-white h5 mt-3 hover-underline" href="https://abxconsulting.me/" target="_blank" rel="noopener noreferrer">
                            <span class="ml-3">abxconsulting.me</span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"/>
                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"/>
                                </svg>
                            </span>
                        </a>
                    </div>

                    <div class="col-lg-3 mb-5 mb-lg-4 mx-auto text-center" data-tags="ecommerce">
                        <a href="/assets/imgs/projects/topysale.webp" data-lightbox="project-gallery" data-title="TopySale.com">
                            <img class="img-fluid rounded img-hover" width="306" height="140" loading="lazy"
                                src="/assets/imgs/projects/topysale.webp"
                                alt="<?php getContent('yellaDev', 'common'); ?> - <?php getContent('projects', 'common'); ?> - 1">
                        </a>
                        <a class="text-white h5 mt-3 hover-underline" href="http://topysale.com" target="_blank" rel="noopener noreferrer">
                            <span class="ml-3">TopySale.com</span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"/>
                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"/>
                                </svg>
                            </span>
                        </a>
                    </div>

                    <div class="col-lg-3 mb-5 mb-lg-4 mx-auto text-center" data-tags="health">
                        <a href="/assets/imgs/projects/sehati.webp" data-lightbox="project-gallery" data-title="sehati.perkeso.gov.my">
                            <img class="img-fluid rounded img-hover" width="306" height="140" loading="lazy" src="/assets/imgs/projects/sehati.webp" alt="<?php getContent('yellaDev', 'common'); ?> - <?php getContent('projects', 'common'); ?> - 1">
                        </a>
                        <a class="text-white h5 mt-3 hover-underline" href="http://sehati.perkeso.gov.my" target="_blank" rel="noopener noreferrer">
                            <span class="ml-3">sehati.perkeso.gov.my</span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"/>
                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"/>
                                </svg>
                            </span>
                        </a>
                    </div>

                    <div class="col-lg-3 mb-5 mb-lg-4 mx-auto text-center" data-tags="technology">
                        <a href="/assets/imgs/projects/wideover.webp" data-lightbox="project-gallery" data-title="wideover.com">
                            <img class="img-fluid rounded img-hover" width="306" height="140" loading="lazy" src="/assets/imgs/projects/wideover.webp" alt="<?php getContent('yellaDev', 'common'); ?> - <?php getContent('projects', 'common'); ?> - 1">
                        </a>
                        <a class="text-white h5 mt-3 hover-underline" href="http://wideover.com" target="_blank" rel="noopener noreferrer">
                            <span class="ml-3">wideover.com</span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"/>
                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"/>
                                </svg>
                            </span>
                        </a>
                    </div>

                    <div class="col-lg-3 mb-5 mb-lg-4 mx-auto text-center" data-tags="technology">
                        <a href="/assets/imgs/projects/wideover-tools.webp" data-lightbox="project-gallery" data-title="seo.wideover.com">
                            <img class="img-fluid rounded img-hover" width="306" height="140" loading="lazy" src="/assets/imgs/projects/wideover-tools.webp" alt="<?php getContent('yellaDev', 'common'); ?> - <?php getContent('projects', 'common'); ?> - 1">
                        </a>
                        <a class="text-white h5 mt-3 hover-underline" href="http://seo.wideover.com" target="_blank" rel="noopener noreferrer">
                            <span class="ml-3">seo.wideover.com</span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"/>
                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"/>
                                </svg>
                            </span>
                        </a>
                    </div>

                    <div class="col-lg-3 mb-5 mb-lg-4 mx-auto text-center" data-tags="technology">
                        <a href="/assets/imgs/projects/nexotech.webp" data-lightbox="project-gallery" data-title="nexotech.my">
                            <img class="img-fluid rounded img-hover" width="306" height="140" loading="lazy" src="/assets/imgs/projects/nexotech.webp" alt="<?php getContent('yellaDev', 'common'); ?> - <?php getContent('projects', 'common'); ?> - 1">
                        </a>
                        <a class="text-white h5 mt-3 hover-underline" href="http://nexotech.my" target="_blank" rel="noopener noreferrer">
                            <span class="ml-3">nexotech.my</span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"/>
                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"/>
                                </svg>
                            </span>
                        </a>
                    </div>

                    <div class="col-lg-3 mb-5 mb-lg-4 mx-auto text-center" data-tags="technology sms">
                        <a href="/assets/imgs/projects/floppysend.webp" data-lightbox="project-gallery" data-title="FloppySend.com">
                            <img class="img-fluid rounded img-hover" width="306" height="140" loading="lazy" src="/assets/imgs/projects/floppysend.webp" alt="<?php getContent('yellaDev', 'common'); ?> - <?php getContent('projects', 'common'); ?> - 1">
                        </a>
                        <a class="text-white h5 mt-3 hover-underline" href="http://FloppySend.com" target="_blank" rel="noopener noreferrer">
                            <span class="ml-3">FloppySend.com</span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"/>
                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"/>
                                </svg>
                            </span>
                        </a>
                    </div>

                    <div class="col-lg-3 mb-5 mb-lg-4 mx-auto text-center" data-tags="technology sms help">
                        <a href="/assets/imgs/projects/floppysend-help.webp" data-lightbox="project-gallery" data-title="help.FloppySend.com">
                            <img class="img-fluid rounded img-hover" width="306" height="140" loading="lazy" src="/assets/imgs/projects/floppysend-help.webp" alt="<?php getContent('yellaDev', 'common'); ?> - <?php getContent('projects', 'common'); ?> - 1">
                        </a>
                        <a class="text-white h5 mt-3 hover-underline" href="http://help.FloppySend.com" target="_blank" rel="noopener noreferrer">
                            <span class="ml-3">help.FloppySend.com</span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"/>
                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"/>
                                </svg>
                            </span>
                        </a>
                    </div>

                    <div class="col-lg-3 mb-5 mb-lg-4 mx-auto text-center" data-tags="technology sms">
                        <a href="/assets/imgs/projects/easysendsms.webp" data-lightbox="project-gallery" data-title="EasySendSMS.com">
                            <img class="img-fluid rounded img-hover" width="306" height="140" loading="lazy" src="/assets/imgs/projects/easysendsms.webp" alt="<?php getContent('yellaDev', 'common'); ?> - <?php getContent('projects', 'common'); ?> - 2">
                        </a>
                        <a class="text-white h5 mt-3 hover-underline" href="http://EasySendSMS.com" target="_blank" rel="noopener noreferrer">
                            <span class="ml-3">EasySendSMS.com</span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"/>
                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"/>
                                </svg>
                            </span>
                        </a>
                    </div>

                    <div class="col-lg-3 mb-5 mb-lg-4 mx-auto text-center" data-tags="technology sms help">
                        <a href="/assets/imgs/projects/easysendsms-help.webp" data-lightbox="project-gallery" data-title="help.EasySendSMS.app">
                            <img class="img-fluid rounded img-hover" width="306" height="140" loading="lazy" src="/assets/imgs/projects/easysendsms-help.webp" alt="<?php getContent('yellaDev', 'common'); ?> - <?php getContent('projects', 'common'); ?> - 2">
                        </a>
                        <a class="text-white h5 mt-3 hover-underline" href="http://help.EasySendSMS.app" target="_blank" rel="noopener noreferrer">
                            <span class="ml-3">help.EasySendSMS.app</span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"/>
                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"/>
                                </svg>
                            </span>
                        </a>
                    </div>

                    <div class="col-lg-3 mb-5 mb-lg-4 mx-auto text-center" data-tags="technology sms">
                        <a href="/assets/imgs/projects/1s2u.webp" data-lightbox="project-gallery" data-title="1s2u.com">
                            <img class="img-fluid rounded img-hover" width="306" height="140" loading="lazy" src="/assets/imgs/projects/1s2u.webp" alt="<?php getContent('yellaDev', 'common'); ?> - <?php getContent('projects', 'common'); ?> - 3">
                        </a>
                        <a class="text-white h5 mt-3 hover-underline" href="http://1s2u.com" target="_blank" rel="noopener noreferrer">
                            <span class="ml-3">1s2u.com</span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"/>
                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"/>
                                </svg>
                            </span>
                        </a>
                    </div>

                    <div class="col-lg-3 mb-5 mb-lg-4 mx-auto text-center" data-tags="technology sms help">
                        <a href="/assets/imgs/projects/1s2u-help.webp" data-lightbox="project-gallery" data-title="support.1s2u.io">
                            <img class="img-fluid rounded img-hover" width="306" height="140" loading="lazy" src="/assets/imgs/projects/1s2u-help.webp" alt="<?php getContent('yellaDev', 'common'); ?> - <?php getContent('projects', 'common'); ?> - 3">
                        </a>
                        <a class="text-white h5 mt-3 hover-underline" href="http://support.1s2u.io" target="_blank" rel="noopener noreferrer">
                            <span class="ml-3">support.1s2u.io</span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"/>
                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"/>
                                </svg>
                            </span>
                        </a>
                    </div>

                    <div class="col-lg-3 mb-5 mb-lg-4 mx-auto text-center" data-tags="beauty ecommerce">
                        <a href="/assets/imgs/projects/sensy_co.png" data-lightbox="project-gallery" data-title="sensy-co.com">
                            <img class="img-fluid rounded img-hover" width="306" height="140" loading="lazy" src="/assets/imgs/projects/sensy_co.png" alt="<?php getContent('yellaDev', 'common'); ?> - <?php getContent('projects', 'common'); ?> - 3">
                        </a>
                        <a class="text-white h5 mt-3 hover-underline" href="http://sensy-co.com" target="_blank" rel="noopener noreferrer">
                            <span class="ml-3">sensy-co.com</span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"/>
                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"/>
                                </svg>
                            </span>
                        </a>
                    </div>

                    <div class="col-lg-3 mb-5 mb-lg-4 mx-auto text-center" data-tags="food ecommerce">
                        <a href="/assets/imgs/projects/tazahasathome1.png" data-lightbox="project-gallery" data-title="tazahasat.com">
                            <img class="img-fluid rounded img-hover" width="306" height="140" loading="lazy" src="/assets/imgs/projects/tazahasathome1.png" alt="<?php getContent('yellaDev', 'common'); ?> - <?php getContent('projects', 'common'); ?> - 3">
                        </a>
                        <a class="text-white h5 mt-3 hover-underline" href="http://tazahasat.com" target="_blank" rel="noopener noreferrer">
                            <span class="ml-3">tazahasat.com</span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"/>
                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"/>
                                </svg>
                            </span>
                        </a>
                    </div>

                    <div class="col-lg-3 mb-5 mb-lg-4 mx-auto text-center" data-tags="fashion ecommerce">
                        <a href="/assets/imgs/projects/luxurygirlstore.png" data-lightbox="project-gallery" data-title="luxurygirlstore.com">
                            <img class="img-fluid rounded img-hover" width="306" height="140" loading="lazy" src="/assets/imgs/projects/luxurygirlstore.png" alt="<?php getContent('yellaDev', 'common'); ?> - <?php getContent('projects', 'common'); ?> - 3">
                        </a>
                        <a class="text-white h5 mt-3 hover-underline" href="http://luxurygirlstore.com" target="_blank" rel="noopener noreferrer">
                            <span class="ml-3">luxurygirlstore.com</span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"/>
                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"/>
                                </svg>
                            </span>
                        </a>
                    </div>

                    <div class="col-lg-3 mb-5 mb-lg-4 mx-auto text-center" data-tags="food ecommerce">
                        <a href="/assets/imgs/projects/enfeshome1.png" data-lightbox="project-gallery" data-title="enfes.shop">
                            <img class="img-fluid rounded img-hover" width="306" height="140" loading="lazy" src="/assets/imgs/projects/enfeshome1.png" alt="<?php getContent('yellaDev', 'common'); ?> - <?php getContent('projects', 'common'); ?> - 3">
                        </a>
                        <a class="text-white h5 mt-3 hover-underline" href="http://enfes.shop" target="_blank" rel="noopener noreferrer">
                            <span class="ml-3">enfes.shop</span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"/>
                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"/>
                                </svg>
                            </span>
                        </a>
                    </div>

                    <div class="col-lg-3 mb-5 mb-lg-4 mx-auto text-center" data-tags="ecommerce">
                        <a href="/assets/imgs/projects/dollaratystore.png" data-lightbox="project-gallery" data-title="dollaraty.com">
                            <img class="img-fluid rounded img-hover" width="306" height="140" loading="lazy" src="/assets/imgs/projects/dollaratystore.png" alt="<?php getContent('yellaDev', 'common'); ?> - <?php getContent('projects', 'common'); ?> - 3">
                        </a>
                        <a class="text-white h5 mt-3 hover-underline" href="http://dollaraty.com" target="_blank" rel="noopener noreferrer">
                            <span class="ml-3">dollaraty.com</span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"/>
                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"/>
                                </svg>
                            </span>
                        </a>
                    </div>

                    <div class="col-lg-3 mb-5 mb-lg-4 mx-auto text-center" data-tags="clinic">
                        <a href="/assets/imgs/projects/hadeeljanood.png" data-lightbox="project-gallery" data-title="hadeel-jannoud.com">
                            <img class="img-fluid rounded img-hover" width="306" height="140" loading="lazy" src="/assets/imgs/projects/hadeeljanood.png" alt="<?php getContent('yellaDev', 'common'); ?> - <?php getContent('projects', 'common'); ?> - 3">
                        </a>
                        <a class="text-white h5 mt-3 hover-underline" href="http://hadeel-jannoud.com" target="_blank" rel="noopener noreferrer">
                            <span class="ml-3">hadeel-jannoud.com</span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"/>
                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"/>
                                </svg>
                            </span>
                        </a>
                    </div>

                    <div class="col-lg-3 mb-5 mb-lg-4 mx-auto text-center" data-tags="clinic beauty health">
                        <a href="/assets/imgs/projects/royalclinica.png" data-lightbox="project-gallery" data-title="royalclinica.com">
                            <img class="img-fluid rounded img-hover" width="306" height="140" loading="lazy" src="/assets/imgs/projects/royalclinica.png" alt="<?php getContent('yellaDev', 'common'); ?> - <?php getContent('projects', 'common'); ?> - 3">
                        </a>
                        <a class="text-white h5 mt-3 hover-underline" href="http://royalclinica.com" target="_blank" rel="noopener noreferrer">
                            <span class="ml-3">royalclinica.com</span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"/>
                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"/>
                                </svg>
                            </span>
                        </a>
                    </div>

                    <div class="col-lg-3 mb-5 mb-lg-4 mx-auto text-center" data-tags="clinic beauty health">
                        <a href="/assets/imgs/projects/biusmile.png" data-lightbox="project-gallery" data-title="biusmile.com">
                            <img class="img-fluid rounded img-hover" width="306" height="140" loading="lazy" src="/assets/imgs/projects/biusmile.png" alt="<?php getContent('yellaDev', 'common'); ?> - <?php getContent('projects', 'common'); ?> - 3">
                        </a>
                        <a class="text-white h5 mt-3 hover-underline" href="http://biusmile.com" target="_blank" rel="noopener noreferrer">
                            <span class="ml-3">biusmile.com</span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"/>
                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"/>
                                </svg>
                            </span>
                        </a>
                    </div>

                    <div class="col-lg-3 mb-5 mb-lg-4 mx-auto text-center" data-tags="education">
                        <a href="/assets/imgs/projects/learn.png" data-lightbox="project-gallery" data-title="learntaswik.com">
                            <img class="img-fluid rounded img-hover" width="306" height="140" loading="lazy" src="/assets/imgs/projects/learn.png" alt="<?php getContent('yellaDev', 'common'); ?> - <?php getContent('projects', 'common'); ?> - 3">
                        </a>
                        <a class="text-white h5 mt-3 hover-underline" href="http://learntaswik.com" target="_blank" rel="noopener noreferrer">
                            <span class="ml-3">learntaswik.com</span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"/>
                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"/>
                                </svg>
                            </span>
                        </a>
                    </div>

                    <div class="col-lg-3 mb-5 mb-lg-4 mx-auto text-center" data-tags="health">
                        <a href="/assets/imgs/projects/salama.png" data-lightbox="project-gallery" data-title="salamanutrition.com">
                            <img class="img-fluid rounded img-hover" width="306" height="140" loading="lazy" src="/assets/imgs/projects/salama.png" alt="<?php getContent('yellaDev', 'common'); ?> - <?php getContent('projects', 'common'); ?> - 3">
                        </a>
                        <a class="text-white h5 mt-3 hover-underline" href="http://salamanutrition.com" target="_blank" rel="noopener noreferrer">
                            <span class="ml-3">salamanutrition.com</span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"/>
                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"/>
                                </svg>
                            </span>
                        </a>
                    </div>

                    <div class="col-lg-3 mb-5 mb-lg-4 mx-auto text-center" data-tags="clinic beauty health">
                        <a href="/assets/imgs/projects/wellnessbd.png" data-lightbox="project-gallery" data-title="wellnessbd.com">
                            <img class="img-fluid rounded img-hover" width="306" height="140" loading="lazy" src="/assets/imgs/projects/wellnessbd.png" alt="<?php getContent('yellaDev', 'common'); ?> - <?php getContent('projects', 'common'); ?> - 3">
                        </a>
                        <a class="text-white h5 mt-3 hover-underline" href="http://wellnessbd.com" target="_blank" rel="noopener noreferrer">
                            <span class="ml-3">wellnessbd.com</span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"/>
                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"/>
                                </svg>
                            </span>
                        </a>
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

    
    <!-- Lightbox JS -->
    <script src="/assets/js/lightbox.min.js" defer></script>

    <script src="/assets/js/projects.js" defer></script>
</body>

</html>