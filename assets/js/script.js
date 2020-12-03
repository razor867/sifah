$(".nav-link").click(function (e) {
	$(".navbar-toggler").click();
});

$(window).scroll(function () {
	if ($(this).scrollTop() > 25) {
		$(".fixed-top").addClass("bg-dark");
		$(".navbar").css("paddingTop", "9px");
		$(".navbar-brand").css("color", "white");
		$(".nav-link").css("color", "white");
		$(".navbar-brand").hover(
			function () {
				$(this).css("color", "rgba(255, 255, 255, 0.75)");
			},
			function () {
				$(this).css("color", "white");
			}
		);
		$(".nav-link").hover(
			function () {
				$(this).css("color", "rgba(255, 255, 255, 0.75)");
			},
			function () {
				$(this).css("color", "white");
			}
		);
	} else if ($(this).scrollTop() == 0) {
		$(".fixed-top").removeClass("bg-dark");
		$(".navbar").css("paddingTop", "70px");
		$(".navbar-brand").css("color", "#28ab99");
		$(".nav-link").css("color", "#28ab99");
		$(".navbar-brand").hover(
			function () {
				$(this).css("color", "#08463d");
			},
			function () {
				$(this).css("color", "#28ab99");
			}
		);
		$(".nav-link").hover(
			function () {
				$(this).css("color", "#08463d");
			},
			function () {
				$(this).css("color", "#28ab99");
			}
		);
	}
});
