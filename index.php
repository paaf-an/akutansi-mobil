<?php
$nama = $_POST['nama'] ?? '';
$harga = $_POST['harga'] ?? '';
$dp= $_POST['dp'] ?? '';
$tenor = $_POST['tenor'] ?? '';

$pesan = '';
$hitungBerhasil = false;

if(isset($_POST['hitung'])) {

if ($nama == ''){
    $pesan = 'nama belum diisi!';
} elseif ($harga == '') {
    $pesan = 'harga mobil belum diisi';
} elseif ($dp == '') {
    $pesan = 'dp belum dipilih';
} elseif ($tenor == '') {
    $pesan = 'tenor belum dipilih';

}else{

$jumlah_dp = $harga * $dp / 100;
$sisa_harga = $harga - $jumlah_dp;
$bunga = $sisa_harga * 20 / 100;
$total = $sisa_harga + $bunga;
$bulan = $tenor * 12;
$angsuran = $total / $bulan;

$hitungBerhasil = true;
}

}
?>




   
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AutoMaju Motors</title>

    <!-- Bootstrap CSS -->
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >

    <!-- Bootstrap Icons -->
    <link 
        rel="stylesheet" 
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >
      <link rel="stylesheet" href="style.css">

   
</head>

<body>
<nav class="navbar navbar-expand-lg shadow-sm">
    <div class="container py-2">

        <a class="navbar-brand d-flex align-items-center gap-3" href="#">
            <div class="logo-box">
                <i class="bi bi-car-front-fill"></i>
            </div>

            <div>
                <div class="brand-title">
                    AutoMaju Motors
                </div>

                <div class="brand-subtitle">
                    Solusi Mobil Impian Anda
                </div>
            </div>
        </a>

        <button 
            class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">

                <li class="nav-item">
                    <a class="nav-link active" href="#">
                        Beranda
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#tentang">
                        Tentang Perusahaan
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#kontak">
                        Kontak
                    </a>
                </li>

            </ul>

        </div>
    </div>
</nav>


<!--  crouse  -->
<div id="carouselMobil" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-indicators">

        <button 
            type="button"
            data-bs-target="#carouselMobil"
            data-bs-slide-to="0"
            class="active"
        ></button>

        <button 
            type="button"
            data-bs-target="#carouselMobil"
            data-bs-slide-to="1"
        ></button>

        <button 
            type="button"
            data-bs-target="#carouselMobil"
            data-bs-slide-to="2"
        ></button>

    </div>

    <div class="carousel-inner">

        <!-- slid -->
        <div class="carousel-item active">

            <img 
                src="asset/mobil.jpg"
                class="d-block w-100 hero-img"
                alt="Mobil Avanza"
            >

            <div class="hero-overlay">

                <div class="container">

                    <div class="hero-text">

                        <h1>
                            Mobil Impian,<br>
                            Kini Lebih Mudah
                        </h1>

                        <p>
                            Dapatkan mobil terbaik dengan
                            cicilan ringan dan proses cepat.
                        </p>

                    </div>

                </div>

            </div>

        </div>


        <!--slide 2-->
        <div class="carousel-item">

            <img 
                src="asset/avanzaa.jpg"
                class="d-block w-100 hero-img"
                alt="Mobil"
            >

            <div class="hero-overlay">

                <div class="container">

                    <div class="hero-text">

                        <h1>
                            Pilihan Mobil<br>
                            Untuk Kebutuhan Anda
                        </h1>

                        <p>
                            Temukan kendaraan sesuai kebutuhan
                            dan kemampuan Anda.
                        </p>

                    </div>

                </div>

            </div>

        </div>


        <!--slide 3-->
        <div class="carousel-item">

            <img 
                src="asset/11.jpg"
                class="d-block w-100 hero-img"
                alt="Mobil">

            <div class="hero-overlay">

                <div class="container">

                    <div class="hero-text">

                        <h1>
                            Cicilan Mudah,<br>
                            Proses Cepat
                        </h1>

                        <p>
                            Wujudkan mobil impian Anda
                            bersama AutoMaju Motors.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <button 
        class="carousel-control-prev" type="button"
        data-bs-target="#carouselMobil" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>

    <button 
        class="carousel-control-next" type="button"
         data-bs-target="#carouselMobil" data-bs-slide="next" >
        <span class="carousel-control-next-icon"></span>
    </button>

