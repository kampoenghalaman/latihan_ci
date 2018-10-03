<!-- Side Navbar -->
<?php 
$user = $this->session->userdata('nama');
if($user == 'kepsek'){
  $jabatan = "KEPALA SEKOLAH";
  $menu = $menu = "<li class='active'><a href=".base_url('kelasbaru')."> <i class='icon-home'></i><span>Kelas</span></a></li><li> <a href=".base_url('kelasbaru/tugas')."><i class='icon-form'></i><span>Guru</span></a></li><li> <a href=".base_url('kelasbaru/tugas')."><i class='icon-presentation'></i><span>Mata Pelajaran</span></a></li>";
  }elseif($user== "tatausaha"){
    $jabatan = "Tata Usaha";
    $menu = "<li class='active'><a href=".base_url('kelasbaru')."> <i class='icon-home'></i><span>Kelas</span></a></li><li> <a href=".base_url('kelasbaru/tugas')."><i class='icon-form'></i><span>Guru</span></a></li><li> <a href=".base_url('kelasbaru/tugas')."><i class='icon-presentation'></i><span>Mata Pelajaran</span></a></li>";
    }elseif($user == "guru"){
      $jabatan = "GURU";
      $menu = "<li> <a href=".base_url('kelasbaru/tugas')."><i class='icon-form'></i><span>Guru</span></a></li><li> <a href=".base_url('kelasbaru/tugas')."><i class='icon-presentation'></i><span>Mata Pelajaran</span></a></li>";
    }else{
      $jabatan = "Siswa";
      $menu = "<li> <a href=".base_url('kelasbaru/tugas')."><i class='icon-presentation'></i><span>Mata Pelajaran</span></a></li>";
    }
  ?>
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <div class="sidenav-header-inner text-center"><img src="<?php echo base_url();?>assets/backend/img/avatar-1.jpg" alt="person" class="img-fluid rounded-circle">
            <h2 class="h5 text-uppercase"><?php echo strtoupper($user);?></h2><span class="text-uppercase"><?php echo $jabatan;?></span>

          </div>
          <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
        </div>
        <div class="main-menu">
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <?php echo $menu;?>
          </ul>
        </div>
      </div>
    </nav>
    <div class="page home-page">