
<!-- ##### Blog Area Start ##### -->
    <div class="blog-area section-padding-100-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>Informasi</h3>
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
                      <th>Kurikulum</th>
                      <th>Informasi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; foreach ($get as $tampil) { ?>
                        <tr>
                        <td><?= $no;?> </td>
                        <td><?= date_indo($tampil->tanggal);?> </td>
                        <td><?= $tampil->kurikulum;?> </td>
                        <td><?= $tampil->informasi;?> </td>
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

