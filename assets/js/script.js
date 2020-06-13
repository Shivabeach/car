// response requires an ID
let materialAmount = document.getElementById("materialAmount");
let dilutionAmount = document.getElementById("dilutionAmount");

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

(function() {
	"use strict";
	let cripes = document.querySelector("#cripes");
	if (cripes != null) {
		cripes.addEventListener("click", event => {
			var ratio = document.getElementById("ratio").value;
			var ounces = document.getElementById("ounces").value;
			if (ratio === "" || ratio <= 0 || ounces === "" || ounces <= 0) {
				event.preventDefault();
				alert("Lets imput some numbers");
				return false;
			} else {
				event.preventDefault();
				var dilute = ounces / ratio;
				var amount = ounces - dilute;
				materialAmount.innerText = Math.round(dilute) + " Ounces";
				dilutionAmount.innerText = Math.round(amount) + " Ounces";
			}
		});
	}
})();

