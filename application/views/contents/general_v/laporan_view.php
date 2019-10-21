<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Laporan</h1>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Laporan</h6>
      <input id="datepicker" width="276" />
    <script>
        $('#datepicker').datepicker();
    </script>
      <button type="button" class="btn btn-primary btn-icon-split" id="sa" data-toggle="modal" data-target="#insertModal">
        <span class="icon text-white-50">
          <i class="fas fa-plus"></i>
        </span>
        <span class="text">Generate</span>
      </a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="table-data-laporan"data-url="<?php echo base_url('General/Laporan/get_list_laporan') ?>">               
        </table>
      </div>
    </div>
  </div>

</div>