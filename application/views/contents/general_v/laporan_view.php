<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Laporan</h1>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Laporan</h6>
      <div class="card">
        <div class="card-body row">
          <div class="col">
            <h4>Filter Data Laporan</h4>
            <div class="input-daterange" data-plugin="datepicker">
              <div class="input-group ">
                <span class="input-group-addon">
                  <i class="icon md-calendar" aria-hidden="true"></i>
                </span>
                <input id="date1" type="text" class="form-control" name="date1" />

                <span class="input-group-addon">to</span>
                <div class="input-group col-5">
                      <input id="date2" type="text" class="form-control" name="date2" />
                    </div>
                  </div>
              </div>
          </div>        
        </div>
        <div class=" card-body col-md-3">
            <button type="button" class="btn btn-primary btn-icon-split" id="sa" data-toggle="modal" onclick="filter()">
              <span class="icon text-white-50">
                <i class="fas fa-filter"></i>
              </span>
              <span class="text btn-xs">Filter</span>
            </button>
         </div>
      </div>
    <script>
        $('#date1').datepicker();
        $('#date2').datepicker();
    </script>
      
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="table-data-laporan"data-url="<?php echo base_url('General/Laporan/get_list_laporan') ?>">               
        </table>
      </div>
    </div>
  </div>

</div>