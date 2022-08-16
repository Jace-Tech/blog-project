<nav class="navbar-menu navbar navbar-expand-lg">
    <div class="container navbar-container">
        <!-- Logo -->
        <a class="navbar-brand background-logo" href="index.html"><img src="assets/images/logo-01.png" alt="Zola"></a>
        <!-- /.Logo -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <?php foreach (getAllCategories($conn) as $category): ?>
                    <li class="nav-item">
                        <a href="./blogs.php?category=<?= $category['category_id'] ?>" class="nav-link">
                            <?= $category['category_name']; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <button type="button" id="sidebarCollapse" class="navbar-toggler active" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</nav>