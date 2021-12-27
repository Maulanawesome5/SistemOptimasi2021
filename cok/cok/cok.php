
<!doctype html>
<html class="no-js flexbox" lang="en" ng-app="app">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="description" content="Situs Resmi BEI">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<meta property="og:url" content="http://www.idx.co.id">
<meta property="og:title" content="PT Bursa Efek Indonesia">
<meta property="og:site_name" content="PT Bursa Efek Indonesia">
<meta property="og:description" content="Indonesia Stock Exchange (IDX) website features stock market news, stock information, stock updates, and general overview of the market landscape.">
<meta property="og:image" content="http://www.idx.co.id/assets/img/logo-idx.png">
<meta property="og:type" content="website">
<meta property="fb:app_id" content="">
<meta name="twitter:card" content="">
<meta name="twitter:site" content="http://www.idx.co.id">
<meta name="twitter:description" content="Indonesia Stock Exchange (IDX) website features stock market news, stock information, stock updates, and general overview of the market landscape.">
<meta name="twitter:title" content="PT Bursa Efek Indonesia">
<meta name="twitter:image" content="http://www.idx.co.id/assets/img/logo-idx.png">
<link defer rel="apple-touch-icon" href="/assets/img/apple-icon.png">
<link defer rel="icon" type="image/png" href="/assets/img/favicon.png">
<title>PT Bursa Efek Indonesia</title>
<link href="/assets/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
<link defer rel="stylesheet" href="/assets/css/main.css">

<script src="/assets/js/vendor/jquery.min.js"></script>
<script>
        var interval = setInterval(function () {
            if ($("#launcher").length) {
                clearInterval(interval);
                var $currentIFrame = $('#launcher');
                console.log($currentIFrame.contents().find("body .wrapper-AtBcr"))
                $currentIFrame.contents().find("body .wrapper-AtBcr").click()
            }
        }, 1000);
    </script>
<link defer rel="stylesheet" href="/assets/css/user-feedback.css">
<style type="text/css">
        .grecaptcha-badge {
            visibility: hidden;
        }
    </style>
</head>
<body class="sticky-footer-container">
<!--[if lt IE 9]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

<header class="sticky-footer-container-item">
<div class="container">
<div class="header-content-container">
<div class="header-left-content">
<div class="header-img-container">
<a name="homeLink" href="/">
<img src="/assets/img/logo-idx.png" alt="">
</a>
</div>
</div>
<div class="header-right-content">
<div class="header-bottom">
<div class="header-date livetime-js"></div>
<ul class="header-socmed list-inline list-nostyle">
<li class="header-socmed-item"><a href="https://www.facebook.com/indonesiastockexchange/" target="_blank"><span class="fa fa-facebook-official"></span></a></li>
<li class="header-socmed-item"><a href="https://twitter.com/IDX_BEI" target="_blank"><span class="fa fa-twitter"></span></a></li>
<li class="header-socmed-item"><a href="https://www.youtube.com/channel/UCXyfYHdOPLUgxMndSwf9tHg" target="_blank"><span class="fa fa-youtube-play"></span></a></li>
<li class="header-socmed-item"><a href="https://www.instagram.com/indonesiastockexchange/" target="_blank"><span class="fa fa-instagram"></span></a></li>
</ul>
<div class="header-hotline">
<span class="fa fa-volume-control-phone"></span>
<span>150515 (National)</span>
</div>

