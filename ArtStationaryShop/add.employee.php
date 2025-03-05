<?php 
include('inc.header.php');

$message = $empName = $email = $password = $role = $adminID = '';
$empNameErr = $emailErr = $passwordErr = $roleErr = $adminIDErr = '';

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submitBtn'])) {
  
  // Name validation
  if(empty($_POST['empName'])) {
    $empNameErr = "Please enter employee name!";
  } else {
    $empName = test_input($_POST['empName']);
  }

  // Email validation
  if(empty($_POST['email'])) {
    $emailErr = "Please enter an email!";
  } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format!";
  } else {
    $email = test_input($_POST['email']);
  }

  // Password validation
  if(empty($_POST['password'])) {
    $passwordErr = "Please enter a password!";
  } elseif (strlen($_POST['password']) < 6) {
    $passwordErr = "Password must be at least 6 characters!";
  } else {
    $password = password_hash(test_input($_POST['password']), PASSWORD_BCRYPT);
  }

  // Role validation
  if(empty($_POST['role'])) {
    $roleErr = "Please select a role!";
  } else {
    $role = test_input($_POST['role']);
  }

  // Admin ID validation (Optional)
  $adminID = !empty($_POST['adminID']) ? test_input($_POST['adminID']) : NULL;

  // Check if there are no errors before inserting
  if(empty($empNameErr) && empty($emailErr) && empty($passwordErr) && empty($roleErr)) {

    // Escape values before inserting
    $empName = mysqli_real_escape_string($conn, $empName);
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);
    $role = mysqli_real_escape_string($conn, $role);
    $adminID = isset($adminID) ? (int)$adminID : 'NULL';

    $sql = "INSERT INTO employee (Name, Email, Password, Role, AdminID) 
            VALUES ('$empName', '$email', '$password', '$role', $adminID)";

    if(mysqli_query($conn, $sql)) {
      $message = "Employee added successfully!";
      // Clear input fields
      $empName = $email = $password = $role = $adminID = '';
    } else {
      $message = "Error: " . mysqli_error($conn);
    }
  }
}
?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Add Employee</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item"><a href="employees.php">Employees</a></li>
        <li class="breadcrumb-item active">Add Employee</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <?php if(!empty($message)) { ?>
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle me-1"></i>
            <?php echo $message; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        <?php } ?>

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Employee Registration</h5>

            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="needs-validation" novalidate>

              <div class="mb-3">
                <label for="empName" class="form-label">Employee Name</label>
                <input type="text" class="form-control" id="empName" name="empName" value="<?php echo htmlspecialchars($empName); ?>" required>
                <div class="text-danger"><?php echo $empNameErr; ?></div>
              </div>

              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required>
                <div class="text-danger"><?php echo $emailErr; ?></div>
              </div>

              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
                <div class="text-danger"><?php echo $passwordErr; ?></div>
              </div>

              <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <select class="form-select" id="role" name="role" required>
                  <option value="">Select Role</option>
                  <option value="Admin" <?php echo ($role == "Admin") ? 'selected' : ''; ?>>Admin</option>
                  <option value="Employee" <?php echo ($role == "Employee") ? 'selected' : ''; ?>>Employee</option>
                </select>
                <div class="text-danger"><?php echo $roleErr; ?></div>
              </div>

              <div class="mb-3">
                <label for="adminID" class="form-label">Admin</label>
                <select class="form-select" id="adminID" name="adminID">
                    <option selected disabled>Select Admin</option>
                    <?php
                        $admin_id = $_SESSION['AdminID'];
                        // Fetch all admins from the database
                        $adminQuery = "SELECT AdminID, Name FROM admin WHERE AdminID = '$admin_id'";
                        $adminResult = mysqli_query($conn, $adminQuery);

                        while ($adminRow = mysqli_fetch_assoc($adminResult)) {
                            $selected = ($adminRow['AdminID'] == $adminID) ? "selected" : "";
                            echo "<option value='{$adminRow['AdminID']}' $selected>{$adminRow['Name']} (ID: {$adminRow['AdminID']})</option>";
                        }
                    ?>
                </select>
            </div>


              <button type="submit" class="btn btn-primary" name="submitBtn">Submit</button>
            </form>

          </div>
        </div>

      </div>
    </div>
  </section>

</main>

<?php include('inc.footer.php'); ?>
