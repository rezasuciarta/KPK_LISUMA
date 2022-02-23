  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Buat Akun Jinggapedia KPK</h1>
              </div>
              <form class="user" action="<?= base_url('Auth/registration');?>" method="POST">
                 <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= set_value('nama'); ?>"> 
                  <?= form_error('nama','<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="nokta" name="nokta" placeholder="No.KTA" value="<?= set_value('nokta'); ?>"> 
                  <?= form_error('nokta','<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="jurusan" name="jurusan" placeholder="Jurusan" value="<?= set_value('jurusan'); ?>">
                  <?= form_error('jurusan','<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="notelepon" name="notelepon" placeholder="Nomor Telepon" value="<?= set_value('notelepon'); ?>">
                  <?= form_error('notelepon','<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
                  <?= form_error('email','<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                    <?= form_error('password1','<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulangi Password" >
                    <?= form_error('password2','<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                 Daftar Akun
                </button>
                
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="<?= base_url(); ?>auth">Sudah punya akun? Login!</a>
              </div>
              <div class="text-center">
                    <a class="small" href="<?= base_url('Welcome/index'); ?>">Kembali ke halaman utama!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>