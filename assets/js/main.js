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

(function () {
  "use strict";

  // Click-to-enlarge popup for the analysis/graph images (事業内容 page).
  var lightbox = document.getElementById("lightbox");
  if (!lightbox) return;

  var lightboxImg = lightbox.querySelector("img");
  var closeBtn = lightbox.querySelector(".lightbox-close");
  var triggers = document.querySelectorAll(".graph-card img");
  if (!triggers.length) return;

  function openLightbox(src, alt) {
    lightboxImg.src = src;
    lightboxImg.alt = alt || "";
    lightbox.classList.add("is-active");
    document.body.style.overflow = "hidden";
  }

  function closeLightbox() {
    lightbox.classList.remove("is-active");
    lightboxImg.src = "";
    document.body.style.overflow = "";
  }

  triggers.forEach(function (img) {
    img.addEventListener("click", function () {
      openLightbox(img.currentSrc || img.src, img.alt);
    });
  });

  closeBtn.addEventListener("click", closeLightbox);
  lightbox.addEventListener("click", function (e) {
    if (e.target === lightbox) closeLightbox();
  });
  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape") closeLightbox();
  });
})();
