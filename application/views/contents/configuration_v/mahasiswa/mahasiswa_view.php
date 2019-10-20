<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Mahasiswa</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Mahasiswa</h6>
      <button type="button" id="insertMhsModalBtn" class="btn btn-primary btn-icon-split" data-toggle="modal"  data-target="#insertModal">
            <span class="icon text-white-50">
              <i class="fas fa-plus"></i>
            </span>
            <span class="text">Tambah Mahasiswa Baru</span>
          </button>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="table-data-mhs" data-url="<?php echo base_url('Configuration/Mahasiswa/get_list_mahasiswa') ?>">
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
        <h4 class="modal-title">Add New Mahasiswa Card</h4>
        <button type="button" class="close" aria-hidden="true" data-dismiss="modal">×</button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <div class="col-md-12">
            <label><b>Card Id</b></label>
            <input type="text" class="form-control form-control-user" id="card_id" placeholder="Type here..." required>
          </div>
          <br>
          <div class="col-md-12">
            <label><b>NIM</b></label>
            <input type="text" class="form-control form-control-user" id="nim" placeholder="Type here..." required>
          </div>
          <br>
          <div class="col-md-12">
            <label><b>Nama Mahasiswa</b></label>
            <input type="text" class="form-control form-control-user" id="nama_mahasiswa" placeholder="Type here..." required>
          </div>
          <br>
          <div class="col-md-12">
            <label><b>Jurusan</b></label>
            <input type="text" class="form-control form-control-user" id="jurusan" placeholder="Type here..." required>
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