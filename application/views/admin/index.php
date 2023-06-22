<main id="main" class="main">
  <section class="section dashboard">
    <div class="row">
      <div class="log">
        <div class="row">
          <section class="section dashboard">
            <div class="row">
              <div class="log">
                <div class="row">
                  <h2>Data Peserta Didik</h2>
                  <?= $this->session->flashdata('message'); ?>
                  <table id="myTable" class="display">
                    <thead>
                      <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Tempat Lahir</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i = 1; ?>
                      <?php foreach ($list_peserta as $key) : ?>
                        <tr>
                          <th scope="row"><?= $i; ?></th>
                          <td><?= $key['nama_lengkap']; ?></td>
                          <td><?= $key['tempat_lahir']; ?></td>
                          <td><?= $key['tanggal_lahir']; ?></td>
                          <td><?= $key['jenis_kelamin']; ?></td>
                          <td>
                            <a href="<?php echo base_url('detail_data/' . $key['id']); ?>" class="btn btn-primary"><i class="bi bi-ticket-detailed"></i></a>
                            <a href="<?php echo base_url('edit_data/' . $key['id']); ?>" class="btn btn-info"><i class="bi bi-person-gear"></i></a>
                            <a href="<?php echo base_url('Peserta_didik/deleted/' . $key['id']); ?>" class=" btn btn-danger" onclick="return confirm('Apakah Anda Ingin Menghapus ?? Yakin ?? ')"><i class="bi bi-trash"></i></a>
                            <a href="<?php echo base_url('cetak_data/' . $key['id']); ?>" class=" btn btn-warning"><i class="bi bi-printer"></i></a>
                          </td>
                        </tr>

                        <?php $i++; ?>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </section>
</main>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
  $(document).ready(function() {
    $('#myTable').DataTable();
  });
</script>