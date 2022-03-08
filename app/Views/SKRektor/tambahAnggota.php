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
              <div class="col-sm-12">
              <div class="card card-primary" style="min-height: 650px;">
              <div class="card-header">
                <h3 class="card-title">Tambah Data <?= $title ?></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
            <?php echo form_open_multipart('skrektor/tambah_data'); ?>
            <?php foreach($detail as $key => $value) { ?>
                <div class="row">
                <div class="form-group col-4">
                    <label for="Status">Status</label>
                    <input name="Status" class="form-control " value="<?= $value['Id'] ?>">
                    <input name="Status" class="form-control ">
                    
                </div>
                <div class="form-group col-6">
                    <label for="Nama">Nama</label>
                    <input name="Nama" class="form-control" id="Nama" placeholder="Nama" value="<?= old('Email') ?>">
                </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Simpan</button>
                    <a href="<?= base_url('user')?>" class="btn btn-warning" type="submit">Kembali</a>
                </div>
                <?php } ?>
                <button type="button" name="add" id="add" class="btn btn-success">Add More</button>
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