<div class="header-search-box">
<div class="search-box">
<input name="global-input-search" type="text" class="form-search" placeholder="Search">
<button class="btn btn-icon-box" onclick="onSearchBtnClick()"><span class="fa fa-search fa-fw"></span></button>
</div>
</div>
<div class="header-language">
<a href="/en-us/market-data/stocks-data/list-of-stocks/" class="language-current">
<span>EN</span>
</a>
</div>
</div>
</div>
</div>
</div>
<div class="header-content-mobile-container">
<div class="header-content-mobile">
<div class="header-content-left-mobile">
<div class="header-img-container">
<a name="homeLink" href="/">
<img src="/assets/img/logo-idx.png" alt="">
</a>
</div>
</div>
<div class="header-content-right-mobile">
<div class="header-content-top-mobile">
<div class="header-search-box">
<div class="search-box">
<input name="global-input-search" type="text" class="form-search" placeholder="Search">
<button class="btn btn-icon-box btn-icon-box--header" onclick="onSearchBtnClick()"><span class="fa fa-search fa-fw"></span></button>
</div>
</div>
<div class="header-language">
<a href="/en-us/market-data/stocks-data/list-of-stocks/" class="language-current">
<span>EN</span>
</a>
</div>
<div class="header-mobile-menu-container">
<button class="btn btn-menu open-nav-js fa fa-bars fa-fw"></button>
</div>
</div>
<div class="header-content-bottom-mobile">
<div class="header-date livetime-js"></div>
<ul class="header-socmed list-inline list-nostyle">
<li class="header-socmed-item"><a href="https://www.facebook.com/indonesiastockexchange/" target="_blank"><span class="fa fa-facebook-official"></span></a></li>
<li class="header-socmed-item"><a href="https://twitter.com/IDX_BEI" target="_blank"><span class="fa fa-twitter"></span></a></li>
<li class="header-socmed-item"><a href="https://www.youtube.com/channel/UCXyfYHdOPLUgxMndSwf9tHg" target="_blank"><span class="fa fa-youtube-play"></span></a></li>
<li class="header-socmed-item"><a href="https://www.instagram.com/indonesiastockexchange/" target="_blank"><span class="fa fa-instagram"></span></a></li>
</ul>
</div>
</div>
</div>
</div>
<div class="header-main-nav">
<div class="container">
<ul class="list-nostyle header-main-nav-list">
<li class="main-nav-item">
<label class="main-nav-title">Data Pasar</label>
<ul class="list-nostyle header-sub-nav-list">
<li class="header-sub-nav-item">
<span class="sub-nav-title">Ringkasan Perdagangan</span>
<ul class="list-nostyle child-nav-list">
<li><a href="/data-pasar/ringkasan-perdagangan/ringkasan-perdagangan/">Ringkasan Perdagangan</a></li>
<li><a href="/data-pasar/ringkasan-perdagangan/ringkasan-indeks/">Ringkasan Indeks</a></li>
<li><a href="/data-pasar/ringkasan-perdagangan/rekapitulasi/">Rekapitulasi</a></li>
<li><a href="/data-pasar/ringkasan-perdagangan/ringkasan-saham/">Ringkasan Saham</a></li>
<li><a href="/data-pasar/ringkasan-perdagangan/ringkasan-broker/">Ringkasan Broker</a></li>
<li><a href="/data-pasar/ringkasan-perdagangan/ringkasan-ped/">Ringkasan PED</a></li>
</ul>
</li>
<li class="header-sub-nav-item">
<span class="sub-nav-title">Laporan Statistik</span>
<ul class="list-nostyle child-nav-list">
<li><a href="/data-pasar/laporan-statistik/statistik/">Statistik</a></li>
<li><a href="/data-pasar/laporan-statistik/ringkasan-performa-perusahaan-lq45/">Ringkasan Performa Perusahaan LQ45</a></li>
<li><a href="/data-pasar/laporan-statistik/fact-book/">Fact Book</a></li>
<li><a href="/data-pasar/laporan-statistik/bond-book/">Bond Book</a></li>
<li><a href="/data-pasar/laporan-statistik/digital-statistic-beta/">Digital Statistic (Beta)</a></li>
<li><a href="/data-pasar/laporan-statistik/fact-sheet-indeks/">Fact Sheet Indeks</a></li>
</ul>
</li>
<li class="header-sub-nav-item">
<span class="sub-nav-title">Data Saham</span>
<ul class="list-nostyle child-nav-list">
<li><a href="/data-pasar/data-saham/indeks-saham/">Indeks Saham</a></li>
<li><a href="/data-pasar/data-saham/daftar-saham/">Daftar Saham</a></li>
<li><a href="/data-pasar/data-saham/saham-marjin/">Saham Marjin</a></li>
<li><a href="/data-pasar/data-saham/saham-pre-opening/">Saham Pre-Opening</a></li>
</ul>
</li>
<li class="header-sub-nav-item">
<span class="sub-nav-title">Data Obligasi &amp; Sukuk</span>
<ul class="list-nostyle child-nav-list">
<li><a href="/data-pasar/data-obligasi-sukuk/indobex/">INDOBeX</a></li>
<li><a href="/data-pasar/data-obligasi-sukuk/obligasi-sukuk-korporasi/">Obligasi &amp; Sukuk Korporasi</a></li>
<li><a href="/data-pasar/data-obligasi-sukuk/surat-berharga-negara/">Surat Berharga Negara</a></li>
<li><a href="/data-pasar/data-obligasi-sukuk/perdagangan-etp/">Perdagangan ETP</a></li>
<li><a href="/data-pasar/data-obligasi-sukuk/laporan-perdagangan-otc/">Laporan Perdagangan OTC</a></li>
<li><a href="/data-pasar/data-obligasi-sukuk/kuotasi-pds/">Kuotasi PD&#39;s</a></li>
<li><a href="/data-pasar/data-obligasi-sukuk/indonesia-government-securities-yield-curve-igsyc/">Indonesia Government Securities Yield Curve (IGSYC)</a></li>
</ul>
</li>
<li class="header-sub-nav-item">
<a href="/data-pasar/data-efek-beragun-aset-eba/" class="sub-nav-title">Data Efek Beragun Aset (EBA)</a>
</li>
<li class="header-sub-nav-item">
<a href="/data-pasar/data-exchanged-traded-fund-etf/" class="sub-nav-title">Data Exchanged Traded Fund (ETF)</a>
</li>
<li class="header-sub-nav-item">
<span class="sub-nav-title">Data Derivatif</span>
<ul class="list-nostyle child-nav-list">
<li><a href="/data-pasar/data-derivatif/futures/">Futures</a></li>
</ul>
</li>
<li class="header-sub-nav-item">
<a href="/data-pasar/dire-dinfra/" class="sub-nav-title">DIRE &amp; DINFRA</a>
</li>
<li class="header-sub-nav-item">
<a href="/data-pasar/data-pinjam-meminjam-efek/" class="sub-nav-title">Data Pinjam Meminjam Efek</a>
</li>
</ul>
</li>
<li class="main-nav-item">
<label class="main-nav-title">Produk</label>
<ul class="list-nostyle header-sub-nav-list">
<li class="header-sub-nav-item">
<a href="/produk/saham/" class="sub-nav-title">Saham</a>
</li>
<li class="header-sub-nav-item">
<a href="/produk/surat-utang-obligasi/" class="sub-nav-title">Surat Utang (Obligasi)</a>
</li>
<li class="header-sub-nav-item">
<a href="/produk/reksa-dana/" class="sub-nav-title">Reksa Dana</a>
</li>
<li class="header-sub-nav-item">
<a href="/produk/exchange-traded-fund-etf/" class="sub-nav-title">Exchange Traded Fund (ETF)</a>
</li>
<li class="header-sub-nav-item">
<a href="/produk/derivatif/" class="sub-nav-title">Derivatif</a>
</li>
<li class="header-sub-nav-item">
<a href="/produk/indeks/" class="sub-nav-title">Indeks</a>
</li>
<li class="header-sub-nav-item">
<a href="/produk/pinjam-meminjam-efek/" class="sub-nav-title">Pinjam Meminjam Efek</a>
</li>
<li class="header-sub-nav-item">
<a href="/produk/layanan-data-bei/" class="sub-nav-title">Layanan Data BEI</a>
</li>
<li class="header-sub-nav-item">
<a href="/produk/galeri-investasi-bei-komunitas-pasar-modal/" class="sub-nav-title">Galeri Investasi BEI &amp; Komunitas Pasar Modal</a>
</li>
<li class="header-sub-nav-item">
<a href="/produk/sertifikasi-dan-edukasi-pasar-modal/" class="sub-nav-title">Sertifikasi dan Edukasi Pasar Modal</a>
</li>
<li class="header-sub-nav-item">
<a href="/produk/perpustakaan-pasar-modal/" class="sub-nav-title">Perpustakaan Pasar Modal</a>
</li>
<li class="header-sub-nav-item">
<a href="/produk/kunjungan-virtual-bei/" class="sub-nav-title">Kunjungan Virtual BEI</a>
</li>
<li class="header-sub-nav-item">
<a href="/produk/dire-dinfra/" class="sub-nav-title">DIRE &amp; DINFRA</a>
</li>
</ul>
</li>
<li class="main-nav-item">
<label class="main-nav-title">Perusahaan Tercatat</label>
<ul class="list-nostyle header-sub-nav-list">
<li class="header-sub-nav-item">
<a href="https://gopublic.idx.co.id/" target='_blank' class="sub-nav-title">Pusat Informasi Go Public</a>
</li>
<li class="header-sub-nav-item">
<a href="/perusahaan-tercatat/layanan-untuk-perusahaan-tercatat/" class="sub-nav-title">Layanan untuk Perusahaan Tercatat</a>
</li>
<li class="header-sub-nav-item">
<a href="/perusahaan-tercatat/aktivitas-pencatatan/" class="sub-nav-title">Aktivitas Pencatatan</a>
</li>
<li class="header-sub-nav-item">
<a href="/perusahaan-tercatat/profil-perusahaan-tercatat/" class="sub-nav-title">Profil Perusahaan Tercatat</a>
</li>
<li class="header-sub-nav-item">
<a href="/perusahaan-tercatat/aksi-korporasi/" class="sub-nav-title">Aksi Korporasi</a>
</li>
<li class="header-sub-nav-item">
<a href="/perusahaan-tercatat/laporan-keuangan-dan-tahunan/" class="sub-nav-title">Laporan Keuangan dan Tahunan</a>
</li>
<li class="header-sub-nav-item">
<a href="/perusahaan-tercatat/keterbukaan-informasi/" class="sub-nav-title">Keterbukaan Informasi</a>
</li>
<li class="header-sub-nav-item">
<a href="/perusahaan-tercatat/kalender-perusahaan-tercatat/" class="sub-nav-title">Kalender Perusahaan Tercatat</a>
</li>
<li class="header-sub-nav-item">
<a href="/perusahaan-tercatat/xbrl/" class="sub-nav-title">XBRL</a>
</li>
<li class="header-sub-nav-item">
<a href="/perusahaan-tercatat/prospektus/" class="sub-nav-title">Prospektus</a>
<ul class="list-nostyle child-nav-list">
</ul>
</li>
<li class="header-sub-nav-item">
<a href="/perusahaan-tercatat/notasi-khusus/" class="sub-nav-title">Notasi Khusus</a>
</li>
<li class="header-sub-nav-item">
<a href="/perusahaan-tercatat/daftar-efek-pemantauan-khusus/" class="sub-nav-title">Daftar Efek Pemantauan Khusus</a>
</li>
</ul>
</li>
<li class="main-nav-item">
<a href="/idx-syariah/" class="main-nav-title">IDX Syariah</a>
<ul class="list-nostyle header-sub-nav-list">
<li class="header-sub-nav-item">
<a href="/idx-syariah/produk-syariah/" class="sub-nav-title">Produk Syariah</a>
</li>
<li class="header-sub-nav-item">
<a href="/idx-syariah/indeks-saham-syariah/" class="sub-nav-title">Indeks Saham Syariah</a>
</li>
<li class="header-sub-nav-item">
<a href="/idx-syariah/transaksi-sesuai-syariah/" class="sub-nav-title">Transaksi Sesuai Syariah</a>
</li>
<li class="header-sub-nav-item">
<a href="/idx-syariah/fatwa-regulasi/" class="sub-nav-title">Fatwa &amp; Regulasi</a>
</li>
<li class="header-sub-nav-item">
 <a href="/idx-syariah/edukasi-pasar-modal-syariah/" class="sub-nav-title">Edukasi Pasar Modal Syariah</a>
</li>
<li class="header-sub-nav-item">
<a href="/idx-syariah/pertanyaan-jawaban/" class="sub-nav-title">Pertanyaan &amp; Jawaban</a>
</li>
<li class="header-sub-nav-item">
<a href="/idx-syariah/hubungi-kami/" class="sub-nav-title">Hubungi Kami</a>
</li>
<li class="header-sub-nav-item">
<a href="https://shariainvestmentweek.com/" target='_blank' class="sub-nav-title">Sharia Investment Week 2021</a>
</li>
<li class="header-sub-nav-item">
<a href="https://idxislamic.idx.co.id/" target='_blank' class="sub-nav-title">Menjadi Investor Syariah</a>
</li>
</ul>
</li>
<li class="main-nav-item">
<label class="main-nav-title">Anggota Bursa dan Partisipan</label>
<ul class="list-nostyle header-sub-nav-list">
<li class="header-sub-nav-item">
<a href="/anggota-bursa-dan-partisipan/profil-anggota-bursa/" class="sub-nav-title">Profil Anggota Bursa</a>
</li>
<li class="header-sub-nav-item">
<a href="/anggota-bursa-dan-partisipan/profil-partisipan/" class="sub-nav-title">Profil Partisipan</a>
</li>
<li class="header-sub-nav-item">
<a href="/anggota-bursa-dan-partisipan/profil-dealer-utama/" class="sub-nav-title">Profil Dealer Utama</a>
</li>
<li class="header-sub-nav-item">
<a href="/anggota-bursa-dan-partisipan/profil-pengguna-jasa-sppa/" class="sub-nav-title">Profil Pengguna Jasa SPPA</a>
</li>
</ul>
</li>
<li class="main-nav-item">
<label class="main-nav-title">Berita</label>
<ul class="list-nostyle header-sub-nav-list">
<li class="header-sub-nav-item">
<a href="/berita/berita/" class="sub-nav-title">Berita</a>
</li>
<li class="header-sub-nav-item">
<a href="/berita/siaran-pers/" class="sub-nav-title">Siaran Pers</a>
</li>
<li class="header-sub-nav-item">
<a href="/berita/pengumuman/" class="sub-nav-title">Pengumuman</a>
</li>
<li class="header-sub-nav-item">
<a href="/berita/unusual-market-activity-uma/" class="sub-nav-title">Unusual Market Activity (UMA)</a>
</li>
<li class="header-sub-nav-item">
<a href="/berita/efek-tidak-dijamin-etd/" class="sub-nav-title">Efek Tidak Dijamin (ETD)</a>
</li>
<li class="header-sub-nav-item">
<a href="/berita/transaksi-dipisahkan-td/" class="sub-nav-title">Transaksi Dipisahkan (TD)</a>
 </li>
