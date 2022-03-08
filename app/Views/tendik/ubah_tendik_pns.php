<?= $this->include('layout/head') ?>
<?= $this->include('layout/header') ?>
<?= $this->include('layout/nav') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4 class="m-0">TENAGA PENDIDIKAN</h4>
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
        <a type="button2" class="btn btn-outline-primary" href="<?= base_url('tendik/honorer') ?>">Honorer</a>
        <a type="button2" class="btn btn-outline-primary" href="<?= base_url('tendik/pendukung') ?>">Pendukung</a>
     </div>
      <div class="row mt-2">
        <div class="col-md-12">
            
        <div class="card card-primary card-outline" style="min-height: 650px;">
              <div class="card-header">
                
                <h3 class="card-title">Ubah Data Tendik PNS
                
            </h3>
            <button  type="button" class="btn btn-sm btn-warning float-right" onclick="javascript:history.back()"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
                <!-- <div class="card-tools">
                
                </div> -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <?php foreach($pns as $key => $value ) { ?>
              <form method="post" action="<?= base_url('tendik/ubah_tendik_pns') ?>" enctype="multipart/form-data">
              <?= csrf_field(); ?>
              <div class="form-group row">
                <!-- CSRF token --> 
                <input type="hidden" name="Id_pns" class="form-control" value="<?= $value['Id_pns'] ?>">
                <label for="" class="col-md-2 offset-md-1 col-form-label text-right ">NIP</label>
                <div class="col-md-4">
                    <input type="text" name="NIP" class="form-control <?= ($validation->hasError('NIP')) ? 'is-invalid' : ''; ?>"  value="<?= $value['NIP'] ?>">
                    <?php if($validation->getError('NIP')) {?>
                        <div id="validationServer03Feedback" class="invalid-feedback">
                        <?= $error = $validation->getError('NIP'); ?>
                        </div>
                     <?php }?>
                </div>
               </div>
               <div class="form-group row">
                <label for="" class="col-md-2 offset-md-1 col-form-label text-right ">Nama</label>
                <div class="col-md-8">
                <input type="text" name="Nama" class="form-control <?= ($validation->hasError('Nama')) ? 'is-invalid' : ''; ?>"  value="<?= $value['Nama'] ?>">
                    <?php if($validation->getError('Nama')) {?>
                        <div id="validationServer03Feedback" class="invalid-feedback">
                        <?= $error = $validation->getError('Nama'); ?>
                        </div>
                     <?php }?>
                </div>
               </div>
               <div class="form-group row">
                <label for="" class="col-md-2 offset-md-1 col-form-label text-right ">Jenis Kelamin</label>
                <div class="col-md-4">
                    <select name="JK" id="" class="form-control "> 
                        <option value="<?= $value['JK'] ?>" ><?= $value['JK'] ?></option>
                        <option value="Laki-Laki" >Laki-Laki</option>
                        <option value="Perempuan" >Perempuan</option>
                    </select>
                    <?php if($validation->getError('JK')) {?>
                        <div id="validationServer03Feedback" class="invalid-feedback">
                        <?= $error = $validation->getError('JK'); ?>
                        </div>
                     <?php }?>
                </div>
               </div>
               <div class="form-group row">
                <label for="" class="col-md-2 offset-md-1 col-form-label text-right ">Jenis Kelamin</label>
                <div class="col-md-4">
                    <select name="Jnj_pendidikan" id="" class="form-control "> 
                        <option value="<?= $value['Jnj_pendidikan'] ?>" ><?= $value['Jnj_pendidikan'] ?></option>
                        <option value="SD" >SD</option>
                        <option value="SMP" >SMP</option>
                        <option value="SMA/SMK" >SMA/SMK</option>
                        <option value="S1" >D3</option>
                        <option value="S1" >S1</option>
                        <option value="S2" >S2</option>
                        <option value="S3" >S3</option>
                    </select>
                    <?php if($validation->getError('Jnj_pendidikan')) {?>
                        <div id="validationServer03Feedback" class="invalid-feedback">
                        <?= $error = $validation->getError('Jnj_pendidikan'); ?>
                        </div>
                     <?php }?>
                </div>
               </div>
               <div class="form-group row">
                <label for="" class="col-md-2 offset-md-1 col-form-label text-right ">Pangkat Gol/Ruang</label>
                <div class="col-md-4">
                    <select name="Id_gol" id="Sertifikat" class="form-control <?= ($validation->hasError('Id_gol')) ? 'is-invalid' : ''; ?>" value="<?= old('Id_gol') ?>"> 
                        <option value="<?= $value['Id_gol'] ?>" ><?= $value['golongan'] ?></option>
                        <?php foreach($golongan as $data) { ?>
                            <option value="<?= $data['Id_gol'] ?>" ><?= $data['golongan'] ?></option>
                        <?php } ?>
                    </select>
                    <?php if($validation->getError('Id_gol')) {?>
                        <div id="validationServer03Feedback" class="invalid-feedback">
                        <?= $error = $validation->getError('Id_gol'); ?>
                        </div>
                     <?php }?>
                </div>
               </div>
               <div class="form-group row">
                <label for="" class="col-md-2 offset-md-1 col-form-label text-right ">Jabatan</label>
                <div class="col-md-8">
                <input type="text" name="Jabatan" class="form-control <?= ($validation->hasError('Jabatan')) ? 'is-invalid' : ''; ?>"  value="<?= $value['Jabatan'] ?>">
                    <?php if($validation->getError('Jabatan')) {?>
                        <div id="validationServer03Feedback" class="invalid-feedback">
                        <?= $error = $validation->getError('Jabatan'); ?>
                        </div>
                     <?php }?>
                </div>
               </div>
               <div class="form-group row">
                <label for="" class="col-md-2 offset-md-1 col-form-label text-right ">Keterangan</label>
                <div class="col-md-8">
                   <textarea name="Keterangan" id="" cols="30" rows="10" class="form-control <?= ($validation->hasError('Keterangan')) ? 'is-invalid' : ''; ?>"  value="<?= $value['Keterangan'] ?>"><?= $value['Keterangan'] ?></textarea>
                   <?php if($validation->getError('Keterangan')) {?>
                        <div id="validationServer03Feedback" class="invalid-feedback">
                        <?= $error = $validation->getError('Keterangan'); ?>
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

 