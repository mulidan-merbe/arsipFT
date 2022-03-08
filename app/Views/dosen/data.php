<?= $this->include('layout/head') ?>
<?= $this->include('layout/header') ?>
<?= $this->include('layout/nav') ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4 class="m-0">DOSEN</h4>
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
      <a type="button2" class="btn btn-primary  <?php $uri = service('uri'); if ($uri->getSegment(1) == "dosen") {
                                                    echo "active";
                                                  } ?>" href="<?= base_url('dosen') ?>">Profil</a>
        <a type="button2" class="btn btn-outline-primary" href="<?= base_url('dosen/sertifikat') ?>">Sertifikat</a>
     </div>
      <div class="row mt-2">
        <div class="col-md-12">
        <div class="card card-primary card-outline" style="min-height: 650px;">
              <div class="card-header">
                <h3 class="card-title">Data <?= $title ?> </h3>
                <!-- <div class="card-tools">
                
                </div> -->
                <button type="button" class="btn btn-outline-primary float-right" data-toggle="modal" data-target="#modal-tambah">
                  <i class="fas fa-plus"></i> Tambah
                </button>
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
            
                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-carisertifikat">
                  Tampilkan Berdasarkan Sertifikat
                </button> -->
            </div>
                <table id="example2" class="table table-bordered table-hover mt-2">
                  <thead class="table-primary">
                  <tr>
                  <th class="col-1 text-center">No</th>
                    <th class="col-5 text-center">NAMA</th>
                    <th class=" text-center">NIP</th>
                    <!-- <th class=" text-center">JK</th> -->
                    <!-- <th class=" text-center col-md-5">Agama</th> -->
                    <!-- <th class=" text-center">Golongan</th> -->
                    <!-- <th class=" text-center">Jabatan</th> -->
                    <!-- <th class=" text-center">NIDN</th> -->
                    <!-- <th class=" text-center">Jenjang</th> -->
                    <th class="col-3 text-center">PRODI</th>
                    <!-- <th class=" text-center">Sertifikat</th> -->
                    <th class="col-2 text-center">AKSI</th>
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
                    <!-- <td><?= $value['JK'] ?></td> -->
                    <!-- <td><?= $value['Agama'] ?></td> -->
                    <!-- <td><?= $value['golongan'] ?></td> -->
                    <!-- <td><?= $value['Jab'] ?></td> -->
                    <!-- <td><?= $value['NIDN'] ?></td> -->
                    <!-- <td><?= $value['Jnj'] ?></td> -->
                    <td><?= $value['prodi'] ?></td>
                    <!-- <td class="text-center"> <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-tambahsertifikat<?= $value['Id_dosen']?>"><i class="fa fa-plus" ></i></button>
                        <a href="<?= base_url('') ?>/dosen/detailSertifikat/<?= $value['NIP']?>" class="btn btn-sm btn-info" ><i class="fa fa-eye" ></i></a>
                    </div>
                    </td> -->
                    <td class="text-center"> 
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-detail<?= $value['Id_dosen']?>"><i class="fas fa-eye"></i></button>
                        <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modal-ubah<?= $value['Id_dosen']?>"><i class="fas fa-edit"></i></button>
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

   <!-- Modal Cari Sertifikat -->
   <div class="modal fade" id="modal-carisertifikat">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Cari Sertifikat Dosen</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             
              <form method="get" action="">
                    <div class="row">
                      <div class="col-md-12">
                        <label>Filter Berdasarkan</label><br>
                        <select name="filter" id="filter" class="form-control">
                        <option value="" >Pilih Sertifikat</option>
                        <?php foreach($sertifikat as $data) { ?>
                            <option value="<?= $data['Id_sertifikat'] ?>" ><?= $data['Sertifikat'] ?></option>
                        <?php } ?>
                        </select>
                        <button type="submit" class="btn btn-primary mt-4 ">Cari</button>
                      </div>
                     
                    </div>
                  </form>
            </div>
           
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div> 


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
                    <label><input type="radio" name="JK" value="Laki-laki" checked> Laki-laki</label>
                    <label><input type="radio" name="JK"  value="Perempuan" > Perempuan</label>
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



      <?php foreach($dosen as $key => $value )  { ?>
       <!-- Modal Detail Dosen -->
   <div class="modal fade" id="modal-detail<?= $value['Id_dosen']?>">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Detail Data Dosen</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             <div class="row">
               <table class="table table-bordered">
                 <tr>
                   <td class="col-3">Nama</td>
                   <td><b><?= $value['Nama'] ?></b></td>
                 </tr>
                 <tr>
                   <td>NIP</td>
                   <td><b><?= $value['NIP'] ?></b></td>
                 </tr>
                 <tr>
                   <td>Jenis Kelamin</td>
                   <td><b><?= $value['JK'] ?></b></td>
                 </tr>
                 <tr>
                   <td>Tempat Lahir</td>
                   <td><b><?= $value['Tempat_lahir'] ?></b></td>
                 </tr>
                 <tr>
                   <td>Tanggal Lahir</td>
                   <td><b><?= $value['Tanggal_lahir'] ?></b></td>
                 </tr>
                 <tr>
                   <td>Agama</td>
                   <td><b><?= $value['Agama'] ?></b></td>
                 </tr>
                 <tr>
                   <td>Pendidikan</td>
                   <td><b><?= $value['Jnj'] ?></b></td>
                 </tr>
                 <tr>
                   <td>Golongan</td>
                   <td><b><?= $value['golongan'] ?></b></td>
                 </tr>
                 <tr>
                   <td>Jabatan</td>
                   <td><b><?= $value['Jab'] ?></b></td>
                 </tr>
                 <tr>
                   <td>NIDN</td>
                   <td><b><?= $value['NIDN'] ?></b></td>
                 </tr>
                 <tr>
                   <td>Prodi</td>
                   <td><b><?= $value['prodi'] ?></b></td>
                 </tr>
                 <!-- <tr>
                   <td>Nama</td>
                   <td><b><?= $value['Nama'] ?></b></td>
                 </tr> -->
               </table>
             </div>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div> 
      <?php } ?>


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
                    <label><input type="radio" name="JK" value="<?= $value['JK'] ?>" checked> <?= $value['JK']  ?></label>
                    <label><input type="radio" name="JK" value="L" > Laki-laki</label>
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


      <?php foreach($dosen as $key => $value )  { ?>
       <!-- Modal Tambah Sertifikat -->
   <div class="modal fade" id="modal-tambahsertifikat<?= $value['Id_dosen']?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data Sertifikat</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <?php echo form_open('dosen/tambahSertifikat') ?>
                  <div class="form-group ">
                    <label for="">Nama</label>
                    <input name="Nama" class="form-control" value="<?= $value['Nama'] ?>"  readonly>
                    <input type="hidden" name="Nama" class="form-control" value="<?= $value['NIP'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="Sertifikat">Sertifikat</label>
                    <select name="Id_sertifikat" id="Sertifikat" class="form-control "> 
                        <option value="" >Pilih Sertifikat</option>
                        <?php foreach($sertifikat as $data) { ?>
                            <option value="<?= $data['Id_sertifikat'] ?>" ><?= $data['Sertifikat'] ?></option>
                        <?php } ?>
                    </select>
                  </div>
                  <div class="form-group ">
                    <label for="">Nomor Sertifikat</label>
                    <input name="Nomor_sertifikat" class="form-control" id="" placeholder="Nomor Sertifikat" required>
                  </div>
                  <div class="form-group ">
                    <label for="">Keterangan</label>
                    <input name="Keterangan" class="form-control" id="" placeholder="Keterangan Sertifikat" >
                  </div>
                  <div class="form-group ">
                    <label for="">Berkas</label>
                    <input type="file" name="NIP" class="form-control" >
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

      <script>
        $(function(){
          // $.bootstrapGrowl("This is a test.");
            <?php if(session()->has("success")) { ?>
                $.bootstrapGrowl('<?= session("success") ?>',{
                    type: 'success',
                    delay: 4000,
                });
            <?php } ?>
            <?php if(session()->has("info")) { ?>
                $.bootstrapGrowl('<?= session("info") ?>',{
                    type: 'info',
                    delay: 4000,
                });
            <?php } ?>

            <?php if(session()->has("error")) { ?>
                $.bootstrapGrowl('<?= session("error") ?>',{
                    type: 'danger',
                    delay: 4000,
                });
            <?php } ?>

            <?php if(session()->has("warning")) { ?>
                $.bootstrapGrowl('<?= session("warning") ?>',{
                    type: 'warning',
                    delay: 4000,
                });
            <?php } ?>
        });
      </script>