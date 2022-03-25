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
      <div class="card card-primary card-outline" style="min-height: 650px;">
              <div class="card-header">
                <h3 class="card-title">Data <?= $title ?></h3>
                <a href="<?= base_url() ?>/sk/tambah" class="btn btn-outline-primary float-right">
                 <i class="fas fa-plus"></i> Tambah
                                                </a>
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
            </div>
                <table id="example1" class="table table-bordered table-striped">
                  <thead class="table-primary">
                  <tr>
                    <th class="col-1 text-center">No</th>
                    <th class="col-4 text-center">NOMOR SK</th>
                    <th class="col-5 text-center">TENTANG</th>
                    <th class="col-1 text-center">TANGGAL SK</th>
                    <!-- <th class="col-5 text-center">BERKAS</th> -->
                    <th class="col-2 text-center">AKSI</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $no = 1;
                    
                    foreach($sk as $key => $value )  { ?>
                  <tr>
                    
                    <td class="text-center"><?= $no++ ?></td>
                    <td><?= $value['Nomor_sk'] ?></td>
                    <td><?= $value['Tentang'] ?></td>
                    <td><?= $value['Tanggal_sk'] ?></td>
                    <td class="text-center"> 
                      <div class="btn-group">
                          <!-- <a class="btn btn-sm btn-info"  onclick=" window.open('<?= base_url('') ?>/public/file/<?= $value['Berkas'] ?>')"><img width="20" src="https://img.icons8.com/external-kiranshastry-lineal-kiranshastry/64/000000/external-file-multimedia-kiranshastry-lineal-kiranshastry-2.png"/></a> -->
                          <a class="btn btn-sm btn-info"  onclick=" window.open('<?= base_url('') ?>/public/berkas_sk/<?= $value['Berkas'] ?>')"><i class="fas fa-file"></i></a>
                          <!-- <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modal-ubah<?= $value['Id_sk']?>"><i class="fas fa-file"></i></button> -->
                          <a href="<?= base_url() ?>/sk/ubah/<?= $value['Id_sk']?>"  class="btn btn-sm btn-warning" ><i class="fas fa-edit"></i></a>
                          <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-hapus<?= $value['Id_sk']?>"><i class="fa fa-trash" ></i></button>
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
              <h4 class="modal-title">Tambah Surat Keputusan</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <?php echo form_open('sk/tambah') ?>
              <div class="form-group">
                    <label for="NomorSK">Nomor SK</label>
                    <input name="Nomor_sk" class="form-control" id="NomorSK" placeholder="Nomor SK" required>
                  </div>
                  <div class="form-group">
                    <label for="NomorSK">Tanggal SK</label>
                    <input type="date" name="Tanggal_sk" class="form-control" id="inputDate" placeholder="Tanggal SK" required>
                  </div>
                  <div class="form-group">
                    <label for="NomorSK">Tentang</label>
                    <textarea name="Tentang" class="form-control" id="" cols="30" rows="10"></textarea>
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
       <?php foreach($sk as $key => $value )  { ?>
   <div class="modal fade" id="modal-ubah<?= $value['Id_sk']?>">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Surat Keputusan</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <?php echo form_open('sk/ubah/'.$value['Id_sk']) ?>
              <div class="form-group">
                    <label for="NomorSK">Nomor SK</label>
                    <input name="Nomor_sk" class="form-control" id="NomorSK" value="<?= $value['Nomor_sk'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="NomorSK">Tanggal SK</label>
                    <input type="date" name="Tanggal_sk" class="form-control" id="inputDate" value="<?= $value['Tanggal_sk'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="NomorSK">Tentang</label>
                    <textarea name="Tentang" class="form-control" id="" cols="30" rows="10"><?= $value['Tentang'] ?></textarea>
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
        <?php foreach($sk as $key => $value )  { ?>
      <div class="modal fade" id="modal-hapus<?= $value['Id_sk']?>">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Hapus Surat Keputusan</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Apakah Anda Ingin Menghapus Data?
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
              <a href="<?= base_url('sk/hapus/'. $value['Id_sk']) ?>" type="submit" class="btn btn-primary">Hapus</a>
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