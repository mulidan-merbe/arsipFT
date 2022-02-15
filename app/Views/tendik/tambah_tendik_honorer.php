<?= $this->include('layout/head') ?>
<?= $this->include('layout/header') ?>
<?= $this->include('layout/nav') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3 class="m-0"><?= $title ?></h3>
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
      <div class="btn-group">
      <a type="button2" class="btn btn-primary  <?php $uri = service('uri'); if ($uri->getSegment(1) == "tendik") {
                                                    echo "active";
                                                  } ?>" href="<?= base_url('tendik') ?>">PNS</a>
        <a type="button2" class="btn btn-primary" href="<?= base_url('tendik/honorer') ?>">Honorer</a>
        <a type="button2" class="btn btn-primary" href="<?= base_url('tendik/pendukung') ?>">Pendukung</a>
     </div>
      <div class="row mt-2">
        <div class="col-md-12">
            
        <div class="card card-primary card-outline" style="min-height: 650px;">
              <div class="card-header">
                
                <h3 class="card-title">Tambah Data Tendik PNS
                
            </h3>
            <button  type="button" class="btn btn-sm btn-warning float-right" onclick="javascript:history.back()"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
                <!-- <div class="card-tools">
                
                </div> -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              
              <form method="post" action="<?= base_url('tendik/simpan_tendik_pns') ?>" enctype="multipart/form-data">
              <?= csrf_field(); ?>
              <div class="form-group row">
               <label for="" class="col-md-2 offset-md-1 col-form-label text-right ">Nama</label>
               <div class="col-md-8">
               <input type="text" name="Nama" class="form-control <?= ($validation->hasError('Nama')) ? 'is-invalid' : ''; ?>"  value="<?= old('Nama') ?>">
                   <?php if($validation->getError('Nama')) {?>
                       <div id="validationServer03Feedback" class="invalid-feedback">
                       <?= $error = $validation->getError('Nama'); ?>
                       </div>
                    <?php }?>
               </div>
              </div>
              <div class="form-group row">
                <!-- CSRF token --> 
                <label for="" class="col-md-2 offset-md-1 col-form-label text-right ">Penempatan</label>
                <div class="col-md-4">
                    <input type="text" name="Penempatan" class="form-control <?= ($validation->hasError('Penempatan')) ? 'is-invalid' : ''; ?>"  value="<?= old('Penempatan') ?>">
                    <?php if($validation->getError('Penempatan')) {?>
                        <div id="validationServer03Feedback" class="invalid-feedback">
                        <?= $error = $validation->getError('Penempatan'); ?>
                        </div>
                     <?php }?>
                </div>
               </div>
               <div class="form-group row">
                <div class="col-md-8 offset-md-3">
                <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
               </div>
              </form>
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

 