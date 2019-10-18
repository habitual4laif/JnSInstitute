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
	<link href="../assets/plugins/bootstrap-datepicker/datepicker.css" rel="stylesheet">
	<!-- Material Design Lite CSS -->
	<link rel="../stylesheet" href="assets/plugins/material/material.min.css">
	<link rel="../stylesheet" href="assets/css/material_style.css">
	<!-- Theme Styles -->
	<link href="../assets/css/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
	<link href="../assets/css/style.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/pages/formlayout.css" rel="stylesheet" type="text/css" />
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
						<span class="logo-default">JnS</span> </a>
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
										<img src="<?=$results['image'];?> " class="img-circle user-img-circle"
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
								<div class="page-title">Update Your Details</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><a class="parent-item" href="studentDashboard.php">Student</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Update Your Details</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="card card-box">
								<div class="card-head"><header>Basic Information</header></div>
	<?php
		$errMsg = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
				if (strpos($errMsg, 'student_update.php?error=empty') !== false){
						echo "<div style='text-align:center; font-size:1rem; color:#f69'>You left empty field(s)</div>";
				}
		?>
								<div class="card-body" id="bar-parent">
									<form action="updateform.php" method="post" id="form_sample_1" class="form-horizontal" enctype="multipart/form-data">
										<div class="form-body">
											<div class="form-group row">
												<label class="control-label col-md-3">First Name
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="text" name="firstName" placeholder=<?= $results['first'];?>
														class="form-control input-height" />
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Last Name
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="text" name="lastName" placeholder=<?=$results['last'];?>
														class="form-control input-height" />
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Email
												</label>
												<div class="col-md-5">
													<div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-envelope"></i>
														</span>
														<input type="text" class="form-control input-height"
															name="email" placeholder=<?=$results['email'];?> /> </div>
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Registration Date
													<span class="required"> * </span>
												</label>
												<div class="input-append date" id="dp1">
													<input class="formDatePicker" placeholder="Registration Date"
														size="44" type="text" name="regDate" readonly>
													<span class="add-on"><i class="fa fa-calendar"></i></span>
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Class
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<select class="form-control input-height" name="class">
														<option value="">Select...</option>
														<option value="Pre Year">Pre Year</option>
														<option value="Year 1">Year 1</option>
														<option value="Year 2">Year 2 </option>
														<option value="Advance">Advance</option>
													</select>
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Gender
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<select class="form-control input-height" name="gender">
														<option value="">Select...</option>
														<option value="Male">Male</option>
														<option value="Female">Female</option>
													</select>
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Mobile No.
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input name="number" type="text" placeholder="mobile number"
														class="form-control input-height" /> </div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Date Of Birth
													<span class="required"> * </span>
												</label>
												<div class="input-append date" id="dp2">
													<input class="formDatePicker" placeholder="Date Of Birth" size="44"
														type="text" name="dob"readonly>
													<span class="add-on"><i class="fa fa-calendar"></i></span>
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Address
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<textarea name="address" placeholder="address"
														class="form-control-textarea" rows="5"></textarea>
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Profile Picture</label>
												<!-- <div class="compose-editor">
													<input type="file" name="image" id="image" class="form-control" value="">
												</div> -->

												<form action="updateform.php" method="post" class="form-group" enctype="multipart/form-data">
													<div class="compose-editor">
														<input type="file" name="image" id="image" class="form-control" value="">
													</div>
											  </form>
											</div>
											<div class="offset-md-3 col-md-9">
										    <input type="submit" name="update_info" value="Submit" class="btn btn-success">
										  </div>
										</div>
									</form>
								</div>
							</div>
						</div>
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
	<script src="../assets/plugins/jquery-validation/js/jquery.validate.min.js"></script>
	<script src="../assets/plugins/jquery-validation/js/additional-methods.min.js"></script>
	<script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
	<!-- bootstrap -->
	<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="../assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
	<script src="../assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>
	<script src="../assets/plugins/bootstrap-datepicker/datepicker-init.js"></script>
	<!-- Common js-->
	<script src="../assets/js/app.js"></script>
	<script src="../assets/js/pages/validation/form-validation.js"></script>
	<script src="../assets/js/layout.js"></script>
	<script src="../assets/js/theme-color.js"></script>
	<!-- Material -->
	<script src="../assets/plugins/material/material.min.js"></script>
	<!-- end js include path -->
</body>

</html>
