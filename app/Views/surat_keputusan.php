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
            </div>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th class="col-1 text-center">No</th>
                    <th class="col-4 text-center">Nomor Sk</th>
                    <th class="col-1 text-center">Tanggal SK</th>
                    <th class="col-5 text-center">Tentang</th>
                    <th class="col-5 text-center">Tanggal</th>
                    <th class="col-2 text-center">Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $no = 1;
                    
                    foreach($sk as $key => $value )  { ?>
                  <tr>
                    
                    <td class="text-center"><?= $no++ ?></td>
                    <td><?= $value['Nomor_sk'] ?></td>
                    <td><?= $value['Tanggal_sk'] ?></td>
                    <td><?= $value['Tentang'] ?></td>
                    <td><?= $value['Tanggal'] ?></td>
                    <td class="text-center"> 
                    <button type="button" class="btn btn-outline-primary">Lihat</button>
                        <a  class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modal-ubah<?= $value['Id_sk']?>"">Ubah</a>
                        <button  class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-hapus<?= $value['Id_sk']?>">Hapus</button>
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
           