        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">User</h1>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
              <button type="button" class="btn btn-primary btn-icon-split" data-toggle="modal" data-target="#insertModal">
                <span class="icon text-white-50">
                  <i class="fas fa-plus"></i>
                </span>
                <span class="text">Tambah User Baru</span>
              </a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="table-data-user"data-url="<?php echo base_url('Configuration/get_list_user') ?>">               
                </table>
              </div>
            </div>
          </div>

        </div>

<!--Modal Mahasiswa-->
        <div class="modal fade" id="insertModal" aria-hidden="true" aria-labelledby="insertModal" role="dialog" tabindex="-1">
          <div class="modal-dialog modal-lg">
            <form class="modal-content user" id="insertDataForm">
              <div class="modal-header">
                <h4 class="modal-title">Add New User</h4>
                <button type="button" class="close" aria-hidden="true" data-dismiss="modal">×</button>
              </div>
              <div class="modal-body">
                <div class="form-group form-material floating" data-plugin="formMaterial">
                  <div class="col-md-12">
                    <label><b>Username</b></label>
                    <input type="text" class="form-control form-control-user" id="username" placeholder="Type here..." required>
                  </div>
                  <br>
                  <div class="col-md-12">
                    <label><b>Password</b></label>
                    <input type="password" class="form-control form-control-user" id="password" placeholder="Type here..." required>
                  </div>
                  <br>
                  <div class="col-md-12">
                    <label><b>Nama</b></label>
                    <input type="text" class="form-control form-control-user" id="nama" placeholder="Type here..." required>
                  </div>
                  <br>
                  <div class="col-md-12">
                    <label><b>No Telp</b></label>
                    <input type="number" class="form-control form-control-user" id="no_telp" placeholder="Type here..." required>
                  </div>
                  <br>
                  <div class="col-md-12">
                    <label><b>Email</b></label>
                    <input type="text" class="form-control form-control-user" id="email" placeholder="Type here..." required>
                  </div>
                  <br>
                  <div class="col-md-12">
                    <label><b>Alamat</b></label>
                    <input type="text" class="form-control form-control-user" id="alamat" placeholder="Type here..." required>
                  </div>
                  <br>
                  <div class="col-md-12">
                    <label><b>Level</b></label>
                    <br>
                    <select name="" class="form-control-user">
                      <option value="1">Admin</option>
                      <option value="2">User</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <div class="form-actions">
                  <button class="btn btn-primary" type="submit">Submit</button>
                  <a class="btn btn-sm btn-white" data-dismiss="modal" href="javascript:void(0)">Cancel</a>
                </div>
              </div>
            </form>
          </div>
        </div>
        