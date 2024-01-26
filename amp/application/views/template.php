<?php $babi = $this->uri->segment(1);?>
<?PHP $anjing = $this->uri->segment(2);?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Aplikasi Monitoring Pajak Daerah</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <!-- =============================================== -->
  <header class="main-header">
    <a href="<?=base_url()?>" class="logo">
      <span class="logo-mini"><b>MP</b></span>
      <span class="logo-lg">Monitoring <b>Pajak</b></span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- =============================================== -->

  <!-- =============================================== -->
  <?php if($this->fungsi->user_login()->level == 1) { ?>
  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=base_url()?>uploads/tabalong.png" class="light-logo" alt="logo" width="50%">
        </div>
        <div class="pull-left info" style="padding-left: 0px;padding-top: 0px;">
          <p style="margin-bottom: 0;" align="center">BAPENDA</p>
          <p>Badan Pendapatan Daerah</p>
        </div>
      </div>
      <!-- sidebar menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MONITORING</li>
        
        <!-- MENU HOME -->
        <li class="treeview <?=$babi == "dashboard"? "active" : "";?>" onclick="document.location.href = '<?=base_url()?>dashboard'">
          <a href="<?=site_url('dashboard')?>">
            <i class="fa fa-home"></i> <span>Home</span>
          </a>
        </li>
        <!-- MENU HOME -->

        <!-- MENU WAJIB PAJAK -->
        <li id="menuWP" class="treeview ">
          <a href="#">
            <i class="fa fa-users"></i> <span>Wajib Pajak</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?=$babi == 'wp' ? 'class="active"' : '' ?>><a href="<?=site_url('wp')?>"><i class="fa fa-dot-circle-o"></i> Data Wajib Pajak</a></li>
            <li <?=$babi == 'tipe_wp' ? 'class="active"' : '' ?>><a href="<?=site_url('tipe_wp')?>"><i class="fa fa-dot-circle-o"></i> Jenis Wajib Pajak</a></li>
          </ul>
        </li>
        <!-- MENU WAJIB PAJAK -->
        
        <!-- MENU PENGAWAS -->
        <li class="treeview <?=$babi == 'pws_hotel' || $babi == 'pws_hiburan' || $babi == 'pws_restoran' || $babi == 'pws_reklame' || $babi == 'pws_penerangan_jalan'|| $babi == 'pws_parkir' || $babi == 'pws_sarang_burung_walet' || $babi == 'pws_air_tanah' || $babi == 'pws_pbb' ? 'active' : '' ?>">
          <a href="#">
            <i class="fa fa-search"></i> <span>Pengawasan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?=$babi == 'pws_hotel' ? 'class="active"' : '' ?>><a href="<?=site_url('pws_hotel')?>"><i class="fa fa-dot-circle-o"></i> Pajak Hotel</a></li>
            <li <?=$babi == 'pws_restoran' ? 'class="active"' : '' ?>><a href="<?=site_url('pws_restoran')?>"><i class="fa fa-dot-circle-o"></i> Pajak Restoran</a></li>
            <li <?=$babi == 'pws_hiburan' ? 'class="active"' : '' ?>><a href="<?=site_url('pws_hiburan')?>"><i class="fa fa-dot-circle-o"></i> Pajak Hiburan</a></li>
            <li <?=$babi == 'pws_reklame' ? 'class="active"' : '' ?>><a href="<?=site_url('pws_reklame')?>"><i class="fa fa-dot-circle-o"></i> Pajak Reklame</a></li>
            <li <?=$babi == 'pws_penerangan_jalan' ? 'class="active"' : '' ?>><a href="<?=site_url('pws_penerangan_jalan')?>"><i class="fa fa-dot-circle-o"></i> Pajak Penerangan jalan</a></li>
            <li <?=$babi == 'pws_parkir' ? 'class="active"' : '' ?>><a href="<?=site_url('pws_parkir')?>"><i class="fa fa-dot-circle-o"></i> Pajak Parkir</a></li>
            <li <?=$babi == 'pws_sarang_burung_walet' ? 'class="active"' : '' ?>><a href="<?=site_url('pws_sarang_burung_walet')?>"><i class="fa fa-dot-circle-o"></i> Pajak Sarang burung walet</a></li>
            <li <?=$babi == 'pws_air_tanah' ? 'class="active"' : '' ?>><a href="<?=site_url('pws_air_tanah')?>"><i class="fa fa-dot-circle-o"></i> Pajak Air Tanah</a></li>
            <li <?=$babi == 'pws_pbb' ? 'class="active"' : '' ?>><a href="<?=site_url('pws_pbb')?>"><i class="fa fa-dot-circle-o"></i> PBB</a></li>
          </ul>
        </li>
        <!-- MENU PEMERIKSA -->

        <li class="treeview <?=$babi == 'prs_hotel' || $babi == 'prs_restoran'|| $babi == 'prs_hiburan' || $babi == 'prs_reklame' || $babi == 'prs_penerangan_jalan' || $babi == 'prs_parkir' || $babi == 'prs_sarang_burung_walet' || $babi == 'prs_air_tanah' || $babi == 'prs_pbb' ? 'active' : '' ?>">
          <a href="#">
            <i class="fa fa-pencil-square-o"></i> <span>Pemeriksaan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?=$babi == 'prs_hotel' ? 'class="active"' : '' ?>><a href="<?=site_url('prs_hotel')?>"><i class="fa fa-dot-circle-o"></i> Pajak Hotel</a></li>
            <li <?=$babi == 'prs_restoran' ? 'class="active"' : '' ?>><a href="<?=site_url('prs_restoran')?>"><i class="fa fa-dot-circle-o"></i> Pajak Restoran</a></li>
            <li <?=$babi == 'prs_hiburan' ? 'class="active"' : '' ?>><a href="<?=site_url('prs_hiburan')?>"><i class="fa fa-dot-circle-o"></i> Pajak Hiburan</a></li>
            <li <?=$babi == 'prs_reklame' ? 'class="active"' : '' ?>><a href="<?=site_url('prs_reklame')?>"><i class="fa fa-dot-circle-o"></i> Pajak Raklame</a></li>
            <li <?=$babi == 'prs_penerangan_jalan' ? 'class="active"' : '' ?>><a href="<?=site_url('prs_penerangan_jalan')?>"><i class="fa fa-dot-circle-o"></i> Pajak Penerangan jalan</a></li>
            <li <?=$babi == 'prs_parkir' ? 'class="active"' : '' ?>><a href="<?=site_url('prs_parkir')?>"><i class="fa fa-dot-circle-o"></i> Pajak Pakir</a></li>
            <li <?=$babi == 'prs_sarang_burung_walet' ? 'class="active"' : '' ?>><a href="<?=site_url('prs_sarang_burung_walet')?>"><i class="fa fa-dot-circle-o"></i> Pajak Sarang burung walet</a></li>
            <li <?=$babi == 'prs_air_tanah' ? 'class="active"' : '' ?>><a href="<?=site_url('prs_air_tanah')?>"><i class="fa fa-dot-circle-o"></i> Pajak Air tanah</a></li>
            <li <?=$babi == 'prs_pbb' ? 'class="active"' : '' ?>><a href="<?=site_url('prs_pbb')?>"><i class="fa fa-dot-circle-o"></i> PBB</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-print"></i> <span>Laporan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li> <a href="<?=site_url('prs_hotel/laporan')?>"><i class="fa fa-dot-circle-o"></i>Pajak Hotel</a></li>
            <li> <a href="<?=site_url('prs_restoran/laporan')?>"><i class="fa fa-dot-circle-o"></i> Pajak Restoran</a></li>
            <li> <a href="<?=site_url('prs_hiburan/laporan')?>"><i class="fa fa-dot-circle-o"></i> Pajak Hiburan</a></li>
            <li> <a href="<?=site_url('prs_reklame/laporan')?>"><i class="fa fa-dot-circle-o"></i> Pajak Raklame</a></li>
            <li> <a href="<?=site_url('prs_penerangan_jalan/laporan')?>"><i class="fa fa-dot-circle-o"></i> Pajak Penerangan jalan</a></li>
            <li> <a href="<?=site_url('prs_parkir/laporan')?>"><i class="fa fa-dot-circle-o"></i> Pajak Parkir</a></li>
            <li> <a href="<?=site_url('prs_sarang_burung_walet/laporan')?>"><i class="fa fa-dot-circle-o"></i> Pajak Sarang burung walet</a></li>
            <li> <a href="<?=site_url('prs_air_tanah/laporan')?>"><i class="fa fa-dot-circle-o"></i> Pajak Air tanah</a></li>
            <li> <a href="<?=site_url('prs_pbb/laporan')?>"><i class="fa fa-dot-circle-o"></i> PBB</a></li>
          </ul>
        </li>
        <li class="header"><?=strtoupper($this->fungsi->user_login()->username) ?></li>
        <li>
          <a href="<?=site_url('profile')?>">
            <i class="fa fa-user"></i> <span>Profile</span>
          </a>
        </li>
        <li>
          <a href="<?=site_url('login/keluar')?>">
            <i class="fa fa-power-off"></i> <span>Logout</span>
          </a>
        </li>
        <li class="header">PENGATURAN</li>
        <li>
          <a href="<?=site_url('user')?>">
            <i class="fa fa-user-plus"></i> <span>Pengguna</span>
          </a>
        </li>
      </ul>
    </section>
  </aside>
  <!-- =============================================== -->
  <?php } else { ?>
  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=base_url()?>uploads/tabalong.png" class="light-logo" alt="logo" width="50%">
        </div>
        <div class="pull-left info" style="padding-left: 0px;padding-top: 0px;">
        <p style="margin-bottom: 0;" align="center">BAPENDA</p>
          <b>Badan Pendapatan Daerah</b>
        </div>
      </div>

      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">PENGAWASAN PAJAK</li>
        <li>
          <a href="<?=site_url('dashboard')?>">
            <i class="fa fa-home"></i> <span>Home</span>
          </a>
        </li>
        <li>
          <a href="<?=site_url('profile')?>">
            <i class="fa fa-user"></i>
            <span><?=ucfirst($this->fungsi->user_login()->username)?></span>
          </a>
        </li>
        <li>
          <a href="<?=site_url('wp_lapor')?>">
            <i class="fa fa-pencil-square-o"></i> <span>Lapor Pengawasan Pajak</span>
          </a>
        </li>
        <li class="treeview <?=$babi == 'wp_data' ? 'active' : '' ?>">
          <a href="#">
            <i class="fa fa-search"></i> <span>Lihat Pajak</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?=$anjing == 'pengawasan' ? 'class="active"' : '' ?>><a href="<?=site_url('wp_data/pengawasan')?>"><i class="fa fa-dot-circle-o"></i>Pengawasan Pajak</a></li>
            <li <?=$anjing == 'pemeriksaan' ? 'class="active"' : '' ?>><a href="<?=site_url('wp_data/pemeriksaan')?>"><i class="fa fa-dot-circle-o"></i>Pemeriksaan Pajak</a></li>
          </ul>
        </li>
        <li>
          <a href="<?=site_url('login/keluar')?>">
            <i class="fa fa-power-off"></i> <span>Logout</span>
          </a>
        </li>
      </ul>
    </section>
  </aside>
  <?php } ?>

  <script src="<?=base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>

  <!-- =============================================== -->
  <div class="content-wrapper">
    <?=$contents?>
  </div>
  <!-- =============================================== -->

 
</div>

<script src="<?=base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<script src="<?=base_url()?>assets/dist/js/adminlte.min.js"></script>
<script src="<?=base_url()?>assets/dist/js/demo.js"></script>
<script src="<?=base_url()?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script>
  $(document).ready(function() {
    $('#table1').DataTable()
  })
</script>
<script>
var menuWP = document.getElementById("menuWP");
function openMenu(x) {
  if( "<?=$babi;?>"== x ){
    menuWP.classList.add("active", "menu_open");
    console.log(x);
  }
}
function veriMenuOven(x) {
  openMenu("wp");
  openMenu("tipe_wp");
}
veriMenuOven("wp" ||"tipe_wp" )
</script>
</body>

</html>