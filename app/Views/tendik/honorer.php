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
        <a type="button2" class="btn btn-primary  " href="<?= base_url('tendik') ?>">PNS</a>
        <a type="button2" class="btn btn-primary <?php $uri = service('uri'); if ($uri->getSegment(1) == "tendik") {
                                                    echo "active";
                                                  } ?>" href="<?= base_url('tendik/honorer') ?>">Honorer</a>
        <a type="button2" class="btn btn-primary" href="<?= base_url('tendik/pendukung') ?>">Pendukung</a>
     </div>
      <div class="row mt-2">
        <div class="col-md-12">
        <div class="card card-primary card-outline" style="min-height: 650px;">
              <div class="card-header">
                <h3 class="card-title">Data <?= $title ?> </h3>
                <!-- <div class="card-tools">
                
                </div> -->
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
              <?php if (session()->getFlashdata('pesan')){
                echo '<div class="alert alert-success alert-dismissible">';
                echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h5><i class="icon fas fa-check"></i> Sukses!</h5>';
                echo session()->getFlashdata('pesan');
                echo '</div>';
            } ?>
            <div class="mb-4">

                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah">
                    <i class="fas fa-plus"></i>Tambah
                </button>
            </div>
                <table id="example2" class="table table-bordered table-striped mt-2">
                  <thead>
                  <tr>
                  <th class="col-1 text-center">No</th>
                    <th class="col-3 text-center">Nama</th>
                    <th class=" text-center">Penempatan</th>
                    <th class="text-center">Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  $no = 1;
                    foreach($honorer as $key => $value ){ ?>
                     <tr>
                        <td class="text-center"><?= $no++ ?>.</td>
                        <td><?= $value['Nama'] ?></td>
                        <td><?= $value['Penempatan'] ?></td>
                        <td class="text-center">
                            <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modal-edit<?= $value['Id_honorer']?>"><i class="fa fa-edit" ></i></button>
                                <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-hapus<?= $value['Id_honorer']?>"><i class="fa fa-trash" ></i></button>
                            </div>
                        </td>
                    </tr>
                    <?php } ?>
                 
                  </tbody>
</table>
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


  
   <!-- Modal Tambah -->
   <div class="modal fade" id="modal-tambah">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Surat Masuk</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <?php echo form_open('tendik/simpan_tendik_honorer') ?>
             
                  <div class="form-group">
                    <label for="NomorSK">Nama</label>
                    <input  name="Nama" class="form-control"  placeholder="Nama" required>
                  </div>
                  <div class="form-group">
                    <label for="NomorSK">Penempatan</label>
                    <input name="Penempatan" class="form-control"  placeholder="Penempatan" required>
                  </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            <?php echo form_close() ?>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div> 