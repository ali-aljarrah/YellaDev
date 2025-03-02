<nav class="navbar navbar-expand-lg" id="site-nav">

  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="/">
      <img width="183" height="61" class="img-fluid" loading="lazy" src="/assets/imgs/logo.webp" alt="YellaDev Site Logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item mx-1">
          <a class="nav-link menu-link text-white active" id="home-link" href="/"><?php getContent("home", "common"); ?></a>
        </li>
        <li class="nav-item mx-1">
          <a class="nav-link menu-link text-white" id="services-link" href="/services"><?php getContent("services", "common"); ?></a>
        </li>
        <li class="nav-item mx-1">
          <a class="nav-link menu-link text-white" id="projects-link" href="/projects"><?php getContent("projects", "common"); ?></a>
        </li>
        <li class="nav-item mx-1">
          <a class="nav-link menu-link text-white" id="about-link" href="/about"><?php getContent("about", "common"); ?></a>
        </li>
        <li class="nav-item mx-1">
          <a class="nav-link menu-link text-white" id="contact-link" href="/contact"><?php getContent("contact", "common"); ?></a>
        </li>
      </ul>
    </div> -->

    <?php 
      $menuClass = "me-lg-auto";
      if($lang == "ar") {
        $menuClass = "ms-lg-auto";
      }
    ?>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav <?php echo $menuClass; ?>">
        <li class="nav-item">
          <a class="nav-link menu-link text-white active" id="home-link" href="/"><?php getContent("home", "common"); ?></a>
        </li>

        <li class="nav-item">
          <a class="nav-link menu-link text-white" id="services-link" href="/services"><?php getContent("services", "common"); ?></a>
        </li>

        <li class="nav-item">
          <a class="nav-link menu-link text-white" id="projects-link" href="/projects"><?php getContent("projects", "common"); ?></a>
        </li>

        <li class="nav-item">
          <a class="nav-link menu-link text-white" id="about-link" href="/about"><?php getContent("about", "common"); ?></a>
        </li>

        <li class="nav-item">
          <a class="nav-link menu-link text-white" id="contact-link" href="/contact"><?php getContent("contact", "common"); ?></a>
        </li>
      </ul>
    </div>


    <div>
      <form id="LangForm" method="POST" action="">
        <div class="dropdown">
          <select class="form-select bg-secondary text-white border-0" name="LangOption" id="LangOption">
            <option value="ar" <?php echo ($lang == "ar") ? "selected" : ""; ?>><?php getContent("arabic", "common"); ?></option>
            <option value="en" <?php echo ($lang == "en") ? "selected" : ""; ?>><?php getContent("english", "common"); ?></option>
          </select>
        </div>
      </form>
    </div>

  </div>
</nav>