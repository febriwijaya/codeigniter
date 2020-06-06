<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('dashboard'); ?>">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laptop-code"></i>
    </div>
    <div class="sidebar-brand-text mx-3">IT COMPETITION</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="<?= base_url('dashboard'); ?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Interface
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('mobile_legend'); ?>">
      <i class="fas fa-fw fa-truck"></i>
      <span>Mobile Legend</span></a>
  </li>

  <!-- Nav Item - Utilities Collapse Menu -->
  <li class="nav-item atas">
    <a class="nav-link" href="<?= base_url('pes'); ?>">
      <i class="fas fa-fw fa-user-secret"></i>
      <span>Pes</span></a>
  </li>

  <li class="nav-item atas">
    <a class="nav-link" href="<?= base_url('video'); ?>">
      <i class="fas fa-fw fa-stream"></i>
      <span>Video</span></a>
  </li>

  <li class="nav-item atas">
    <a class="nav-link" href="<?= base_url('fotografi'); ?>">
      <i class="fas fa-fw fa-file-code"></i>
      <span>Fotografi</span></a>
  </li>

  <li class="nav-item atas">
    <a class="nav-link" href="<?= base_url('saran'); ?>">
      <i class="fas fa-fw fa-keyboard"></i>
      <span>Saran dan kritik</span></a>
  </li>


  <?php if ($this->fungsi->user_login()->level == 1) { ?>
    <hr class="sidebar-divider d-none d-md-block">
    <div class="sidebar-heading">
      Settings
    </div>

    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('user'); ?>">
        <i class="fas fa-fw fa-users"></i>
        <span>User</span></a>
    </li>
  <?php } ?>

  <div class="text-center d-none d-md-inline mt-5">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
</ul>
<!-- End of Sidebar -->