<?php
include 'header.php';
?>

<!--- here for add new staff Start --->
<div class="container">
	<div class="card">

		<h2 class="text-dark fw-bold p-2 card text-center">Add New Staff </h2>
	
		
		<form action="insert_staff.php" method="post" class="card-body" enctype="multipart/form-data">

			<div class="mb-3">
				<label for="ID" class="form-label fw-bold">User ID<span class="text-danger p-2">*</span></label>
				<input type="text" class="form-control" id="user_id" placeholder="User Id" name="user_id" required>
			</div>

			<div class="mb-3">
				<label for="password" class="form-label fw-bold">Password<span class="text-danger p-2">*</span></label>
				<input type="password" class="form-control id="password" name="password" required>
			</div>

			<div class="mb-3">
				<label for="name" class="form-label fw-bold">Staff Name<span class="text-danger p-2">*</span></label>
				<input type="text" class="form-control" id="id" placeholder="Name" name="user_name" required>
			</div>

			<div class="mb-3">
				<label for="email" class="form-label fw-bold">Staff Email ID</label>
				<input type="email" class="form-control" id="email" name="email" placeholder="Email Id">
			</div>

			<div class="mb-3">
				<label for="aadhar" class="form-label fw-bold">Addhar Number<span class="text-danger p-2">*</span></label>
				<input type="text" class="form-control" id="aadhar" placeholder="Addhar Number" name="aadhar" required>
			</div>

			<div class="mb-3">
				<label for="pan" class="form-label fw-bold">Pan<span class="text-danger p-2">*</span></label>
				<input type="text" class="form-control" id="pan" placeholder="PAN" name="pan" required>
			</div>

			<div class="mb-3">
				<label for="contact" class="form-label fw-bold">Contact No<span class="text-danger p-2">*</span></label>
				<input type="number" class="form-control" id="contact" placeholder="Contact No" name="contact_number" required min="0" max="9999999999">
			</div>

			<div class="mb-3">
				<label for="photo" class="form-label fw-bold">Passport Size Photo</label>
				<input type="file" class="form-control" id="photo" name="image">
			</div>

			<div class="mb-3">
				<label for="name" class="form-label fw-bold">Hire Date<span class="text-danger p-2">*</span></label>
				<input type="date" class="form-control" id="datePicker" name="hire_date" required>
			</div>

			<div class="mb-3">
				<label for="address" class="form-label fw-bold">Address<span class="text-danger p-2">*</span></label>
				<input type="text" class="form-control" id="address" placeholder="Enter your address" name="address" required>
			</div>


			<div class="mb-3">
				<label for="name" class="form-label fw-bold">Date of Birth<span class="text-danger p-2">*</span></label>
				<input type="date" class="form-control" id="dob" placeholder="Date of Birth" name="dob" required>
			</div>
			
			<div class="mb-3 text-center">
			<button type="submit" class="btn btn-success px-3 fw-bold ">Submit</button>
			</div>
		</form>
	</div>
</div>
<!--- here for add new staff End--->
<?php



include 'footer.php';
?>	