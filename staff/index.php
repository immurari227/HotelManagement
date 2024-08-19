<?php
include 'header.php';
include 'config.php';

if (isset($_SESSION['user_id'])) {
   $user_id = $_SESSION['user_id'];

   // Fetch all data for the logged-in user
   $query = "SELECT * FROM staff WHERE user_id = '$user_id'";
   $result = mysqli_query($conn, $query);

   if (mysqli_num_rows($result) == 1) {
      $row = mysqli_fetch_assoc($result);

      // Display staff information





?>

      <div class="container card bg-dark text-light">
         <h1 class="card-header text-center"><?php echo "Welcome " . $row['user_name']; ?></h1>
         <div class="row">
            <div class="col-md-8 col-sm-6">
               <div class="row">
                  <div class="col-sm-6 col-md-4  col-lg-4 col-3">
                     <p><?php echo "Your Email: " . $row['email'];  ?></p>
                  </div>
                  <div class="col-sm-6 col-md-4  col-lg-4 col-3">
                     <p><?php echo "Your Aadhar No: " . $row['aadhar']; ?></p>
                  </div>
                  <div class="col-sm-6 col-md-4  col-lg-4 col-3">
                     <p><?php echo "Yor PAN No: " . $row['pan']; ?></p>
                  </div>
                  <div class="col-sm-6 col-md-4  col-lg-4 col-3">
                     <p><?php echo "Contact Number: " . $row['contact_number']; ?></p>
                  </div>
                  <div class="col-sm-6 col-md-4  col-lg-4 col-3">
                     <p><?php echo "Hire Date: " . $row['hire_date']; ?></p>
                  </div>
                  <div class="col-sm-6 col-md-4  col-lg-4 col-3">
                     <p><?php echo "Address: " . $row['address']; ?></p>
                  </div>
                  <div class="col-sm-6 col-md-4  col-lg-4 col-3">
                     <p><?php echo "Date of Birth: " . $row['dob']; ?></p>
                  </div>
               </div>
            </div>
            <div class="col-sm-6 col-md-4">
               <?php echo "<img src='" . $row['image'] . "' style='height: 400px;' />"; ?>
            </div>
         </div>
      </div>
<?php
   }
}
include 'footer.php';
?>