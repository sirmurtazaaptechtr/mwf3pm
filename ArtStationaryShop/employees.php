<?php 
include('inc.header.php');
$message = '';

if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['emp_id'])) {
  $empID = test_input($_GET['emp_id']);

  $sql = "DELETE FROM `employee` WHERE EmpID = $empID";
  $isDeleted = mysqli_query($conn,$sql);

  if($isDeleted) {
    $message = "Employee with id = $empID has been deleted successfully";
  }

}

$emp_sql = "SELECT * FROM `employee`";
$result = mysqli_query($conn, $emp_sql);


?>
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Employees</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Employees</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <?php // prx($result); ?>

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">All Employees</h5>
            <p>
              <a href="add.employee.php" type="button" class="btn btn-primary"><i class="bi bi-plus me-1"></i> Add
                Employee</a>
            </p>

            <div class="table-responsive">
              <?php if(!empty($message)) { ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo $message;?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              <?php } ?>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">EmpID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Role</th>
                    <th scope="col">AdminID</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                $srno = 1; 
                while($row = mysqli_fetch_assoc($result)) {
                  ?>
                  <tr>
                    <th scope="row">
                      <?php echo $srno;?>
                    </th>
                    <td>
                      <?php echo $row['EmpID'];?>
                    </td>
                    <td>
                      <?php echo $row['Name'];?>
                    </td>
                    <td>
                      <?php echo $row['Email'];?>
                    </td>
                    <!-- <td>
                      <?php echo $row['Password'];?>
                    </td> -->
                    <td>
                      <span class="password-hidden">******</span>
                      <span class="password-real d-none"><?php echo $row['Password']; ?></span>
                      <button type="button" class="btn btn-sm btn-outline-primary ms-2 toggle-password">Show</button>
                    </td>
                    <td>
                      <?php echo $row['Role'];?>
                    </td>
                    <td>
                      <?php echo $row['AdminID'];?>
                    </td>
                    <td>
                      <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="edit.employee.php?emp_id=<?php echo $row['EmpID'];?>" type="button" class="btn btn-warning">Edit</a>                        
                        <a href="employees.php?emp_id=<?php echo $row['EmpID'];?>" type="button" class="btn btn-danger">Delete</a>
                      </div>
                    </td>
                  </tr>
                  <?php
                $srno++;
              }
              ?>
                </tbody>
              </table>
            </div>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>

</main><!-- End #main -->
<script>
  document.addEventListener("DOMContentLoaded", function() {
      document.querySelectorAll('.toggle-password').forEach(button => {
          button.addEventListener('click', function() {
              let hiddenSpan = this.previousElementSibling.previousElementSibling;
              let realSpan = this.previousElementSibling;

              if (realSpan.classList.contains('d-none')) {
                  realSpan.classList.remove('d-none');
                  hiddenSpan.classList.add('d-none');
                  this.textContent = "Hide";
              } else {
                  realSpan.classList.add('d-none');
                  hiddenSpan.classList.remove('d-none');
                  this.textContent = "Show";
              }
          });
      });
  });
</script>
<?php include('inc.footer.php'); ?>