</div>


<!--tentang-->
<section id="tentang" class="py-4">

    <div class="container">

        <div class="row g-4 align-items-center">
            <div class="col-lg-6">

                <div class="card section-card h-100 p-4">

                    <h3 class="fw-bold mb-3">
                        Tentang Perusahaan
                    </h3>

                    <p class="mb-0 text-secondary">
                        AutoMaju Motors hadir untuk membantu Anda
                        mewujudkan impian memiliki mobil dengan layanan
                        pembiayaan yang aman, terpercaya, dan proses yang
                        mudah. Kami berkomitmen memberikan pelayanan
                        terbaik untuk setiap pelanggan.
                    </p>

                </div>

            </div>


            <!-- IMAGE -->
            <div class="col-lg-6">

                <img 
                    src="asset/avanzaa.jpg"
                    class="about-img"
                    alt="Showroom AutoMaju Motors"
                >

            </div>

        </div>

    </div>

</section>


<!--kalkulator-->
<section class="pb-4">

    <div class="container">

        <div class="calculator-box p-4">
            <div class="d-flex align-items-center gap-3 mb-4">

                <div class="calculator-icon">
                    <i class="bi bi-calculator"></i>
                </div>

                <div>

                    <h3 class="calculator-title mb-1">
                        Kalkulator Angsuran Mobil
                    </h3>

                    <p class="text-secondary mb-0">
                        Hitung estimasi cicilan mobil impian Anda
                        dengan mudah dan cepat.
                    </p>

                </div>

            </div>


            <!--form-->
            <form method="POST">

            <?php if ($pesan != '') { ?>

            <div class ="alert alert-danger"> <?= $pesan ?> </div>

            <?php } ?>
            

                <div class="row g-4">

                    <div class="col-lg-6">


                        <div class="row align-items-center mb-3">

                            <div class="col-md-3">
                                <label class="fw-semibold">
                                    Nama
                                </label>
                            </div>

                            <div class="col-md-9">
                                <input
                                    type="text"
                                    name="nama"
                                    class="form-control form-control-lg"
                                    placeholder="Masukkan nama"
                                    value="<?= htmlspecialchars($nama) ?>"
                                >
                            </div>

                        </div>


                        <div class="row align-items-center mb-3">

                            <div class="col-md-3">
                                <label class="fw-semibold">
                                    Harga Mobil
                                </label>
                            </div>

                            <div class="col-md-9">

                                <input
                                    type="number" name="harga" class="form-control form-control-lg"
                                    placeholder="Masukkan harga mobil"
                                    value="<?= htmlspecialchars($harga) ?>"
                                >

                            </div>

                        </div>


                        <!--DP-->
                        <div class="row align-items-center mb-3">

                            <div class="col-md-3">

                                <label class="fw-semibold">
                                    DP
                                </label>

                            </div>

                            <div class="col-md-9">

                                <select name="dp" class="form-select form-select-lg">

                                    <option value="">Pilih DP</option>
                                    <option value="10" <?= $dp == '10' ? 'selected' : '' ?>>10%</option>
                                    <option value="20" <?= $dp == '20' ? 'selected' : '' ?>>20%</option>
                                    <option value="30" <?= $dp == '30' ? 'selected' : '' ?>>30%</option>
                                    <option value="40" <?= $dp == '40' ? 'selected' : '' ?>>40%</option>
                                    <option value="50" <?= $dp == '50' ? 'selected' : '' ?>>50%</option>

                                </select>

                            </div>

                        </div>


                        <!--tnr-->
                        <div class="row mb-4">

                            <div class="col-md-3">

                                <label class="fw-semibold">
                                    Tenor
                                </label>

                            </div>

                            <div class="col-md-9">

                                <div class="row g-3">

                                    <div class="col-6 col-md-4">

                                        <div class="form-check">

                                            <input class="form-check-input" 
                                            type="radio" name="tenor" value="1"  
                                            id="tenor1"  <?=$tenor == '1' ? 'checked' : ''?>>

                                            <label 
                                                class="form-check-label"
                                                for="tenor1">
                                                1 Tahun
                                            </label>

                                        </div>

                                    </div>


                                    <div class="col-6 col-md-4">

                                        <div class="form-check">

                                            <input  class="form-check-input"  type="radio" 
                                             name="tenor" value="2"   id="tenor2" 
                                              <?=$tenor == '2' ? 'checked' : ''?>>

                                            <label  class="form-check-label" for="tenor2"> 2 Tahun </label>

                                        </div>

                                    </div>


                                    <div class="col-6 col-md-4">

                                        <div class="form-check">

                                            <input class="form-check-input" type="radio" 
                                            name="tenor" value="3" id="tenor3"  <?=$tenor == '3' ? 'checked' : ''?>>
                                            <label class="form-check-label" for="tenor3">
                                                3 Tahun
                                            </label>

                                        </div>

                                    </div>


                                    <div class="col-6 col-md-4">

                                        <div class="form-check">

                                            <input class="form-check-input" type="radio" 
                                            name="tenor" value="4" id="tenor4"  <?=$tenor == '4' ? 'checked' : ''?>>
                                            <label class="form-check-label" for="tenor4">
                                                4 Tahun
                                            </label>

                                        </div>

                                    </div>


                                    <div class="col-6 col-md-4">

                                        <div class="form-check">

                                            <input class="form-check-input" type="radio" 
                                            name="tenor" value="5" id="tenor5"  <?=$tenor == '5' ? 'checked' : ''?>>

                                            <label class="form-check-label" for="tenor5">
                                                5 Tahun
                                            </label>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <button 
                            type="submit"
                            name="hitung"
                            class="btn btn-hitung w-100"
                        >
                            HITUNG
                        </button>

                    </div>


                    <div class="col-lg-6">

                        <div class="result-box p-4 h-100">

                            <div class="d-flex align-items-center gap-3 mb-3">

                                <i class="bi bi-file-earmark-text fs-3"></i>

                                <h4 class="fw-bold mb-0">
                                    Hasil Perhitungan
                                </h4>

                            </div>


                        <?php if ($hitungBerhasil) { ?>
                            <div class="row mb-2">
                                <div class="col-5">harga mobil</div>

                                <div class="col-7 fw-semibold">
                                : RP <?= number_format($harga,0,',','.') ?> </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-5">DP</div>

                        <div class="col-7 fw-semibold"> : <?= $dp ?>%
                        (Rp <?= number_format($jumlah_dp,0,',','.') ?>)
                    </div>
                    <div>

                    <div class="row mb-2">
                         <div class="col-5"> Tenor </div>
                         <div class="col-7 fw-semibold">
                             : <?= $tenor ?> Tahun
                              (<?= $bulan ?> Bulan)
                             </div> </div>

                             <div class="row mb-3">
                                <div class="col-5"> bunga</div>

                                <div class="col-7 fw-semibold">
                                    :(Rp <?= number_format($bunga,0, ',','.') ?>)
                                </div>
                             </div>

                             <hr>

                             <div class="result-total p-3">
                                <div class="fw-semibold">jumlah angsuran</div>
                                <div class="fs-4 fw-bold">
                                    RP <?= number_format($angsuran,0,',','.') ?>
                                    / Bulan
                                </div>
                             </div>

                             <?php } else { ?>
                            
                             <div class="text-center text-secondary py-5">
                                <p>masukan data mobil kemudian tekan hitung.</p>
                             </div> <?php } ?>
                        </div>

                    </div>

                </div>

            </form>

        </div>

    </div>

</section>


<!--footer-->
<footer id="kontak" class="py-4">

    <div class="container">

        <div class="row text-center text-md-start align-items-center">

            <div class="col-md-4 mb-3 mb-md-0">

                <i class="bi bi-telephone-fill me-2"></i>

                <span class="footer-info">
                    0857-2605-1804
                </span>

            </div>


            <div class="col-md-4 mb-3 mb-md-0">

                <i class="bi bi-envelope-fill me-2"></i>

                <span class="footer-info">
                    info@automaju-motors.co.id
                </span>

            </div>


            <div class="col-md-4">

                <i class="bi bi-geo-alt-fill me-2"></i>

                <span class="footer-info">
                    Jl. Melati No. 10, Jakarta
                </span>

            </div>

        </div>


        <hr>


        <div class="text-center footer-info">

            © 2026 AutoMaju Motors. All rights reserved.

        </div>

    </div>

</footer>


<!--boottrap-->
<script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>

</body>
</html>
