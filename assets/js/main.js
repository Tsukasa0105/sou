(function () {
  "use strict";

  // The header is position:sticky (see assets/css/style.css); add a subtle
  // shadow once the page has scrolled so it reads as "lifted" above content.
  var header = document.querySelector("header");
  if (!header) return;

  function updateHeaderShadow() {
    if (window.scrollY > 4) {
      header.classList.add("is-scrolled");
    } else {
      header.classList.remove("is-scrolled");
    }
  }

  updateHeaderShadow();
  window.addEventListener("scroll", updateHeaderShadow, { passive: true });
})();
