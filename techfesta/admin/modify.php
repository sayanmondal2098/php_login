<?php 
if(!isset($_COOKIE['name'])){
	header('Location: /techfesta/admin');
}

?>

<?php 

if(!isset($_SESSION['crud']))
    $_SESSION['crud'] = array();

if (isset($_POST['submit']) && !isset($_POST['uid'])) {
	$count = count($_SESSION['crud']);
	$_SESSION['crud'][$count] = $_POST['name'];
} 

if(isset($_GET['del'])) {
	unset($_SESSION['crud'][$_GET['del']]);
}
 
if(isset($_POST['uid']) && isset($_POST['name'])) {
	$_SESSION['crud'][$_POST['uid']] = $_POST['name'];
}
?>
<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Modify | Admin</title>
		<meta name="keywords" content="" />
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
		<link rel="stylesheet" href="assets/vendor/morris/morris.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="assets/vendor/modernizr/modernizr.js"></script>

	</head>
	<body>
		<section class="body">
		<?php include('includes/includes.php'); ?>
			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<?php include('includes/left.php'); ?>
				<section role="main" class="content-body">
				<?php include('includes/header.php');?>
				<section class="panel">
                    <header class="panel-heading">
                        <div class="panel-actions">
                            <a href="" class="fa fa-caret-down"></a>
                            <a href="" class="fa fa-times"></a>
                        </div>
                        <h2 class="panel-title"><strong>.: List of all Pages :.</strong></h2>
                    </header>
                    <div class="panel-body">
      
                    <table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
	                    <thead><tr><th>Id</th><th>Pages</th><th>Insert</th><th>Edit</th><th>Delete</th></th></tr></thead>
		                    <?php
							foreach ($_SESSION['crud'] as $key => $value) {
							?>
		                    <tbody><tr><td><?=$value?></td>
		                    	<td>
		                    		<a href="modify.php?del=<?=$key?>">Delete</a>&nbsp;
									<a href="modify.php?uid=<?=$key?>">Update</a>
								</td></tr></tbody>
							<?php
							}
							?>
					</table>

                    </div>
                </section>
                <form action="modify.php" method="POST">
						<?php
						if(isset($_GET['uid'])) {
							$str = "value='".$_SESSION['crud'][$_GET['uid']]."'";
							$flag = 1;
						} else { $flag = 0; $str = '';}
						?>
						<strong>Link:<strong> <input type="text" name="name" <?=$str?>>
						<?php if(isset($_GET['uid'])) { ?>
							<input type="hidden" value="<?=$_GET['uid']?>" name="uid">
						<?php } ?>
						<input type="submit" name="submit" value="Insert">
					</form>
				</section>
			</div>
			
			<?php include('includes/right.php');?>
		</section>

		<!-- Vendor -->
		<script src="assets/vendor/jquery/jquery.js"></script>
		<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Specific Page Vendor -->
		<script src="assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
		<script src="assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
		<script src="assets/vendor/jquery-appear/jquery.appear.js"></script>
		<script src="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
		<script src="assets/vendor/jquery-easypiechart/jquery.easypiechart.js"></script>
		<script src="assets/vendor/flot/jquery.flot.js"></script>
		<script src="assets/vendor/flot-tooltip/jquery.flot.tooltip.js"></script>
		<script src="assets/vendor/flot/jquery.flot.pie.js"></script>
		<script src="assets/vendor/flot/jquery.flot.categories.js"></script>
		<script src="assets/vendor/flot/jquery.flot.resize.js"></script>
		<script src="assets/vendor/jquery-sparkline/jquery.sparkline.js"></script>
		<script src="assets/vendor/raphael/raphael.js"></script>
		<script src="assets/vendor/morris/morris.js"></script>
		<script src="assets/vendor/gauge/gauge.js"></script>
		<script src="assets/vendor/snap-svg/snap.svg.js"></script>
		<script src="assets/vendor/liquid-meter/liquid.meter.js"></script>
		<script src="assets/vendor/jqvmap/jquery.vmap.js"></script>
		<script src="assets/vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
		<script src="assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>


		<!-- Examples -->
		<script src="assets/javascripts/dashboard/examples.dashboard.js"></script>
	</body>
</html>