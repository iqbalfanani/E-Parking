<form id="formUpdate1" method="post">
  <input type="hidden" name="edit_id" id="edit_id" value="<?php echo $data_by['id'] ?>">
  <div class="form-group form-material floating" data-plugin="formMaterial">
    <div class="col-md-12">
      <label><b>Card Id</b></label>
      <input type="text" class="form-control form-control-user" id="edit_card" value="<?php echo $data_by['id_card'] ?>" disabled>
    </div>
    <br>    
    <div class="col-md-12">
      <label><b>NIM</b></label>
      <input type="text" class="form-control form-control-user" id="edit_nim" value="<?php echo $data_by['nim'] ?>" >
    </div>
    <br>
    <div class="col-md-12">
      <label><b>Nama Mahasiswa</b></label>
      <input type="text" class="form-control form-control-user" id="edit_namamhs" value="<?php echo $data_by['nama_mhs'] ?>" >
    </div>
    <br>
    <div class="col-md-12">
      <label><b>Jurusan</b></label>
      <input type="text" class="form-control form-control-user" id="edit_jurusan" value="<?php echo $data_by['jurusan'] ?>" >
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