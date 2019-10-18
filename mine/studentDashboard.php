<?php
session_start();
require_once 'dbh.php';

$id = $_SESSION['id'];
if (isset($_SESSION['id'])){
	$sql = "SELECT * FROM student_user WHERE id='$id'";
	$result = $dbh->query($sql);
	$results = mysqli_fetch_assoc($result);
}
?>
<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<title>Jingo Institute</title>
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
	<link href="../fonts/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
	<link href="../fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="../fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css" />
	<!--bootstrap -->
	<link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="../assets/plugins/summernote/summernote.css" rel="stylesheet">
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="../assets/plugins/material/material.min.css">
	<link rel="stylesheet" href="../assets/css/material_style.css">
	<!-- inbox style -->
	<link href="../assets/css/pages/inbox.min.css" rel="stylesheet" type="text/css" />
	<!-- Theme Styles -->
	<link href="../assets/css/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
	<link href="../assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/style.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/theme-color.css" rel="stylesheet" type="text/css" />
	<!-- favicon -->
	<link rel="shortcut icon" href="../assets/img/favicon.ico" />
</head>
<!-- END HEAD -->
<body
	class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
	<div class="page-wrapper">
		<!-- start header -->
		<div class="page-header navbar navbar-fixed-top">
			<div class="page-header-inner ">
				<!-- logo start -->
				<div class="page-logo">
					<a href="dashboard.html">
						<span class="logo-icon material-icons fa-rotate-45">school</span>
						<span class="logo-default">Jingo</span> </a>
				</div>
				<!-- logo end -->
				<ul class="nav navbar-nav navbar-left in">
					<li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
				</ul>
				<!-- start mobile menu -->
				<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
					data-target=".navbar-collapse">
					<span></span>
				</a>
				<!-- end mobile menu -->
				<!-- start header menu -->
				<div class="top-menu">
					<ul class="nav navbar-nav pull-right">
						<!-- start manage user dropdown -->
						<li class="dropdown dropdown-user">
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
								data-close-others="true">
								<span class="username username-hide-on-mobile"><?=$results['first'];?></span>
								<i class="fa fa-angle-down"></i>
							</a>
							<ul class="dropdown-menu dropdown-menu-default">
								<li>
									<a href="#"><i class="icon-user"></i><?= $results['first']." ".$results['last'];?></a>
								</li>
								<li>
										<form action="logoutform.php" method="post">
											<button class="btn" style="background:white"><i class="icon-logout"></i> Log Out</button>
										</form>
								</li>
							</ul>
						</li>
						<!-- end manage user dropdown -->
					</ul>
				</div>
			</div>
		</div>
		<!-- end header -->

		<!-- start page container -->
		<div class="page-container">
			<!-- start sidebar menu -->
			<div class="sidebar-container">
				<div class="sidemenu-container navbar-collapse collapse fixed-menu">
					<div id="remove-scroll" class="left-sidemenu">
						<ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false"
							data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
							<li class="sidebar-toggler-wrapper hide">
								<div class="sidebar-toggler">
									<span></span>
								</div>
							</li>
							<li class="sidebar-user-panel">
								<div class="user-panel">
									<div class="pull-left image">
										<img src="<?= $results['image'];?>" class="img-circle user-img-circle"
											alt="User Image" />
									</div>
									<div class="pull-left info">
										<p><?= $results['first']." ".$results['last'];?></p>
										<a href="#"><i class="fa fa-circle user-online"></i><span class="txtOnline">
												Online</span></a>
									</div>
								</div>
							</li>
							<li class="nav-item start active open">
								<a href="#" class="nav-link">
									<i class="material-icons">dashboard</i>
									<span class="title">Dashboard</span>
									<span class="selected"></span>
								</a>
							</li>
								</ul>
							</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- end sidebar menu -->
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Dashboard</div>
							</div>

						</div>
					</div>
					<!-- start widget -->
					<div class="state-overview">

							<div class="form-group row">
								<label class="control-label col-md-3" style="color:#06f; font-size:1.3rem">Student Name:</label>
								<div class="col-md-5" style="color:#94f; font-size:1.4rem"><?= $results['first'].' '.$results['last'];?>	</div>
							</div>
							<div class="form-group row">
								<label class="control-label col-md-3" style="color:#06f; font-size:1.3rem">Student Email:</label>
								<div class="col-md-5" style="color:#94f; font-size:1.4rem"><?=$results['email'];?>	</div>
							</div>
							<div class="form-group row">
								<label class="control-label col-md-3" style="color:#06f; font-size:1.3rem">Date Of Birth:</label>
								<div class="col-md-5" style="color:#94f; font-size:1.4rem"><?=$results['dob'];?>	</div>
							</div>
							<div class="form-group row">
								<label class="control-label col-md-3" style="color:#06f; font-size:1.3rem">Class:</label>
								<div class="col-md-5" style="color:#94f; font-size:1.4rem"><?=$results['class1'];?>	</div>
							</div>
							<div class="form-group row">
								<label class="control-label col-md-3" style="color:#06f; font-size:1.3rem">Gender:</label>
								<div class="col-md-5" style="color:#94f; font-size:1.4rem"><?=$results['gender'];?>	</div>
							</div>
							<div class="form-group row">
								<label class="control-label col-md-3" style="color:#06f; font-size:1.3rem">Registration Date:</label>
								<div class="col-md-5" style="color:#94f; font-size:1.4rem"><?=$results['regDate'];?>	</div>
							</div>
							<div class="form-group row">
								<label class="control-label col-md-3" style="color:#06f; font-size:1.3rem">Address:</label>
								<div class="col-md-5" style="color:#94f; font-size:1.4rem"><?=$results['address'];?>	</div>
							</div>
							<div class="form-group row">
								<label class="control-label col-md-3" style="color:#06f; font-size:1.3rem">Payment Records:</label>
								<div class="col-md-5" style="color:#94f; font-size:1.4rem">	</div>
							</div>
							<div class="form-group row">
								<label class="control-label col-md-3" style="color:#06f; font-size:1.3rem">Academic Records:</label>
								<div class="col-md-9" style="color:#000; font-size:1.2rem">
							<table class="table table-bordered table-condensed table-striped">
								<thead>
									<th></th><th>Year</th><th>Semester</th><th>Courses</th><th>Unit</th><th>Grade</th>
								</thead>
								<tbody>
									<tr>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
								</tbody>
							</table>
						</div>
						</div>
							<div class="home_btns m-top-40">
								<button class="submit-btn mt-5"><a href="student_update.php">Update Your Details</a></button>
							</div>
							<br>




						</div>
					</div>
					<!-- end widget -->
					</div>
				</div>
			</div>
			<!-- end page content -->
		</div>
		<!-- end page container -->
		<!-- start footer -->
		<div class="page-footer">
			<div class="page-footer-inner"> 2019 &copy; Jingo & Sabainah</div>
			<div class="scroll-to-top">
				<i class="icon-arrow-up"></i>
			</div>
		</div>
		<!-- end footer -->
	</div>
	<!-- start js include path -->
	<script src="../assets/plugins/jquery/jquery.min.js"></script>
	<script src="../assets/plugins/popper/popper.js"></script>
	<script src="../assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
	<script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
	<!-- bootstrap -->
	<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="../assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
	<script src="../assets/plugins/sparkline/jquery.sparkline.js"></script>
	<script src="../assets/js/pages/sparkline/sparkline-data.js"></script>
	<!-- Common js-->
	<script src="../assets/js/app.js"></script>
	<script src="../assets/js/layout.js"></script>
	<script src="../assets/js/theme-color.js"></script>
	<!-- material -->
	<script src="../assets/plugins/material/material.min.js"></script>
	<!-- chart js -->
	<script src="../assets/plugins/chart-js/Chart.bundle.js"></script>
	<script src="../assets/plugins/chart-js/utils.js"></script>
	<script src="../assets/js/pages/chart/chartjs/home-data.js"></script>
	<!-- summernote -->
	<script src="../assets/plugins/summernote/summernote.js"></script>
	<script src="../assets/js/pages/summernote/summernote-data.js"></script>
	<!-- end js include path -->
</body>

</html>
