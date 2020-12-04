<body>
    <header class="fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-dark">
                        <a class="navbar-brand" href="#">SIFAH</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <a class="nav-item nav-link" href="#about">About SIFAH</a>
                                <a class="nav-item nav-link" href="#lisensi">Lisensi</a>
                                <a class="nav-item nav-link" href="<?= base_url('home/login') ?>">Login</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <article id="home" class="landing">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="title-landing">SIFAH</h1>
                    <p class="content-landing">Sistem Informasi Apotik Alfah</p>
                    <br /><br />
                    <a href="#about" class="detail">Selengkapnya</a>
                    <br /><br /><br /><br /><br /><br />
                    <p id="about" class="text-white text-right footer-landing">Jln. Ir. Mashudi Desa Pangulah Utara <br />Kec. Kotabaru Kab. Karawang Jawa Barat</p>
                </div>
            </div>
        </div>
    </article>
    <article>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4 mb-2 mt-4">
                    <div class="about-image mt-4">
                        <img src="<?= base_url('assets/img/pharmacy.jpg') ?>" alt="SIFAH" title="SIFAh" class="w-100">
                    </div>
                </div>
                <div class="col-md-12 col-lg-8 mb-2 mt-4">
                    <h3 class="title-about mb-4">About SIFAH</h3>
                    <p class="text-left content-about">
                        SIFAH adalah sebuah sistem informasi pengelolaan data obat pada apotek Alfah. Sistem Informasi ini dapat membantu admin atau pemilik apotik dalam mengelola stok obat ataupun informasi mengenai pembelian obat maupun penjualan obat.
                        <br /><br />
                        Dengan terintegrasinya sistem pembukuan berbasis digital seperti ini dapat mengurangi penggunaan kertas sehingga pengeluaran menjadi lebih hemat dalam masalah pembukuan.
                    </p>
                </div>
            </div>
        </div>
    </article>
    <article id="lisensi">
        <div class="container">
            <dic class="row">
                <div class="col-md-12 col-lg-8 mb-2 mt-4">
                    <h3 class="title-about mb-4">Lisensi izin pengedaran obat</h3>
                    <p class="text-left content-about">
                        Apotik alfah memiliki lisensi izin dari BPOMRI (Badan Pengawas Obat-obatan Republik Indonesia) untuk mengedarkan atau memperjual belikan obat-obatan secara resmi.
                        <br /><br />
                        Dengan adanya lisensi ini apotik alfah akan bertanggung jawab apabila ada obat-obatan yang dijual tidak sesuai dengan peraturan yang ditetapkan oleh BPOMRI, serta bersedia untuk melepas lisensi tersebut.
                    </p>
                </div>
                <div class="col-md-12 col-lg-4 mb-2 mt-4">
                    <img src="<?= base_url('assets/img/lisensi.jpg') ?>" alt="lisensi" title="lisensi" class="w-100">
                </div>
            </dic>
        </div>
    </article>