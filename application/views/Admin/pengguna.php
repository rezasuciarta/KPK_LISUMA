
<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Pengguna dan Hak Akses</h1>
          

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Daftar Pengguna</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-hover" id="data" width="100%" cellspacing="0">
                
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Tanggal</th>
                      <th>Nama Lengkap</th>
                      <th>No. KTA</th>
                      <th>Jurusan</th>
                      <th>Email</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                     <?php $no=1; foreach ($get as $tampil) { ?>
                        <tr>
                        <td><?= $no;?> </td>
                        <td><?= date_indo($tampil->tanggal);?> </td>
                        <td><?= $tampil->nama;?> </td>
                        <td><?= $tampil->nokta;?> </td>
                        <td><?= $tampil->jurusan;?> </td>
                        <td><?= $tampil->email;?> </td>
                        <td>
                          <a class="btn btn-danger btn-xs" onclick="return confirm('Apakah anda yakin menghapus data ini?')" href="<?= base_url('Admin/hapus_pengguna/'.$tampil->id_user);?>">
                          <i class="fas fa-trash"></i>Hapus
                        </a> 
                          <a class="btn btn-success btn-xs active" onclick="return confirm('Apakah anda yakin mengaktifkan akun ini?')" href="<?= base_url('Admin/aktifpengguna/' .$tampil->id_user) ;?>">
                           <i class="fas fa-user-check"></i>Aktif
                         </a>  
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


      
 
