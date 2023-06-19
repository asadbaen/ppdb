<style>
  @media print {
    .a-siswa {
      display: none;
    }
  }
</style>
<main id="main" class="main a-siswa">
  <section>
    <div class="row">
      <div class="card">
        <section class="form">
          <div class="container">
            <h4 class="mt-5" style="text-align: center;"><b>FORMULIR PENDAFTARAN PESERTA DIDIK BARU <br>TK TUNAS HARAPAN BANGSA <br>TAHUN AJARAN 2023-2024</b></h4><br>
            <?= $this->session->flashdata('message'); ?>
            <!-- form peserta didik baru -->
            <form>
              <input type="hidden" value="<?= $peserta['id']; ?>" name="id">
              <div class="mb-4">
                <h5><b> A. IDENTITAS CALON PESERTA DIDIK</b></h5>
              </div>
              <div class="siswa">
                <div class="row justify-content-center">
                  <div class="col-auto d-none d-lg-block">
                    <img src="<?= base_url('uploads/' . $peserta['nama_file']); ?>" class="img-thumbnail rounded mx-auto d-block" alt="..." style="width: 200px; height: 200px;">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-4 pb-2">
                    <label for="nama_lengkap" class="form-label">Nama Lengakap</label>
                    <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" value="<?= $peserta['nama_lengkap']; ?>" readonly>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-4 pb-2">
                    <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" value="<?= $peserta['tempat_lahir']; ?>" readonly>
                  </div>
                  <div class="col-md-6 mb-4 pb-2">
                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" value="<?= $peserta['tanggal_lahir']; ?>" readonly>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-4 pb-2">
                    <label for="jenis_kelamin_id" class="form-label">Jenis Kelamin</label>
                    <input type="text" class="form-control" value="<?= $peserta['jenis_kelamin']; ?>" readonly>
                  </div>
                  <div class="col-md-6 mb-4 pb-2">
                    <label for="agama_id" class="form-label">Agama</label>
                    <input type="text" class="form-control" value="<?= $peserta['nama_agama']; ?>" readonly>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3 mb-4 pb-2">
                    <label for="anak_ke" class="form-label">Anak Ke </label>
                    <input type="number" name="anak_ke" class="form-control" id="anak_ke" value="<?= $peserta['anak_ke'] ?>" readonly>
                  </div>
                  <div class="col-md-4 mb-4 pb-2">
                    <label for="jml_saudara" class="form-label">Jumlah Saudara </label>
                    <input type="number" name="jml_saudara" class="form-control" id="jml_saudara" value="<?= $peserta['jml_saudara'] ?>" readonly>
                  </div>
                  <div class="col-md-5 mb-4 pb-2">
                    <label for="kewarganegaraan_siswa" class="form-label">Kewarganegaraan</label>
                    <input type="text" name="kewarganegaraan_siswa" class="form-control" id="kewarganegaraan_siswa" value="<?= $peserta['kewarganegaraan_siswa'] ?>" readonly>
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
                  <input type="text" name="nama_ayah" class="form-control" id="nama_ayah" value="<?= $peserta['nama_ayah'] ?>" readonly>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-4 pb-2">
                    <label for="tempat_lahir_ayah" class="form-label">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir_ayah" class="form-control" id="tempat_lahir_ayah" value="<?= $peserta['tempat_lahir_ayah'] ?>" readonly>
                  </div>
                  <div class="col-md-6 mb-4 pb-2">
                    <label for="tanggal_lahir_ayah" class="form-label">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir_ayah" class="form-control" id="tanggal_lahir_ayah" value="<?= $peserta['tanggal_lahir_ayah'] ?>" readonly>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-4 pb-2">
                    <label for="agama_id" class="form-label">Agama</label>
                    <input type="text" class="form-control" value="<?= $peserta['nama_agama'] ?>" readonly>
                  </div>
                  <div class="col-md-6 mb-4 pb-2">
                    <label for="kewarganegaraan_ayah" class="form-label">Kewarganegaraan</label>
                    <input type="text" name="kewarganegaraan_ayah" class="form-control" id="kewarganegaraan_ayah" value="<?= $peserta['kewarganegaraan_ayah'] ?>" readonly>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-4 pb-2">
                    <label for="pendidikan_id" class="form-label">Pendidikan Ayah/wali</label>
                    <input type="text" class="form-control" value="<?= $peserta['jenjang_pendidikan'] ?>" readonly>
                  </div>
                  <div class="col-md-6 mb-4 pb-2">
                    <label for="pekerjaan_id" class="form-label">Pekerjaan Ayah/wali</label>
                    <input type="text" class="form-control" value="<?= $peserta['nama_pekerjaan'] ?>" readonly>
                  </div>
                </div>
                <div class="col-md-6 mb-4 pb-2">
                  <label for="telepon_ayah" class="form-label">Telepon</label>
                  <input type="number" name="telepon_ayah" class="form-control" id="telepon_ayah" value="<?= $peserta['telepon_ayah'] ?>" readonly>
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
                  <input type="text" name="nama_ibu" class="form-control" id="nama_ibu" value="<?= $peserta['nama_ibu'] ?>" readonly>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-4 pb-2">
                    <label for="tempat_lahir_ibu" class="form-label">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir_ibu" class="form-control" id="tempat_lahir_ibu" value="<?= $peserta['tempat_lahir_ibu'] ?>" readonly>
                  </div>
                  <div class="col-md-6 mb-4 pb-2">
                    <label for="tanggal_lahir_ibu" class="form-label">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir_ibu" class="form-control" id="tanggal_lahir_ibu" value="<?= $peserta['tanggal_lahir_ibu'] ?>" readonly>
                  </div>
                </div>
                <div class=" row">
                  <div class="col-md-6 mb-4 pb-2">
                    <label for="agama_id" class="form-label">Agama</label>
                    <input class="form-control" type="text" value="<?= $peserta['nama_agama'] ?>" readonly>
                  </div>
                  <div class="col-md-6 mb-4 pb-2">
                    <label for="kewarganegaraan_ibu" class="form-label">Kewarganegaraan</label>
                    <input type="text" name="kewarganegaraan_ibu" class="form-control" id="kewarganegaraan_ibu" value="<?= $peserta['kewarganegaraan_ibu'] ?>" readonly>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-4 pb-2">
                    <label for="pendidikan_id" class="form-label">Pendidikan Ibu</label>
                    <input class="form-control" type="text" value="<?= $peserta['jenjang_pendidikan'] ?>" readonly>
                  </div>
                  <div class="col-md-6 mb-4 pb-2">
                    <label for="pekerjaan_id" class="form-label">Pekerjaan Ibu</label>
                    <input class="form-control" type="text" value="<?= $peserta['nama_pekerjaan'] ?>" readonly>
                  </div>
                </div>
                <div class="col-md-6 mb-4 pb-2">
                  <label for="telepon_ibu" class="form-label">Telepone</label>
                  <input type="number" name="telepon_ibu" class="form-control" id="telepon_ibu" value="<?= $peserta['telepon_ibu'] ?>" readonly>
                </div>
              </div>
              <div class="d-flex flex-wrap justify-content-end">
                <div class="col-md-6 mb-4 pb-2">
                  <a href="<?php echo base_url('Peserta_didik/cetak/' . $peserta['id']) ?>" class="btn btn-primary position-relative" style="margin-right: 5px;" target="_blank"><i class="bi bi-printer"></i></a>
                </div>
              </div>
            </form>
          </div>
        </section>
      </div>
    </div>
  </section>
</main>