<?php
include 'header.php';

?>
<div class="container-fluid">
  <div class="card">
    <h1 class="card-header">View</h1>
    <?php
    $result = mysqli_query($conn, "SELECT * FROM staff");
    $i = 1;
    while ($row = mysqli_fetch_array($result)) {
    ?>

      <div class="container  pb-3">
        <div class="row border-bottom">

          <div class="col-md-8 col-sm-12">
            <div class="row">
              <div class="col-sm-6 col-md-3">
                <div class="fw-bold">User ID</div>
                <div><?php echo $row['user_id']; ?></div>
              </div>

              <div class="col-sm-6 col-md- ">
                <div class="fw-bold">Password</div>
                <div><?php echo $row['password']; ?></div>
              </div>


              <div class="col-sm-6 col-md-3">
                <div class="fw-bold">User Name</div>
                <div><?php echo $row['user_name']; ?></div>
              </div>


              <div class="col-sm-6 col-md-3">
                <div class="fw-bold">Email</div>
                <div><?php echo $row['email']; ?></div>
              </div>


              <div class="col-sm-6 col-md-3">
                <div class="fw-bold">Aaddhar No</div>
                <div><?php echo $row['aadhar']; ?></div>
              </div>


              <div class="col-sm-6 col-md-3">
                <div class="fw-bold">Pan No</div>
                <div><?php echo $row['pan']; ?></div>
              </div>


              <div class="col-sm-6 col-md-3 ">
                <div class="fw-bold">Contact No</div>
                <div><?php echo $row['contact_number']; ?></div>
              </div>


              <div class="col-sm-6 col-md-3 ">
                <div class="fw-bold">Date of Joining</div>
                <div><?php echo $row['hire_date']; ?></div>
              </div>


              <div class="col-sm-6 col-md-3 ">
                <div class="fw-bold">Address</div>
                <div><?php echo $row['address']; ?></div>
              </div>


              <div class="col-sm-6 col-md-3 ">
                <div class="fw-bold">Date of Birth</div>
                <div><?php echo $row['dob']; ?></div>
              </div>


            </div>
          </div>


          <div class="col-sm-12 col-md-4 col-4 justify-content-between">
            <div class="col-4 fw-bold text-center">Image </div>
            <div class="col-4 mb-2 img-fluid">
              <?php echo "<img src='" . $row['image'] . "' style='height: 300px; width:300px' />"; ?>
            </div>

            <a href="staff_update.php?id=<?php echo $row['user_id']; ?>" class="text-decoration-none btn  btn-outline-primary">Update</a>
            <a href="delete_staff.php?aadhar=<?php echo $row['aadhar']; ?>" class="text-decoration-none btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete this record?">Delete</a>

          </div>


        </div>


      </div>

    <?php
      $i++;
    }

    ?>
  </div>
</div>

<?php
include 'footer.php'
?>