<li class="header-sub-nav-item">
<a href="/berita/suspensi/" class="sub-nav-title">Suspensi</a>
</li>
<li class="header-sub-nav-item">
<a href="/berita/jadwal-libur-bursa/" class="sub-nav-title">Jadwal Libur Bursa</a>
</li>
<li class="header-sub-nav-item">
<a href="/berita/siklus-penyelesaian-tplus2/" class="sub-nav-title">Siklus Penyelesaian T+2</a>
</li>
<li class="header-sub-nav-item">
<a href="/berita/pengumuman-sppa/" class="sub-nav-title">Pengumuman SPPA</a>
</li>
</ul>
</li>
<li class="main-nav-item">
<label class="main-nav-title">Peraturan</label>
<ul class="list-nostyle header-sub-nav-list">
<li class="header-sub-nav-item">
<a href="/peraturan/undang-undang-pasar-modal/" class="sub-nav-title">Undang-Undang Pasar Modal</a>
</li>
<li class="header-sub-nav-item">
<a href="/peraturan/peraturan-pencatatan/" class="sub-nav-title">Peraturan Pencatatan</a>
</li>
<li class="header-sub-nav-item">
<a href="/peraturan/peraturan-perdagangan/" class="sub-nav-title">Peraturan Perdagangan</a>
</li>
<li class="header-sub-nav-item">
<a href="/peraturan/peraturan-keanggotaan/" class="sub-nav-title">Peraturan Keanggotaan</a>
</li>
<li class="header-sub-nav-item">
<a href="/peraturan/keputusan-direksi/" class="sub-nav-title">Keputusan Direksi</a>
</li>
<li class="header-sub-nav-item">
<a href="/peraturan/surat-edaran/" class="sub-nav-title">Surat Edaran</a>
</li>
<li class="header-sub-nav-item">
<a href="/peraturan/rancangan-peraturan/" class="sub-nav-title">Rancangan Peraturan</a>
</li>
<li class="header-sub-nav-item">
<a href="/peraturan/peraturan-pencatatan-lainnya/" class="sub-nav-title">Peraturan Pencatatan Lainnya</a>
</li>
</ul>
</li>
<li class="main-nav-item">
<label class="main-nav-title">InvestHub</label>
<ul class="list-nostyle header-sub-nav-list">
<li class="header-sub-nav-item">
<a href="/investhub/investhub/" class="sub-nav-title">InvestHub</a>
</li>
<li class="header-sub-nav-item">
<a href="/investhub/jam-perdagangan/" class="sub-nav-title">Jam Perdagangan</a>
</li>
<li class="header-sub-nav-item">
<a href="/investhub/mekanisme-perdagangan/" class="sub-nav-title">Mekanisme Perdagangan</a>
</li>
<li class="header-sub-nav-item">
<a href="/investhub/perusahaan-sekuritas-di-kota-anda/" class="sub-nav-title">Perusahaan Sekuritas di Kota Anda</a>
</li>
<li class="header-sub-nav-item">
<a href="/investhub/perlindungan-investor/" class="sub-nav-title">Perlindungan Investor</a>
</li>
<li class="header-sub-nav-item">
<a href="/investhub/perpajakan/" class="sub-nav-title">Perpajakan</a>
</li>
<li class="header-sub-nav-item">
<a href="http://yuknabungsaham.idx.co.id" target='_blank' class="sub-nav-title">Yuk Nabung Saham</a>
</li>
<li class="header-sub-nav-item">
<a href="/investhub/sekolah-pasar-modal/" class="sub-nav-title">Sekolah Pasar Modal</a>
</li>
<li class="header-sub-nav-item">
<a href="/investhub/buka-rekening-online/" class="sub-nav-title">Buka Rekening Online</a>
</li>
<li class="header-sub-nav-item">
<a href="https://www.e-ipo.co.id/id" target='_blank' class="sub-nav-title">e-IPO</a>
</li>
<li class="header-sub-nav-item">
<a href="/investhub/kegiatan-galeri-investasi-bei/" class="sub-nav-title">Kegiatan Galeri Investasi BEI</a>
</li>
<li class="header-sub-nav-item">
<a href="/investhub/public-expose-live-2021/" class="sub-nav-title">Public Expose Live 2021</a>
</li>
<li class="header-sub-nav-item">
<a href="/investhub/writing-challenge-2021/" class="sub-nav-title">Writing Challenge 2021</a>
</li>
<li class="header-sub-nav-item">
<a href="/investhub/capital-market-summit-expo-2021/" class="sub-nav-title">Capital Market Summit &amp; Expo 2021</a>
</li>
</ul>
</li>
<li class="main-nav-item">
<label class="main-nav-title">Tentang BEI</label>
<ul class="list-nostyle header-sub-nav-list">
<li class="header-sub-nav-item">
<a href="/tentang-bei/ikhtisar/" class="sub-nav-title">Ikhtisar</a>
</li>
<li class="header-sub-nav-item">
<a href="/tentang-bei/sejarah-dan-milestone/" class="sub-nav-title">Sejarah dan Milestone</a>
</li>
<li class="header-sub-nav-item">
<a href="/tentang-bei/organisasi/" class="sub-nav-title">Organisasi</a>
</li>
<li class="header-sub-nav-item">
<a href="/tentang-bei/laporan-tahunan/" class="sub-nav-title">Laporan Tahunan</a>
</li>
<li class="header-sub-nav-item">
<a href="/tentang-bei/laporan-keberlanjutan/" class="sub-nav-title">Laporan Keberlanjutan</a>
</li>
<li class="header-sub-nav-item">
<a href="/tentang-bei/karir/" class="sub-nav-title">Karir</a>
</li>
<li class="header-sub-nav-item">
<a href="/tentang-bei/hubungi-kami/" class="sub-nav-title">Hubungi Kami</a>
</li>
<li class="header-sub-nav-item">
<a href="/tentang-bei/tata-kelola-perusahaan/" class="sub-nav-title">Tata Kelola Perusahaan</a>
</li>
<li class="header-sub-nav-item">
<a href="/tentang-bei/sertifikasi-sistem-manajemen/" class="sub-nav-title">Sertifikasi Sistem Manajemen</a>
</li>
<li class="header-sub-nav-item">
<a href="/tentang-bei/anak-perusahaan/" class="sub-nav-title">Anak Perusahaan</a>
</li>
</ul>
</li>
</ul>
</div>
</div>
<div class="header-main-mobile-nav">
<ul class="header-main-mobile-nav-list list-nostyle">
<li class="header-main-mobile-nav-item main-nav-js">
<span>Data Pasar</span>
<ul class="header-main-mobile-subnav-list list-nostyle">
<li class="header-main-mobile-subnav-item main-subnav-js dropdown">
<a href="/data-pasar/ringkasan-perdagangan/">Ringkasan Perdagangan</a>
<ul class="header-main-mobile-childnav-list list-nostyle">
<li class="header-main-mobile-childnav-item"><a href="/data-pasar/ringkasan-perdagangan/ringkasan-perdagangan/">Ringkasan Perdagangan</a></li>
<li class="header-main-mobile-childnav-item"><a href="/data-pasar/ringkasan-perdagangan/ringkasan-indeks/">Ringkasan Indeks</a></li>
<li class="header-main-mobile-childnav-item"><a href="/data-pasar/ringkasan-perdagangan/rekapitulasi/">Rekapitulasi</a></li>
<li class="header-main-mobile-childnav-item"><a href="/data-pasar/ringkasan-perdagangan/ringkasan-saham/">Ringkasan Saham</a></li>
<li class="header-main-mobile-childnav-item"><a href="/data-pasar/ringkasan-perdagangan/ringkasan-broker/">Ringkasan Broker</a></li>
<li class="header-main-mobile-childnav-item"><a href="/data-pasar/ringkasan-perdagangan/ringkasan-ped/">Ringkasan PED</a></li>
</ul>
</li>
<li class="header-main-mobile-subnav-item main-subnav-js dropdown">
<a href="/data-pasar/laporan-statistik/">Laporan Statistik</a>
<ul class="header-main-mobile-childnav-list list-nostyle">
<li class="header-main-mobile-childnav-item"><a href="/data-pasar/laporan-statistik/statistik/">Statistik</a></li>
<li class="header-main-mobile-childnav-item"><a href="/data-pasar/laporan-statistik/ringkasan-performa-perusahaan-lq45/">Ringkasan Performa Perusahaan LQ45</a></li>
<li class="header-main-mobile-childnav-item"><a href="/data-pasar/laporan-statistik/fact-book/">Fact Book</a></li>
<li class="header-main-mobile-childnav-item"><a href="/data-pasar/laporan-statistik/bond-book/">Bond Book</a></li>
<li class="header-main-mobile-childnav-item"><a href="/data-pasar/laporan-statistik/digital-statistic-beta/">Digital Statistic (Beta)</a></li>
<li class="header-main-mobile-childnav-item"><a href="/data-pasar/laporan-statistik/fact-sheet-indeks/">Fact Sheet Indeks</a></li>
</ul>
</li>
<li class="header-main-mobile-subnav-item main-subnav-js dropdown">
<a href="/data-pasar/data-saham/">Data Saham</a>
<ul class="header-main-mobile-childnav-list list-nostyle">
<li class="header-main-mobile-childnav-item"><a href="/data-pasar/data-saham/indeks-saham/">Indeks Saham</a></li>
<li class="header-main-mobile-childnav-item"><a href="/data-pasar/data-saham/daftar-saham/">Daftar Saham</a></li>
<li class="header-main-mobile-childnav-item"><a href="/data-pasar/data-saham/saham-marjin/">Saham Marjin</a></li>
<li class="header-main-mobile-childnav-item"><a href="/data-pasar/data-saham/saham-pre-opening/">Saham Pre-Opening</a></li>
</ul>
</li>
<li class="header-main-mobile-subnav-item main-subnav-js dropdown">
<a href="/data-pasar/data-obligasi-sukuk/">Data Obligasi &amp; Sukuk</a>
<ul class="header-main-mobile-childnav-list list-nostyle">
<li class="header-main-mobile-childnav-item"><a href="/data-pasar/data-obligasi-sukuk/indobex/">INDOBeX</a></li>
<li class="header-main-mobile-childnav-item"><a href="/data-pasar/data-obligasi-sukuk/obligasi-sukuk-korporasi/">Obligasi &amp; Sukuk Korporasi</a></li>
<li class="header-main-mobile-childnav-item"><a href="/data-pasar/data-obligasi-sukuk/surat-berharga-negara/">Surat Berharga Negara</a></li>
<li class="header-main-mobile-childnav-item"><a href="/data-pasar/data-obligasi-sukuk/perdagangan-etp/">Perdagangan ETP</a></li>
<li class="header-main-mobile-childnav-item"><a href="/data-pasar/data-obligasi-sukuk/laporan-perdagangan-otc/">Laporan Perdagangan OTC</a></li>
<li class="header-main-mobile-childnav-item"><a href="/data-pasar/data-obligasi-sukuk/kuotasi-pds/">Kuotasi PD&#39;s</a></li>
<li class="header-main-mobile-childnav-item"><a href="/data-pasar/data-obligasi-sukuk/indonesia-government-securities-yield-curve-igsyc/">Indonesia Government Securities Yield Curve (IGSYC)</a></li>
</ul>
</li>
<li class="header-main-mobile-subnav-item ">
<a href="/data-pasar/data-efek-beragun-aset-eba/">Data Efek Beragun Aset (EBA)</a>
</li>
<li class="header-main-mobile-subnav-item ">
<a href="/data-pasar/data-exchanged-traded-fund-etf/">Data Exchanged Traded Fund (ETF)</a>
</li>
<li class="header-main-mobile-subnav-item main-subnav-js dropdown">
<a href="/data-pasar/data-derivatif/">Data Derivatif</a>
<ul class="header-main-mobile-childnav-list list-nostyle">
<li class="header-main-mobile-childnav-item"><a href="/data-pasar/data-derivatif/futures/">Futures</a></li>
</ul>
</li>
<li class="header-main-mobile-subnav-item ">
<a href="/data-pasar/dire-dinfra/">DIRE &amp; DINFRA</a>
</li>
<li class="header-main-mobile-subnav-item ">
<a href="/data-pasar/data-pinjam-meminjam-efek/">Data Pinjam Meminjam Efek</a>
</li>
</ul>
</li>
<li class="header-main-mobile-nav-item main-nav-js">
<span>Produk</span>
<ul class="header-main-mobile-subnav-list list-nostyle">
<li class="header-main-mobile-subnav-item">
<a href="/produk/saham/">Saham</a>
</li>
<li class="header-main-mobile-subnav-item">
<a href="/produk/surat-utang-obligasi/">Surat Utang (Obligasi)</a>
</li>
<li class="header-main-mobile-subnav-item">
<a href="/produk/reksa-dana/">Reksa Dana</a>
</li>
<li class="header-main-mobile-subnav-item">
<a href="/produk/exchange-traded-fund-etf/">Exchange Traded Fund (ETF)</a>
</li>
<li class="header-main-mobile-subnav-item">
<a href="/produk/derivatif/">Derivatif</a>
</li>
<li class="header-main-mobile-subnav-item">
<a href="/produk/indeks/">Indeks</a>
</li>
<li class="header-main-mobile-subnav-item">
<a href="/produk/pinjam-meminjam-efek/">Pinjam Meminjam Efek</a>
</li>
<li class="header-main-mobile-subnav-item">
<a href="/produk/layanan-data-bei/">Layanan Data BEI</a>
</li>
<li class="header-main-mobile-subnav-item">
<a href="/produk/galeri-investasi-bei-komunitas-pasar-modal/">Galeri Investasi BEI &amp; Komunitas Pasar Modal</a>
</li>
<li class="header-main-mobile-subnav-item">
<a href="/produk/sertifikasi-dan-edukasi-pasar-modal/">Sertifikasi dan Edukasi Pasar Modal</a>
</li>
<li class="header-main-mobile-subnav-item">
<a href="/produk/perpustakaan-pasar-modal/">Perpustakaan Pasar Modal</a>
</li>
<li class="header-main-mobile-subnav-item">
<a href="/produk/kunjungan-virtual-bei/">Kunjungan Virtual BEI</a>
</li>
<li class="header-main-mobile-subnav-item">
<a href="/produk/dire-dinfra/">DIRE &amp; DINFRA</a>
</li>
</ul>
</li>
<li class="header-main-mobile-nav-item main-nav-js">
<span>Perusahaan Tercatat</span>
<ul class="header-main-mobile-subnav-list list-nostyle">
<li class="header-main-mobile-subnav-item">
<a href="https://gopublic.idx.co.id/" target='_blank'>Pusat Informasi Go Public</a>
</li>
<li class="header-main-mobile-subnav-item">
<a href="/perusahaan-tercatat/layanan-untuk-perusahaan-tercatat/">Layanan untuk Perusahaan Tercatat</a>
</li>
<li class="header-main-mobile-subnav-item ">
<a href="/perusahaan-tercatat/aktivitas-pencatatan/">Aktivitas Pencatatan</a>
</li>
<li class="header-main-mobile-subnav-item ">
<a href="/perusahaan-tercatat/profil-perusahaan-tercatat/">Profil Perusahaan Tercatat</a>
</li>
<li class="header-main-mobile-subnav-item ">
<a href="/perusahaan-tercatat/aksi-korporasi/">Aksi Korporasi</a>
</li>
<li class="header-main-mobile-subnav-item ">
<a href="/perusahaan-tercatat/laporan-keuangan-dan-tahunan/">Laporan Keuangan dan Tahunan</a>
</li>
<li class="header-main-mobile-subnav-item ">
<a href="/perusahaan-tercatat/keterbukaan-informasi/">Keterbukaan Informasi</a>
</li>
<li class="header-main-mobile-subnav-item ">
<a href="/perusahaan-tercatat/kalender-perusahaan-tercatat/">Kalender Perusahaan Tercatat</a>
</li>
<li class="header-main-mobile-subnav-item">
<a href="/perusahaan-tercatat/xbrl/">XBRL</a>
</li>
<li class="header-main-mobile-subnav-item main-subnav-js dropdown">
<a href="/perusahaan-tercatat/prospektus/">Prospektus</a>
<ul class="header-main-mobile-childnav-list list-nostyle">
</ul>
</li>
<li class="header-main-mobile-subnav-item ">
<a href="/perusahaan-tercatat/notasi-khusus/">Notasi Khusus</a>
<ul class="header-main-mobile-childnav-list list-nostyle">
</ul>
</li>
<li class="header-main-mobile-subnav-item ">
<a href="/perusahaan-tercatat/daftar-efek-pemantauan-khusus/">Daftar Efek Pemantauan Khusus</a>
</li>
</ul>
</li>
<li class="header-main-mobile-nav-item main-nav-js">
<span>IDX Syariah</span>
<ul class="header-main-mobile-subnav-list list-nostyle">
<li class="header-main-mobile-subnav-item">
<a href="/idx-syariah/produk-syariah/">Produk Syariah</a>
</li>
<li class="header-main-mobile-subnav-item">
<a href="/idx-syariah/indeks-saham-syariah/">Indeks Saham Syariah</a>
</li>
<li class="header-main-mobile-subnav-item">
<a href="/idx-syariah/transaksi-sesuai-syariah/">Transaksi Sesuai Syariah</a>
</li>
<li class="header-main-mobile-subnav-item">
<a href="/idx-syariah/fatwa-regulasi/">Fatwa &amp; Regulasi</a>
</li>
<li class="header-main-mobile-subnav-item">
<a href="/idx-syariah/edukasi-pasar-modal-syariah/">Edukasi Pasar Modal Syariah</a>
</li>
<li class="header-main-mobile-subnav-item">
<a href="/idx-syariah/pertanyaan-jawaban/">Pertanyaan &amp; Jawaban</a>
</li>
<li class="header-main-mobile-subnav-item">
<a href="/idx-syariah/hubungi-kami/">Hubungi Kami</a>
</li>
<li class="header-main-mobile-subnav-item">
<a href="https://shariainvestmentweek.com/" target='_blank'>Sharia Investment Week 2021</a>
</li>
<li class="header-main-mobile-subnav-item">
<a href="https://idxislamic.idx.co.id/" target='_blank'>Menjadi Investor Syariah</a>
</li>
</ul>
</li>
<li class="header-main-mobile-nav-item main-nav-js">
<span>Anggota Bursa dan Partisipan</span>
<ul class="header-main-mobile-subnav-list list-nostyle">
<li class="header-main-mobile-subnav-item ">
<a href="/anggota-bursa-dan-partisipan/profil-anggota-bursa/">Profil Anggota Bursa</a>
</li>
<li class="header-main-mobile-subnav-item ">
<a href="/anggota-bursa-dan-partisipan/profil-partisipan/">Profil Partisipan</a>
</li>
<li class="header-main-mobile-subnav-item ">
<a href="/anggota-bursa-dan-partisipan/profil-dealer-utama/">Profil Dealer Utama</a>
</li>
<li class="header-main-mobile-subnav-item ">
<a href="/anggota-bursa-dan-partisipan/profil-pengguna-jasa-sppa/">Profil Pengguna Jasa SPPA</a>
</li>
</ul>
</li>
<li class="header-main-mobile-nav-item main-nav-js">
<span>Berita</span>
<ul class="header-main-mobile-subnav-list list-nostyle">
<li class="header-main-mobile-subnav-item ">
<a href="/berita/berita/">Berita</a>
<ul class="header-main-mobile-childnav-list list-nostyle">
</ul>
</li>
<li class="header-main-mobile-subnav-item ">
<a href="/berita/siaran-pers/">Siaran Pers</a>
<ul class="header-main-mobile-childnav-list list-nostyle">
</ul>
</li>
<li class="header-main-mobile-subnav-item ">
<a href="/berita/pengumuman/">Pengumuman</a>
</li>
<li class="header-main-mobile-subnav-item ">
<a href="/berita/unusual-market-activity-uma/">Unusual Market Activity (UMA)</a>
</li>
<li class="header-main-mobile-subnav-item ">
<a href="/berita/efek-tidak-dijamin-etd/">Efek Tidak Dijamin (ETD)</a>
</li>
<li class="header-main-mobile-subnav-item ">
<a href="/berita/transaksi-dipisahkan-td/">Transaksi Dipisahkan (TD)</a>
</li>
<li class="header-main-mobile-subnav-item ">
<a href="/berita/suspensi/">Suspensi</a>
</li>
<li class="header-main-mobile-subnav-item ">
<a href="/berita/jadwal-libur-bursa/">Jadwal Libur Bursa</a>
</li>
<li class="header-main-mobile-subnav-item">
<a href="/berita/siklus-penyelesaian-tplus2/">Siklus Penyelesaian T+2</a>
</li>
<li class="header-main-mobile-subnav-item ">
<a href="/berita/pengumuman-sppa/">Pengumuman SPPA</a>
</li>
</ul>
</li>
<li class="header-main-mobile-nav-item main-nav-js">
<span>Peraturan</span>
<ul class="header-main-mobile-subnav-list list-nostyle">
<li class="header-main-mobile-subnav-item">
<a href="/peraturan/undang-undang-pasar-modal/">Undang-Undang Pasar Modal</a>
</li>
<li class="header-main-mobile-subnav-item ">
<a href="/peraturan/peraturan-pencatatan/">Peraturan Pencatatan</a>
<ul class="header-main-mobile-childnav-list list-nostyle">
</ul>
</li>
<li class="header-main-mobile-subnav-item ">
<a href="/peraturan/peraturan-perdagangan/">Peraturan Perdagangan</a>
<ul class="header-main-mobile-childnav-list list-nostyle">
</ul>
</li>
<li class="header-main-mobile-subnav-item ">
<a href="/peraturan/peraturan-keanggotaan/">Peraturan Keanggotaan</a>
<ul class="header-main-mobile-childnav-list list-nostyle">
</ul>
</li>
<li class="header-main-mobile-subnav-item ">
<a href="/peraturan/keputusan-direksi/">Keputusan Direksi</a>
<ul class="header-main-mobile-childnav-list list-nostyle">
</ul>
</li>
<li class="header-main-mobile-subnav-item ">
<a href="/peraturan/surat-edaran/">Surat Edaran</a>
<ul class="header-main-mobile-childnav-list list-nostyle">
</ul>
</li>
<li class="header-main-mobile-subnav-item ">
<a href="/peraturan/rancangan-peraturan/">Rancangan Peraturan</a>
<ul class="header-main-mobile-childnav-list list-nostyle">
</ul>
</li>
<li class="header-main-mobile-subnav-item">
<a href="/peraturan/peraturan-pencatatan-lainnya/">Peraturan Pencatatan Lainnya</a>
</li>
</ul>
</li>
<li class="header-main-mobile-nav-item main-nav-js">
<span>InvestHub</span>
<ul class="header-main-mobile-subnav-list list-nostyle">
<li class="header-main-mobile-subnav-item">
<a href="/investhub/investhub/">InvestHub</a>
</li>
<li class="header-main-mobile-subnav-item">
<a href="/investhub/jam-perdagangan/">Jam Perdagangan</a>
</li>
<li class="header-main-mobile-subnav-item">
<a href="/investhub/mekanisme-perdagangan/">Mekanisme Perdagangan</a>
</li>
<li class="header-main-mobile-subnav-item ">
<a href="/investhub/perusahaan-sekuritas-di-kota-anda/">Perusahaan Sekuritas di Kota Anda</a>
</li>
<li class="header-main-mobile-subnav-item">
<a href="/investhub/perlindungan-investor/">Perlindungan Investor</a>
</li>
<li class="header-main-mobile-subnav-item">
<a href="/investhub/perpajakan/">Perpajakan</a>
</li>
<li class="header-main-mobile-subnav-item">
<a href="http://yuknabungsaham.idx.co.id" target='_blank'>Yuk Nabung Saham</a>
</li>
<li class="header-main-mobile-subnav-item">
<a href="/investhub/sekolah-pasar-modal/">Sekolah Pasar Modal</a>
</li>
<li class="header-main-mobile-subnav-item">
<a href="/investhub/buka-rekening-online/">Buka Rekening Online</a>
</li>
<li class="header-main-mobile-subnav-item">
<a href="https://www.e-ipo.co.id/id" target='_blank'>e-IPO</a>
</li>
<li class="header-main-mobile-subnav-item">
<a href="/investhub/kegiatan-galeri-investasi-bei/">Kegiatan Galeri Investasi BEI</a>
</li>
<li class="header-main-mobile-subnav-item">
<a href="/investhub/public-expose-live-2021/">Public Expose Live 2021</a>
</li>
<li class="header-main-mobile-subnav-item">
<a href="/investhub/writing-challenge-2021/">Writing Challenge 2021</a>
</li>
<li class="header-main-mobile-subnav-item ">
<a href="/investhub/capital-market-summit-expo-2021/">Capital Market Summit &amp; Expo 2021</a>
</li>
</ul>
</li>
<li class="header-main-mobile-nav-item main-nav-js">
<span>Tentang BEI</span>
<ul class="header-main-mobile-subnav-list list-nostyle">
<li class="header-main-mobile-subnav-item">
<a href="/tentang-bei/ikhtisar/">Ikhtisar</a>
</li>
<li class="header-main-mobile-subnav-item">
<a href="/tentang-bei/sejarah-dan-milestone/">Sejarah dan Milestone</a>
</li>
<li class="header-main-mobile-subnav-item ">
<a href="/tentang-bei/organisasi/">Organisasi</a>
</li>
<li class="header-main-mobile-subnav-item ">
<a href="/tentang-bei/laporan-tahunan/">Laporan Tahunan</a>
<ul class="header-main-mobile-childnav-list list-nostyle">
</ul>
</li>
<li class="header-main-mobile-subnav-item ">
<a href="/tentang-bei/laporan-keberlanjutan/">Laporan Keberlanjutan</a>
<ul class="header-main-mobile-childnav-list list-nostyle">
</ul>
</li>
<li class="header-main-mobile-subnav-item">
<a href="/tentang-bei/karir/">Karir</a>
</li>
<li class="header-main-mobile-subnav-item">
<a href="/tentang-bei/hubungi-kami/">Hubungi Kami</a>
</li>
<li class="header-main-mobile-subnav-item">
<a href="/tentang-bei/tata-kelola-perusahaan/">Tata Kelola Perusahaan</a>
</li>
<li class="header-main-mobile-subnav-item">
<a href="/tentang-bei/sertifikasi-sistem-manajemen/">Sertifikasi Sistem Manajemen</a>
</li>
<li class="header-main-mobile-subnav-item">
<a href="/tentang-bei/anak-perusahaan/">Anak Perusahaan</a>
</li>
</ul>
</li>
</ul>
</div>
</header>
<main class="sticky-footer-container-item --pushed">
<div class="container top-space">
<ul class="breadcrumb block">
<li><a href="/"><span class="fa fa-home"></span></a></li>
<li class=""><a href="" class="disable"><span>Data Pasar</span></li>
<li class=""><a href="" class="disable"><span>Data Saham</span></li>
<li class="current"><a href="/data-pasar/data-saham/daftar-saham/">Daftar Saham</a></li>
</ul>
<div class="page-title-container">
<h1 class="page-title">Daftar Saham</h1>
</div>
<div action="" class="block-double">
<div class="block flex v-center">
<span class="form-label-announcement">Kode/Nama Perusahaan</span>
<select name="code" id="emitenList" class="form-input form-input--block select2-js"></select>
</div>
<div class="block flex v-center">
<span class="form-label-announcement">Sektor</span>
<select name="sector" id="sectorList" class="form-input form-input--block select2-js"></select>
</div>
<div class="block flex v-center">
<span class="form-label-announcement">Papan</span>
<select name="board" id="boardList" class="form-input form-input--block select2-js"></select>
</div>
<div class="block flex v-center">
<span class="form-label-announcement">&nbsp;</span>
<button class="btn btn-primary" onclick="getSecuritiesStock()">Cari</button>
</div>
</div>
<table id="stockTable" class="table table--zebra table-content-page table-thead-nowrap ">
<thead>
<tr>
<th>No</th>
<th>Kode/Nama Perusahaan</th>
<th>Nama</th>
<th>Tanggal Pencatatan</th>
<th>Saham</th>
<th>Papan Pencatatan</th>
</tr>
</thead>
<tbody>
</tbody>
</table>
</div>
</main>
<footer class="sticky-footer-container-item">
<div class="scroll-top-container">
<button class="scroll-top-btn">
<span class="fa fa-chevron-up fa-fw"></span>
</button>
<span class="scroll-top-text">Kembali ke atas</span>
</div>
<div class="border-bottom"></div>
<div class="container cf">
<div class="sponsor-brand-container cf">
<div class="sponsor-brand-img-container">
<a href="https://www.ojk.go.id/Default.aspx" target="_blank">
<img src="/assets/img/logo_ojk.png" alt="" class="sponsor-brand-img">
</a>
</div>
<div class="sponsor-brand-img-container">
<a href="https://www.idclear.co.id" target="_blank">
<img src="/assets/img/logo-kpei.png" alt="" class="sponsor-brand-img">
</a>
</div>
<div class="sponsor-brand-img-container">
<a href="http://www.ksei.co.id" target="_blank">
<img src="/assets/img/logo-ksei.png" alt="" class="sponsor-brand-img">
</a>
</div>
<div class="sponsor-brand-img-container">
<a href="https://www.pefindobirokredit.com" target="_blank">
<img src="/assets/img/logo-pbk.png" alt="" class="sponsor-brand-img">
</a>
</div>
<div class="sponsor-brand-img-container">
<a href="http://www.pefindo.com" target="_blank">
<img src="/assets/img/logo-pefindo.png" alt="" class="sponsor-brand-img">
</a>
</div>
<div class="sponsor-brand-img-container">
<a href="http://ticmi.co.id" target="_blank">
<img src="/assets/img/logo-ticmi.png" alt="" class="sponsor-brand-img">
</a>
</div>
<div class="sponsor-brand-img-container">
<a href="http://www.indonesiasipf.co.id" target="_blank">
<img src="/assets/img/logo-sipf.png" alt="" class="sponsor-brand-img">
</a>
</div>
<div class="sponsor-brand-img-container">
<a href="http://www.ibpa.co.id" target="_blank">
<img src="/assets/img/logo-ibpa.png" alt="" class="sponsor-brand-img">
</a>
</div>
<div class="sponsor-brand-img-container">
<a href="https://www.idxchannel.com" target="_blank">
<img src="/assets/img/idx-channel.png" alt="" class="sponsor-brand-img">
</a>
</div>
</div>
</div>
<div class="border-bottom"></div>
<div class="container">
<div class="footer-information-container" style="padding-bottom:0px;">
<div class="footer-information-list ise-list">
<span class="footer-information-title color-red text-bigger">Bursa Efek Indonesia</span>
<p>Gedung Bursa Efek Indonesia,<br> Tower 1, Lantai 6 <br> Jl. Jend. Sudirman Kav 52-53 <br>Jakarta Selatan 12190, Indonesia</p>
<div class="block-half">
<span class="fa fa-phone margin-right-small d-iblock"></span><span>150515 (National)</span>
</div>
<div class="block-half">
<span class="fa fa-envelope-o margin-right-small d-iblock"></span><span><span class="__cf_email__" data-cfemail="05666a6b7164667166606b716077456c617d2b666a2b6c61">[email&#160;protected]</span></span>
</div>
<div class="">
<span class="fa fa-whatsapp margin-right-small d-iblock"></span><span>+6281181150515</span>
</div>
</div>
<div class="footer-information-list">
<span class="footer-information-title">Untuk Umum</span>
<ul class="list-nostyle">
<li>
<a href="/footer-menu/untuk-umum/buka-rekening-online/">Buka Rekening Online</a>
</li>
<li>
<a href="/footer-menu/untuk-umum/produk/">Produk</a>
</li>
<li>
<a href="/footer-menu/untuk-umum/kantor-perwakilan-bei/">Kantor Perwakilan BEI</a>
</li>
<li>
<a href="/footer-menu/untuk-umum/sertifikasi/">Sertifikasi</a>
</li>
<li>
<a href="/footer-menu/untuk-umum/whistle-blowing-system-wbs/">Whistle Blowing System (WBS)</a>
</li>
</ul>
</div>
<div class="footer-information-list">
<span class="footer-information-title">Untuk Perusahaan</span>
<ul class="list-nostyle">
<li>
<a href="/footer-menu/untuk-perusahaan/menjadi-perusahaan-tercatat/">Menjadi Perusahaan Tercatat</a>
</li>
<li>
<a href="/footer-menu/untuk-perusahaan/profil-perusahaan-tercatat/">Profil Perusahaan Tercatat</a>
</li>
<li>
<a href="/footer-menu/untuk-perusahaan/peraturan-pencatatan/">Peraturan Pencatatan</a>
</li>
</ul>
</div>
<div class="footer-information-list">
<span class="footer-information-title">Untuk Anggota Bursa &amp; Partisipan</span>
<ul class="list-nostyle">
<li>
<a href="/footer-menu/untuk-anggota-bursa-partisipan/ringkasan-perdagangan/">Ringkasan Perdagangan</a>
</li>
<li>
<a href="/footer-menu/untuk-anggota-bursa-partisipan/peraturan-perdagangan/">Peraturan Perdagangan</a>
</li>
<li>
<a href="/footer-menu/untuk-anggota-bursa-partisipan/peraturan-keanggotaan/">Peraturan Keanggotaan</a>
</li>
</ul>
</div>
<div class="footer-information-list">
<span class="footer-information-title">Tautan Langsung</span>
<ul class="list-nostyle">
<li>
<a href="/footer-menu/tautan-langsung/faq/">FAQ</a>
</li>
<li>
<a href="/footer-menu/tautan-langsung/daftar-istilah/">Daftar Istilah</a>
</li>
<li>
<a href="/footer-menu/tautan-langsung/syarat-penggunaan/">Syarat Penggunaan</a>
</li>
<li>
<a href="/footer-menu/tautan-langsung/browser-yang-disarankan/">Browser yang Disarankan</a>
</li>
</ul>
</div>
</div>
<div style="padding-bottom:10px; text-align:center; font-size:15px; font-weight:bold">
<p><a rel="noopener" href="https://www.instagram.com/indonesiastockexchange/" target="_blank"><img style="width: 31px; height: 23px;" src="/media/2630/logo-instagram1.png?width=31&amp;height=23&amp;mode=max" alt="" data-udi="umb://media/6be5636fe25041a68e2e8756e187ff31" /></a><a rel="noopener" href="https://www.instagram.com/indonesiastockexchange" target="_blank" class="red">@indonesiastockexchange</a> <a rel="noopener" href="https://twitter.com/IDX_BEI" target="_blank"><img style="width: 30px; height: 23px;" src="/media/2631/logo-twitter1.png?width=30&amp;height=23&amp;mode=max" alt="" data-udi="umb://media/fa466f1fbb1945329739c42d75c94717" /></a><a rel="noopener" href="https://twitter.com/IDX_BEI" target="_blank" class="red">@idx_bei</a> <a rel="noopener" href="https://www.facebook.com/indonesiastockexchange/" target="_blank"><img style="width: 28px; height: 23px;" src="/media/2629/logo-facebook1.png?width=28&amp;height=23&amp;mode=max" alt="" data-udi="umb://media/20d07c0e17e046689b71aea9bc6226db" /></a><a rel="noopener" href="https://www.facebook.com/indonesiastockexchange/" target="_blank" class="red">Indonesia Stock Exchange</a><a rel="noopener" href="https://www.facebook.com/indonesiastockexchange/" target="_blank"></a><a rel="noopener" href="https://www.facebook.com/indonesiastockexchange/" target="_blank"></a> <a rel="noopener" href="https://www.youtube.com/channel/UCXyfYHdOPLUgxMndSwf9tHg" target="_blank"><img style="width: 29px; height: 27px;" src="/media/2632/logo-youtube1.png?width=29&amp;height=27&amp;mode=max" alt="" data-udi="umb://media/5007cd5a3ba84bfa8708157ecd9f58e4" /></a><a rel="noopener" href="https://www.youtube.com/channel/UCXyfYHdOPLUgxMndSwf9tHg" target="_blank" class="red">Indonesia Stock Exchange</a><a rel="noopener" href="https://www.youtube.com/channel/UCXyfYHdOPLUgxMndSwf9tHg" target="_blank"></a><a rel="noopener" href="https://www.youtube.com/channel/UCXyfYHdOPLUgxMndSwf9tHg" target="_blank"></a><a rel="noopener" href="https://www.youtube.com/channel/UCXyfYHdOPLUgxMndSwf9tHg" target="_blank"></a><a rel="noopener" href="https://www.instagram.com/indonesiastockexchange/" target="_blank"></a></p>
</div>
</div>
<div class="copyright-container">
<div class="container">
<span>&copy; Hak Cipta 2018 oleh Bursa Efek Indonesia</span>
</div>
</div>
</footer>

<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script type="text/javascript">
    var setCookie = function (name, value, days) {
        if (days <= 0) days = 90;
        var d = new Date;
        d.setTime(d.getTime() + 24 * 60 * 60 * 1000 * days);
        console.log(name + "=" + value + ";path=/;expires=" + d.toGMTString());
        document.cookie = name + "=" + value + ";path=/;expires=" + d.toGMTString();
    }

    function submitFeedback() {
        var visitorTypes = document.getElementsByName('visitorTypeId');
        var visitorTypeId = 0;
        if (visitorTypes) {
            for (var i = 0; i < visitorTypes.length; i++) {
                if (visitorTypes[i].checked) {
                    visitorTypeId = visitorTypes[i].value;
                    break;
                }
            }
        }

        var ratingOptions = document.getElementsByName('rating');
        var rating = 0;
        if (ratingOptions) {
            for (var i = 0; i < ratingOptions.length; i++) {
                if (ratingOptions[i].checked) {
                    rating = ratingOptions[i].value;
                    break;
                }
            }
        }

        var categoryOptions = document.getElementsByName('categoryIds[]');
        var categories = [];
        if (categoryOptions) {
            for (var i = 0; i < categoryOptions.length; i++) {
                if (categoryOptions[i].checked) {
                    categories.push(categoryOptions[i].value);
                }
            }
        }
        
        $('#user-feedback-panel').addClass('submitting');
        var formData = new FormData();
        //formData.append('__RequestVerificationToken', document.getElementById('__token').value);
        formData.append('baseNodeId', 17561);
        formData.append('visitorTypeId', visitorTypeId);
        formData.append('rating', rating);
        formData.append('otherCategory', document.getElementById('other').value);
        formData.append('description', document.getElementById('description').value);
        formData.append('captcha', grecaptcha.getResponse());

        for (var i = 0; i < categories.length; i++) {
            formData.append('categoryIds[]', categories[i]);
        }

        var feedbackPanel = document.getElementById('user-feedback-panel');
        $.ajax({
            url: '/umbraco/Surface/Feedback/Submit',
            type: 'POST',
            data: formData,
			processData: false,
			contentType: false,
            success: function (response) {
                feedbackPanel.classList.remove('submitting', 'is-active');
                document.getElementById('feedback-submit-success').classList.add('is-active');
                sessionStorage.setItem('skipFeedback', 1);

                var exp = feedbackPanel.getAttribute('exp');
                setCookie('skipFeedback', '1', exp);
                setTimeout(function () {
                    feedbackPanel.remove();
                }, 200);
            },
            error: function (response) {
                feedbackPanel.classList.remove('submitting');
                feedbackPanel.classList.add('submit-failed');
            }
        });

        req.send(formData);
    }
</script>

<div id="user-feedback-panel" class="user-feedback" data-page="5" data-show="2" data-exp="0">
<div class="loader">
<img src="/Umbraco/assets/img/loader.gif" alt="" />
</div>
<div class="failed" style="text-align: center;">
<span style="display: block;">Gagal Mengirim Data</span>
<a href="" onclick="document.getElementById('user-feedback-panel').classList.remove('submit-failed')">Tutup</a>
</div>
<div class="feedback_panel">
<button class="btn btn-primary btn-trigger" type="button" disabled>
<img src="/assets/img/icon-arrow-down.png" class="icon-close" alt="">
<span>Close</span>
</button>
<div class="panel__inner" style="padding-bottom: 0;">
<h2 style="font-size: 1.5em;">
Jangan ragu untuk memberikan informasi dan tanggapan Anda kepada kami
</h2>
<form id="user-feedback" class="form">
<input type="hidden" name="baseNodeId" value="17561" />
<div class="mb-24">
<label for="" class="is-block mb-8 fw-bold">Status anda sebagai</label>
<div class="flex-grid">
<label for="visitor-17567" class="fc fs-4 fl-s mb-8">
<input type="radio" name="visitorTypeId" id="visitor-17567" value="17567" required>
Investor
</label>
<label for="visitor-17568" class="fc fs-4 fl-s mb-8">
<input type="radio" name="visitorTypeId" id="visitor-17568" value="17568" required>
Masyarakat Umum
</label>
<label for="visitor-19442" class="fc fs-4 fl-s mb-8">
<input type="radio" name="visitorTypeId" id="visitor-19442" value="19442" required>
Anggota Bursa
</label>
<label for="visitor-19443" class="fc fs-4 fl-s mb-8">
<input type="radio" name="visitorTypeId" id="visitor-19443" value="19443" required>
Perusahaan Tercatat
</label>
<label for="visitor-19446" class="fc fs-4 fl-s mb-8">
<input type="radio" name="visitorTypeId" id="visitor-19446" value="19446" required>
Lembaga Penunjang
</label>
</div>
</div>

<div class="mb-24">
<label for="" class="is-block mb-8 fw-bold">Berikan penilaian terhadap website kami</label>
<div class="add-rating mb-8">
<label for="rate1" class="rate_item">
<input type="radio" name="rating" id="rate1" value="1" required>
<span class="icon-blank fa fa-star-o"></span>
<span class="icon-fill fa fa-star"></span>
</label>
<label for="rate2" class="rate_item">
<input type="radio" name="rating" id="rate2" value="2" required>
<span class="icon-blank fa fa-star-o"></span>
<span class="icon-fill fa fa-star"></span>
</label>
<label for="rate3" class="rate_item">
<input type="radio" name="rating" id="rate3" value="3" required>
<span class="icon-blank fa fa-star-o"></span>
<span class="icon-fill fa fa-star"></span>
</label>
<label for="rate4" class="rate_item">
<input type="radio" name="rating" id="rate4" value="4" required>
<span class="icon-blank fa fa-star-o"></span>
<span class="icon-fill fa fa-star"></span>
</label>
<label for="rate5" class="rate_item">
<input type="radio" name="rating" id="rate5" value="5" required>
<span class="icon-blank fa fa-star-o"></span>
<span class="icon-fill fa fa-star"></span>
</label>
</div>
</div>

<div class="mb-24">
<label for="" class="is-block mb-8 fw-bold">Pilih kategori yang menurut anda perlu kami kembangkan</label>
<div class="bzg">
<div class="bzg_c mb-8" data-col="m4">
<label for="category-17563">
<input type="checkbox" id="category-17563" value="17563" name="categoryIds[]">
<span class="label-text">Performance</span>
</label>
</div>
<div class="bzg_c mb-8" data-col="m4">
<label for="category-17564">
<input type="checkbox" id="category-17564" value="17564" name="categoryIds[]">
<span class="label-text">Contents</span>
</label>
</div>
<div class="bzg_c mb-8" data-col="m4">
<label for="category-17565">
<input type="checkbox" id="category-17565" value="17565" name="categoryIds[]">
 <span class="label-text">Availability</span>
</label>
</div>
<div class="bzg_c mb-8" data-col="m4">
<label for="category-18159">
<input type="checkbox" id="category-18159" value="18159" name="categoryIds[]">
<span class="label-text">Accessibility</span>
</label>
</div>
<div class="bzg_c mb-8" data-col="m4">
<label for="other">
<input type="checkbox" value="0" name="categoryIds[]">
<span class="label-text">Lainnya</span>
</label>
<input type="text" id="other" class="form-input" name="other">
</div>
</div>
</div>

<div class="mb-24">
<label for="" class="is-block mb-8 fw-bold">Apakah Anda memiliki kritik dan saran untuk situs website kami?</label>
<textarea name="description" id="description" rows="3" class="form-input form-input--block mb-8"></textarea>
</div>
<div class="g-recaptcha" data-sitekey="6Lf4P94UAAAAAKhjRG2A1cz6KNnbr8uWspmL8k5G" data-callback="submitFeedback" data-size="invisible">
</div>
<button style="display: none;">Kirim</button>
</form>
</div>
<div style="height: 64px; display: flex; align-items: center;">
<div id="submit-feedback" class="btn btn-primary text-caps" style="align-items: center; height: fit-content; margin-left: 24px;">Kirim</div>
</div>
</div>
<div class="feedback_overlay"></div>
</div>
<div id="feedback-submit-success" class="pop-up-background alert-background-js">
<div class="alert-dual-container">
<a href="" class="calendar-pop-up-close calendar-pop-up-js"><span class="fa fa-times"></span></a>
<h3 style="padding: 20px; width: 100%;text-align: center; margin: 0;">Terima kasih atas kritik dan saran anda</h3>
</div>
</div>
<style>
    .user-feedback.submit-failed::before,
    .user-feedback.submitting::before {
        display: block;
        content: " ";
        position: fixed;
        background-color: #dcdcdc80;
        width: 100%;
        height: 100%;
        left: 0;
        top: 0;
        z-index: 3;
    }

    .user-feedback.submit-failed::before {
        background-color: #dcdcdcd9;
    }

    .failed,
    .loader {
        display: none;
    }

    .user-feedback.submit-failed > .failed,
    .user-feedback.submitting > .loader {
        display: block;
        position: fixed;
        left: 50%;
        top: 50%;
        z-index: 4;
        transform: translate(-50%, -50%);
    }

    .user-feedback .add-rating .rate_item input {
        left: 0;
        opacity: 0;
    }

    .user-feedback > .feedback_panel > .panel__inner {
        height: calc(100% - 36px);
        display: block;
    }
	
	div[style*="z-index: 2000000000;"] {
		position: fixed !important;
		top: 50% !important;
		transform: translateY(-50%);
	}

    @media screen and (min-width: 64em) {
        .user-feedback > .feedback_panel > .panel__inner {
            height: 100%;
        }
    }
</style>
<script>
    $('#user-feedback').on('submit', function (e) {
        e.preventDefault();
        grecaptcha.execute();
    });

    $('#submit-feedback').click(function () {
        $('#user-feedback button').click();
    });
</script>

<script defer src="https://cdn.polyfill.io/v2/polyfill.min.js?features=default,promise,fetch"></script>
<script src="/assets/js/vendor/angular.min.js"></script>
<script src="/assets/js/vendor/angular-resource.min.js"></script>
<script src="/assets/js/vendor/angular-sanitize.js"></script>
<script src="/assets/js/vendor/angularPagination.min.js"></script>
<script defer src="/assets/js/vendor/slick.min.js"></script>
<script defer src="/assets/js/vendor/select2.min.js"></script>
<script defer src="/assets/js/vendor/moment.min.js"></script>
<script defer src="/assets/js/vendor/fullcalendar.min.js"></script>
<script src="/assets/js/vendor/mapbox.min.js"></script>
<script defer src="/assets/js/vendor/id.min.js"></script>
<script defer src="/assets/js/vendor/flatpickr.min.js"></script>
<script src="/assets/js/vendor/flipclock.min.js"></script>
<script defer src="/assets/js/vendor/dailycounter.min.js"></script>
<script defer src="/assets/js/vendor/jquery.clamp.min.js"></script>
<script defer src="/assets/js/vendor/object-fit-images.min.js"></script>
<script defer src="/assets/js/vendor/highstock.min.js"></script>
<script defer src="/assets/js/vendor/highcharts-more.min.js"></script>
<script defer src="/assets/js/vendor/userFeedback.min.js"></script>
<script defer src="/assets/js/vendor/userFeedback.addition.js"></script>
<script defer src="/assets/js/main.min.js"></script>
<script async type="text/javascript">
        var currentLang = document.URL.indexOf("en-us") >= 0 ? "en-us" : "id-id";
        $(function () {
            $.get('/umbraco/Surface/Helper/GetMarketTime?culture=' + currentLang, function (result) {
                var jsonResult = $.parseJSON(result);
                $('.header-date').text(jsonResult);
            });

            if (currentLang === 'en-us') {
                $('a[name=homeLink]').attr('href', '/' + currentLang);
            }

            $('a[name=oldWebsiteLink]').attr('href', 'web.idx.id');
        });

        function getParams(sParam){
            var sPageURL = window.location.search.substring(1);
            var sURLVariables = sPageURL.split('&');
            for (var i = 0; i < sURLVariables.length; i++) {
                var sParameterName = sURLVariables[i].split('=');
                if (sParameterName[0] == sParam) {
                    return sParameterName[1];
                }
            }
        }

        function getUrlParam(url, sParam){
            var sPageURL = url;
            var sURLVariables = sPageURL.split('&');
            for (var i = 0; i < sURLVariables.length; i++) {
                var sParameterName = sURLVariables[i].split('=');
                if (sParameterName[0] == sParam) {
                    return sParameterName[1];
                }
            }
        }

        function onSearchBtnClick(){
            var keyword = $('input[name="global-input-search"]')[0].value;
            if(keyword == null || keyword == undefined || keyword == ""){
                keyword = $('input[name="global-input-search"]')[1].value;
            }




            window.location.replace("/hasil-pencarian/" + "?keyword=" + keyword);
        }

        function getYearList() {
            var yearList = [];

            for (var i = 0; i < 4; i++) {
                yearList.push(moment().subtract(i, 'years').format('YYYY'));
            }

            return yearList;
        }
    </script>
<script async>
        mapboxgl.accessToken = 'pk.eyJ1IjoiYW5kaGlrYXJpZGhvdmFuaSIsImEiOiJjamhqejE3bTgwdDJ4MzBrZHR3MmE5emUyIn0.QCvlMSgjCxbQpPwGp3I9wQ';
        if ($('#map').length > 0) {
            var map = new mapboxgl.Map({
                container: 'map',
                center: [106.8082005, -6.2238179],
                zoom: 16,
                style: 'mapbox://styles/mapbox/streets-v10'
            });

            var marker = new mapboxgl.Marker()
                .setLngLat([106.80863, -6.22357])
                .addTo(map);
        }
    </script>
<script async>
        angular.module('app', ['angularUtils.directives.dirPagination'])
    </script>

<script defer src="https://www.googletagmanager.com/gtag/js?id=UA-69243601-3"></script>
<script async>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'UA-69243601-3');
    </script>
