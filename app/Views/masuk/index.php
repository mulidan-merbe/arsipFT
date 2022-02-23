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
      <div class="card card-primary card-outline" style="min-height: 650px;">
              <div class="card-header">
                <h3 class="card-title">Data <?= $title ?></h3>
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-tambah">
                <i class="fas fa-plus"></i> Tambah
                </button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead class="table-primary">
                    <tr>
                    <th class="col-1 text-center">No</th>
                      <th class="col-1 text-center">ASAL SURAT</th>
                      <th class=" text-center">NOMOR SURAT</th>
                      <th class=" text-center">TANGGAL SURAT</th>
                      <!-- <th class=" text-center ">Ringkasan</th> -->
                      <th class=" text-center">TANGGAL TERIMA</th>
                      <th class=" text-center">DISPOSISI</th>
                      <th class="text-center">AKSI</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                    $no = 1;
                    foreach($masuk as $key => $value )  { ?>
                    <tr>
                      <td class="text-center"><?= $no++ ?>.</td>
                      <td><?= $value['Asal_surat'] ?></td>
                      <td><?= $value['Nomor_surat'] ?></td>
                      <td><?= $value['Tanggal_surat'] ?></td>
                      <!-- <td><?= $value['Ringkasan'] ?></td> -->
                      <td><?= $value['Tanggal_terima'] ?></td>
                      <td><?php if($value['Status']) { ?><span class="badge badge-success"><?= $value['Tujuan'] ?></span> <span class="badge badge-warning"><?= $value['Department'] ?></span> <?php } else { ?> <span class="badge badge-warning"><?= $value['Tujuan'] ?></span><?php } ?></td>
                      <td class="text-center">
                      <div class="btn-group">
                          <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-lihat<?= $value['Id_masuk']?>"><i class="fas fa-eye"></i></button>
                          <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modal-ubah<?= $value['Id_masuk']?>"><i class="fas fa-edit"></i></button>
                          <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-hapus<?= $value['Id_masuk']?>"><i class="fa fa-trash" ></i></button>
                      </div>
                      </td>
                    </tr>
                  <?php } ?>
                  </tbody>
                </table>
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
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Surat Masuk</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <?php echo form_open('masuk/tambah') ?>
             
                  <div class="form-group">
                    <label for="NomorSK">Tanggal Surat</label>
                    <input type="date" name="Tanggal_surat" class="form-control" id="inputDate" placeholder="Tanggal SK" required>
                  </div>
                  <div class="form-group">
                    <label for="NomorSK">Nomor Surat</label>
                    <input name="Nomor_surat" class="form-control" id="NomorSK" placeholder="Nomor Surat" required>
                  </div>
                  <div class="form-group">
                    <label for="NomorSK">Asal Surat</label>
                    <input name="Asal_surat" class="form-control" id="inputDate" placeholder="Asal Surat" required>
                  </div>
                  <div class="form-group">
                    <label for="NomorSK">Ringkasan</label>
                    <textarea name="Ringkasan" class="form-control" id="" cols="30" rows="10"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="NomorSK">Tanggal Terima</label>
                    <input type="date" name="Tanggal_terima" class="form-control" id="inputDate2" placeholder="Tanggal SK" required>
                  </div>
                  <div class="form-group">
                    <label for="NomorSK">Kepada</label>
                    <select name="Id_tujuan" id="Department" class="form-control "> 
                        <option value="" >Pilih Department</option>
                        <?php foreach($tujuan as $key => $value){ ?>
                        <option value="<?= $value['Id_tujuan'] ?> " ><?= $value['Tujuan'] ?></option>
                        <?php } ?>
                    </select>
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
            
      

        <!-- Modal Lihat -->
        <?php foreach($masuk as $key => $value )  { ?>
   <div class="modal fade" id="modal-lihat<?= $value['Id_masuk']?>">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Ubah Surat Masuk</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <?php echo form_open('masuk/ubah/'.$value['Id_masuk'] ) ?>
             
                  <div class="form-group">
                    <label for="NomorSK">Tanggal Surat</label>
                    <input type="date" name="Tanggal_surat" class="form-control" id="inputDate" value="<?= $value['Tanggal_surat']?>">
                  </div>
                  <div class="form-group">
                    <label for="NomorSK">Nomor Surat</label>
                    <input name="Nomor_surat" class="form-control" id="NomorSK" value="<?= $value['Nomor_surat']?>">
                  </div>
                  <div class="form-group">
                    <label for="NomorSK">Asal Surat</label>
                    <input name="Asal_surat" class="form-control" id="inputDate"  value="<?= $value['Asal_surat']?>">
                  </div>
                  <div class="form-group">
                    <label for="NomorSK">Ringkasan</label>
                    <textarea name="Ringkasan" class="form-control" id="" cols="30" rows="10"><?= $value['Ringkasan']?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="NomorSK">Tanggal Terima</label>
                    <input type="date" name="Tanggal_terima" class="form-control" id="inputDate" value="<?= $value['Tanggal_terima']?>">
                  </div>
                  <div class="form-group">
                    <label for="NomorSK">Kepada</label>
                    <select name="Id_tujuan" id="Department" class="form-control "> 
                        <option value="<?= $value['Id_tujuan'] ?>" ><?= $value['Tujuan'] ?></option>
                        <?php foreach($tujuan as $key => $value){ ?>
                        <option value="<?= $value['Id_tujuan'] ?> " ><?= $value['Tujuan'] ?></option>
                        <?php } ?>
                    </select>
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
      <?php } ?>

       <!-- Modal Ubah -->
       <?php foreach($masuk as $key => $value )  { ?>
   <div class="modal fade" id="modal-ubah<?= $value['Id_masuk']?>">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Ubah Surat Masuk</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <?php echo form_open('masuk/ubah/'.$value['Id_masuk']) ?>
             
                  <div class="form-group">
                    <label for="NomorSK">Tanggal Surat</label>
                    <input type="date" name="Tanggal_surat" class="form-control" id="inputDate" value="<?= $value['Tanggal_surat']?>">
                    <input type="hidden" name="Id_masuk" class="form-control"  value="<?= $value['Id_masuk']?>">
                  </div>
                  <div class="form-group">
                    <label for="NomorSK">Nomor Surat</label>
                    <input name="Nomor_surat" class="form-control" id="NomorSK" value="<?= $value['Nomor_surat']?>">
                  </div>
                  <div class="form-group">
                    <label for="NomorSK">Asal Surat</label>
                    <input name="Asal_surat" class="form-control" id="inputDate"  value="<?= $value['Asal_surat']?>">
                  </div>
                  <div class="form-group">
                    <label for="NomorSK">Ringkasan</label>
                    <textarea name="Ringkasan" class="form-control" id="" cols="30" rows="10"><?= $value['Ringkasan']?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="NomorSK">Tanggal Terima</label>
                    <input type="date" name="Tanggal_terima" class="form-control" id="inputDate" value="<?= $value['Tanggal_terima']?>">
                  </div>
                  <div class="form-group">
                    <label for="NomorSK">Kepada</label>
                    <select name="Id_tujuan" id="Department" class="form-control "> 
                        <option value="<?= $value['Id_tujuan'] ?>" ><?= $value['Tujuan'] ?></option>
                        <?php foreach($tujuan as $key => $value){ ?>
                        <option value="<?= $value['Id_tujuan'] ?> " ><?= $value['Tujuan'] ?></option>
                        <?php } ?>
                    </select>
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
      <?php } ?>

        <!-- Modal Hapus -->
        <?php foreach($masuk as $key => $value )  { ?>
      <div class="modal fade" id="modal-hapus<?= $value['Id_masuk']?>">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Hapus Surat Masuk</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Apakah Anda Ingin Menghapus Data?
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
              <a href="<?= base_url('masuk/hapus/'. $value['Id_masuk']) ?>" type="submit" class="btn btn-primary">Hapus</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>   
      <?php } ?>   