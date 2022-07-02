
<?php include "includes/doctype.php"?>

    <div class="container">
        <div class="row">
            <div class="col-md-12"><br>
                <?php 
                
                if (isset($_SESSION['status'])) {
                ?>
                    <h4 class="alert alert-success"><?php echo $_SESSION['status'] ?></h4>
                <?php
                    unset($_SESSION['status']); 
                }
                ?>
                <br><br>
                <div class="card-mt-4">
                    <div class="card-header">
                        <h4> How to insert multiple data into database in PHP MySQL 
                            <a href="javascript:void(0)" class="add-more-form float-end btn btn-primary"> <i class="bi bi-person-plus-fill"></i> ADD MORE </a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <form action="controller.php" method="POST">

                            <div class="main-form mt-3 border-bottom">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group mb-4">
                                            <label for="fullName"> Full Name </label>
                                            <input type="text" class="form-control" name="fullName[]" id="fullName" placeholder="Enter Name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-4">
                                            <label for="phone"> Phone No. </label>
                                            <input type="text" class="form-control" name="phone[]" id="phone" maxlength="10" placeholder="Enter Phone">
                                        </div>
                                    </div>
                                    
                                </div>
                            </div><br>
                                <div class="paste-new-forms"></div>
                                <button type="submit" class="btn btn-success" name="saveMulti"> <i class="bi bi-server"></i> Submit </button>
                                <br><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>    

    <?php include "includes/scripts.php"?>

    