<script async>
        const $countdown = $('.countdown-js')
        if ($countdown !== undefined) {
            const data = $countdown.attr('data-countdown');
            const targetDate = new Date(data)
            const newDate = (targetDate.getTime() - new Date().getTime()) / 1000

            var clock = $('.countdown-js').FlipClock(newDate, {
                clockFace: 'DailyCounter',
                countdown: true
            });
        }
    </script>
<script type="text/javascript" src="/assets/js/vendor/jquery.dataTables.min.js"></script>
<script type="text/javascript">
        $(function () {
        	getEmitenType();
            getSectorList();
            getBoardList();
        	getSecuritiesStock();
        });

        function getEmitenType() {
            $.get('/umbraco/Surface/Helper/GetEmiten?emitenType=s', function (result) {
                $('#emitenList').append('<option value="">' + "Cari" + '</option>');
                for (var i = 0; i < result.length; i++) {
                    $('#emitenList').each(function(){
                        $(this).append('<option value="' + result[i].KodeEmiten + '">' + result[i].KodeEmiten + ' - ' + result[i].NamaEmiten + '</option>');
                    });
                }
            });
        }

        function getSectorList() {
            
            $.get('/umbraco/Surface/Helper/GetSectors', function (result) {
                $('#sectorList').append('<option value="">' + "Pilih Sektor" + '</option>');
                for (var i = 0; i < result.length; i++) {
                    if (result[i] === 'Listed Investment Product') continue; // Temporary
                    if (result[i] !== '') {
                        $('#sectorList').append('<option value="' + result[i] + '">' + result[i] + '</option>');
                    }
                }
            });
        }

        function getBoardList() {
            $.get('/umbraco/Surface/Helper/GetBoards',
                function (result) {
                    $('#boardList').append('<option value="">' + "Pilih Papan" + '</option>');
                    for (var i = 0; i < result.length; i++) {
                        if (result[i] !== '') {
                            $('#boardList').append('<option value="' + result[i] + '">' + result[i] + '</option>');
                        }
                    }
                });
        }

        function getSecuritiesStock(){
        	var selectedCode = $('#emitenList option:selected').val();

        	if (selectedCode == "Cari" || selectedCode == undefined) {
        		selectedCode = "";
        	}

        	var selectedSector = $('#sectorList option:selected').val();

        	if (selectedSector == 'Pilih Sektor' || selectedSector == undefined) {
        		selectedSector = "";
        	}

        	var selectedBoard = $('#boardList option:selected').val();

        	if (selectedBoard == 'Pilih Papan' || selectedBoard == undefined) {
        		selectedBoard = "";
        	}

            if($.fn.DataTable.isDataTable('#stockTable')){
                var url = '/umbraco/Surface/StockData/GetSecuritiesStock' + '?code=' + selectedCode + 
                '&sector=' + selectedSector + '&board=' + selectedBoard;
                $('#stockTable').DataTable().ajax.url(url).load();
            }else {
                $('#stockTable').dataTable({
                    'ajax': {
                        'url': '/umbraco/Surface/StockData/GetSecuritiesStock' + '?code=' + selectedCode + 
                        '&sector=' + selectedSector + '&board=' + selectedBoard
                    },
                    'filter': false,
                    'sort': false,
                    'serverSide': true,
                    'processing': true,
                    'paging': true,
                    'deferRender': true,
                    'columns': [
                        { 'data': 'Code' },
                        { 'data': 'Code' },
                        { 'data': 'Name' },
                        { 
                            'data': 'ListingDate',
                            render: function( data, type, full, meta ) {
                                return moment(data, "YYYY-MM-DDT00:00:00").format('DD MMM YYYY');
                            }
                        },
                        { 
                            'data': 'Shares',
                            'createdCell' : function (td, cellData, rowData, row, col) {
                                return $(td).addClass('text-right');
                            },
                            render: function( data, type, full, meta ) {
                                return data.toLocaleString(currentLang);
                            }
                        },
                        { 'data': 'ListingBoard' }
                    ],
                    "rowCallback": function (row, data, iDisplayIndex) {
                        var info = this.api().page.info();
                        var page = info.page;
                        var length = info.length;
                        var index = (page * length + (iDisplayIndex + 1));
                        $('td:eq(0)', row).html(index);
                    },
                });                     
            }
        }

    </script>
<script>
		if ($.fn.dataTable != null) {
			$.fn.dataTable.ext.errMode = 'none';
		}
    </script>
<a href="https://wa.me/6281181150515" style="position: fixed; bottom: 0px; right: 180px; z-index: 100; border: 1px solid transparent;padding: 1px" target="_blank">
<img src="/assets/img/idx-wa.png" style="height: 50px" />
</a>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6c3c7ca7f94a6bc3","token":"0edeb75c1ed1485c977abb7b9b8b7921","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
</body>
</html>
