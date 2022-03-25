<button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="<?= base_url()?>/home" class="nav-link <?php $uri = service('uri'); if ($uri->getSegment(1) == "home") { echo "active"; } ?>">DASHBOARD</a>
          </li>
      
          <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle <?php $uri = service('uri'); if ($uri->getSegment(1) == "dosen" || $uri->getSegment(1) == "tendik") {
                                                    echo "active";
                                                  } ?>">MASTER DATA</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li><a href="<?= base_url('dosen')?>" class="dropdown-item">DATA DOSEN</a></li>
              <li><a href="<?= base_url('tendik')?>" class="dropdown-item">DATA TENDIK</a></li>
              <li><a href="<?= base_url('tendik')?>" class="dropdown-item">DATA MAHASISWA</a></li>
              <li><a href="<?= base_url('tendik')?>" class="dropdown-item">DATA ALUMNI</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle <?php $uri = service('uri'); if ($uri->getSegment(1) == "masuk" || $uri->getSegment(1) == "sk" || $uri->getSegment(1) == "sk_rektor") {
                                                    echo "active";
                                                  } ?>">MASTER SURAT</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li><a href="<?= base_url('masuk')?>" class="dropdown-item">SURAT MASUK</a></li>
              <li><a href="<?= base_url('masuk2')?>" class="dropdown-item">SURAT MASUK 2</a></li>
              <li><a href="<?= base_url('masuk')?>" class="dropdown-item">SURAT KELUAR</a></li>
              <li><a href="<?= base_url('tugas')?>" class="dropdown-item">SURAT TUGAS</a></li>
              <li><a href="<?= base_url('sk')?>" class="dropdown-item">SURAT KEPUTUSAN</a></li>
              <li><a href="<?= base_url('skrektor')?>" class="dropdown-item">SURAT KEPUTUSAN REKTOR</a></li>
            </ul>
          </li>
      
          <?php if(session()->get('Id_dep') == 1) {?>
          <li class="nav-item">
            <a href="<?= base_url('user')?>" class="nav-link">Pengguna</a>
          </li>
          <?php } ?>
        </ul>
      </div>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
      <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="20" height="20"
viewBox="0 0 172 172"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M86,9.40625c-30.97935,-0.0001 -58.90832,18.66137 -70.76362,47.28256c-11.8553,28.62119 -5.30222,61.56561 16.60354,83.47127c29.91179,29.91179 78.40837,29.91179 108.32016,0c29.91179,-29.91179 29.91179,-78.40837 0,-108.32016c-14.33275,-14.41105 -33.83515,-22.48914 -54.16008,-22.43367zM86,16.125c38.52901,0 69.875,31.34599 69.875,69.875c0.00971,19.14335 -7.85628,37.44767 -21.7513,50.61568v-0.99338c0,-26.53503 -21.58802,-48.12305 -48.12305,-48.12305c-26.53503,0 -48.12305,21.58802 -48.12305,48.12305v0.99469c-13.89583,-13.1681 -21.76234,-31.47299 -21.75261,-50.61699c0,-38.52901 31.34599,-69.875 69.875,-69.875zM86.15288,31.96327c-14.34315,0.00011 -25.97049,11.62758 -25.97046,25.97072c0.00004,14.34315 11.62744,25.97055 25.97059,25.97059c14.34315,0.00004 25.97061,-11.62731 25.97072,-25.97046c-0.01692,-14.33629 -11.63456,-25.95394 -25.97085,-25.97086zM85.3524,38.69908c5.24026,-0.21813 10.34268,1.71115 14.12767,5.34183c3.78499,3.63067 5.92486,8.64842 5.92491,13.89322c-0.01192,10.6277 -8.6244,19.24018 -19.2521,19.2521c-10.47639,-0.00018 -19.02957,-8.37746 -19.24741,-18.85158c-0.21785,-10.47413 7.97961,-19.19979 18.44694,-19.63557zM87.20924,94.23506c22.38675,0.65375 40.19567,18.99028 40.19571,41.38658v6.6282c-24.61372,18.16689 -58.19487,18.16689 -82.80859,0v-6.6282c0.00002,-11.19067 4.52986,-21.90479 12.55753,-29.70144c8.02767,-7.79665 18.86945,-12.0118 30.05536,-11.68514z"></path></g></g></svg> <?= session()->get('Nama') ?></a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li><a href="<?= base_url('masuk')?>" class="dropdown-item">Pengaturan Akun</a></li>
              <li><a href="<?= base_url('auth/logout')?>" class="dropdown-item">Keluar</a></li>
            </ul>
          </li>
        <!-- Messages Dropdown Menu -->
       
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