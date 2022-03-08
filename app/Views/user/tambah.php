<?= $this->include('layout/head') ?>
<?= $this->include('layout/header') ?>
<?= $this->include('layout/nav') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?= $title ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"><?= $title ?></a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
      <section class="content">
      <div class="container-fluid">
          <div class="row">
              <div class="col-sm-8 offset-sm-2">
              <div class="card card-primary" style="min-height: 650px;">
              <div class="card-header">
                <h3 class="card-title">Tambah Data <?= $title ?></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
            <?php echo form_open_multipart('user/tambah_data'); ?>
                <div class="form-group">
                    <label for="Nama">Nama</label>
                    <input name="Nama" class="form-control <?= ($validation->hasError('Nama')) ? 'is-invalid' : ''; ?>" id="Nama" placeholder="Nama" value="<?= old('Nama') ?>">
                    <?php if($validation->getError('Nama')) {?>
                        <div id="validationServer03Feedback" class="invalid-feedback">
                        <?= $error = $validation->getError('Nama'); ?>
                        </div>
                     <?php }?>
                </div>
                <div class="form-group">
                    <label for="Email">Email</label>
                    <input name="Email" class="form-control <?= ($validation->getError('Email')) ? 'is-invalid' : ''; ?>" id="Email" placeholder="Email" value="<?= old('Email') ?>">
                    <?php if($validation->getError('Email')) {?>
                        <div id="validationServer03Feedback" class="invalid-feedback">
                        <?= $error = $validation->getError('Email'); ?>
                        </div>
                     <?php }?>
                </div>
                <div class="form-group">
                    <label for="Password">Password</label>
                    <input name="Password" class="form-control <?= ($validation->getError('Password')) ? 'is-invalid' : ''; ?>" id="Password" placeholder="Password" value="<?= old('Password') ?>">
                    <?php if($validation->getError('Password')) {?>
                        <div id="validationServer03Feedback" class="invalid-feedback">
                        <?= $error = $validation->getError('Password'); ?>
                        </div>
                     <?php }?>
                </div>
                <div class="form-group">
                    <label for="Level">Level</label>
                    <select name="Level" id="Level" class="form-control <?= ($validation->getError('Level')) ? 'is-invalid' : ''; ?>" value="<?= old('Level') ?>">
                        <option value="" selected="selected">Pilih Level</option>
                        <option value="1 <?= old('Level') ?>">Admin</option>
                        <option value="2 <?= old('Level') ?>">Pengguna</option>
                    </select>
                    <?php if($validation->getError('Level')) {?>
                        <div id="validationServer03Feedback" class="invalid-feedback">
                        <?= $error = $validation->getError('Level'); ?>
                        </div>
                     <?php }?>
                </div>
                <div class="form-group">
                    <label for="Department">Department</label>
                    <select name="Department" id="Department" class="form-control <?= ($validation->getError('Department')) ? 'is-invalid' : ''; ?>" value="<?= old('Department') ?>"> 
                        <option value="" >Pilih Department</option>
                        <?php foreach($dep as $key => $value){ ?>
                        <option value="<?= $value['Id_dep'] ?> <?= old('Department') ?>" ><?= $value['Department'] ?></option>
                        <?php } ?>
                    </select>
                    <?php if($validation->getError('Department')) {?>
                        <div id="validationServer03Feedback" class="invalid-feedback">
                        <?= $error = $validation->getError('Department'); ?>
                        </div>
                     <?php }?>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Simpan</button>
                    <a href="<?= base_url('user')?>" class="btn btn-warning" type="submit">Kembali</a>
                </div>
            <?php echo form_close();?>
                
</div>
</div>
              </div>
          </div>
     
        
</div>
</section>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>   
  <?= $this->include('layout/footer') ?> 