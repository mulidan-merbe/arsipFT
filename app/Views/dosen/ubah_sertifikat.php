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
        <a type="button2" class="btn btn-primary " href="<?= base_url('dosen') ?>">Data Dosen</a>
        <a type="button2" class="btn btn-primary <?php $uri = service('uri'); if ($uri->getSegment(2) == "ubahSertifikat") {
                                                    echo "active";
                                                  } ?>" href="<?= base_url('dosen/sertifikat') ?>">Sertifikat</a>
     </div>
      <div class="row mt-2">
        <div class="col-md-12">
            
        <div class="card card-primary card-outline" style="min-height: 650px;">
              <div class="card-header">
                
                <h3 class="card-title">Ubah Data Sertifikat
                
            </h3>
            <button  type="button" class="btn btn-sm btn-warning float-right" onclick="javascript:history.back()"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
                <!-- <div class="card-tools">
                
                </div> -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <?php foreach($lihatbyId as $key => $value ) { ?>
              <form method="post" action="<?= base_url('dosen/ubahData_sertifikat/'. $value['Id_serdos']) ?>" enctype="multipart/form-data">
              <?= csrf_field(); ?>
              <input type="hidden" name="Id_serdos" value="<?= $value['Id_serdos'] ?>">
              <input type="hidden" name="BerkasLama" value="<?= $value['Berkas'] ?>">
              <input type="hidden" name="NIP" value="<?= $value['NIP'] ?>">
              <div class="form-group row">
                <label for="" class="col-sm-2 offset-sm-1 col-form-label text-right ">Nama</label>
                <div class="col-sm-8">
                    <input type="text" name="Nama" class="form-control <?= ($validation->hasError('NIP')) ? 'is-invalid' : ''; ?>"  value="<?= $value['Nama']?>" readonly>
                    <?php if($validation->getError('NIP')) {?>
                        <div id="validationServer03Feedback" class="invalid-feedback">
                        <?= $error = $validation->getError('NIP'); ?>
                        </div>
                     <?php }?>
                </div>
               </div>
               <div class="form-group row">
                <label for="" class="col-sm-2 offset-sm-1 col-form-label text-right ">Sertifikat</label>
                <div class="col-sm-8">
                <select name="Id_sertifikat" id="Sertifikat" class="form-control <?= ($validation->hasError('Id_sertifikat')) ? 'is-invalid' : ''; ?>" value="<?= $value['Sertifikat'] ?>"> 
                        <option value="<?= $value['Id_sertifikat']?>" ><?= $value['Sertifikat']?></option>
                        <?php foreach($sertifikat as $data) { ?>
                            <option value="<?= $data['Id_sertifikat'] ?>" ><?= $data['Sertifikat'] ?></option>
                        <?php } ?>
                    </select>
                    <?php if($validation->getError('Id_sertifikat')) {?>
                        <div id="validationServer03Feedback" class="invalid-feedback">
                        <?= $error = $validation->getError('Id_sertifikat'); ?>
                        </div>
                     <?php }?>
                </div>
               </div>
               <div class="form-group row">
                <label for="" class="col-sm-2 offset-sm-1 col-form-label text-right ">Nomor Sertifikat</label>
                <div class="col-sm-8">
                    <input name="Nomor_sertifikat" class="form-control <?= ($validation->hasError('Nomor_sertifikat')) ? 'is-invalid' : ''; ?>"  value="<?= $value['Nomor_sertifikat'] ?>">
                    <?php if($validation->getError('Nomor_sertifikat')) {?>
                        <div id="validationServer03Feedback" class="invalid-feedback">
                        <?= $error = $validation->getError('Nomor_sertifikat'); ?>
                        </div>
                     <?php }?>
                </div>
               </div>
               <div class="form-group row">
                <label for="" class="col-sm-2 offset-sm-1 col-form-label text-right ">Keterangan</label>
                <div class="col-sm-8">
                   <textarea name="Keterangan" id="" cols="30" rows="10" class="form-control <?= ($validation->hasError('Keterangan')) ? 'is-invalid' : ''; ?>"  value="<?= $value['Keterangan'] ?>"><?= $value['Keterangan'] ?></textarea>
                   <?php if($validation->getError('Keterangan')) {?>
                        <div id="validationServer03Feedback" class="invalid-feedback">
                        <?= $error = $validation->getError('Keterangan'); ?>
                        </div>
                     <?php }?>
                </div>
               </div>
               <div class="form-group row">
                <label for="" class="col-sm-2 offset-sm-1 col-form-label text-right">Berkas</label>
                <div class="col-sm-4">
                    <div class="custom-file">
                        <input type="file" name="Berkas" class="custom-file-input <?= ($validation->hasError('Berkas')) ? 'is-invalid' : ''; ?>"  value="<?= old('Berkas') ?>" id="berkas" onchange="previewLabel()"> 
                        <label class="custom-file-label" for="berkas"><?= $value['Berkas'] ?></label>
                    </div>
                    <!-- <small><?= $value['Berkas'] ?></small> -->
                <!-- <input type="file" name="Berkas" class="form-control <?= ($validation->hasError('Berkas')) ? 'is-invalid' : ''; ?>"  value="<?= old('Berkas') ?>"> -->
                <?php if($validation->getError('Berkas')) {?>
                        <div id="validationServer03Feedback" class="invalid-feedback">
                        <?= $error = $validation->getError('Berkas'); ?>
                        </div>
                     <?php }?>
                     <!-- <small>(Kosongkan jika tidak ada berkas yang diubah)</small> -->
                </div>
               </div>
               <div class="form-group row">
                <div class="col-sm-8 offset-sm-3">
                <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
               </div>
              </form>
              <?php } ?>
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