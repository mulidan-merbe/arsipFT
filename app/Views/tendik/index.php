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
        <a type="button2" class="btn btn-outline-primary" href="<?= base_url('tendik/pns') ?>">PNS</a>
        <a type="button2" class="btn btn-outline-primary" href="<?= base_url('tendik/honorer') ?>">Honorer</a>
        <a type="button2" class="btn btn-outline-primary" href="<?= base_url('tendik/pendukung') ?>">Pendukung</a>
     </div>
      <div class="row mt-2">
        <div class="col-md-12">
        <div class="card card-primary card-outline" style="min-height: 650px;">
              <div class="card-header">
                <h3 class="card-title">Data <?= $title ?> </h3>
                <!-- <div class="card-tools">
                
                </div> -->
              </div>
              <!-- /.card-header -->
              
              <div class="card-body">
                <div class="row">
                  <div class="col-md-5">
                  <b>Jumlah Tenaga Pendidikan Fakultas Teknik </b>
                    <table class="table table-bordered mt-2">
                    <thead class="table-primary">
                      <tr>
                        <th class="col-1 text-center">No</th>
                        <th class="col-5 text-center">TENAGA PENDIDIKAN</th>
                        <th class="col-1 text-center">JUMLAH</th>
                      </tr>
                      </thead>
                      <tbody>   
                      <tr>
                        <td class="text-center">1.</td>
                        <td>PNS</td>
                        <td class="text-center"> <a href="<?= base_url('') ?>/tendik/pns"><?= $pns; ?></a></td>
                      </tr>
                      <tr>
                        <td class="text-center">2.</td>
                        <td>HONORER</td>
                        <td class="text-center"> <a href="<?= base_url('') ?>/tendik/honorer"><?= $honorer; ?></a></td>
                      </tr>
                      <tr>
                        <td class="text-center">3.</td>
                        <td>PENDUKUNG</td>
                        <td class="text-center"> <a href="<?= base_url('') ?>/tendik/pendukung"><?= $pendukung; ?></a></td>
                      </tr>
                      <tr>
                        <td class=" text-right" colspan="2"><b><i>TOTAL</i></b></td>
                        <td class="text-center"><b><?= $jumlah; ?></b></td>
                      </tr>
                  
                        </table>
                  </div>
                  <div class="col-md-4 offset-md-2">
                  <canvas id="myChart" class="mt-2" width="500" height="450"></canvas>     
                  
                </div>
                  </div>
                </div>
                     
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
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
  new Chart(document.getElementById("myChart"), {
    type: 'pie',
    data: {
      labels: ["PNS", "HONORER", "PENDUKUNG"],
      datasets: [{
        label: "Population (millions)",
        backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
        data: [<?php echo $pns ?>,<?php echo $honorer ?>,<?php echo $pendukung ?>]
      }]
    },
    options: {
      title: {
        display: true,
        text: 'Predicted world population (millions) in 2050'
      }
    }
});
</script>