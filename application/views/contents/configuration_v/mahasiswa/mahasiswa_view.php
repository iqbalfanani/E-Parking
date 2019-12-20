<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Mahasiswa</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Mahasiswa</h6>
      <!-- <button type="button" id="insertMhsModalBtn" class="btn btn-primary btn-icon-split" data-toggle="modal"  data-target="#insertModal">
            <span class="icon text-white-50">
              <i class="fas fa-plus"></i>
            </span>
            <span class="text">Tambah Mahasiswa Baru</span>
          </button> -->
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="table-data-mhs" data-url="<?php echo base_url('Configuration/Mahasiswa/get_list_mahasiswa') ?>">
        </table>
      </div>
    </div>
  </div>

</div>

<!--- Modal Update -->
<div class="modal fade" id="updateModal1" aria-hidden="true" aria-labelledby="updateMahasiswa" role="dialog" tabindex="-1">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content form-horizontal">
      <div class="modal-header">
        <h4 class="modal-title">Update Mahasiswa</h4>
        <button type="button" class="close" aria-hidden="true" data-dismiss="modal">×</button>
      </div>
      <div class="modal-body">
        <div id="formData1">

        </div>

     </div>   
    </div>
  </div>
</div>