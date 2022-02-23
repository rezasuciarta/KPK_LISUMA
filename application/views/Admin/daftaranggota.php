<!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Daftar Anggota</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Dashboard Daftar Anggota</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <?= $this ->session -> flashdata('message'); ?>
                <table class="table table-bordered table-hover" id="data" width="100%" cellspacing="0">
                <a class="btn btn-primary" href="<?= base_url('Admin/tambah_daftar'); ?>"><i class="fa fa-plus"></i>Tambah data</a>

                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Tanggal</th>
                      <th>Nama Lengkap</th>
                      <th>No.KTA</th>
                      <th>Jurusan</th>
                      <th>Bidang</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; foreach ($get as $tampil) { ?>
                        <tr>
                        <td><?= $no;?> </td>
                        <td><?= date_indo($tampil->tanggal);?> </td>
                        <td><?= $tampil ->namaanggota;?></td>
                        <td><?= $tampil ->nokta;?></td>
                        <td><?= $tampil->jurusan;?> </td>
                        <td><?= $tampil->bidang;?> </td>
                        <td>
                          <a class="btn btn-success btn-xs" href="<?= base_url('Admin/edit_daftar/'.$tampil->id_anggota);?>">
                            <i class="fas fa-edit"></i>Ubah
                          </a>
                          <a class="btn btn-danger btn-xs" onclick="return confirm('Apakah anda yakin menghapus data ini?')" href="<?= base_url('Admin/hapus_daftar/'.$tampil->id_anggota);?>">
                            <i class="fas fa-trash"></i>Hapus
                          </a>       
                        </td>
                      </tr>
                      <?php $no++; } ?>          
                  </tbody>
                </table>
              </div>        
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
      
 
