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

	//flash info
	if ($(".alert-content").html() != "") {
		$(".alert").css("display", "block");
		$(".alert").addClass("alert-danger");
		$(".alert-heading").html("Gagal login!");
		if ($(".alert").attr("tipe") == 1) {
			$(".alert").removeClass("alert-danger");
			$(".alert").addClass("alert-success");
		}
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

	//load heading table dan form
	if ($(".hal").html() == "Data Penjualan") {
		//Form core
		$(".tgl-jualbeli").html("Tanggal Jual");
		$("#tanggaljualbeli").attr("name", "tanggaljual");
		$(".total-jualbeli").html("Total Jual");
		$("#totaljualbeli").attr("name", "totaljual");
		$(".konsup").html("Konsumen");
		$("#konsumendansupplier").attr("name", "konsumen");
		$(".pilihkonsup").html("Pilih Konsumen");
		//Heading table
		$("#show-heading-table").html(
			"<tr><th>Obat</th><th>Tanggal</th><th>Net</th><th>Total Jual</th><th>Konsumen</th><th><a href='#' class='btn btn-dark add' data-toggle='modal' data-target='#showModal'><img src='http://localhost//sifah/assets/img/add.png' alt='Tambah'> Add</a></th></tr>"
		);
	} else if ($(".hal").html() == "Data Pembelian") {
		//Form core
		$(".tgl-jualbeli").html("Tanggal Beli");
		$("#tanggaljualbeli").attr("name", "tanggalbeli");
		$(".total-jualbeli").html("Total Beli");
		$("#totaljualbeli").attr("name", "totalbeli");
		$(".konsup").html("Supplier");
		$("#konsumendansupplier").attr("name", "supplier");
		$(".pilihkonsup").html("Pilih Supplier");
		//Heading table
		$("#show-heading-table").html(
			"<tr><th>Obat</th><th>Tanggal</th><th>Net</th><th>Total Beli</th><th>Supplier</th><th><a href='#' class='btn btn-dark add' data-toggle='modal' data-target='#showModal'><img src='http://localhost//sifah/assets/img/add.png' alt='Tambah'>  Add</a></th></tr>"
		);
	} else if ($(".hal").html() == "Data Supplier") {
		//Form core
		$(".supp-men").html("Supplier");
		$("#suppmen").attr("name", "supplier");
		$("#suppmen").attr("placeholder", "Nama Supplier");
		//Heading table
		$("#show-heading-table").html(
			"<tr><th>Supplier</th><th><a href='#' class='btn btn-dark add'data-toggle='modal' data-target='#showModal'><img src='http://localhost/sifah/assets/img/add.png' alt='Tambah'> Add</a></th></tr>"
		);
	} else if ($(".hal").html() == "Data Konsumen") {
		//Form core
		$(".supp-men").html("Konsumen");
		$("#suppmen").attr("name", "konsumen");
		$("#suppmen").attr("placeholder", "Nama Konsumen");
		//Heading table
		$("#show-heading-table").html(
			"<tr><th>Konsumen</th><th><a href='#' class='btn btn-dark add' data-toggle='modal' data-target='#showModal'><img src='http://localhost/sifah/assets/img/add.png' alt='Tambah'> Add</a></th></tr>"
		);
	}

	function cleanForm(page) {
		if (page == "Data Penjualan") {
		} else if (page == "Data Pembelian") {
		} else if (page == "Data Obat") {
			$("#namaobat").val("");
			$("#jenis").val("");
			$("#kegunaan").val("");
			$("#expired").val("");
			$("#stok").val("");
			$("#hargasatuan").val("");
		} else {
			$("#suppmen").val("");
		}
	}

	function cekID(page) {
		$.ajax({
			url: "http://localhost/sifah/akun/cekID",
			data: {
				page: page,
			},
			method: "post",
			dataType: "json",
			success: function (data) {
				if (page == "Data Penjualan" || page == "Data Pembelian") {
					$("#iddatajualbeli").val(data);
				} else {
					$("#idobat").val(data);
				}
			},
		});
	}

	function getEdit(page, idData) {
		$.ajax({
			url: "http://localhost/sifah/akun/getDataEdit",
			data: {
				page: page,
				id: idData,
			},
			method: "post",
			dataType: "json",
			success: function (data) {
				if (page == "Data Penjualan") {
				} else if (page == "Data Pembelian") {
				} else if (page == "Data Obat") {
					$("#namaobat").val(data[0].nama_obat);
					$("#jenis").val(data[0].jenis_obat);
					$("#kegunaan").val(data[0].kegunaan);
					$("#expired").val(data[0].tgl_kedaluarsa);
					$("#stok").val(data[0].stok);
					$("#hargasatuan").val(data[0].harga);
				} else if (page == "Data Supplier") {
					$("#suppmen").val(data[0].nama_supplier);
				} else {
					$("#suppmen").val(data[0].nama_konsumen);
				}
			},
		});
	}

	//add action
	$(".add").click(function () {
		$(".aksi").html("Save");
		$("#form-aksi").attr("action", "http://localhost/sifah/akun/tambah");
		$("#page").val($(".hal").html());
		if ($(".hal").html() == "Data Penjualan") {
			$(".modal-title").html("Tambah Data Penjualan");
			$(".form-datajualbeli").css("display", "block");
		} else if ($(".hal").html() == "Data Pembelian") {
			$(".modal-title").html("Tambah Data Pembelian");
			$(".form-datajualbeli").css("display", "block");
		} else if ($(".hal").html() == "Data Obat") {
			$(".modal-title").html("Tambah Data Obat");
			$(".form-obat").css("display", "block");
		} else if ($(".hal").html() == "Data Supplier") {
			$(".modal-title").html("Tambah Data Supplier");
			$(".form-suppmen").css("display", "block");
		} else {
			$(".modal-title").html("Tambah Data Konsumen");
			$(".form-suppmen").css("display", "block");
		}
		cleanForm($(".hal").html());
		cekID($(".hal").html());
	});

	//edit action
	$(".edit").click(function () {
		$(".aksi").html("Edit");
		$("#form-aksi").attr("action", "http://localhost/sifah/akun/edit");
		$("#page").val($(".hal").html());
		if ($(".hal").html() == "Data Penjualan") {
			$(".modal-title").html("Edit Data Penjualan");
			$(".form-datajualbeli").css("display", "block");
		} else if ($(".hal").html() == "Data Pembelian") {
			$(".modal-title").html("Edit Data Pembelian");
			$(".form-datajualbeli").css("display", "block");
		} else if ($(".hal").html() == "Data Obat") {
			$(".modal-title").html("Edit Data Obat");
			$(".form-obat").css("display", "block");
		} else if ($(".hal").html() == "Data Supplier") {
			$(".modal-title").html("Edit Data Supplier");
			$(".form-suppmen").css("display", "block");
		} else {
			$(".modal-title").html("Edit Data Konsumen");
			$(".form-suppmen").css("display", "block");
		}
		cleanForm($(".hal").html());
		getEdit($(".hal").html(), $(this).attr("dataID"));
	});
});
