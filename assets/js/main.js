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

  new WOW().init();
});

function removeActiveFromMenuLinks() {
  document.querySelectorAll(".menu-link").forEach((el) => {
    el.classList.remove("active");
  });
}

