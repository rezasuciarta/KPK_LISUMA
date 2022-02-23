
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

           <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tambah Data Kurikulum</h6>
            </div>
            <div class="card-body">
          <div class="row">
          	<div class="col-lg-6">
          		<?= $this ->session -> flashdata('message'); ?>
          		<form action="<?= base_url('Admin/tambah_kurikulum'); ?>" method="post">
          			<div class="form-group">
    					<label for="formGroupExampleInput">Kurikulum</label>
    					<input type="text" class="form-control" id="kurikulum" name="kurikulum">
    					<?= form_error('kurikulum','<small class="text-danger pl-3">', '</small>'); ?>
  					</div>
            
  					<div class="form-group">
  						<button type="submit" class="btn btn-primary" >Simpan</button>
            </form>
              <a class="btn btn-secondary" href="<?= base_url('Admin/kurikulum'); ?>">Batal</a>
  					</div>
          		
          		
          	</div>
          </div>
      </div>
  </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

     
