document.addEventListener("DOMContentLoaded", function () {
  const loader = document.querySelector(".loader");

  loader.classList.remove("show");

  if(document.getElementById("footer-date")) {
    let o = new Date().getFullYear();
    document.getElementById("footer-date").innerHTML = o;
  }

  // Change language action
  var dropdown = document.getElementById("LangOption");
  dropdown.addEventListener("change", function () {
    document.getElementById("LangForm").submit();
  });

  // var url = window.location.pathname;

  // if (url == "/") {
  //   removeActiveFromMenuLinks();
  //   document.getElementById("home-link").classList.add("active");
  // } else if (url == "/services") {
  //   removeActiveFromMenuLinks();
  //   document.getElementById("services-link").classList.add("active");
  // } else if (url == "/projects") {
  //   removeActiveFromMenuLinks();
  //   document.getElementById("projects-link").classList.add("active");
  // } else if (url == "/about") {
  //   removeActiveFromMenuLinks();
  //   document.getElementById("about-link").classList.add("active");
  // } else if (url == "/contact") {
  //   removeActiveFromMenuLinks();
  //   document.getElementById("contact-link").classList.add("active");
  // }
});

function removeActiveFromMenuLinks() {
  document.querySelectorAll(".menu-link").forEach((el) => {
    el.classList.remove("active");
  });
}
