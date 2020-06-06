    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-dark bg-dark topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
            </li>
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= ucfirst($this->fungsi->user_login()->username) ?></span>
                <img class="img-profile rounded-circle" src="<?= base_url('asets/images/methodist.gif')  ?>">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->

          <!-- Content Row -->
          <div class="container">
            <div class="row">
              <div class="col-md">
                <div class="card">
                  <div class="card-header text-center">
                    Form Edit Data
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm- p-2">
                        <a class="btn btn-warning" href="<?= base_url('user') ?>"><i class="fas fa-undo-alt"></i> Back</a>
                      </div>
                    </div>

                    <div class="row mt-4">
                      <div class="col-sm">
                        <form action="" method="post">
                          <div class="form-group">
                            <label for="username">Username</label>
                            <input type="hidden" name="user_id" value="<?= $row->user_id ?>">
                            <input type="text" class="form-control" name="username" id="username" value="<?= $this->input->post('username') ?? $row->username ?>" placeholder="Username....">
                            <?= form_error('username', '<p class="text-danger">', '</p>'); ?>
                          </div>
                          <div class="form-group">
                            <label for="password">Password</label>
                            <small>(Biarkan kosong jika tidak diganti)</small>
                            <input type="password" class="form-control" name="password" value="<?= $this->input->post('password') ?>" id="password" placeholder="Password....">
                            <?= form_error('password', '<p class="text-danger">', '</p>'); ?>
                          </div>
                          <div class="form-group">
                            <label for="passconf">Confirm Password</label>
                            <input type="password" class="form-control" name="passconf" value="<?= $this->input->post('passconf') ?>" id="passconf" placeholder="Confirm Password....">
                            <?= form_error('passconf', '<p class="text-danger">', '</p>'); ?>
                          </div>
                          <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" value="<?= $this->input->post('name') ?? $row->name ?>" placeholder="Name....">
                            <?= form_error('name', '<p class="text-danger">', '</p>'); ?>
                          </div>
                          <div class="form-group">
                            <label for="address">Address</label>
                            <textarea class="form-control" name="address" id="address" rows="3" placeholder="Address.."><?= $this->input->post('address') ?? $row->address ?></textarea>
                            <?= form_error('address', '<p class="text-danger">', '</p>'); ?>
                          </div>
                          <div class="form-group">
                            <label for="Level">Level</label>
                            <select class="form-control" name="level" id="level">
                              <?php $level = $this->input->post('level') ? $this->input->post('level') : $row->level ?>
                              <option value="1">Admin</option>
                              <option value="2" <?= $level == 2 ? 'selected' : null ?>>User</option>
                            </select>
                            <?= form_error('level', '<p class="text-danger">', '</p>'); ?>
                          </div>
                          <button type="submit" name="submit" class="btn btn-primary"><i class="far fa-paper-plane"></i> Submit</button>
                          <button type="reset" class="btn btn-danger"><i class="fas fa-trash-restore-alt"></i> Reset</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->

          <div class="row">

          </div>

          <!-- Content Row -->
          <div class="row">

          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Febri wijaya <?= date('Y'); ?></span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
          </div>
        </div>
      </div>
    </div>