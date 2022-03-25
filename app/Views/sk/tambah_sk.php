<?= $this->include('layout/head') ?>
<?= $this->include('layout/header') ?>
<?= $this->include('layout/nav') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4 class="m-0">SURAT KEPUTUSAN</h4>
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
      <div class="row mt-2">
        <div class="col-md-12">
            
        <div class="card card-primary card-outline" style="min-height: 650px;">
              <div class="card-header">
                
                <h3 class="card-title">Tambah Data Surat Keputusan
                
            </h3>
            <button  type="button" class="btn btn-sm btn-warning float-right" onclick="javascript:history.back()"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
                <!-- <div class="card-tools">
                
                </div> -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              
              <form method="post" action="<?= base_url('sk/simpan') ?>" enctype="multipart/form-data">
              <?= csrf_field(); ?>
              <div class="form-group row">
                <!-- CSRF token --> 
                <label for="" class="col-md-1  col-form-label ">Nomor SK</label>
                <div class="col-md-4">
                    <input type="text" name="Nomor_sk" class="form-control <?= ($validation->hasError('Nomor_sk')) ? 'is-invalid' : ''; ?>"  value="<?= old('Nomor_sk') ?>">
                    <?php if($validation->getError('Nomor_sk')) {?>
                        <div id="validationServer03Feedback" class="invalid-feedback">
                        <?= $error = $validation->getError('Nomor_sk'); ?>
                        </div>
                     <?php }?>
                </div>
               </div>
               <div class="form-group row">
                <label for="" class="col-md-1  col-form-label ">Tanggal SK</label>
                <div class="col-md-4">
                <input type="date" name="Tanggal_sk" class="form-control <?= ($validation->hasError('Tanggal_sk')) ? 'is-invalid' : ''; ?>"  value="<?= old('Tanggal_sk') ?>">
                    <?php if($validation->getError('Tanggal_sk')) {?>
                        <div id="validationServer03Feedback" class="invalid-feedback">
                        <?= $error = $validation->getError('Tanggal_sk'); ?>
                        </div>
                     <?php }?>
                </div>
               </div>
               <div class="form-group row">
                <label for="" class="col-md-1  col-form-label ">Tentang</label>
                <div class="col-md-11">
                <textarea name="Tentang" id="" cols="30" rows="10" class="form-control <?= ($validation->hasError('Tentang')) ? 'is-invalid' : ''; ?>"  value="<?= old('Tentang') ?>"></textarea>
                    <?php if($validation->getError('Tentang')) {?>
                        <div id="validationServer03Feedback" class="invalid-feedback">
                        <?= $error = $validation->getError('Tentang'); ?>
                        </div>
                     <?php }?>
                </div>
               </div>
               <div class="form-group row">
                <label for="" class="col-md-1  col-form-label">Berkas</label>
                <div class="col-md-4">
                <div class="custom-file">
                        <input type="file" name="Berkas" class="custom-file-input <?= ($validation->hasError('Berkas')) ? 'is-invalid' : ''; ?>"  value="<?= old('Berkas') ?>" id="berkas" onchange="previewLabel()">
                        <label class="custom-file-label" for="berkas">Pilih Berkas..</label>
                      </div>
                    <?php if($validation->getError('Berkas')) {?>
                        <div id="validationServer03Feedback" class="invalid-feedback">
                        <?= $error = $validation->getError('Berkas'); ?>
                        </div>
                     <?php }?>
                </div>
               </div>
               <div class="form-group row">
                <div class="col-md-8 offset-md-1">
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

  <script>
    function previewLabel() {

      const berkas = document.querySelector('#berkas');
      const labelBerkas = document.querySelector('.custom-file-label');
  
      labelBerkas.textContent = berkas.files[0].name; 
    }

    // const fileBerkas = new FileReader();
    // fileBerkas.readAsDataURL(sampul.files[0]);
  </script>

 