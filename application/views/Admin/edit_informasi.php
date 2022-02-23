
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

           <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Ubah Data Informasi</h6>
            </div>
            <div class="card-body">
          <div class="row">
            <div class="col-lg-6">
              <form action ="<?= base_url('Admin/edit_informasi/'. $info -> id_informasi); ?>" method="POST" >
                 <div class="form-group">
                  <label for="formGroupExampleInput">Kurikulum</label>
                  <div class="col-md-6">
                    <div class="form-group">
                    <select type="text" class="form-control" name="kurikulum">  
                        <option value=""><?= $info -> kurikulum;?></option>  

                        <?php foreach($get_kurikulum as $tampil) { ?>
                        <option value="<?php echo $tampil->kurikulum;?>"><?php echo $tampil->kurikulum;?></option>
                        <?php } ?>
                    </select>
                  </div>
                </div>  
              </div>
  
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Informasi</label>
                    <textarea  class="form-control" name="informasi" id="informasi" rows="13"><?= $info -> informasi;?></textarea>
                    <?= form_error('informasi','<small class="text-danger pl-3">', '</small>'); ?>
                  </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-primary" >Simpan</button>
                </form>
                    <a class="btn btn-secondary" href="<?= base_url('Admin/informasi'); ?>">Batal</a>
                </div>  
                
              
               
              
            </div>
          </div>
      </div>
  </div>



        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

     
