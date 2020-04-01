// response requires an ID
$(function() {
  $("form#ajax").on("submit", function(e) {
    "use strict";
    e.preventDefault();
    var that = $(this),
      url = that.attr("action"),
      type = that.attr("method"),
      data = {};
    that.find("[name]").each(function(index, value) {
      var that = $(this),
        name = that.attr("name"),
        value = that.val();
      data[name] = value;
    });
    $.ajax({
      url: url,
      type: type,
      data: data,
      success: function(response) {
        $("#display")
          .html(response)
          .delay(6000)
          .fadeOut(1000);
      }
    });
    return false;
  });
});
//response requires a class
$(function() {
  $("form.cars").on("submit", function(e) {
    "use strict";
    e.preventDefault();
    var that = $(this),
      url = that.attr("action"),
      type = that.attr("method"),
      data = {};
    that.find("[name]").each(function(index, value) {
      var that = $(this),
        name = that.attr("name"),
        value = that.val();
      data[name] = value;
    });
    $.ajax({
      url: url,
      type: type,
      data: data,
      success: function(response) {
        $(".display")
          .html(response)
          .delay(10000)
          .fadeOut(1000);
      }
    });
    return false;
  });
});
//  opens new window for external links
$(function() {
  $('A[rel="external"]').click(function() {
    window.open($(this).attr("href"));
    return false;
  });
});
//jquery datepicker
$(function() {
  "use strict";
  $(".date").datepicker({
    dateFormat: "yy-mm-dd"
  });
});
