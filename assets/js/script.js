$(document).ready(function () {
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

	$("#btnLogin").click(function () {
		inputDataUser = $("#username").val();
		inputDataPass = $("#pass").val();
		if (!inputDataUser || !inputDataPass) {
			$(".alert").css("display", "block");
			$(".alert").removeClass("alert-danger");
			$(".alert").addClass("alert-warning");
			$(".alert-heading").html("Terjadi kesalahan!");
			$(".alert-content").html("Username dan Password wajib diisi!");
		} else {
			$.ajax({
				url: "http://localhost/sifah/home/cekLogin",
				data: {
					username: inputDataUser,
					password: inputDataPass,
				},
				method: "post",
				dataType: "json",
				success: function (data) {
					// if (data != "berhasil") {
					// 	$(".alert").css("display", "block");
					// 	$(".alert").removeClass("alert-warning");
					// 	$(".alert").addClass("alert-danger");
					// 	$(".alert-heading").html("Gagal login!");
					// } else {
					// 	window.location.replace("http://localhost/sifah/akun/dashboard");
					// }
					console.log(data);
				},
			});
		}
	});
});
