<main id="main" class="main a-siswa">
    <section>
        <div class="row">
            <div class="card">
                <section class="form">
                    <div class="container">
                        <h4 class="mt-5" style="text-align: center;"><b>FORMULIR PENDAFTARAN PESERTA DIDIK BARU <br>TK TUNAS HARAPAN BANGSA <br>TAHUN AJARAN 2023-2024</b></h4><br>
                        <?= $this->session->flashdata('message'); ?>
                        <!-- form peserta didik baru -->
                        <form action="<?php echo base_url('Admin/save_edit') ?>" method="post">
                            <input type="hidden" value="<?= $peserta['id']; ?>" name="id" id="id">
                            <input type="hidden" value="<?= $peserta['id_siswa']; ?>" name="id_siswa" id="id_siswa">
                            <input type="hidden" value="<?= $peserta['id_ayah']; ?>" name="id_ayah" id="id_ayah">
                            <input type="hidden" value="<?= $peserta['id_ibu']; ?>" name="id_ibu" id="id_ibu">
                            <div class="mb-4">
                                <h5><b> A. IDENTITAS CALON PESERTA DIDIK</b></h5>
                            </div>
                            <div class="siswa">
                                <div class="row">
                                    <div class="col-md-6 mb-4 pb-2">
                                        <label for="nama_lengkap" class="form-label">Nama Lengakap</label>
                                        <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" value="<?= $peserta['nama_lengkap']; ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-4 pb-2">
                                        <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                        <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" value="<?= $peserta['tempat_lahir']; ?>">
                                    </div>
                                    <div class="col-md-6 mb-4 pb-2">
                                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                        <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" value="<?= $peserta['tanggal_lahir']; ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-4 pb-2">
                                        <label for="jenis_kelamin_id" class="form-label">Jenis Kelamin</label>
                                        <select name="jenis_kelamin_id" class="form-select" aria-label="Default select example">
                                            <?php foreach ($list_jenis_kelamin as $key) : ?>
                                                <option value="<?= $key['jenis_kelamin_id']; ?>" <?php if ($key['jenis_kelamin_id'] == $peserta['jenis_kelamin_id']) echo 'selected'; ?>>
                                                    <?= $key['jenis_kelamin']; ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-4 pb-2">
                                        <label for="agama_id" class="form-label">Agama</label>
                                        <select name="agama_id" class="form-select" aria-label="Default select example">
                                            <?php foreach ($list_agama as $key) : ?>
                                                <option value="<?= $key['agama_id']; ?>" <?php if ($key['agama_id'] == $peserta['agama_id']) echo 'selected'; ?>>
                                                    <?= $key['nama_agama']; ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 mb-4 pb-2">
                                        <label for="anak_ke" class="form-label">Anak Ke </label>
                                        <input type="number" name="anak_ke" class="form-control" id="anak_ke" value="<?= $peserta['anak_ke'] ?>">
                                    </div>
                                    <div class="col-md-4 mb-4 pb-2">
                                        <label for="jml_saudara" class="form-label">Jumlah Saudara </label>
                                        <input type="number" name="jml_saudara" class="form-control" id="jml_saudara" value="<?= $peserta['jml_saudara'] ?>">
                                    </div>
                                    <div class="col-md-5 mb-4 pb-2">
                                        <label for="kewarganegaraan_siswa" class="form-label">Kewarganegaraan</label>
                                        <input type="text" name="kewarganegaraan_siswa" class="form-control" id="kewarganegaraan_siswa" value="<?= $peserta['kewarganegaraan_siswa'] ?>">
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
                                    <input type="text" name="nama_ayah" class="form-control" id="nama_ayah" value="<?= $peserta['nama_ayah'] ?>">
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-4 pb-2">
                                        <label for="tempat_lahir_ayah" class="form-label">Tempat Lahir</label>
                                        <input type="text" name="tempat_lahir_ayah" class="form-control" id="tempat_lahir_ayah" value="<?= $peserta['tempat_lahir_ayah'] ?>">
                                    </div>
                                    <div class="col-md-6 mb-4 pb-2">
                                        <label for="tanggal_lahir_ayah" class="form-label">Tanggal Lahir</label>
                                        <input type="date" name="tanggal_lahir_ayah" class="form-control" id="tanggal_lahir_ayah" value="<?= $peserta['tanggal_lahir_ayah'] ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-4 pb-2">
                                        <label for="agama_ayah" class="form-label">Agama</label>
                                        <select name="agama_ayah" class="form-select" aria-label="Default select example">
                                            <?php foreach ($list_agama as $value) : ?>
                                                <option value="<?= $value['agama_id']; ?>" <?php if ($value['agama_id'] == $peserta['agama_ayah']) echo 'selected'; ?>><?= $value['nama_agama']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-4 pb-2">
                                        <label for="kewarganegaraan_ayah" class="form-label">Kewarganegaraan</label>
                                        <input type="text" name="kewarganegaraan_ayah" class="form-control" id="kewarganegaraan_ayah" value="<?= $peserta['kewarganegaraan_ayah'] ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-4 pb-2">
                                        <label for="pendidikan_ayah" class="form-label">Pendidikan Ayah/wali</label>
                                        <select name="pendidikan_ayah" class="form-select" aria-label="Default select example">
                                            <?php foreach ($list_pendidikan as $value) : ?>
                                                <option value="<?= $value['pendidikan_id']; ?>" <?php if ($value['pendidikan_id'] == $peserta['pendidikan_ayah']) echo 'selected'; ?>><?= $value['jenjang_pendidikan']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-4 pb-2">
                                        <label for="pekerjaan_ayah" class="form-label">Pekerjaan Ayah/wali</label>
                                        <select name="pekerjaan_ayah" class="form-select" aria-label="Default select example">
                                            <?php foreach ($list_pekerjaan as $value) : ?>
                                                <option value="<?php echo $value['pekerjaan_id']; ?>" <?php if ($value['pekerjaan_id'] == $peserta['pekerjaan_ayah']) echo 'selected'; ?>>
                                                    <?= $value['nama_pekerjaan']; ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-md-6 mb-4 pb-2">
                                    <label for="telepon_ayah" class="form-label">Telepon</label>
                                    <input type="number" name="telepon_ayah" class="form-control" id="telepon_ayah" value="<?= $peserta['telepon_ayah'] ?>">
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
                                    <input type="text" name="nama_ibu" class="form-control" id="nama_ibu" value="<?= $peserta['nama_ibu'] ?>">
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-4 pb-2">
                                        <label for="tempat_lahir_ibu" class="form-label">Tempat Lahir</label>
                                        <input type="text" name="tempat_lahir_ibu" class="form-control" id="tempat_lahir_ibu" value="<?= $peserta['tempat_lahir_ibu'] ?>">
                                    </div>
                                    <div class="col-md-6 mb-4 pb-2">
                                        <label for="tanggal_lahir_ibu" class="form-label">Tanggal Lahir</label>
                                        <input type="date" name="tanggal_lahir_ibu" class="form-control" id="tanggal_lahir_ibu" value="<?= $peserta['tanggal_lahir_ibu'] ?>">
                                    </div>
                                </div>
                                <div class=" row">
                                    <div class="col-md-6 mb-4 pb-2">
                                        <label for="agama_ibu" class="form-label">Agama</label>
                                        <select name="agama_ibu" class="form-select" aria-label="Default select example">
                                            <?php foreach ($list_agama as $value) : ?>
                                                <option value="<?= $value['agama_id']; ?>" <?php if ($value['agama_id'] == $peserta['agama_ibu']) echo 'selected' ?>><?= $value['nama_agama']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-4 pb-2">
                                        <label for="kewarganegaraan_ibu" class="form-label">Kewarganegaraan</label>
                                        <input type="text" name="kewarganegaraan_ibu" class="form-control" id="kewarganegaraan_ibu" value="<?= $peserta['kewarganegaraan_ibu'] ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-4 pb-2">
                                        <label for="pendidikan_ibu" class="form-label">Pendidikan Ibu</label>
                                        <select name="pendidikan_ibu" class="form-select" aria-label="Default select example">
                                            <?php foreach ($list_pendidikan as $value) : ?>
                                                <option value="<?= $value['pendidikan_id']; ?>" <?php if ($value['pendidikan_id'] == $peserta['pendidikan_ibu']) echo 'selected' ?>><?= $value['jenjang_pendidikan']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-4 pb-2">
                                        <label for="pekerjaan_ibu" class="form-label">Pekerjaan Ibu</label>
                                        <select name="pekerjaan_ibu" class="form-select" aria-label="Default select example">
                                            <?php foreach ($list_pekerjaan as $value) : ?>
                                                <option value="<?= $value['pekerjaan_id']; ?>" <?php if ($value['pekerjaan_id'] == $peserta['pekerjaan_ibu']) echo 'selected' ?>><?= $value['nama_pekerjaan']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4 pb-2">
                                    <label for="telepon_ibu" class="form-label">Telepone</label>
                                    <input type="number" name="telepon_ibu" class="form-control" id="telepon_ibu" value="<?= $peserta['telepon_ibu'] ?>">
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
    </section>
</main>