<nav class="navbar navbar-expand-lg" id="site-nav">

  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="/">
      <img width="183" height="61" class="img-fluid" loading="lazy" src="/assets/imgs/logo.webp" alt="YellaDev Site Logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link menu-link text-white <?php if ($_SERVER['REQUEST_URI'] == "/") { echo "active"; } ?>" id="home-link" href="/"><?php getContent("home", "common"); ?></a>
        </li>
        

        <li class="nav-item">
          <a class="nav-link menu-link text-white <?php if ($_SERVER['REQUEST_URI'] == "/about") { echo "active"; } ?>" id="about-link" href="/about"><?php getContent("about", "common"); ?></a>
        </li>

        <li class="nav-item">
          <a class="nav-link menu-link text-white <?php if ($_SERVER['REQUEST_URI'] == "/services") { echo "active"; } ?>" id="services-link" href="/services"><?php getContent("services", "common"); ?></a>
        </li>

        <li class="nav-item">
          <a class="nav-link menu-link text-white <?php if ($_SERVER['REQUEST_URI'] == "/projects") { echo "active"; } ?>" id="projects-link" href="/projects"><?php getContent("projects", "common"); ?></a>
        </li>

        <li class="nav-item">
          <a class="nav-link menu-link text-white <?php if ($_SERVER['REQUEST_URI'] == "/contact") { echo "active"; } ?>" id="contact-link" href="/contact"><?php getContent("contact", "common"); ?></a>
        </li>

        <li class="d-flex flex-column justify-content-center mt-3 mt-lg-0">
          <div>
            <form id="LangForm" method="POST" action="">
              <div class="dropdown">
                <select class="form-select bg-secondary text-white border-0 w-fit" name="LangOption" id="LangOption" aria-label="Change Language">
                  <option value="ar" <?php echo ($lang == "ar") ? "selected" : ""; ?>><?php getContent("arabic", "common"); ?></option>
                  <option value="en" <?php echo ($lang == "en") ? "selected" : ""; ?>><?php getContent("english", "common"); ?></option>
                </select>
              </div>
            </form>
          </div>
        </li>
      </ul>
    </div>


   

  </div>
</nav>