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

	if ($(".alert-content").html() != "") {
		$(".alert").css("display", "block");
		$(".alert").addClass("alert-danger");
		$(".alert-heading").html("Gagal login!");
	}

	$(".list-menu").hover(
		function () {
			$(this)
				.find(".icon-list-menu")
				.attr("src", "http://localhost/sifah/assets/img/chevron-white.png");
		},
		function () {
			//cek hover link active
			if ($(this).hasClass("link-active")) {
				$(this)
					.find(".icon-list-menu")
					.attr("src", "http://localhost/sifah/assets/img/chevron-white.png");
			} else {
				$(this)
					.find(".icon-list-menu")
					.attr("src", "http://localhost/sifah/assets/img/chevron-black.png");
			}
		}
	);
	function showActive() {
		//membuat link active
		for (let i = 0; i < $(".list-menu").length; i++) {
			$(".list-menu").eq(i).removeClass("link-active");
			if ($(".list-menu").eq(i).text() == $(".hal").html()) {
				$(".list-menu").eq(i).addClass("link-active");
				$(".link-active")
					.find(".icon-list-menu")
					.attr("src", "http://localhost/sifah/assets/img/chevron-white.png");

				return false; //breaks
			}
		}
	}
	showActive();

	//show heading table
	if ($(".hal").html() != "Data Obat") {
		$("#show-heading-table").html(function () {
			var html = "";
			if ($(".hal").html() == "Data Penjualan") {
				html +=
					"<tr><th>Obat</th><th>Tanggal</th><th>Net</th><th>Total Jual</th><th>Konsumen</th><th><a href='#' class='btn btn-dark'>Tambah Data</a></th></tr>";
			} else if ($(".hal").html() == "Data Pembelian") {
				html +=
					"<tr><th>Obat</th><th>Tanggal</th><th>Net</th><th>Total Beli</th><th>Supplier</th><th><a href='#' class='btn btn-dark'>Tambah Data</a></th></tr>";
			} else if ($(".hal").html() == "Data Konsumen") {
				html +=
					"<tr><th>Konsumen</th><th><a href='#' class='btn btn-dark'>Tambah Data</a></th></tr>";
			} else if ($(".hal").html() == "Data Supplier") {
				html +=
					"<tr><th>Supplier</th><th><a href='#' class='btn btn-dark'>Tambah Data</a></th></tr>";
			}
			return html;
		});
	}

	//show body table
	if (
		$(".hal").html() == "Data Penjualan" ||
		$(".hal").html() == "Data Pembelian"
	) {
		$(".show-datatable").eq(5).remove();
	} else if (
		$(".hal").html() == "Data Supplier" ||
		$(".hal").html() == "Data Konsumen"
	) {
		//agak tricky nih menampilkannya (membuat range data yg mau di hapus)
		// $(".show-datatable")
		// 	.not(".show-datatable:eq(6)")
		// 	.not(".show-datatable:eq(0)")
		// 	.remove();
		//pakai yg atas jg bisa ngandelin bug
		var $rows = $(".show-datatable");
		$(
			".show-datatable:lt(" + $rows.index(6) + "):gt(" + $rows.index(0) + ")"
		).remove();
	}
});
