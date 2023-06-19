<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Cetak</title>
    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        @media print {

            html,
            body {
                width: 210mm;
                height: 297mm;
                transform: scale(1);
            }

            .row {
                display: table;
                width: 100%;
                table-layout: fixed;
            }

            .col-md-4 {
                display: table-cell;
            }

            .c-ayah {
                margin-top: 95px;
                padding-top: 95px;
            }

            .print-image {
                display: block;
                margin: 0 auto;
                max-width: 100%;
                height: auto;
            }
        }
    </style>
</head>

<body>
    <section class="section">
        <section class="form">
            <div class="container">
                <div class="d-flex justify-content-center py-3">
                    <form class="row g-3">
                        <div class="row">
                            <div class="col-md-4 mb-4 ">
                                <h4 class="mt-5" style="text-align: center;"><b>FORMULIR PENDAFTARAN PESERTA DIDIK BARU <br>TK TUNAS HARAPAN BANGSA <br>TAHUN AJARAN 2023-2024</b></h4><br>
                            </div>
                        </div>
                        <div class="mb-4">
                            <h5><b> A. IDENTITAS CALON PESERTA DIDIK</b></h5>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-4 col-auto d-none d-lg-block">
                                <img src="<?= base_url('uploads/' . $peserta['nama_file']); ?>" class="print-image img-thumbnail rounded mx-auto d-block" alt="..." style="width: 200px; height: 200px;">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mb-4 pb-4">
                                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" value="<?= $peserta['nama_lengkap']; ?>" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mb-4 ">
                                <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" value="<?= $peserta['tempat_lahir']; ?>" readonly>
                            </div>
                            <div class="col-md-4 mb-4 ">
                                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" value="<?= $peserta['tanggal_lahir']; ?>" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-4 ">
                                <label for="jenis_kelamin_id" class="form-label">Agama</label>
                                <input type="text" class="form-control" value="<?= $peserta['nama_agama']; ?>" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mb-4 ">
                                <label for="jenis_kelamin_id" class="form-label">Jenis Kelamin</label>
                                <input type="text" class="form-control" value="<?= $peserta['jenis_kelamin']; ?>" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mb-4 ">
                                <label for="anak_ke" class="form-label">Anak Ke </label>
                                <input type="number" name="anak_ke" class="form-control" id="anak_ke" value="<?= $peserta['anak_ke'] ?>" readonly>
                            </div>
                            <div class="col-md-4 mb-4 ">
                                <label for="jml_saudara" class="form-label">Jumlah Saudara </label>
                                <input type="number" name="jml_saudara" class="form-control" id="jml_saudara" value="<?= $peserta['jml_saudara'] ?>" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 mb-4 ">
                                <label for="kewarganegaraan_siswa" class="form-label">Kewarganegaraan</label>
                                <input type="text" name="kewarganegaraan_siswa" class="form-control" id="kewarganegaraan_siswa" value="<?= $peserta['kewarganegaraan_siswa'] ?>" readonly>
                            </div>
                        </div>


                        <div class="mb-4">
                            <h5><b> B. IDENTITAS ORANG TUA/WALi</b></h5>
                            <br>
                            <div style="margin-left: 25px;">
                                <p><b> 1. Ayah Kandung/tiri/angkat/wali * </b></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-4 ">
                                <label for="nama_ayah" class="form-label">Nama Ayah/Wali</label>
                                <input type="text" name="nama_ayah" class="form-control" id="nama_ayah" value="<?= $peserta['nama_ayah'] ?>" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mb-4 pb-4">
                                <label for="tempat_lahir_ayah" class="form-label">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir_ayah" class="form-control" id="tempat_lahir_ayah" value="<?= $peserta['tempat_lahir_ayah'] ?>" readonly>
                            </div>
                            <div class="col-md-4 mb-4 pb-4">
                                <label for="tanggal_lahir_ayah" class="form-label">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir_ayah" class="form-control" id="tanggal_lahir_ayah" value="<?= $peserta['tanggal_lahir_ayah'] ?>" readonly>
                            </div>
                        </div>
                        <div class="row c-ayah pb-4">
                            <div class="col-md-4 mb-4">
                                <label for="agama_id" class="form-label">Agama</label>
                                <input type="text" class="form-control" value="<?= $peserta['nama_agama'] ?>" readonly>
                            </div>
                            <div class="col-md-4 mb-4">
                                <label for="kewarganegaraan_ayah" class="form-label">Kewarganegaraan</label>
                                <input type="text" name="kewarganegaraan_ayah" class="form-control" id="kewarganegaraan_ayah" value="<?= $peserta['kewarganegaraan_ayah'] ?>" readonly>
                            </div>
                        </div>
                        <div class="row pb-4">
                            <div class="col-md-4 mb-4">
                                <label for="pendidikan_id" class="form-label">Pendidikan Ayah/wali</label>
                                <input type="text" class="form-control" value="<?= $peserta['jenjang_pendidikan'] ?>" readonly>
                            </div>
                            <div class="col-md-4 mb-4">
                                <label for="pekerjaan_id" class="form-label">Pekerjaan Ayah/wali</label>
                                <input type="text" class="form-control" value="<?= $peserta['nama_pekerjaan'] ?>" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-4 ">
                                <label for="telepon_ayah" class="form-label">Telepon</label>
                                <input type="number" name="telepon_ayah" class="form-control" id="telepon_ayah" value="<?= $peserta['telepon_ayah'] ?>" readonly>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div style="margin-left: 25px;">
                                <p><b> 2. Ibu Kandung/tiri/angkat/wali * </b></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-4 ">
                                <label for="nama_ibu" class="form-label">Nama Ibu</label>
                                <input type="text" name="nama_ibu" class="form-control" id="nama_ibu" value="<?= $peserta['nama_ibu'] ?>" readonly>
                            </div>
                        </div>
                        <div class="row pb-4">
                            <div class="col-md-4 mb-4 ">
                                <label for="tempat_lahir_ibu" class="form-label">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir_ibu" class="form-control" id="tempat_lahir_ibu" value="<?= $peserta['tempat_lahir_ibu'] ?>" readonly>
                            </div>
                            <div class="col-md-4 mb-4 ">
                                <label for="tanggal_lahir_ibu" class="form-label">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir_ibu" class="form-control" id="tanggal_lahir_ibu" value="<?= $peserta['tanggal_lahir_ibu'] ?>" readonly>
                            </div>
                        </div>
                        <div class="row pb-4">
                            <div class="col-md-4 mb-4 ">
                                <label for="agama_id" class="form-label">Agama</label>
                                <input class="form-control" type="text" value="<?= $peserta['nama_agama'] ?>" readonly>
                            </div>
                            <div class="col-md-4 mb-4 ">
                                <label for="kewarganegaraan_ibu" class="form-label">Kewarganegaraan</label>
                                <input type="text" name="kewarganegaraan_ibu" class="form-control" id="kewarganegaraan_ibu" value="<?= $peserta['kewarganegaraan_ibu'] ?>" readonly>
                            </div>
                        </div>
                        <div class="row pb-4">
                            <div class="col-md-4 mb-4 ">
                                <label for="pendidikan_id" class="form-label">Pendidikan Ibu</label>
                                <input class="form-control" type="text" value="<?= $peserta['jenjang_pendidikan'] ?>" readonly>
                            </div>
                            <div class="col-md-4 mb-4 ">
                                <label for="pekerjaan_id" class="form-label">Pekerjaan Ibu</label>
                                <input class="form-control" type="text" value="<?= $peserta['nama_pekerjaan'] ?>" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-4 ">
                                <label for="telepon_ibu" class="form-label">Telepone</label>
                                <input type="number" name="telepon_ibu" class="form-control" id="telepon_ibu" value="<?= $peserta['telepon_ibu'] ?>" readonly>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <script>
        var imageElement = document.querySelector('.print-image');
        var imageUrl = imageElement.src;

        // Cetak URL gambar
        console.log(imageUrl);

        // Cetak halaman web
        window.print();

        // Mengarahkan kembali setelah 1 detik (dapat disesuaikan)
        setTimeout(function() {
            window.location.href = document.referrer;
        }, 1000);
    </script>

</body>

</html>