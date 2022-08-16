<?php session_start(); ?>
<?php require_once("../../../../db/config.php"); ?>
<?php require_once("../../../store/admins.php"); ?>



<?php
    if (!isset($_SESSION['LOGGED_ADMIN'])) header("location: ../auth/login.php");
    $ALL_ADMINS = getAllSubAdmins($conn);
?>
<!DOCTYPE html>
<!--
Template Name: NobleUI - HTML Bootstrap 5 Admin Dashboard Template
Author: NobleUI
Website: https://www.nobleui.com
Portfolio: https://themeforest.net/user/nobleui/portfolio
Contact: nobleui123@gmail.com
Purchase: https://1.envato.market/nobleui_admin
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>NobleUI - Manage Admins</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- End fonts -->

    <!-- core:css -->
    <link rel="stylesheet" href="../../../assets/vendors/core/core.css">
    <!-- endinject -->

    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../../../assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- End plugin css for this page -->

    <!-- inject:css -->
    <link rel="stylesheet" href="../../../assets/fonts/feather-font/css/iconfont.css">
    <link rel="stylesheet" href="../../../assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <!-- endinject -->

    <!-- Layout styles -->
    <link rel="stylesheet" href="../../../assets/css/demo4/style.css">
    <!-- End layout styles -->

    <link rel="shortcut icon" href="../../../assets/images/favicon.png" />
</head>

<body>
    <?php include("../../../includes/alert.php"); ?>
    <div class="main-wrapper">

        <!-- partial:partials/_navbar.html -->
        <?php include("../../../includes/pages_header.php"); ?>
        <!-- partial -->

        <div class="page-wrapper">

            <div class="page-content">

                <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
                    <div>
                        <h4 class="mb-3 mb-md-0">Manage Admins</h4>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-xl-12 stretch-card">
                        <?php
                        if (isset($_GET['edit'])) {
                            $id = $_GET['edit'];

                            $query = "SELECT * FROM `admin` WHERE `id` = '$id'";
                            $result = mysqli_query($conn, $query);

                            $row = mysqli_fetch_assoc($result);
                            ?>
                                <form method="post" action="../../../handlers/subadmin_handler.php" class="row flex-grow-1 g-4">
                                    <div class="col-md-6">
                                        <label for="username" class="mb-1">Username</label>
                                        <input type="text" name="username" value="<?= $row['username'] ?>" id="username" class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <input type="hidden" name="id" value="<?= $id; ?>">
                                        <label for="email" class="mb-1">Email</label>
                                        <input type="email" id="email" value="<?= $row['email'] ?>" name="email" class="form-control">
                                    </div>
                                    <div class="col-12 my-3">
                                        <button name="update" class="btn btn-primary">Update admin</button>
                                    </div>
                                </form>
                            <?php
                        } else {
                            ?>
                                <form method="post" action="../../../handlers/subadmin_handler.php" class="row flex-grow-1 g-4">
                                    <div class="col-md-6">
                                        <label for="username" class="mb-1">Username</label>
                                        <input type="text" name="username" id="username" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="password" class="mb-1">Password</label>
                                        <input type="password" id="password" name="password" class="form-control">
                                    </div>
                                    <div class="col-12">
                                        <label for="email" class="mb-1">Email</label>
                                        <input type="email" id="email" name="email" class="form-control">
                                    </div>
                                    <div class="col-12 my-3">
                                        <button name="add" class="btn btn-primary">Add admin</button>
                                    </div>
                                </form>
                            <?php
                        }
                        ?>

                    </div>
                </div> <!-- row -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">Sub admins</h6>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Type</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if (count($ALL_ADMINS)): $counter = 1; // { ?>
                                                <?php foreach ($ALL_ADMINS as $admin):?>
                                                    <tr>
                                                        <th><?= $counter; ?></th>
                                                        <td><?= $admin["username"] ?></td>
                                                        <td><?= $admin["email"] ?></td>
                                                        <td><?= $admin["type"] ?></td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <?php if(isset($_GET['edit'])): ?>
                                                                    <?php if($_GET['edit'] == $admin['id']): ?>
                                                                        <a href="./manage_admins.php" class="btn btn-xs btn-warning">Cancel</a>          
                                                                    <?php else: ?>
                                                                        <a href="?edit=<?= $admin['id'] ?>" class="btn btn-xs btn-primary">Edit</a>
                                                                    <?php endif; ?> 

                                                                <?php else: ?>
                                                                    <a href="?edit=<?= $admin['id'] ?>" class="btn btn-xs btn-primary">Edit</a>
                                                                <?php endif; ?>
                                                                
                                                                <a href="../../../handlers/subadmin_handler.php?delete=<?= $admin['id'] ?>" class="btn ms-2 btn-xs btn-danger">Delete</a>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                <?php $counter++; endforeach;?>
                                            <?php else: ?>
                                                <tr>
                                                    <td colspan="5">
                                                        <div class="text-center text-muted">No Subadmin found</div>
                                                    </td>
                                                </tr>
                                            <?php endif; // } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- partial:partials/_footer.html -->
            <footer class="footer border-top">
                <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between py-3 small">
                    <p class="text-muted mb-1 mb-md-0">Copyright © 2022 <a href="https://www.nobleui.com" target="_blank">NobleUI</a>.</p>
                    <p class="text-muted">Handcrafted With <i class="mb-1 text-primary ms-1 icon-sm" data-feather="heart"></i></p>
                </div>
            </footer>
            <!-- partial -->

        </div>
    </div>

    <!-- core:js -->
    <script src="../../../assets/vendors/core/core.js"></script>
    <!-- endinject -->

    <!-- Plugin js for this page -->
    <script src="../../../assets/vendors/chartjs/Chart.min.js"></script>
    <script src="../../../assets/vendors/jquery.flot/jquery.flot.js"></script>
    <script src="../../../assets/vendors/jquery.flot/jquery.flot.resize.js"></script>
    <script src="../../../assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="../../../assets/vendors/apexcharts/apexcharts.min.js"></script>
    <!-- End plugin js for this page -->

    <!-- inject:js -->
    <script src="../../../assets/vendors/feather-icons/feather.min.js"></script>
    <script src="../../../assets/js/template.js"></script>
    <!-- endinject -->

    <!-- Custom js for this page -->
    <script src="../../../assets/js/dashboard-dark.js"></script>
    <script src="../../../assets/js/datepicker.js"></script>
    <!-- End custom js for this page -->

</body>

</html>