<div class="modal fade" id="modal-default">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title">Register</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <div class="card">
                      <div class="card-body register-card-body">
                          <p class="login-box-msg">Register a new membership</p>
                          <form action="" method="post">
                              <div class="input-group mb-3">
                                  <input type="text" class="form-control" placeholder="Full Name" name="name" required>
                                  <div class="input-group-append">
                                      <div class="input-group-text">
                                          <span class="fas fa-user"></span>
                                      </div>
                                  </div>
                              </div>
                              <div class="input-group mb-3">
                                  <input type="email" class="form-control" placeholder="Email" name="email" required>
                                  <div class="input-group-append">
                                      <div class="input-group-text">
                                          <span class="fas fa-envelope"></span>
                                      </div>
                                  </div>
                              </div>
                              <div class="input-group mb-3">
                                  <input type="password" class="form-control" placeholder="Password" name="password" required>
                                  <div class="input-group-append">
                                      <div class="input-group-text">
                                          <span class="fas fa-lock"></span>
                                      </div>
                                  </div>
                              </div>
                              <div class="form-group mb-3">
                                  <select name="level" id="level" class="form-control" required>
                                      <option value="Manager">Manager</option>
                                      <option value="Admin">Admin</option>
                                      <option value="Teller">Teller</option>
                                      <option value="CS">Customer Service</option>
                                      <option value="Marketing">Marketing</option>
                                      <option value="Surveyor">Surveyor</option>
                                  </select>
                              </div>
                              <div class="row">
                                  <div class="col-4">
                                      <button type="submit" name="register" class="btn btn-primary btn-block">Register</button>
                                  </div>
                                  <!-- /.col -->
                              </div>
                          </form>
                      </div>
                      <!-- /.form-box -->
                  </div><!-- /.card -->
              </div>
          </div>
          <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->