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
        <div class="card card-primary" style="min-height: 650px;">
              <div class="card-header">
                
                <h3 class="card-title">Data Berdasarkan Sertifikat <span class="badge badge-success"><?= $title ?></span>
                
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
     