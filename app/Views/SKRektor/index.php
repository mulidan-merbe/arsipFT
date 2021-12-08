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
                    <th class="col-4 text-center">Nomor Surat</th>
                    <th class="col-5 text-center">Tentang</th>
                    <th class="col-5 text-center">Berkas</th>
                    <th class="col-5 text-center">Anggota</th>
                    <th class="col-2 text-center">Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $no = 1;
                    
                    foreach($skrektor as $key => $value )  { ?>
                  <tr>
                    
                    <td class="text-center"><?= $no++ ?></td>
                    <td><?= $value['Nomor_surat'] ?></td>
                    <td><?= $value['Tentang'] ?></td>
                    <td><?= $value['Berkas'] ?></td>
                    <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-tambah-Anggota<?= $value['Id']?>"><i class="fa fa-plus" ></i></button>
                        <a class="btn btn-sm btn-default" href="<?= base_url('skrektor/detail/'.$value['Id'])?>">Lihat</a>
                      </div></td>
                    <!-- <td><button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modal-lihat<?= $value['Id']?>"><i class="fa fa-trash" ></i></button></td> -->
                    <td class="text-center"> 
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modal-ubah<?= $value['Id']?>"><i class="fa fa-trash" ></i></button>
                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-hapus<?= $value['Id']?>"><i class="fa fa-trash" ></i></button>
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
     
   <!-- Modal Lihat -->
   <?php foreach($skrektor as $key => $value )  { ?>
   <div class="modal fade" id="modal-lihat<?= $value['Id']?>">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Ubah Surat Keputusan Rektor</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th class="col-1 text-center">No</th>
                    <th class="col-4 text-center">Status</th>
                    <th class="col-5 text-center">Nama</th>
                  </tr>
                  </thead>
                  <tbody>
                 
                </tbody>
</table>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div> 
      <?php } ?>

<!-- Modal Tambah -->
<div class="modal fade" id="modal-tambah">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Surat Keputusan Rektor</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <?php echo form_open('skrektor/tambah') ?>
             
                  <div class="form-group">
                    <label for="NomorSK">Nomor Surat</label>
                    <input  name="Nomor_surat" class="form-control" placeholder="Nomor Surat" required>
                  </div>
                  <div class="form-group">
                    <label for="NomorSK">Tentang</label>
                    <textarea name="Tentang" class="form-control" id="" cols="30" rows="10" ></textarea>
                  </div>
                  <div class="form-group">
                    <label for="NomorSK">Berkas</label>
                    <input type="text" name="Berkas" class="form-control" required>
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


      <!-- Modal Tambah Anggota  -->
      <?php foreach($skrektor as $key => $value )  { ?>
<div class="modal fade" id="modal-tambah-Anggota<?= $value['Id']?>">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Surat Keputusan Rektor</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <?php echo form_open('skrektor/tambah') ?>
          
                                <blockquote>
                                  <p><b>Keterangan!!</b></p>
                                  <small><cite title="Source Title">Inputan Yang Ditanda Bintang Merah (<span style="color: red;">*</span>) Harus Di Isi !!</cite></small>
                                </blockquote>

                                <br>
                                  <table class="table table-bordered" id="tableLoop">
                                      <thead>
                                          <tr>
                                              <th class="text-center">#</th>
                                              <th>Status</th>
                                              <th>Nama</th>
                                              <th><button class="btn btn-success btn-block" id="BarisBaru"><i class="fa fa-plus"></i> Baris Baru</button></th>
                                          </tr>
                                      </thead>
                                      <tbody></tbody>
                                      
                                  </table>
                              </div>
                              <div class="box-footer">
                                  <div class="form-group text-right">
                                      <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Simpan</button>
                                      <button type="reset" class="btn btn-default">Batal</button>
                                  </div>
            <?php echo form_close() ?>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div> 
      <?php } ?>

     
       <!-- Modal Ubah -->
       <?php foreach($skrektor as $key => $value )  { ?>
   <div class="modal fade" id="modal-ubah<?= $value['Id']?>">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Ubah Surat Keputusan Rektor</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <?php echo form_open('skrektor/ubah/'.$value['Id'] ) ?>
              <div class="form-group">
                    <label for="NomorSK">Nomor Surat</label>
                    <input  name="Nomor_surat" class="form-control" value="<?= $value['Nomor_surat'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="NomorSK">Tentang</label>
                    <textarea name="Tentang" class="form-control" id="" cols="30" rows="10"><?= $value['Tentang'] ?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="NomorSK">Berkas</label>
                    <input type="text" name="Berkas" class="form-control" value="<?= $value['Berkas'] ?>">
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