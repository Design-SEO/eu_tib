(function ($) {
  "use strict";

  $(window).on("load", function () {
    /* ----------------------------------------------------------- */
    /*  BITCOIN PRELOADER
        /* ----------------------------------------------------------- */
    if ($("#preloader")[0]) {
      $("#preloader")
        .delay(500)
        .fadeTo(500, 0, function () {
          $(this).remove();
        });
    }
  });

  // Select2
  (function ($) {
    "use strict";

    if ($.isFunction($.fn["select2"])) {
      $(function () {
        $("[data-plugin-selectTwo]").each(function () {
          var $this = $(this),
            opts = {};

          var pluginOptions = $this.data("plugin-options");
          if (pluginOptions) opts = pluginOptions;

          $this.themePluginSelect2(opts);
        });
      });
    }
  }).apply(this, [jQuery]);
})(jQuery);

const langSelectors = document.querySelectorAll(
  ".lang-select, .lang-select-desktop"
);
langSelectors.forEach((langSelect) => {
  const langBtn = langSelect.querySelector(".lang-btn");
  const langMenu = langSelect.querySelector(".lang-menu");

  if (!langBtn || !langMenu) return;

  const langOptions = langMenu.querySelectorAll(".lang-option a");
  langOptions.forEach((option) => {
    option.addEventListener("click", (e) => {
      // e.preventDefault();
      const langText = option.querySelector("span:last-child").textContent;
      const langCode = option.getAttribute("href").replace("/", "");

      // Обновляем текст кнопки
      const flagImg = option.querySelector(".flag img").cloneNode(true);
      const label = langBtn.querySelector(".label");
      const flagContainer = langBtn.querySelector(".flag");

      flagContainer.innerHTML = "";
      flagContainer.appendChild(flagImg);
      label.textContent = `${langText} (${langCode.toUpperCase()})`;
    });
  });
});
