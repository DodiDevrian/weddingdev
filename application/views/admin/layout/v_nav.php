  <body>
    <div class="wrapper">
      <!-- Sidebar -->
      <div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
              <a href="<?php echo base_url(); ?>admin123/tema" class="logo" style="color: white;">
                <img
                  src="<?php echo base_url(); ?>assets/images/logo.png"
                  class="navbar-brand"
                  height="20"
                /> &nbsp; Admin WeddingDev
              </a>
            <div class="nav-toggle">
              <button class="btn btn-toggle toggle-sidebar">
                <i class="gg-menu-right"></i>
              </button>
              <button class="btn btn-toggle sidenav-toggler">
                <i class="gg-menu-left"></i>
              </button>
            </div>
            <button class="topbar-toggler more">
              <i class="gg-more-vertical-alt"></i>
            </button>
          </div>
          <!-- End Logo Header -->
        </div>
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-item <?php echo menuAktif('tema') ?>">
                    <a href="<?php echo base_url(); ?>admin123/tema">
                    <i class="fas fa-layer-group"></i>
                    <p>Pilihan Tema</p>
                    </a>
                </li>
                <li class="nav-item <?php echo menuAktif('member') ?>">
                <a data-bs-toggle="collapse" href="#charts">
                  <i class="far fa-chart-bar"></i>
                  <p>Member</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="charts">
                  <ul class="nav nav-collapse">
                    <?php $reg=''; $vip=''; if ($this->uri->segment(3) == 'reguler') {
                      $reg = 'active';
                    } elseif ($this->uri->segment(3) == 'vip') {
                      $vip = 'active';
                    }?>
                    <li class="<?php echo $reg ?>">
                      <a href="<?php echo base_url(); ?>admin123/member/reguler">
                        <span class="sub-item">Reguler</span>
                      </a>
                    </li>
                    <li class="<?php echo $vip ?>">
                      <a href="<?php echo base_url(); ?>admin123/member/vip">
                        <span class="sub-item">VIP</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- End Sidebar -->