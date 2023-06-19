<main id="main" class="main">
  <div class="pagetitle">
    <h1>KONTAK</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url('Admin/Data_peserta'); ?>">Data Peserta</a></li>
        <li class="breadcrumb-item"><a href="<?php echo base_url('Admin/Beranda'); ?>">Beranda</a></li>
        <li class="breadcrumb-item active"><a href="<?php echo base_url('Admin/Kontak'); ?>">Kontak</a></li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <section class="section dashboard">
    <div class="row">
      <div class="log">
        <div class="row">
          <div class="card">
            <section class="form">
              <div class="container">
                <h4 class="mt-5" style="text-align: center;"><b>FORMULIR PENDAFTARAN PESERTA DIDIK BARU <br>TK TUNAS HARAPAN BANGSA <br>TAHUN AJARAN 2023-2024</b></h4><br>
                <?= $this->session->flashdata('message'); ?>
                <!-- form peserta didik baru -->
                <form action="<?php echo base_url(); ?>User/save_create" method="POST" enctype="multipart/form-data">
                  <div class="mb-4">
                    <h5><b> A. IDENTITAS CALON PESERTA DIDIK</b></h5>
                  </div>
                  <div class="col-md-6 mb-4 pb-2">
                    <label for="fileInput">Gambar siswa</label>
                    <input type="file" class="form-control col-md-3" name="nama_file" id="fileInput" onchange="previewImage(event)" />
                    <img id="preview" src="#" alt="Product Image" style="max-width: 200px; max-height: 200px; margin-top: 10px; display: none;">
                  </div>
                  <div class="siswa">
                    <div class="row">
                      <div class="col-md-6 mb-4 pb-2">
                        <label for="nama_depan" class="form-label">Nama Depan</label>
                        <input type="text" name="nama_depan" class="form-control" id="nama_depan">
                      </div>
                      <div class="col-md-6 mb-4 pb-2">
                        <label for="nama_belakang" class="form-label">Nama Belakang</label>
                        <input type="text" name="nama_belakang" class="form-control" id="nama_belakang">
                      </div>

                    </div>
                    <div class="row">
                      <div class="col-md-6 mb-4 pb-2">
                        <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir">
                      </div>
                      <div class="col-md-6 mb-4 pb-2">
                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 mb-4 pb-2">
                        <label for="jenis_kelamin_id" class="form-label">Jenis Kelamin</label>
                        <select name="jenis_kelamin_id" class="form-select" aria-label="Default select example">
                          <option selected disabled>Jenis Kelamin</option>
                          <?php foreach ($list_jenis_kelamin as $jenis_kelamin) : ?>
                            <option value="<?= $jenis_kelamin['jenis_kelamin_id']; ?>">
                              <?= $jenis_kelamin['jenis_kelamin']; ?>
                            </option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                      <div class="col-md-6 mb-4 pb-2">
                        <label for="agama_id" class="form-label">Agama</label>
                        <select name="agama_id" class="form-select" aria-label="Default select example">
                          <option selected disabled>Agama</option>
                          <?php foreach ($list_agama as $agama) : ?>
                            <option value="<?= $agama['agama_id']; ?>">
                              <?= $agama['nama_agama']; ?>
                            </option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 mb-4 pb-2">
                        <label for="anak_ke" class="form-label">Anak Ke </label>
                        <input type="number" name="anak_ke" class="form-control" id="anak_ke">
                      </div>
                      <div class="col-md-4 mb-4 pb-2">
                        <label for="jml_saudara" class="form-label">Jumlah Saudara </label>
                        <input type="number" name="jml_saudara" class="form-control" id="jml_saudara">
                      </div>
                      <div class="col-md-5 mb-4 pb-2">
                        <label for="kewarganegaraan_siswa" class="form-label">Kewarganegaraan</label>
                        <input type="text" name="kewarganegaraan_siswa" class="form-control" id="kewarganegaraan_siswa">
                      </div>
                    </div>
                  </div>
                  <div class="ayah">
                    <div class="mb-4">
                      <h5><b> B. IDENTITAS ORANG TUA/WALi</b></h5>
                      <br>
                      <div style="margin-left: 25px;">
                        <p><b> 1. Ayah Kandung/tiri/angkat/wali * </b></p>
                      </div>
                    </div>
                    <div class="col-md-8 mb-4 pb-2">
                      <label for="nama_ayah" class="form-label">Nama Ayah/Wali</label>
                      <input type="text" name="nama_ayah" class="form-control" id="nama_ayah">
                    </div>
                    <div class="row">
                      <div class="col-md-6 mb-4 pb-2">
                        <label for="tempat_lahir_ayah" class="form-label">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir_ayah" class="form-control" id="tempat_lahir_ayah">
                      </div>
                      <div class="col-md-6 mb-4 pb-2">
                        <label for="tanggal_lahir_ayah" class="form-label">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir_ayah" class="form-control" id="tanggal_lahir_ayah">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 mb-4 pb-2">
                        <label for="agama_id" class="form-label">Agama</label>
                        <select name="agama_id" class="form-select" aria-label="Default select example">
                          <option selected disabled>Agama</option>
                          <?php foreach ($list_agama as $agama) : ?>
                            <option value="<?= $agama['agama_id']; ?>">
                              <?= $agama['nama_agama']; ?>
                            </option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                      <div class="col-md-6 mb-4 pb-2">
                        <label for="kewarganegaraan_ayah" class="form-label">Kewarganegaraan</label>
                        <input type="text" name="kewarganegaraan_ayah" class="form-control" id="kewarganegaraan_ayah">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 mb-4 pb-2">
                        <label for="pendidikan_id" class="form-label">Pendidikan Ayah/wali</label>
                        <select name="pendidikan_id" class="form-select" aria-label="Default select example">
                          <option selected disabled>Pendidikan</option>
                          <?php foreach ($list_pendidikan as $pendidikan) : ?>
                            <option value="<?= $pendidikan['pendidikan_id']; ?>">
                              <?= $pendidikan['jenjang_pendidikan']; ?>
                            </option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                      <div class="col-md-6 mb-4 pb-2">
                        <label for="pekerjaan_id" class="form-label">Pekerjaan Ayah/wali</label>
                        <select name="pekerjaan_id" class="form-select" aria-label="Default select example">
                          <option selected disabled>Pekerjaan</option>
                          <?php foreach ($list_pekerjaan as $pekerjaan) : ?>
                            <option value="<?= $pekerjaan['pekerjaan_id']; ?>">
                              <?= $pekerjaan['nama_pekerjaan']; ?>
                            </option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4 pb-2">
                      <label for="telepon_ayah" class="form-label">Telepon</label>
                      <input type="number" name="telepon_ayah" class="form-control" id="telepon_ayah">
                    </div>
                  </div>
                  <div class="ibu">
                    <div class="mb-4">
                      <div style="margin-left: 25px;">
                        <p><b> 2. Ibu Kandung/tiri/angkat/wali * </b></p>
                      </div>
                    </div>
                    <div class="col-md-8 mb-4 pb-2">
                      <label for="nama_ibu" class="form-label">Nama Ibu</label>
                      <input type="text" name="nama_ibu" class="form-control" id="nama_ibu">
                    </div>
                    <div class="row">
                      <div class="col-md-6 mb-4 pb-2">
                        <label for="tempat_lahir_ibu" class="form-label">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir_ibu" class="form-control" id="tempat_lahir_ibu">
                      </div>
                      <div class="col-md-6 mb-4 pb-2">
                        <label for="tanggal_lahir_ibu" class="form-label">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir_ibu" class="form-control" id="tanggal_lahir_ibu">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 mb-4 pb-2">
                        <label for="agama_id" class="form-label">Agama</label>
                        <select name="agama_id" class="form-select" aria-label="Default select example">
                          <option selected disabled>Agama</option>
                          <?php foreach ($list_agama as $agama) : ?>
                            <option value="<?= $agama['agama_id']; ?>">
                              <?= $agama['nama_agama']; ?>
                            </option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                      <div class="col-md-6 mb-4 pb-2">
                        <label for="kewarganegaraan_ibu" class="form-label">Kewarganegaraan</label>
                        <input type="text" name="kewarganegaraan_ibu" class="form-control" id="kewarganegaraan_ibu">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 mb-4 pb-2">
                        <label for="pendidikan_id" class="form-label">Pendidikan Ibu</label>
                        <select name="pendidikan_id" class="form-select" aria-label="Default select example">
                          <option selected disabled>Pendidikan</option>
                          <?php foreach ($list_pendidikan as $pendidikan) : ?>
                            <option value="<?= $pendidikan['pendidikan_id']; ?>">
                              <?= $pendidikan['jenjang_pendidikan']; ?>
                            </option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                      <div class="col-md-6 mb-4 pb-2">
                        <label for="pekerjaan_id" class="form-label">Pekerjaan Ibu</label>
                        <select name="pekerjaan_id" class="form-select" aria-label="Default select example">
                          <option selected disabled>Pekerjaan</option>
                          <?php foreach ($list_pekerjaan as $pekerjaan) : ?>
                            <option value="<?= $pekerjaan['pekerjaan_id']; ?>">
                              <?= $pekerjaan['nama_pekerjaan']; ?>
                            </option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4 pb-2">
                      <label for="telepon_ibu" class="form-label">Telepone</label>
                      <input type="number" name="telepon_ibu" class="form-control" id="telepon_ibu">
                    </div>
                  </div>
                  <div class="mb-5 text-end">
                    <button type="submit" class="btn btn-primary w-25">Submit</button>
                  </div>
                </form>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<script>
  function previewImage(event) {
    var reader = new FileReader();
    reader.onload = function() {
      var preview = document.getElementById('preview');
      preview.src = reader.result;
      preview.style.display = 'block';
    }
    reader.readAsDataURL(event.target.files[0]);
  }
</script>