<?php
include('functions.php');
$name = $cnic = $email = $website = $comments = $gender = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['save_btn'])) {
    // pr($_POST);
    $name = $_POST['full_name'];
    $cnic = $_POST['cnic'];
    $email = $_POST['email_address'];
    $website = $_POST['website'];
    $comments = $_POST['comments'];
    $gender = $_POST['gender'];
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main class="container">

        <h1>Presonal Information Card</h1>
        <p class="text-danger">* required</p>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <div class="row mb-3">
                <div class="col-6">
                    <label for="name" class="form-label">FullName</label>
                    <input type="text" class="form-control" id="name" name="full_name" placeholder="Jane Dow" value="<?php echo $name;?>">
                </div>
                <div class="col-6">
                    <span class="text-danger">*</span>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-6">
                    <label for="cnic" class="form-label">CNIC</label>
                    <input type="text" class="form-control" id="cnic" name="cnic" placeholder="XXXXX-XXXXXXX-X" value="<?php echo $cnic;?>">
                </div>
                <div class="col-6">
                    <span class="text-danger">*</span>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-6">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email_address" placeholder="name@example.com" value="<?php echo $email;?>">
                </div>
                <div class="col-6">
                    <span class="text-danger">*</span>
                </div>
            </div>
            <div class="row mb-3">
                <label for="url" class="form-label">Website</label>
                <input type="url" class="form-control" id="url" name="website" placeholder="https://www.example.com" value="<?php echo $website;?>">
            </div>
            <div class="row mb-3">
                <label for="comments" class="form-label">Comments</label>
                <textarea class="form-control" id="comments" name="comments" rows="3"><?php echo $comments;?></textarea>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Gender</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="M" <?php if($gender == 'M' || $gender == ''){echo " checked";}?>>
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="F" <?php if($gender == 'F'){echo " checked";}?>>
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="others" value="O" <?php if($gender == 'O'){echo " checked";}?>>
                        <label class="form-check-label" for="others">Others</label>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <input type="reset" class="btn btn-danger" value="Clear">
                <input type="submit" class="btn btn-success" name="save_btn" value="Save">
            </div>
        </form>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>