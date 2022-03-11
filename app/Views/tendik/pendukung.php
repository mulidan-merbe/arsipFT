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
        <a type="button2" class="btn btn-outline-primary  " href="<?= base_url('tendik/pns') ?>">PNS</a>
        <a type="button2" class="btn btn-outline-primary " href="<?= base_url('tendik/honorer') ?>">Honorer</a>
        <a type="button2" class="btn btn-primary <?php $uri = service('uri'); if ($uri->getSegment(1) == "tendik") {
                                                    echo "active";
                                                  } ?>" href="<?= base_url('tendik/pendukung') ?>">Pendukung</a>
     </div>
      <div class="row mt-2">
        <div class="col-md-12">
        <div class="card card-primary card-outline" style="min-height: 650px;">
              <div class="card-header">
                <h3 class="card-title">Data <?= $title ?> </h3>
                
                <button type="button" class="btn btn-outline-primary float-right" data-toggle="modal" data-target="#modal-tambah">
                    <i class="fas fa-plus"></i> Tambah
                </button>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
              <div class="">

            </div>
                <table id="example2" class="table table-bordered table-hover mt-2">
                  <thead class="table-primary">
                  <tr>
                    <th class="col-1 text-center">No</th>
                    <th class="col-3 text-center">NAMA</th>
                    <th class="text-center">JENIS KELAMIN</th>
                    <th class="text-center">JENJANG PENDIDIKAN</th>
                    <th class=" text-center">PENEMPATAN</th>
                    <th class="text-center">AKSI</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  $no = 1;
                    foreach($pendukung as $key => $value ){ ?>
                     <tr>
                        <td class="text-center"><?= $no++ ?>.</td>
                        <td><?= $value['Nama'] ?></td>
                        <td><?= $value['JK'] ?></td>
                        <td><?= $value['Jnj_pendidikan'] ?></td>
                        <td><?= $value['Penempatan'] ?></td>
                        <td class="text-center">
                            <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modal-edit<?= $value['Id_pendukung']?>"><i class="fa fa-edit" ></i></button>
                                <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-hapus<?= $value['Id_pendukung']?>"><i class="fa fa-trash" ></i></button>
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
              <h4 class="modal-title">Tambah Data Pendukung</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <?php echo form_open('tendik/simpan_tendik_pendukung') ?>
             
                  <div class="form-group">
                    <label for="NomorSK">Nama</label>
                    <input  name="Nama" class="form-control"  placeholder="Nama" required>
                  </div>
                  <div class="form-group">
                    <label for="">Jenis Kelamin</label>
                    <select name="JK" id="" class="form-control "> 
                        <option value="" >Pilih Jenis Kelamin</option>
                        <option value="Laki-Laki" >Laki-Laki</option>
                        <option value="Perempuan" >Perempuan</option>
                       
                    </select>
                  </div>
                  <div class="form-group ">
                    <label for="">Jenjang Pendidikan</label>
                    <select name="Jnj_pendidikan" id="" class="form-control "> 
                        <option value="" >Pilih Pendidikan</option>
                        <option value="SD" >SD</option>
                        <option value="SMP" >SMP</option>
                        <option value="SMA/SMK" >SMA/SMK</option>
                        <option value="S1" >S1</option>
                        <option value="S2" >S2</option>
                        <option value="S3" >S3</option>
                       
                    </select>
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


      <!-- Modal Ubah -->
      <?php foreach($pendukung as $key => $value) { ?>
    <div class="modal fade" id="modal-edit<?= $value['Id_pendukung'] ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Ubah Data Pendukung</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <?php echo form_open('tendik/ubah_tendik_pendukung') ?>
                <input type="hidden"  name="Id_pendukung" class="form-control"  value="<?= $value['Id_pendukung'] ?>">
                  <div class="form-group">
                    <label for="NomorSK">Nama</label>
                    <input  name="Nama" class="form-control"  value="<?= $value['Nama'] ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="">Jenis Kelamin</label>
                    <select name="JK" id="" class="form-control "> 
                        <option value="<?= $value['JK'] ?>" ><?= $value['JK'] ?></option>
                        <option value="Laki-Laki" >Laki-Laki</option>
                        <option value="Perempuan" >Perempuan</option>
                       
                    </select>
                  </div>
                  <div class="form-group ">
                    <label for="">Jenjang Pendidikan</label>
                    <select name="Jnj_pendidikan" id="" class="form-control "> 
                        <option value="<?= $value['Jnj_pendidikan'] ?>" ><?= $value['Jnj_pendidikan'] ?></option>
                        <option value="SD" >SD</option>
                        <option value="SMP" >SMP</option>
                        <option value="SMA/SMK" >SMA/SMK</option>
                        <option value="S1" >S1</option>
                        <option value="S2" >S2</option>
                        <option value="S3" >S3</option>
                       
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="NomorSK">Penempatan</label>
                    <input name="Penempatan" class="form-control"  value="<?= $value['Penempatan'] ?>" required>
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
        <?php foreach($pendukung as $key => $value )  { ?>
      <div class="modal fade" id="modal-hapus<?= $value['Id_pendukung']?>">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Hapus Data Pendukung</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Apakah Anda Ingin Menghapus Data?
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
              <a href="<?= base_url('tendik/hapusPendukung/'. $value['Id_pendukung']) ?>" type="submit" class="btn btn-primary">Hapus</a>
            </div>
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

