//Menu Canvas
jQuery(".mobile").on("click", function () {
  jQuery(".canvas-menu").toggleClass("open");
  jQuery(".overlay").toggleClass("open");
});

jQuery(".canvas-menu .btn-close").on("click", function () {
  jQuery(".canvas-menu").removeClass("open");
  jQuery(".overlay").removeClass("open");
});

jQuery(function ($) {
  $("select option:first-child").attr("disabled", "disabled");
});

//Modal Whats Form

// jQuery(".btn-floating").on("click", function () {
//   jQuery(".modal-whats").toggleClass("active");
//   jQuery(".btn-floating").toggleClass("active");
//   jQuery(".overlay").toggleClass("open");
// });

// jQuery(".canvas-menu .btn-close").on("click", function () {
//   jQuery(".modal-whats").removeClass("active");
//   jQuery(".btn-floating").removeClass("active");
//   jQuery(".overlay").removeClass("open");
// });
// ScrollTop

jQuery(".scrollTo").on("click", function (e) {
  e.preventDefault();
  var target = jQuery(this).attr("href");
  jQuery("html, body").animate(
    {
      scrollTop: jQuery(target).offset().top,
    },
    2000
  );
});

/**
 * Disable WPCF7 button while it's submitting
 * Stops duplicate enquiries coming through
 */
document.addEventListener(
  "wpcf7submit",
  function (event) {
    // find only disbaled submit buttons
    var button = jQuery(".wpcf7-submit[disabled]");

    // grab the old value
    var old_value = button.attr("data-value");

    // enable the button
    button.prop("disabled", false);

    // put the old value back in
    button.val(old_value);
  },
  false
);

jQuery("form.wpcf7-form").on("submit", function () {
  var form = jQuery(this);
  var button = form.find("input[type=submit]");
  var current_val = button.val();

  // store the current value so we can reset it later
  button.attr("data-value", current_val);

  // disable the button
  button.prop("disabled", true);

  // tell the user what's happening
  button.val("Enviando...");
});
