<button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="<?= base_url()?>/home" class="nav-link active">Home</a>
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
          <li class="nav-item">
            <a href="<?= base_url('dosen')?>" class="nav-link">MASTER DATA</a>
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