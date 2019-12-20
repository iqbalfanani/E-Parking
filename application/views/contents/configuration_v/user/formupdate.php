<form id="formUpdate" method="post">
  <input type="hidden" name="edit_id" id="edit_id" value="<?php echo $data_by['id'] ?>">
  <div class="form-group form-material floating" data-plugin="formMaterial">
    <div class="col-md-12">
      <label><b>Username</b></label>
      <input type="text" class="form-control form-control-user" id="edit_username" value="<?php echo $data_by['username'] ?>" disabled>
    </div>
    <br>
    <!-- <div class="col-md-12">
      <label><b>Password</b></label>
      <input type="password" class="form-control form-control-user" id="edit_username" value="<?php echo $data_by['password'] ?>" >
    </div> -->
    <div class="col-md-12">
      <label><b>Nama</b></label>
      <input type="text" class="form-control form-control-user" id="edit_nama" value="<?php echo $data_by['nama'] ?>" >
    </div>
    <br>
    <div class="col-md-12">
      <label><b>No Telp</b></label>
      <input type="text" class="form-control form-control-user" id="edit_telp" value="<?php echo $data_by['telp'] ?>" >
    </div>
    <br>
    <div class="col-md-12">
      <label><b>Email</b></label>
      <input type="text" class="form-control form-control-user" id="edit_email" value="<?php echo $data_by['email'] ?>" >
    </div>
    <br>
    <div class="col-md-12">
      <label><b>Alamat</b></label>
      <input type="text" class="form-control form-control-user" id="edit_alamat" value="<?php echo $data_by['alamat'] ?>" >
    </div>
    <br>
  </div>
  <div class="modal-footer">
        <div class="form-actions">
          <button class="btn btn-primary" type="submit">Submit</button>
          <a class="btn btn-sm btn-white" data-dismiss="modal" href="javascript:void(0)">Cancel</a>
        </div>
      </div>
</form>