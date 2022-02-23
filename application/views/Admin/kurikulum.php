
<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Kurikulum</h1>
          

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Dashboard Kurikulum</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                 <?= $this ->session -> flashdata('message'); ?>
                <table class="table table-bordered table-hover" id="data" width="100%" cellspacing="0">
                <a  class="btn btn-primary" href="<?= base_url('Admin/tambah_kurikulum'); ?>"><i class="fa fa-plus"></i>Tambah data</a>
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Tanggal</th>
                      <th>Kurikulum</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                     <?php $no=1; foreach ($get as $tampil) { ?>
                        <tr>
                        <td><?= $no;?> </td>
                        <td><?= date_indo($tampil->tanggal);?> </td>
                        <td><?= $tampil->kurikulum;?> </td>
                        <td>
                        <a class="btn btn-danger btn-xs" onclick="return confirm('Apakah anda yakin menghapus data ini?')" href="<?= base_url('Admin/hapus_kurikulum/'.$tampil->id);?>">
                         <i class="fas fa-trash"></i>Hapus
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
      
 
