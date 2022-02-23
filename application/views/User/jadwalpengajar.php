
<!-- ##### Blog Area Start ##### -->
    <div class="blog-area section-padding-100-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>Jadwal Pengajar</h3>
                    </div>
                </div>
            </div>

            <!-- DataTales Example -->
        <div class="col-12">
          <div class="card shadow mb-4">
            <div class="card-header py-3"></div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-hover" id="data" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Tanggal</th>
                      <th>File Jadwal</th>
                      <th>Deskripsi Jadwal</th>
                      <th>Kurikulum</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php $no=1; foreach ($get as $tampil) { ?>
                        <tr>
                        <td><?= $no;?> </td>
                        <td><?= date_indo($tampil->tanggal);?> </td>
                        <td><?= $tampil ->filejadwal;?></td>
                        <td><?= $tampil ->deskripsijadwal;?></td>
                        <td><?= $tampil->kurikulum;?> </td>
                        <td>
                          <a class="btn btn-info btn-xs" href="<?= base_url('User/unduh_jadwal/' .$tampil->filejadwal);?>">
                            <i class="fas fa-download"></i>Unduh
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
     </div>

                
    </div>
    <!-- ##### Blog Area End ##### -->

