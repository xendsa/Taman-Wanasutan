<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo (!empty($user['photo'])) ? '../images/'.$user['photo'] : '../images/profile.jpg'; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $user['firstname'].' '.$user['lastname']; ?></p>
          <a><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">REPORTS</li>
        <li class=""><a href="home.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li class="header">MANAGE</li>
        
        <li><a href="attendance.php"><i class="fa fa-calendar"></i> <span>Attendance</span></a></li>
        <li><a href="students.php"><i class="fa fa-users"></i> Karyawan</a></li>
        <li><a href="flora.php"><i class="fa fa-leaf"></i> <span>Flora</span></a></li>
        <li><a href="fauna.php"><i class="fa fa-paw"></i> <span>Fauna</span></a></li>
        <li><a href="arsip.php"><i class="fa fa-archive"></i> <span>Arsip</span></a></li

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>