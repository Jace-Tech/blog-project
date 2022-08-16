<?php  
    if(isset($_SESSION['LOGGED_ADMIN'])) {
        $ADMIN = json_decode($_SESSION['LOGGED_ADMIN'], true);
    }
?>

<div class="horizontal-menu">

    <nav class="navbar top-navbar">
        <div class="container">
            <div class="navbar-content">
                <a href="#" class="navbar-brand">
                    Noble<span>UI</span>
                </a>
                <form class="search-form">
                    <div class="input-group">
                        <div class="input-group-text">
                            <i data-feather="search"></i>
                        </div>
                        <input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
                    </div>
                </form>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="flag-icon flag-icon-us mt-1" title="us"></i> <span class="ms-1 me-1 d-none d-md-inline-block">English</span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="languageDropdown">
                            <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-us" title="us" id="us"></i> <span class="ms-1"> English </span></a>
                            <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-fr" title="fr" id="fr"></i> <span class="ms-1"> French </span></a>
                            <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-de" title="de" id="de"></i> <span class="ms-1"> German </span></a>
                            <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-pt" title="pt" id="pt"></i> <span class="ms-1"> Portuguese </span></a>
                            <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-es" title="es" id="es"></i> <span class="ms-1"> Spanish </span></a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="profile">
                        </a>
                        <div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
                            <div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
                                <div class="mb-3">
                                    <img class="wd-80 ht-80 rounded-circle" src="https://via.placeholder.com/80x80" alt="">
                                </div>
                                <div class="text-center">
                                    <p class="tx-16 fw-bolder">
                                        <?= $ADMIN['username']; ?>
                                    </p>
                                    <p class="tx-12 text-muted">
                                        <?= $ADMIN['email']; ?>
                                    </p>
                                </div>
                            </div>
                            <ul class="list-unstyled p-1">
                                <li class="dropdown-item py-2">
                                    <a href="pages/general/profile.html" class="text-body ms-0">
                                        <i class="me-2 icon-md" data-feather="user"></i>
                                        <span>Profile</span>
                                    </a>
                                </li>
                                <li class="dropdown-item py-2">
                                    <a href="javascript:;" class="text-body ms-0">
                                        <i class="me-2 icon-md" data-feather="edit"></i>
                                        <span>Edit Profile</span>
                                    </a>
                                </li>
                                <li class="dropdown-item py-2">
                                    <a href="javascript:;" class="text-body ms-0">
                                        <i class="me-2 icon-md" data-feather="repeat"></i>
                                        <span>Switch User</span>
                                    </a>
                                </li>
                                <li class="dropdown-item py-2">
                                    <a href="../handlers/logout_handler.php" class="text-body ms-0">
                                        <i class="me-2 icon-md" data-feather="log-out"></i>
                                        <span>Log Out</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
                    <i data-feather="menu"></i>
                </button>
            </div>
        </div>
    </nav>

    <nav class="bottom-navbar">
        <div class="container">
            <ul class="nav page-navigation">
                <li class="nav-item">
                    <a class="nav-link" href="dashboard.html">
                        <i class="link-icon" data-feather="box"></i>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./pages/general/manage_admins.php" class="nav-link">
                        <i class="link-icon" data-feather="users"></i>
                        <span class="menu-title">Manage Admins</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./pages/general/manage_category.php" class="nav-link">
                        <i class="link-icon" data-feather="grid"></i>
                        <span class="menu-title">Manage Categories</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./pages/general/manage_article.php" class="nav-link">
                        <i class="link-icon" data-feather="book"></i>
                        <span class="menu-title">Manage Article</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>