<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Navbar</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!----css3---->
	<link rel="stylesheet" href="css/custom.css">


	<!--google fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">


	<!--google material icon-->
	<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
</head>

<body>
	<!------main-content-start----------->

	<?php include 'front-end/sidebar_navbar.php' ?>

	<div class="xp-breadcrumbbar text-center">
		<ol class="breadcrumb">
			<li class="breadcrumb-item active" aria-curent="page">UI Customize</li>
			<li class="breadcrumb-item active" aria-curent="page">Navbar</li>
		</ol>
	</div>

	<div class="main-content">
		<div class="row">
			<div class="col-md-12">
				<div class="table-wrapper">
					<div class="table-title">
						<div class="row">
							<div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
								<h2 class="ml-lg-2">การจัดการในส่วนของ Navbar</h2>
							</div>
							<div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
								<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal">
									<i class="material-icons">&#xE147;</i>
									<span>เพิ่มรายการ</span>
								</a>
								<a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal">
									<i class="material-icons">&#xE15C;</i>
									<span>ลบรายการ</span>
								</a>
							</div>
						</div>
					</div>
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th><span class="custom-checkbox">
										<input type="checkbox" id="selectAll">
										<label for="selectAll"></label></th>
								<th>Name</th>
								<th>Email</th>
								<th>Address</th>
								<th>Phone</th>
								<th>Actions</th>
							</tr>
						</thead>

						<tbody>
							<tr>
								<th><span class="custom-checkbox">
										<input type="checkbox" id="checkbox1" name="option[]" value="1">
										<label for="checkbox1"></label></th>
								<th>Thomas Hardy</th>
								<th>ThomasHardy@gmail.com</th>
								<th>90r parkdground poland Usa.</th>
								<th>(78-582552-9)</th>
								<th>
									<a href="#editEmployeeModal" class="edit" data-toggle="modal">
										<i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
									</a>
									<a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
										<i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
									</a>
								</th>
							</tr>


							<tr>
								<th><span class="custom-checkbox">
										<input type="checkbox" id="checkbox2" name="option[]" value="1">
										<label for="checkbox2"></label></th>
								<th>Dominique Perrier</th>
								<th>dominiquePerrier@gmail.com</th>
								<th>90r ser57, Berlin poland Bermany.</th>
								<th>(78-5235-2-9)</th>
								<th>
									<a href="#editEmployeeModal" class="edit" data-toggle="modal">
										<i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
									</a>
									<a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
										<i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
									</a>
								</th>
							</tr>


							<tr>
								<th><span class="custom-checkbox">
										<input type="checkbox" id="checkbox3" name="option[]" value="1">
										<label for="checkbox3"></label></th>
								<th>Marai Andres</th>
								<th>MarariAndres@gmail.com</th>
								<th>90r ser57, Berlin poland Bermany.</th>
								<th>(78-239-669)</th>
								<th>
									<a href="#edit" class="edit" data-toggle="modal">
										<i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
									</a>
									<a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
										<i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
									</a>
								</th>
							</tr>

							<tr>
								<th><span class="custom-checkbox">
										<input type="checkbox" id="checkbox4" name="option[]" value="1">
										<label for="checkbox4"></label></th>
								<th>Vishweb Design</th>
								<th>vishwebdesign@gmail.com</th>
								<th> B-2 ser57 Nodia East Delhi,India.</th>
								<th>(78-239-669)</th>
								<th>
									<a href="#editEmployeeModal" class="edit" data-toggle="modal">
										<i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
									</a>
									<a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
										<i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
									</a>
								</th>
							</tr>

							<tr>
								<th><span class="custom-checkbox">
										<input type="checkbox" id="checkbox5" name="option[]" value="1">
										<label for="checkbox5"></label></th>
								<th>Vishwajeet Kumar</th>
								<th>vishkumar234@gmail.com</th>
								<th> B-2 ser57 Nodia East Delhi,India.</th>
								<th>(78-555-229)</th>
								<th>
									<a href="#editEmployeeModal" class="edit" data-toggle="modal">
										<i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
									</a>
									<a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
										<i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
									</a>
								</th>
							</tr>

						</tbody>


					</table>

					<div class="clearfix">
						<div class="hint-text">showing <b>5</b> out of <b>25</b></div>
						<ul class="pagination">
							<li class="page-item disabled"><a href="#">Previous</a></li>
							<li class="page-item "><a href="#" class="page-link">1</a></li>
							<li class="page-item "><a href="#" class="page-link">2</a></li>
							<li class="page-item active"><a href="#" class="page-link">3</a></li>
							<li class="page-item "><a href="#" class="page-link">4</a></li>
							<li class="page-item "><a href="#" class="page-link">5</a></li>
							<li class="page-item "><a href="#" class="page-link">Next</a></li>
						</ul>
					</div>
				</div>
			</div>


			<!----add-modal start--------->
			<div class="modal fade" tabindex="-1" id="addEmployeeModal" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content row">
						<div class="modal-header">
							<h5 class="modal-title">Add Employees</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="form-group col">
								<label>Name</label>
								<input type="text" class="form-control" required>
							</div>
							<div class="form-group col">
								<label>Email</label>
								<input type="emil" class="form-control" required>
							</div>
							<div class="form-group col">
								<label>Address</label>
								<textarea class="form-control" required></textarea>
							</div>
							<div class="form-group col">
								<label>Phone</label>
								<input type="text" class="form-control" required>
							</div>
							<div class="form-group col">
								<label>Phone</label>
								<input type="text" class="form-control" required>
							</div>
							<div class="form-group col">
								<label>Phone</label>
								<input type="text" class="form-control" required>
							</div>
							<div class="form-group col">
								<label>Phone</label>
								<input type="text" class="form-control" required>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
							<button type="button" class="btn btn-success">Add</button>
						</div>
					</div>
				</div>
			</div>

			<!----edit-modal end--------->





			<!----edit-modal start--------->
			<div class="modal fade" tabindex="-1" id="editEmployeeModal" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Edit Employees</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label>Name</label>
								<input type="text" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Email</label>
								<input type="emil" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Address</label>
								<textarea class="form-control" required></textarea>
							</div>
							<div class="form-group">
								<label>Phone</label>
								<input type="text" class="form-control" required>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
							<button type="button" class="btn btn-success">Save</button>
						</div>
					</div>
				</div>
			</div>

			<!----edit-modal end--------->


			<!----delete-modal start--------->
			<div class="modal fade" tabindex="-1" id="deleteEmployeeModal" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Delete Employees</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<p>Are you sure you want to delete this Records</p>
							<p class="text-warning"><small>this action Cannot be Undone,</small></p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
							<button type="button" class="btn btn-success">Delete</button>
						</div>
					</div>
				</div>
			</div>

			<!----edit-modal end--------->
			<!------main-content-end----------->

			<?php include 'front-end/footer.html' ?>

			<!-- Optional JavaScript -->
			<!-- jQuery first, then Popper.js, then Bootstrap JS -->
			<script src="js/jquery-3.3.1.slim.min.js"></script>
			<script src="js/popper.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<script src="js/jquery-3.3.1.min.js"></script>


			<script type="text/javascript">
				$(document).ready(function() {
					$(".xp-menubar").on('click', function() {
						$("#sidebar").toggleClass('active');
						$("#content").toggleClass('active');
					});

					$('.xp-menubar,.body-overlay').on('click', function() {
						$("#sidebar,.body-overlay").toggleClass('show-nav');
					});

				});
			</script>
</body>

</html>