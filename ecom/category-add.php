<?php
include 'inc.header.php';
?>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Form Validation</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Forms</li>
                <li class="breadcrumb-item active">Validation</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">

            <div class="col-lg-8">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Custom Styled Validation</h5>                        

                        <!-- Custom Styled Validation -->
                        <form class="row g-3 needs-validation" novalidate>

                            <div class="row mb-3">
                                <label for="categoryName" class="col-sm-2 col-form-label">Category Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="categoryName" name="category" value="John" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        Please Enter First Name.
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <label for="statusSelect" class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-10">
                                    <select class="form-select" id="statusSelect" name="status" required>
                                        <option selected disabled value="">Select Status</option>
                                        <option>Active</option>
                                        <option>Deactive</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select a valid state.
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Submit form</button>
                            </div>
                        </form><!-- End Custom Styled Validation -->

                    </div>
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->

<?php
include 'inc.footer.php';
?>
