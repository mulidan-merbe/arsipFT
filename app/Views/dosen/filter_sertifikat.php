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
      <div class="row">
        <div class="col-md-12">
        <div class="card card-primary card-outline" style="min-height: 650px;">
              <div class="card-header">
                
                <h3 class="card-title">Data Berdasarkan Sertifikat
                
            </h3>
            <button  type="button" class="btn btn-sm btn-warning float-right" onclick="javascript:history.back()"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
                <!-- <div class="card-tools">
                
                </div> -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th class="col-1 text-center">No</th>
                    <th class="col-5 text-center">Nama</th>
                    <th class=" text-center">NIP</th>
                    <th class=" text-center">Sertifikat</th>
                    <!-- <th class=" text-center col-md-5">Agama</th> -->
                    <th class="col-4 text-center">Nomor Sertifikat</th>
                    <th class=" text-center">Berkas</th>
                    <th class="col-3 text-center">Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $no = 1;
                    
                    foreach($dosen as $key => $value )  { ?>
                  <tr>
                    <td class="text-center"><?= $no++ ?></td>
                    <td><?= $value['Nama'] ?></td>
                    <td><?= $value['NIP'] ?></td>
                    <td><?= $value['Sertifikat'] ?></td>
                    <td><?= $value['Nomor_sertifikat'] ?></td>
                    <td><?= $value['Berkas'] ?></td>
                    <td class="col-1 text-center"> 
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modal-ubah<?= $value['NIP']?>"><i class="fas fa-edit"></i></button>
                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-hapus<?= $value['NIP']?>"><i class="fa fa-trash" ></i></button>
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

  
  <?php foreach($detailSertifikat as $key => $value )  { ?>
       <!-- Modal Tambah Sertifikat -->
   <div class="modal fade" id="modal-ubah<?= $value['NIP']?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Ubah Data Sertifikat</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
              <form action="<?php echo base_url('dosen/ubahSertifikat/'. $value['NIP']);?>" method="post" enctype="multipart/form-data">
                  <div class="form-group ">
                    <label for="">Nama</label>
                    <input name="Nama" class="form-control" value="<?= $value['Nama'] ?>"  readonly>
                    <input type="hidden" name="Nama" class="form-control" value="<?= $value['NIP'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="Sertifikat">Sertifikat</label>
                    <select name="Id_sertifikat" id="Sertifikat" class="form-control "> 
                        <option value="<?= $value['Id_sertifikat'] ?>" ><?= $value['Sertifikat'] ?></option>
                        <?php foreach($sertifikat as $data) { ?>
                            <option value="<?= $data['Id_sertifikat'] ?>" ><?= $data['Sertifikat'] ?></option>
                        <?php } ?>
                    </select>
                  </div>
                  <div class="form-group ">
                    <label for="">Nomor Sertifikat</label>
                    <input name="Nomor_sertifikat" class="form-control" id="" value="<?= $value['Nomor_sertifikat'] ?>" required>
                  </div>
                  <div class="form-group ">
                    <label for="">Keterangan</label>
                    <input name="Keterangan" class="form-control" id="" value="<?= $value['Keterangan'] ?>" >
                  </div>
                  <div class="form-group ">
                    <label for="">Berkas</label>
                    <input type="file" name="Berkas" class="form-control" >
                  </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
                        </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div> 
      <?php } ?>     