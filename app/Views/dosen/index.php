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
        <div class="col-md-12">
        <div class="card card-primary" style="min-height: 650px;">
              <div class="card-header">
                <h3 class="card-title">Data <?= $title ?> </h3>
                <!-- <div class="card-tools">
                
                </div> -->
              </div>
              <!-- /.card-header -->
              <?php foreach($prodi  as $key => $value){
                $nama[] = $value['prodi'];
                }
              // echo json_encode($nama);
              ?>
             <?php foreach($count  as $key => $value){
                $totaldosen[] = $value['total'];
              }
            // echo json_encode($nama);
            ?>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-5">
                  <b>Jumlah Dosen Fakultas Teknik </b>
                    <table class="table table-bordered mt-2">
                    <thead>
                      <tr>
                        <th class="col-1 text-center">No</th>
                        <th class="col-5 text-center">Program Studi</th>
                        <th class="col-1 text-center">Jumlah</th>
                      </tr>
                      </thead>
                      <tbody>
                     
                       <?php  $no = 1; foreach($count  as $key => $value){ ?>
                      <tr>
                        <td class="text-center"><?= $no++ ?>.</td>
                        <td><?= $value['prodi'] ?></td>
                        <td class="text-center"> <a href="<?= base_url('') ?>/dosen/lihat/<?= $value['Id_prodi'] ?>"><?= $value['total'] ?></a></td>
                      </tr>
                      <?php } ?>
                        </table>
                  </div>
                  <div class="col-md-7">
                  <div class="row">
                    <div class="col-4 offset-4">
                        <div class="small-box bg-info">
                        <div class="inner">
                          <h3>166</h3>

                          <p>Total Dosen</p>
                        </div>
                        <div class="icon">
                          <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="<?= base_url('dosen/data') ?>" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
                  </div>
                  <canvas id="myChart" class="mt-2"  height="200"></canvas>     
                  
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
  <script src="<?= base_url() ?>/template/plugins/chart.js/Chart.min.js"></script>
  <script>
     
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: <?php echo json_encode($nama); ?>,
        datasets: [{
            label: 'Jumlah Dosen',
            data: <?php echo json_encode($totaldosen); ?>,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 99, 132, 0.2)',
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 99, 132, 1)',
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        },
        indexAxis: 'y',
    }
});
</script>