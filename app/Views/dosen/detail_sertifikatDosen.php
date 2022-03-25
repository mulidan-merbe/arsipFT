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
        <a type="button2" class="btn btn-outline-primary " href="<?= base_url('dosen') ?>">Profil</a>
        <a type="button2" class="btn btn-primary <?php $uri = service('uri'); if ($uri->getSegment(2) == "detailSertifikat" || $uri->getSegment(2) == "lihatSertifikat") {
                                                    echo "active";
                                                  } ?>" href="<?= base_url('dosen/sertifikat') ?>">Sertifikat</a>
     </div>
      <div class="row mt-2">
        <div class="col-md-12">
        <div class="card card-primary card-outline" style="min-height: 650px;">
              <div class="card-header">
                <h3 class="card-title">Detail <?= $title ?>
               
            </h3>
            <a href="<?= base_url() ?>/dosen/dataSertifikat" class="btn btn-sm btn-warning float-right"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
            <!-- <button  type="button" class="btn btn-sm btn-warning float-right" onclick="javascript:history.back()"><i class="fa fa-chevron-left" aria-hidden="true"></i></button> -->
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
              <?php if (session()->getFlashdata('pesangagal')){
                echo '<div class="alert alert-danger alert-dismissible">';
                echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h5><i class="icon fas fa-check"></i> Sukses!</h5>';
                echo session()->getFlashdata('pesangagal');
                echo '</div>';
            } ?>
             <?php if($validation->getError('Berkas')) {?>
                        <div id="validationServer03Feedback" class="invalid-feedback">
                        <?= $error = $validation->getError('Berkas'); ?>
                        </div>  
                     <?php }?>
                <table id="example1" class="table table-bordered table-striped">
                  <thead class="table-primary">
                  <tr>
                  <th class="col-1 text-center">No</th>
                    <th class="col-4 text-center">Nama</th>
                    <!-- <th class=" text-center">NIP</th> -->
                    <th class="col-2 text-center">Sertifikat</th>
                    <th class=" text-center">Nomor Sertifikat</th>
                    <th class=" text-center col-md-5">Keterangan</th>
                    <!-- <th class=" text-center">Berkas</th> -->
                    <th class="col-1 text-center">Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $no = 1;
                    
                    foreach($detailSertifikat as $key => $value )  { ?>
                  <tr>
                    <td class="text-center"><?= $no++ ?>.</td>
                    <td><?= $value['Nama'] ?></td>
                    <!-- <td><?= $value['NIP'] ?></td> -->
                    <td><?= $value['Sertifikat'] ?></td>
                    <td><?= $value['Nomor_sertifikat'] ?></td>
                    <td><?= $value['Keterangan'] ?></td>
                    <!-- <td class=" text-center"><a class="btn btn-sm btn-info" href="<?= base_url('') ?>/file/<?= $value['Berkas'] ?>"><img width="20" src="https://img.icons8.com/external-kiranshastry-lineal-kiranshastry/64/000000/external-file-interface-kiranshastry-lineal-kiranshastry-2.png"/></a></td> -->
                    <td class="col-1 text-center"> 
                    <div class="btn-group">
                        <a class="btn btn-sm btn-info"  onclick=" window.open('<?= base_url('') ?>/public/file/<?= $value['Berkas'] ?>')"><i class="fa fa-file" ></i></a>
                        <?php if(session()->get('Id_dep') == 1) {?>
                        <a class="btn btn-sm btn-warning" href="<?= base_url('dosen/ubahSertifikat/'. $value['Id_serdos']) ?>"><i class="fa fa-edit"></i></a>
                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-hapus<?= $value['Id_serdos']?>"><i class="fa fa-trash" ></i></button>
                        <?php } ?>
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

        <!-- Modal Hapus -->
        <?php foreach($detailSertifikat as $key => $value )  { ?>
      <div class="modal fade" id="modal-hapus<?= $value['Id_serdos'] ?>">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Hapus Pengguna</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Apakah Anda Ingin Menghapus Data?
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
              <a href="<?= base_url('dosen/hapusSertifikat/'. $value['Id_serdos']) ?>" type="submit" class="btn btn-primary">Hapus</a>
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