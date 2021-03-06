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
        <div class="col-md-4">
        <div class="card card-primary" style="min-height: 650px;">
              <div class="card-header">
                <h3 class="card-title">Filter Data</h3>
                <!-- <div class="card-tools">
                
                </div> -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div id="accordion">

              <div class="card">
                <div class="card-header">
                  <a class="card-link" data-toggle="collapse" href="#collapseOne">
                  PROGRAM STUDI
                  </a>
                </div>
                <div id="collapseOne" class="collapse show" data-parent="#accordion">
                  <div class="card-body">
                  <?php
                                  foreach($prodi as $key => $value )  { ?>
                              <div class="list-group list-group-flush checkbox-list-group">
                                <div class="list-group-item prodi"><h6><label><input type="checkbox" value="<?= $value['Id_prodi']?>"><span class="list-group-item-text" ><i class="fa fa-fw"></i><?= $value['prodi']?></span></label></h6></div> 
                              </div>
                              <?php } ?>
                  </div>
                </div>
              </div>

              <div class="card">
                <div class="card-header">
                  <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                    SERTIFIKAT
                  </a>
                </div>
                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                  <div class="card-body">
                  <?php
                                  foreach($sertifikat as $key => $value )  { ?>
                              <div class="list-group list-group-flush checkbox-list-group">
                                <div class="list-group-item prodi"><h6><label><input type="checkbox" value="<?= $value['Id_sertifikat']?>"><span class="list-group-item-text" ><i class="fa fa-fw"></i><?= $value['Sertifikat']?></span></label></h6></div> 
                              </div>
                              <?php } ?>
                  </div>
                </div>
              </div>

              <div class="card">
                <div class="card-header">
                  <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                    Collapsible Group Item #3
                  </a>
                </div>
                <div id="collapseThree" class="collapse" data-parent="#accordion">
                  <div class="card-body">
                    Lorem ipsum..
                  </div>
                </div>
              </div>

              </div>
               
              </div>
            </div>

        </div>
        <div class="col-md-8">
        <div class="card card-primary" style="min-height: 650px;">
              <div class="card-header">
                <h3 class="card-title">Data <?= $title ?></h3>
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
            <div class="">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah">
                  Tambah
                </button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambahsertifikat">
                  Tambah Sertifikat
                </button>
            </div>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th class="col-1 text-center">No</th>
                    <th class="col-5 text-center">Nama</th>
                    <th class=" text-center">NIP</th>
                    <th class=" text-center">JK</th>
                    <th class=" text-center col-md-5">Agama</th>
                    <th class=" text-center">Golongan</th>
                    <th class=" text-center">Jabatan</th>
                    <th class=" text-center">NIDN</th>
                    <th class=" text-center">Jenjang</th>
                    <th class=" text-center">Prodi</th>
                    <th class=" text-center">Sertifikat</th>
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
                    <td><?= $value['JK'] ?></td>
                    <td><?= $value['Agama'] ?></td>
                    <td><?= $value['golongan'] ?></td>
                    <td><?= $value['Jab'] ?></td>
                    <td><?= $value['NIDN'] ?></td>
                    <td><?= $value['Jnj'] ?></td>
                    <td><?= $value['prodi'] ?></td>
                     <td><?= $value['prodi'] ?></td>
                    <td class="text-center"> 
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modal-ubah<?= $value['Id_dosen']?>"></button>
                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-hapus<?= $value['Id_dosen']?>"><i class="fa fa-trash" ></i></button>
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

   <!-- Modal Tambah Dosen -->
   <div class="modal fade" id="modal-tambah">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data Dosen</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <?php echo form_open('dosen/tambah') ?>
             <div class="row">
                  <div class="form-group col-md-6">
                    <label for="">Nama</label>
                    <input name="Nama" class="form-control" placeholder="Nama" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="">NIP</label>
                    <input name="NIP" class="form-control" id="" placeholder="NIP" required>
                  </div>
                  </div>
                  <div class="row">
                  <div class="form-group col-md-6">
                    <label for="">Jenis Kelamin</label>
                    <div class="radio">
                    <label><input type="radio" name="JK" value="L" checked> Laki-laki</label>
                    <label><input type="radio" name="JK"  value="P" > Perempuan</label>
                    </div>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="">Agama</label>
                    <div class="radio">
                    <label><input type="radio" name="Agama" value="Islam" checked> Islam</label>
                    <label><input type="radio" name="Agama" value="Katolik" > Katolik</label>
                    <label><input type="radio" name="Agama" value="Kristen" > Kristen</label>
                    <label><input type="radio" name="Agama" value="Hindu" > Hindu</label>
                    <label><input type="radio" name="Agama" value="Budha" > Budha</label>
                    </div>
                  </div>
                  </div>
                  <div class="row">
                  <div class="form-group col-md-6">
                    <label for="">Golongan</label>
                    <select name="Gol" id="Prodi" class="form-control "> 
                        <option value="" >Pilih Golongan</option>
                        <?php foreach($gol as $data) { ?>
                            <option value="<?= $data['Id_gol'] ?>" ><?= $data['golongan'] ?></option>
                        <?php } ?>
                       
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="">Jabatan</label>
                    <input name="Jab" class="form-control" id="" placeholder="Jabatan" required>
                  </div>
                  </div>
                  <div class="row">
                  <div class="form-group col-md-6">
                    <label for="">NIDN</label>
                    <input name="NIDN" class="form-control" id="" placeholder="NIDN" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="">Jenjang</label>
                    <input name="Jnj" class="form-control" id="" placeholder="Jenjang" required>
                  </div>
                  </div>
                  <div class="row">
                  <div class="form-group col-md-6">
                    <label for="Prodi">Prodi</label>
                    <select name="Id_prodi" id="Prodi" class="form-control "> 
                        <option value="" >Pilih Prodi</option>
                        <?php foreach($prodi as $data) { ?>
                            <option value="<?= $data['Id_prodi'] ?>" ><?= $data['prodi'] ?></option>
                        <?php } ?>
                       
                    </select>
                  </div>
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

           <!-- Modal Ubah -->
           <?php foreach($dosen as $key => $value )  { ?>
   <div class="modal fade" id="modal-ubah<?= $value['Id_dosen']?>">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Ubah Data Dosen</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <?php echo form_open('dosen/ubah/'.$value['Id_dosen']) ?>
             <div class="row">
                  <div class="form-group col-md-6">
                    <label for="">Nama</label>
                    <input name="Nama" class="form-control" value="<?= $value['Nama'] ?>">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="">NIP</label>
                    <input name="NIP" class="form-control" id="" value="<?= $value['NIP'] ?>">
                  </div>
                  </div>
                  <div class="row">
                  <div class="form-group col-md-6">
                    <label for="">Jenis Kelamin</label>
                    <div class="radio">
                    <label><input type="radio" name="JK" value="L" checked> Laki-laki</label>
                    <label><input type="radio" name="JK"  value="P" > Perempuan</label>
                    </div>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="">Agama</label>
                    <div class="radio">
                    <label><input type="radio" name="Agama" value="<?= $value['Agama'] ?>" checked> <?= $value['Agama'] ?></label>
                    <label><input type="radio" name="Agama" value="Islam" > Islam</label>
                    <label><input type="radio" name="Agama" value="Katolik" > Katolik</label>
                    <label><input type="radio" name="Agama" value="Kristen" > Kristen</label>
                    <label><input type="radio" name="Agama" value="Hindu" > Hindu</label>
                    <label><input type="radio" name="Agama" value="Budha" > Budha</label>
                    </div>
                  </div>
                  </div>
                  <div class="row">
                  <div class="form-group col-md-6">
                    <label for="">Golongan</label>
                    <select name="Gol" id="Prodi" class="form-control "> 
                        <option value="<?= $value['Id_gol'] ?>" ><?= $value['golongan'] ?></option>
                        <?php foreach($gol as $data) { ?>
                            <option value="<?= $data['Id_gol'] ?>" ><?= $data['golongan'] ?></option>
                        <?php } ?>
                       
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="">Jabatan</label>
                    <input name="Jab" class="form-control" id="" value="<?= $value['Jab'] ?>">
                  </div>
                  </div>
                  <div class="row">
                  <div class="form-group col-md-6">
                    <label for="">NIDN</label>
                    <input name="NIDN" class="form-control" id="" value="<?= $value['NIDN'] ?>">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="">Jenjang</label>
                    <input name="Jnj" class="form-control" id="" value="<?= $value['Jnj'] ?>">
                  </div>
                  </div>
                  <div class="row">
                  <div class="form-group col-md-6">
                    <label for="Prodi">Prodi</label>
                    <select name="Id_prodi" id="Prodi" class="form-control "> 
                        <option value="<?= $value['Id_prodi'] ?>" ><?= $value['prodi'] ?></option>
                        <?php foreach($prodi as $data) { ?>
                            <option value="<?= $data['Id_prodi'] ?>" ><?= $data['prodi'] ?></option>
                        <?php } ?>
                       
                    </select>
                  </div>
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
        <?php foreach($dosen as $key => $value )  { ?>
      <div class="modal fade" id="modal-hapus<?= $value['Id_dosen']?>">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Hapus Surat dosen</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Apakah Anda Ingin Menghapus Data?
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
              <a href="<?= base_url('dosen/hapus/'. $value['Id_dosen']) ?>" type="submit" class="btn btn-primary">Hapus</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>   
      <?php } ?>   



       <!-- Modal Tambah Sertifikat -->
   <div class="modal fade" id="modal-tambahsertifikat">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data Sertifikat</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <?php echo form_open('dosen/tambahsertifikat') ?>
                  <div class="form-group ">
                    <label for="">Nama</label>
                    <input name="Nama" class="form-control" placeholder="Nama" required>
                  </div>
                  <div class="form-group">
                    <label for="Prodi">Sertifikat</label>
                    <select name="Id_prodi" id="Prodi" class="form-control "> 
                        <option value="" >Pilih Sertifikat</option>
                        <?php foreach($sertifikat as $data) { ?>
                            <option value="<?= $data['Id_sertifikat'] ?>" ><?= $data['Sertifikat'] ?></option>
                        <?php } ?>
                    </select>
                  </div>
                  <div class="form-group ">
                    <label for="">Nomor Sertifikat</label>
                    <input name="NIP" class="form-control" id="" placeholder="Nomor Sertifikat" required>
                  </div>
                  <div class="form-group ">
                    <label for="">Berkas</label>
                    <input type="file" name="NIP" class="form-control" required>
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
