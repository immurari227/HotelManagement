<?php
include 'config.php';
include 'header.php';
if (!file_exists('uploads')) {
    mkdir('uploads');
}

if (isset($_POST['submit'])) {
    $user_id = $_POST['user_id'];
    $password = $_POST['password'];
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $aadhar = $_POST['aadhar'];
    $pan = $_POST['pan'];
    $contact_number = $_POST['contact_number'];
    $hire_date = $_POST['hire_date'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];

    $filename = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];
    $folder = 'uploads/' . $filename;
    move_uploaded_file($_FILES['image']['tmp_name'],$folder);

// Update 
$sql = "UPDATE staff SET user_id='$user_id',password='$password',user_name='$user_name',email='$email',aadhar='$aadhar',pan='$pan',contact_number='$contact_number',hire_date='$hire_date',address='$address',dob='$dob',image='$folder' WHERE user_id='$user_id'";


if (mysqli_query($conn, $sql)){
    echo "Record updated successfully";

} else {
    echo "Error updating record: " . mysqli_error($conn);
}


}

   


// Get data
if (isset($_GET['id'])) {
    $user_id = $_GET['id'];


    // Retrive data
    $sql = "SELECT * FROM staff WHERE user_id ='$user_id'";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
}
?>
<!--- here for add new staff Start --->
<div class="container">
	<div class="card">
	
		<h2 class="text-dark text-center fw-bold p-2 card-header">Update Staff </h2>
	

	<hr>
		
		<form action="" method="post" class="card-body" enctype="multipart/form-data">

			<div class="mb-3">
				
				<input type="hidden" class="form-control" id="user_id" placeholder="User Id" name="user_id" required value="<?php echo $row['user_id']; ?>">
			</div>

			<div class="mb-3">
				<label for="password" class="form-label fw-bold">Password<span class="text-danger p-2">*</span></label>
				<input type="password" class="form-control id="password" name="password" required value="<?php echo $row['password']; ?>">
			</div>

			<div class="mb-3">
				<label for="name" class="form-label fw-bold">Staff Name<span class="text-danger p-2">*</span></label>
				<input type="text" class="form-control" id="id" placeholder="Name" name="user_name" required value="<?php echo $row['user_name']; ?>">
			</div>

			<div class="mb-3">
				<label for="email" class="form-label fw-bold">Staff Email ID</label>
				<input type="email" class="form-control" id="email" name="email" placeholder="Email Id" value="<?php echo $row['email']; ?>">
			</div>

			<div class="mb-3">
				<label for="aadhar" class="form-label fw-bold">Addhar Number<span class="text-danger p-2">*</span></label>
				<input type="text" class="form-control" id="aadhar" placeholder="Addhar Number" name="aadhar" required value="<?php echo $row['aadhar']; ?>">
			</div>

			<div class="mb-3">
				<label for="pan" class="form-label fw-bold">Pan<span class="text-danger p-2">*</span></label>
				<input type="text" class="form-control" id="pan" placeholder="PAN" name="pan" required value="<?php echo $row['pan']; ?>">
			</div>

			<div class="mb-3">
				<label for="contact" class="form-label fw-bold">Contact No<span class="text-danger p-2">*</span></label>
				<input type="number" class="form-control" id="contact" placeholder="Contact No" name="contact_number" required min="0" max="9999999999" value="<?php echo $row['contact_number']; ?>">
			</div>

			<div class="mb-3">
				<label for="photo" class="form-label fw-bold">Passport Size Photo</label>
                <img src="<?php echo $row['image']; ?>" width="100px">
				<input type="file" class="form-control" id="photo" name="image">
			</div>

			<div class="mb-3">
				<label for="name" class="form-label fw-bold">Joining Date<span class="text-danger p-2">*</span></label>
				<input type="date" class="form-control" id="datePicker" name="hire_date"  required value="<?php echo $row['hire_date']; ?>">
			</div>

			<div class="mb-3">
				<label for="address" class="form-label fw-bold">Address<span class="text-danger p-2">*</span></label>
				<input type="text" class="form-control" id="address" placeholder="Enter your address" name="address" required value="<?php echo $row['address']; ?>">
			</div>


			<div class="mb-3">
				<label for="name" class="form-label fw-bold">Date of Birth<span class="text-danger p-2">*</span></label>
				<input type="date" class="form-control" id="dob" placeholder="Date of Birth" name="dob" required value="<?php echo $row['dob']; ?>">
			</div>
			
			<div class="mb-3 text-center">
			<button type="submit" name="submit" class="btn btn-success px-3 fw-bold ">Update</button>
			</div>
		</form>
	</div>
</div>
<!--- here for add new staff End--->

<?php
include 'footer.php';
?>