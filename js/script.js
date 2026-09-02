// =========================================================
// English Projects Portfolio — script.js
// Handles:
// - Hamburger menu
// - Close-on-select
// - Scrollspy
// - Show/hide project previews
// - PDF / video lazy loading
//
// IMPORTANT:
// The language of the preview buttons is handled by
// language.js. This file does NOT force English text.
// =========================================================

document.addEventListener("DOMContentLoaded", function () {

  var toggle = document.querySelector(".nav-toggle");
  var navList = document.querySelector(".nav-list");
  var navLinks = document.querySelectorAll(".nav-list a");
  var sections = document.querySelectorAll("section[id]");


  // =========================================================
  // HAMBURGER OPEN / CLOSE
  // =========================================================

  if (toggle && navList) {

    toggle.addEventListener("click", function () {

      var isOpen =
        navList.classList.toggle("is-open");

      toggle.setAttribute(
        "aria-expanded",
        isOpen ? "true" : "false"
      );

    });

  }


  // =========================================================
  // CLOSE MENU AFTER SELECTING A LINK
  // =========================================================

  navLinks.forEach(function (link) {

    link.addEventListener("click", function () {

      if (
        navList &&
        navList.classList.contains("is-open")
      ) {

        navList.classList.remove("is-open");

        if (toggle) {

          toggle.setAttribute(
            "aria-expanded",
            "false"
          );

        }

      }

    });

  });


  // =========================================================
  // SCROLLSPY
  // Highlight the current section in the navigation
  // =========================================================

  if (
    "IntersectionObserver" in window &&
    sections.length
  ) {

    var spy = new IntersectionObserver(

      function (entries) {

        entries.forEach(function (entry) {

          var link = document.querySelector(
            '.nav-list a[href="#' +
            entry.target.id +
            '"]'
          );

          if (!link) return;

          if (entry.isIntersecting) {

            navLinks.forEach(function (l) {

              l.classList.remove(
                "is-active"
              );

            });

            link.classList.add(
              "is-active"
            );

          }

        });

      },

      {
        rootMargin: "-45% 0px -45% 0px",
        threshold: 0
      }

    );


    sections.forEach(function (section) {

      spy.observe(section);

    });

  }


  // =========================================================
  // PROJECT PREVIEW TOGGLES
  //
  // IMPORTANT:
  // This section only opens/closes the preview.
  //
  // language.js controls:
  //
  // English:
  // View Project
  // Hide Preview
  //
  // Spanish:
  // Ver Proyecto
  // Ocultar Proyecto
  // =========================================================

  document
    .querySelectorAll("[data-preview-toggle]")
    .forEach(function (btn) {

      btn.addEventListener("click", function () {

        var targetId =
          btn.getAttribute(
            "data-preview-toggle"
          );

        var panel =
          document.getElementById(
            targetId
          );

        if (!panel) return;


        // -----------------------------------------------------
        // Open / close preview
        // -----------------------------------------------------

        var isOpen =
          panel.classList.toggle(
            "is-open"
          );


        // -----------------------------------------------------
        // Accessibility
        // -----------------------------------------------------

        btn.setAttribute(
          "aria-expanded",
          isOpen ? "true" : "false"
        );


        // -----------------------------------------------------
        // Save the current preview state
        //
        // language.js reads this value and determines whether
        // the button should say:
        //
        // View Project / Ver Proyecto
        //
        // or:
        //
        // Hide Preview / Ocultar Proyecto
        // -----------------------------------------------------

        btn.setAttribute(
          "data-preview-state",
          isOpen ? "open" : "closed"
        );


        // -----------------------------------------------------
        // Update the button using language.js
        // -----------------------------------------------------

        if (
          typeof window.applyPortfolioLanguage ===
          "function"
        ) {

          window.applyPortfolioLanguage();

        }


        // -----------------------------------------------------
        // Lazy-load iframe / video
        //
        // The src is only loaded the first time the preview
        // is opened.
        // -----------------------------------------------------

        var lazyEl =
          panel.querySelector(
            "[data-src]"
          );

        if (
          isOpen &&
          lazyEl &&
          !lazyEl.getAttribute("src")
        ) {

          lazyEl.setAttribute(
            "src",
            lazyEl.getAttribute(
              "data-src"
            )
          );

        }

      });

    });

});