<!-- ##### Blog Area Start ##### -->
    <div class="blog-area section-padding-100-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>Daftar Anggota</h3>
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
                      <th>Nama Lengkap</th>
                      <th>No.KTA</th>
                      <th>Jurusan</th>
                      <th>Bidang</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; foreach ($get as $tampil) { ?>
                        <tr>
                        <td><?= $no;?> </td>
                        <td><?= $tampil ->namaanggota;?></td>
                        <td><?= $tampil ->nokta;?></td>
                        <td><?= $tampil->jurusan;?> </td>
                        <td><?= $tampil->bidang;?> </td>
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

