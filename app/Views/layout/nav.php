<button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="<?= base_url()?>/home" class="nav-link <?php $uri = service('uri'); if ($uri->getSegment(1) == "home") { echo "active"; } ?>">DASHBOARD</a>
          </li>
          <?php if (session()->get('Level') != 1) { ?>
              <li class="nav-item"><a href="<?= base_url('masuk')?>" class="nav-link active">Surat Masuk</a></li>
            <?php } ?>
          <?php if (session()->get('Level') != 2) { ?>
          <!-- <li class="nav-item">
            <a href="<?= base_url('kategori')?>" class="nav-link">Kategori</a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('department')?>" class="nav-link">Department</a>
          </li> -->
          <!-- <li class="nav-item">
            <a href="<?= base_url('dosen')?>" class="nav-link">MASTER DATA</a>
          </li> -->
          <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle <?php $uri = service('uri'); if ($uri->getSegment(1) == "dosen" ) {
                                                    echo "active";
                                                  } ?>">MASTER DATA</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li><a href="<?= base_url('dosen')?>" class="dropdown-item">DATA DOSEN</a></li>
              <li><a href="<?= base_url('tendik')?>" class="dropdown-item">DATA TENDIK</a></li>
            </ul>
          </li>
          <?php } ?>
          <?php if (session()->get('Level') != 2) { ?>
          <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">MASTER SURAT</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li><a href="<?= base_url('masuk')?>" class="dropdown-item">Surat Masuk</a></li>
              <li><a href="<?= base_url('tugas')?>" class="dropdown-item">Surat Tugas</a></li>
              <li><a href="<?= base_url('sk')?>" class="dropdown-item">Surat Keputusan</a></li>
              <li><a href="<?= base_url('skrektor')?>" class="dropdown-item">Surat Keputusan Rektor</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('user')?>" class="nav-link">Pengguna</a>
          </li>
          <?php } ?>
        </ul>
      </div>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
         
          <span class="badge badge-success navbar-badge"><?= session()->get('Nama') ?></span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">Data Profil</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <?= session()->get('Nama') ?>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <?= session()->get('Level') ?>
          </a>
         
          <div class="dropdown-divider"></div>
          <a href="<?= base_url('auth/logout')?>" class="dropdown-item dropdown-footer">Logout</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
      </ul>
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/">Default</a></li>
            <li><a href="../navbar-static-top/">Static top</a></li>
            <li class="active"><a href="./">Fixed top <span class="sr-only">(current)</span></a></li>
          </ul>
        </div>
      </div>
    </nav> -->