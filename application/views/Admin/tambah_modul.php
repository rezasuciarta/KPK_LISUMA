
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

           <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tambah Data Modul</h6>
            </div>
            <div class="card-body">
          <div class="row">
          	<div class="col-lg-6">
          		<?= $this ->session -> flashdata('message'); ?>

          		<form action ="<?= base_url('Admin/tambah_modul');?>" method="POST"  enctype="multipart/form-data">
              <div class="form-group">
                  <label for="formGroupExampleInput">Upload File Modul</label>
                  <input type="file" class="form-control" id="modul" name="modul">
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput">Deskripsi Modul</label>
                  <input type="text" class="form-control" id="deskripsimodul" name="deskripsimodul" placeholder="Masukkan deskripsi">
                  <?= form_error('deskripsimodul','<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput">Kurikulum</label>
                  <div class="col-md-6">
                    <select class="form-control" name="kurikulum">  
                        <option  value="">Pilih Kurikulum</option>  

                        <?php foreach($get_kurikulum as $tampil) { ?>
                        <option value="<?php echo $tampil->kurikulum;?>"><?php echo $tampil->kurikulum;?></option>
                        <?php } ?>
                    </select>
                    <?= form_error('kurikulum','<small class="text-danger pl-3">', '</small>'); ?>
                    </div>  
                </div>
                
  					<div class="form-group">
  						<button type="submit" class="btn btn-primary" >Simpan</button>
            </form> 
              <a class="btn btn-secondary" href="<?= base_url('Admin/modul'); ?>">Batal</a>
  					</div>
          		
          		
          	</div>
          </div>
      </div>
  </div>


       


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

     
