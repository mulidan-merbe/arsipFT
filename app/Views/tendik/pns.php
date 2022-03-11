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
        <a type="button2" class="btn btn-primary  <?php $uri = service('uri'); if ($uri->getSegment(1) == "tendik") {
                                                    echo "active";
                                                  } ?>" href="<?= base_url('tendik') ?>">PNS</a>
        <a type="button2" class="btn btn-outline-primary" href="<?= base_url('tendik/honorer') ?>">Honorer</a>
        <a type="button2" class="btn btn-outline-primary" href="<?= base_url('tendik/pendukung') ?>">Pendukung</a>
     </div>
      <div class="row mt-2">
        <div class="col-md-12">
        <div class="card card-primary card-outline" style="min-height: 650px;">
              <div class="card-header">
                <h3 class="card-title">Data <?= $title ?> </h3>
                <a href="<?= base_url() ?>/tendik/tendik_pns" class="btn btn-outline-primary float-right">
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
                <table id="example2" class="table table-bordered table-hover mt-2">
                  <thead class="table-primary">
                  <tr>
                  <th class="text-center">No</th>
                    <th class="text-center">NAMA</th>
                    <th class=" text-center">NIP</th>
                    <th class=" text-center">JK</th>
                    <th class=" text-center">JNJ PEND</th>
                    <th class=" text-center">PANGKAT GOL/RUANG</th>
                    <th class=" text-center">JABATAN</th>
                    <th class=" text-center">KETERANGAN</th>
                    <th class="text-center">AKSI</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no = 1;
                    foreach($pns as $key => $value ){ ?>
                     <tr>
                        <td class="text-center"><?= $no++ ?>.</td>
                        <td><?= $value['Nama'] ?></td>
                        <td><?= $value['NIP'] ?></td>
                        <td><?= $value['JK'] ?></td>
                        <td><?= $value['Jnj_pendidikan'] ?></td>
                        <td><?= $value['Pangkat'] ?>/<?= $value['golongan'] ?></td>
                        <td><?= $value['Jabatan'] ?></td>
                        <td><?= $value['Keterangan'] ?></td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-sm btn-warning" href="<?= base_url('tendik/ubahtendik_pns/'. $value['Id_pns']) ?>"><i class="fa fa-edit"></i></a>
                                <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-hapus<?= $value['Id_pns']?>"><i class="fa fa-trash" ></i></button>
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


   
        <!-- Modal Hapus -->
        <?php foreach($pns as $key => $value )  { ?>
      <div class="modal fade" id="modal-hapus<?= $value['Id_pns']?>">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Hapus Tendik PNS</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Apakah Anda Ingin Menghapus Data?
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
              <a href="<?= base_url('tendik/hapusPns/'. $value['Id_pns']) ?>" type="submit" class="btn btn-primary">Hapus</a>
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