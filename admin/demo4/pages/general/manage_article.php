<?php session_start(); ?>
<?php require_once("../../../../db/config.php"); ?>
<?php require_once("../../../store/category.php"); ?>
<?php require_once("../../../store/article.php"); ?>
<?php
if (!isset($_SESSION['LOGGED_ADMIN'])) header("location: ../auth/login.php");

if (isset($_GET['edit'])) {
    $EDIT_ARTICLE = getOneArticle($conn, $_GET['edit']);
}

$FLAGS = ["brand", "editors", "trending"];
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

    <title>NobleUI - Manage Articles</title>

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
                        <h4 class="mb-3 mb-md-0">Manage Articles</h4>
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-12 col-xl-12 stretch-card">
                        <?php if (isset($_GET['edit'])) : ?>
                            <form action="../../../handlers/article_handler.php" class="w-100" method="post" enctype="multipart/form-data">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-6">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" value="<?= $EDIT_ARTICLE['title'] ?>" name="title" id="title" class="form-control">
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                        <label for="category" class="form-label">Category</label>
                                        <select name="category" value="<?= $EDIT_ARTICLE['category'] ?>" class="form-select" id="category">
                                            <option value="" disabled> Choose category</option>
                                            <?php foreach (getAllCategories($conn) as $category) : ?>
                                                <option value="<?= $category['category_id'] ?>">
                                                    <?= $category['category_name'] ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                        <label for="flag" class="form-label">Flag</label>
                                        <select class="form-select" value="<?= $EDIT_ARTICLE['flag'] ?>" name="flag" id="flag">
                                            <option value="" disabled>Choose flag</option>
                                            <?php foreach ($FLAGS as $flag) : ?>
                                                <option value="<?= $flag ?>"><?= $flag ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                        <label for="time" class="form-label">Time</label>
                                        <input type="text" name="time" value="<?= $EDIT_ARTICLE['time'] ?>" id="time" class="form-control">
                                    </div>

                                    <div class="col-12">
                                        <label for="image" class="form-label">Files</label>
                                        <input type="hidden" name="filename" value="<?= explode("|" ,$EDIT_ARTICLE['image'])[0]; ?>">
                                        <input type="file" accept="image/*, video/*" name="image" id="image" class="form-control">
                                        <small class="text-italic mt-2 d-block text-sm text-muted">Prev File: <?= explode("|" ,$EDIT_ARTICLE['image'])[0] ?></small>
                                    </div>

                                    <div class="col-12">
                                        <label for="content" class="form-label">Content</label>
                                        <input type="hidden" name="id" value="<?= $EDIT_ARTICLE['blog_id']; ?>">
                                        <textarea name="content" class="form-control" id="content" rows="10"><?= $EDIT_ARTICLE['content'] ?></textarea>
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-12">
                                        <button name="update" class="btn btn-primary">Update article</button>
                                    </div>
                                </div>
                            </form>
                        <?php else : ?>
                            <form action="../../../handlers/article_handler.php" class="w-100" method="post" enctype="multipart/form-data">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-6">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" name="title" id="title" class="form-control">
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                        <label for="category" class="form-label">Category</label>
                                        <select name="category" class="form-select" id="category">
                                            <option value="" selected disabled> Choose category</option>
                                            <?php foreach (getAllCategories($conn) as $category) : ?>
                                                <option value="<?= $category['category_id'] ?>">
                                                    <?= $category['category_name'] ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                        <label for="flag" class="form-label">Flag</label>
                                        <select class="form-select" name="flag" id="flag">
                                            <option value="" selected disabled>Choose flag</option>
                                            <?php foreach ($FLAGS as $flag) : ?>
                                                <option value="<?= $flag ?>"><?= $flag ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                        <label for="time" class="form-label">Time</label>
                                        <input type="text" name="time" id="time" class="form-control">
                                    </div>

                                    <div class="col-12">
                                        <label for="image" class="form-label">Files</label>
                                        <input type="file" accept="image/*, video/*" name="image" id="image" class="form-control">
                                    </div>

                                    <div class="col-12">
                                        <label for="content" class="form-label">Content</label>
                                        <textarea name="content" class="form-control" id="content" rows="10"></textarea>
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-12">
                                        <button name="add" class="btn btn-primary">Add article</button>
                                    </div>
                                </div>
                            </form>
                        <?php endif; ?>
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
                                                <th>Title</th>
                                                <th>Image / Video</th>
                                                <th>Time</th>
                                                <th>Category</th>
                                                <th>Content</th>
                                                <th>Flag</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if (count(getAllArticles($conn))) : $counter = 1; ?>
                                                <?php foreach (getAllArticles($conn) as $article) :
                                                    // image.jpg|image
                                                    $type = explode("|", $article['image'])[1];
                                                    $file = explode("|", $article['image'])[0];
                                                ?>
                                                    <tr>
                                                        <td><?= $counter ?></td>
                                                        <td><?= $article['title'] ?></td>
                                                        <td>
                                                            <?php if ($type == "image") : ?>
                                                                <img src="../../../../uploads/<?= $file; ?>" width="100" height="70" style="object-fit: contain;" />
                                                            <?php else : ?>
                                                                <video src="../../../../uploads/<?= $file; ?>" muted width="100" height="70" style="object-fit: contain;" autoplay loop></video>
                                                            <?php endif; ?>
                                                        </td>

                                                        <td><?= $article['time'] ?></td>
                                                        <td><?= getOneCatgory($conn, $article['category'])["category_name"] ?></td>
                                                        <td title="<?= $article['content'] ?>">
                                                            <?= substr($article['content'], 0, 20) . "..."; ?>
                                                        </td>
                                                        <td><?= $article['flag']; ?></td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <?php if (isset($_GET['edit'])) : ?>
                                                                    <?php if ($_GET['edit'] == $article['blog_id']) : ?>
                                                                        <a href="./manage_article.php" class="btn btn-xs btn-warning">Cancel</a>
                                                                    <?php else : ?>
                                                                        <a href="?edit=<?= $article['blog_id'] ?>" class="btn btn-xs btn-primary">Edit</a>
                                                                    <?php endif; ?>
                                                                <?php else :  ?>
                                                                    <a href="?edit=<?= $article['blog_id'] ?>" class="btn btn-xs btn-primary">Edit</a>
                                                                <?php endif;  ?>
                                                                <a href="../../../handlers/article_handler.php?delete=<?= $article["blog_id"]; ?>" class="btn btn-xs ms-2 btn-danger">Delete</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                <?php $counter++;
                                                endforeach; ?>
                                            <?php else : ?>
                                                <tr>
                                                    <td colspan="2">
                                                        <div class="text-center text-muted">No Article found</div>
                                                    </td>
                                                </tr>
                                            <?php endif; ?>
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