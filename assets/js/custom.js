!(function (s) {
  "use strict";
  s(".navbar-collapse a").on("click", function () {
    s(".navbar-collapse").collapse("hide");
  }),
    s(function () {
      s(".hero-slides").vegas({
        slides: [
          { src: "/assets/imgs/slides/bg-home-2.webp" },
          { src: "/assets/imgs/slides/slide7.webp" },
          { src: "/assets/imgs/slides/slide9.webp" },
        ],
        timer: !1,
        animation: "kenburns",
      });
    });
})(window.jQuery);
