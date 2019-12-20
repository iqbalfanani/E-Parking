<div class="row">
	<div class="col-sm-3 col-md-6 col-lg-12"><font color="white"><font size="22"><marquee><h2>E-Parking Polinema</h2></marquee></font></font></div>
	<div class="col-sm-9 col-md-6 col-lg-8"><div style="text-align:left;"><font face="Courier New"><font color="white"><font size="5"><marquee direction="left"><?php echo date('d-M-Y'); ?></marquee></font></font></font></div></div>
</div>
<a href="<?php echo base_url('Dashboard') ?>"class="btn_style">Back to Panel</a>
<br>
<div class="container-fluid">

  <!-- Page Heading -->
  <!-- DataTales Example -->
  <br>
  <div class="card" style="width: 82rem;">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="table-data-monitoringv"data-url="<?php echo base_url('General/MonitoringData/get_list_log_parkir') ?>">               
        </table>
      </div>
    </div>
  </div>

</div>