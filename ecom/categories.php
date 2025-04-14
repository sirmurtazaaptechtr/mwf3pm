<?php
include('inc.header.php');

if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['action']) && $_GET['action'] == 'delete') {
    $id = test_input($_GET['id']);
    $sql = "DELETE FROM `categories` WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_affected_rows($conn) > 0) {
        echo("Category deleted successfully!");        
    }else {
        echo("Failed to delete category!");        
    }
}

$sql = "SELECT * FROM `categories`";
$result = mysqli_query($conn, $sql);

?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Categories</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
          <li class="breadcrumb-item active">Categories</li>          
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Categories</h5>
              <!-- <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p> -->
                <a href="category-add.php" class="btn btn-primary">+ Add Category</a>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">id</th>
                    <th scope="col">Category</th>
                    <th scope="col">Status</th>
                    <th scope="col">Actions</th>                    
                  </tr>
                </thead>
                <tbody>
                    <?php $srno = 1; while($row = mysqli_fetch_assoc($result)) {?>
                    <tr>
                        <th scope="row"><?php echo $srno;?></th>                        
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['category'];?></td>
                        <td><?php echo $row['status'];?></td>
                        <td>
                            <a href="category-edit.php?id=<?php echo $row['id'];?>" class="btn btn-primary">Edit</a>
                            <a href="categories.php?action=delete&id=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a>
                        </td>
                                      
                    </tr>
                    <?php } ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

</main><!-- End #main -->
<?php
include('inc.footer.php');
?>