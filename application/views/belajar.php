<!DOCTYPE html>
<html>
<head>
	<title>Main View E-Parking</title>
	<style>
		body{
			background-image: url(<?php echo base_url('image/polinemos.jpg')?>);
			height: 600px;
			width: 800px;
		}
		.btn_style{
			border: 1px solid #cecece;
			border-radius: 3px;
			padding: 3px 10px;
			box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.4);
			color: white;
			background-color: purple;
		}
		.btn_style:hover{
			border: 1px solid #b1b1b1;
			box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
		}
	</style>
</head>
<body>
	<div class="row">
		<div class="col-sm-3 col-md-6 col-lg-4"><font color="white"><font size="8"><marquee><h2>E-Parking Polinema</h2></marquee></font></font></div>
		<div class="col-sm-9 col-md-6 col-lg-8"><div style="text-align:left;"><font face="Courier New"><font color="white"><font size="5"><marquee direction="left"><?php echo date('d-M-Y'); ?></marquee></font></font></font></div></div>
	</div>
	<button class="btn_style">Back to Panel</button>

	<!-- <font color="white"><font size="8"><marquee><h2>E-Parking Polinema</h2></marquee></font></font> -->
	<!-- <div style="text-align:right;"><font face="Courier New"><font color="white"><font size="8"><?php echo date('d-M-Y'); ?></font></font></font></div> -->

	<div class="card" style="width:18rem;">
		<div class="card-header">
	</div>
</tr>
</thead>
</div>
</body>

<script>
	$(document).ready(function(){
		setInterval(function(){
			$.ajax({
				url: "parsingdata.php"
			}).done(function(data) {
				$('#cards').html(data);
			});
		},3000);
	});
</script>
</html>