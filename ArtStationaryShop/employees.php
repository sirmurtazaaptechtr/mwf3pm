<?php 
include('inc.header.php');

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
              <a type="button" class="btn btn-primary"><i class="bi bi-plus me-1"></i> Add Employee</a>
              </p>

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
                  </tr>
                </thead>
                <tbody>
                <?php 
                $srno = 1; 
                while($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <th scope="row"><?php echo $srno;?></th>
                    <td><?php echo $row['EmpID'];?></td>
                    <td><?php echo $row['Name'];?></td>
                    <td><?php echo $row['Email'];?></td>
                    <td><?php echo $row['Password'];?></td>
                    <td><?php echo $row['Role'];?></td>
                    <td><?php echo $row['AdminID'];?></td>
                </tr>
                <?php
                $srno++;
                }
                ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

</main><!-- End #main -->
<?php include('inc.footer.php'); ?>