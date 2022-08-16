<?php require("./db/config.php"); ?>
<?php require("./admin/store/category.php"); ?>
<?php require("./admin/store/article.php"); ?>


<?php  
	if(!isset($_GET['category'])) header("Location: ./index.php");
	$category = getOneCatgory($conn, $_GET['category']);

	$allCategoryPosts = array_filter(getAllArticles($conn), function ($item) {
		return $item['category'] == $_GET['category'];
	});
?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Zola">
    <meta name="description" content="Concept Magazine News Blogs">
    <title>Zola | <?= $category['category_name']; ?></title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png">
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <!-- Swiper Slider -->
    <link rel="stylesheet" href="assets/css/swiper.min.css" type="text/css">
    <!-- Fonts -->
    <link rel="stylesheet" href="assets/fonts/fontawesome/font-awesome.min.css">
    <!-- OWL Carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css" type="text/css">
    <!-- Animate -->
    <link rel="stylesheet" href="assets/css/animate.min.css" type="text/css">
    <!-- NProgress -->
    <link rel="stylesheet" href="assets/css/nprogress.css" type="text/css">
    <!-- Style -->
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
</head>
<body>
    <!-- Section Navbar V1 -->
    <header class="header-01">
    	<div class="topbar-01">
    		<div class="container">
    			<div class="row">
    				<div class="left col-6">
		    			<div class="today">
		    				<p>Today</p>
		    			</div>
		    			<div class="searchbar">
		    				<form action="#" method="post">
			                    <input type="text" name="search" placeholder="I'm searching for .." required>
			                    <button type="submit">
			                    	<img src="assets/images/svg/050-magnifying-glass.svg" alt="Zola">
			                    </button>
			                </form>
		    			</div>
		    		</div>
    			</div>
    		</div>
    	</div>
		<?php include("./include/nav.php"); ?>
    </header>
	<!-- /.Section Navbar V1 -->
	<!-- Section Slider 02 -->
	<div id="section-slider" class="slider04">
		<?php if(count($allCategoryPosts)): ?>
			<!-- Slider Content -->
			<div class="slider-content">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<!-- Item -->
							<div class="thumbnail-1">
								<a href="#">
									<img src="assets/images/thumbnail_70.jpg" alt="Zola">
									<div class="overlay">
										<div class="overlay-content">
											<div class="list-users-02">
												<ul class="images">
													<li><img src="assets/images/profile_7.jpg" alt="Zola"></li>
												</ul>
												<p><span>Dany Janssen</span></p>
												<h3>The most Influential Model of this year has been the Young Writer of Books</h3>
												<div class="like">
													<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 481.567 481.567" style="enable-background:new 0 0 481.567 481.567;" xml:space="preserve">
															<path d="M424.7,55.841c-19.8-15.2-43.3-25-68.1-28.2c-42.6-5.6-84.3,7.4-115.8,35.6c-31.5-28.5-73.4-41.5-116.2-35.8
																c-24.8,3.3-48.4,13.2-68.3,28.6c-35.8,27.9-56.4,69.6-56.3,114.6c0,38.5,15.1,74.8,42.4,102.1l172.9,172.9
																c6.6,6.6,15.2,9.8,23.8,9.8c8.6,0,17.2-3.3,23.8-9.8l26.8-26.8c7-7,7-18.4,0-25.5c-7-7-18.4-7-25.5,0l-25.1,25.1l-171.2-171.3
																c-20.5-20.5-31.8-47.7-31.9-76.7c0-33.7,15.4-65.1,42.4-86.1c14.8-11.5,32.4-18.9,50.9-21.3c34.2-4.5,67.6,6.7,91.7,30.9
																l19.8,19.8l19.6-19.6c24-24.1,57.4-35.3,91.5-30.8c18.5,2.4,36,9.7,50.8,21c28.2,21.7,43.8,54.4,42.8,89.6
																c-0.8,27.7-12.9,54.6-33.9,75.7l-91.2,91.1c-7,7-7,18.4,0,25.5c7,7,18.4,7,25.5,0l91.2-91.2c27.6-27.6,43.4-63.1,44.4-100.1
																C482.9,128.041,462.2,84.641,424.7,55.841z"></path>
													</svg>
													753 Likes
												</div>
											</div>
										</div>
									</div>
								</a>
							</div>
							<!-- /.Item -->
							<!-- Item -->
							<div class="thumbnail-1">
								<a href="#">
									<img src="assets/images/thumbnail_71.jpg" alt="Zola">
									<div class="overlay">
										<div class="overlay-content">
											<div class="list-users-02">
												<ul class="images">
													<li><img src="assets/images/profile_11.jpg" alt="Zola"></li>
												</ul>
												<p><span>Dany Janssen</span></p>
												<h3>More than 4 Million Sales have Been recorded so Far this Last Quarter</h3>
												<div class="like">
													<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 481.567 481.567" style="enable-background:new 0 0 481.567 481.567;" xml:space="preserve">
															<path d="M424.7,55.841c-19.8-15.2-43.3-25-68.1-28.2c-42.6-5.6-84.3,7.4-115.8,35.6c-31.5-28.5-73.4-41.5-116.2-35.8
																c-24.8,3.3-48.4,13.2-68.3,28.6c-35.8,27.9-56.4,69.6-56.3,114.6c0,38.5,15.1,74.8,42.4,102.1l172.9,172.9
																c6.6,6.6,15.2,9.8,23.8,9.8c8.6,0,17.2-3.3,23.8-9.8l26.8-26.8c7-7,7-18.4,0-25.5c-7-7-18.4-7-25.5,0l-25.1,25.1l-171.2-171.3
																c-20.5-20.5-31.8-47.7-31.9-76.7c0-33.7,15.4-65.1,42.4-86.1c14.8-11.5,32.4-18.9,50.9-21.3c34.2-4.5,67.6,6.7,91.7,30.9
																l19.8,19.8l19.6-19.6c24-24.1,57.4-35.3,91.5-30.8c18.5,2.4,36,9.7,50.8,21c28.2,21.7,43.8,54.4,42.8,89.6
																c-0.8,27.7-12.9,54.6-33.9,75.7l-91.2,91.1c-7,7-7,18.4,0,25.5c7,7,18.4,7,25.5,0l91.2-91.2c27.6-27.6,43.4-63.1,44.4-100.1
																C482.9,128.041,462.2,84.641,424.7,55.841z"></path>
													</svg>
													753 Likes
												</div>
											</div>
										</div>
									</div>
								</a>
							</div>
							<!-- /.Item -->
						</div>
					</div>
				</div>
			</div>
			<!-- /.Slider Content -->
		<?php else: ?>
			<div class="text-muted text-md py-5">No Post found</div>
		<?php endif; ?>
    </div>
    <!-- /.Section Slider 02 -->
    <!-- Section Contents -->
    <div id="section-contents">
    	<div class="container">
    		<div class="row">
    			<div class="col-12 col-lg-8">
    				<div class="row">
		    			<div class="col-12 col-lg-6">
			    			<div class="block-style-12">
								<!-- Contents -->
								<div class="contents">
									<!-- Thumbnail -->
									<div class="thumbnail-1">
										<span class="bg-purple">Travel</span>
										<a href="#">
											<img src="assets/images/thumbnail_59.jpg" alt="Zola">
										</a>
									</div>
									<!-- /.Thumbnail -->
									<!-- Content Wrapper -->
									<div class="content-wrapper">
										<!-- line -->
										<div class="line">
										</div>
										<!-- /.line -->
										<!-- Title -->
										<div class="title">
											<a href="#">
												<h2>Magical places to Visit and Ven- ture to know</h2>
											</a>
										</div>
										<!-- /.Title -->
										<!-- Description -->
										<div class="desc">
											<p>Etiam eget erat accumsan, tempus purus a, sagittis nisi. Praesent laoreet interdum diam, ac ornare dolor mattis up.</p>
										</div>
										<!-- /.Description -->
									</div>
									<!-- Content Wrapper -->
									<!-- Peoples -->
									<div class="peoples">
										<div class="list-users-04">
						    				<ul class="images">
						    					<li><img src="assets/images/profile_25.jpg" alt="Zola"></li>
						    				</ul>
						    				<p>Linda Tithoms</p>
					    				</div>
									</div>
				    				<!-- /.Peoples -->
								</div>
								<!-- /.Contents -->
							</div>
						</div>
						<div class="col-12 col-lg-6">
			    			<div class="block-style-12">
								<!-- Contents -->
								<div class="contents">
									<!-- Thumbnail -->
									<div class="thumbnail-1">
										<span class="bg-purple">Travel</span>
										<a href="#">
											<img src="assets/images/thumbnail_60.jpg" alt="Zola">
										</a>
									</div>
									<!-- /.Thumbnail -->
									<!-- Content Wrapper -->
									<div class="content-wrapper">
										<!-- line -->
										<div class="line">
										</div>
										<!-- /.line -->
										<!-- Title -->
										<div class="title">
											<a href="#">
												<h2>Magical places to Visit and Ven- ture to know</h2>
											</a>
										</div>
										<!-- /.Title -->
										<!-- Description -->
										<div class="desc">
											<p>Etiam eget erat accumsan, tempus purus a, sagittis nisi. Praesent laoreet interdum diam, ac ornare dolor mattis up.</p>
										</div>
										<!-- /.Description -->
									</div>
									<!-- Content Wrapper -->
									<!-- Peoples -->
									<div class="peoples">
										<div class="list-users-04">
						    				<ul class="images">
						    					<li><img src="assets/images/profile_25.jpg" alt="Zola"></li>
						    				</ul>
						    				<p>Linda Tithoms</p>
					    				</div>
									</div>
				    				<!-- /.Peoples -->
								</div>
								<!-- /.Contents -->
							</div>
						</div>
						<div class="col-12 col-lg-6">
			    			<div class="block-style-12">
								<!-- Contents -->
								<div class="contents">
									<!-- Thumbnail -->
									<div class="thumbnail-1">
										<span class="bg-purple">Travel</span>
										<a href="#">
											<img src="assets/images/thumbnail_62.jpg" alt="Zola">
										</a>
									</div>
									<!-- /.Thumbnail -->
									<!-- Content Wrapper -->
									<div class="content-wrapper">
										<!-- line -->
										<div class="line">
										</div>
										<!-- /.line -->
										<!-- Title -->
										<div class="title">
											<a href="#">
												<h2>Magical places to Visit and Ven- ture to know</h2>
											</a>
										</div>
										<!-- /.Title -->
										<!-- Description -->
										<div class="desc">
											<p>Etiam eget erat accumsan, tempus purus a, sagittis nisi. Praesent laoreet interdum diam, ac ornare dolor mattis up.</p>
										</div>
										<!-- /.Description -->
									</div>
									<!-- Content Wrapper -->
									<!-- Peoples -->
									<div class="peoples">
										<div class="list-users-04">
						    				<ul class="images">
						    					<li><img src="assets/images/profile_25.jpg" alt="Zola"></li>
						    				</ul>
						    				<p>Linda Tithoms</p>
					    				</div>
									</div>
				    				<!-- /.Peoples -->
								</div>
								<!-- /.Contents -->
							</div>
						</div>
						<div class="col-12 col-lg-6">
			    			<div class="block-style-12">
								<!-- Contents -->
								<div class="contents">
									<!-- Thumbnail -->
									<div class="thumbnail-1">
										<span class="bg-purple">Travel</span>
										<a href="#">
											<img src="assets/images/thumbnail_63.jpg" alt="Zola">
										</a>
									</div>
									<!-- /.Thumbnail -->
									<!-- Content Wrapper -->
									<div class="content-wrapper">
										<!-- line -->
										<div class="line">
										</div>
										<!-- /.line -->
										<!-- Title -->
										<div class="title">
											<a href="#">
												<h2>Magical places to Visit and Ven- ture to know</h2>
											</a>
										</div>
										<!-- /.Title -->
										<!-- Description -->
										<div class="desc">
											<p>Etiam eget erat accumsan, tempus purus a, sagittis nisi. Praesent laoreet interdum diam, ac ornare dolor mattis up.</p>
										</div>
										<!-- /.Description -->
									</div>
									<!-- Content Wrapper -->
									<!-- Peoples -->
									<div class="peoples">
										<div class="list-users-04">
						    				<ul class="images">
						    					<li><img src="assets/images/profile_25.jpg" alt="Zola"></li>
						    				</ul>
						    				<p>Linda Tithoms</p>
					    				</div>
									</div>
				    				<!-- /.Peoples -->
								</div>
								<!-- /.Contents -->
							</div>
						</div>
						<div class="col-12 col-lg-6">
			    			<div class="block-style-12">
								<!-- Contents -->
								<div class="contents">
									<!-- Thumbnail -->
									<div class="thumbnail-1">
										<span class="bg-purple">Travel</span>
										<a href="#">
											<img src="assets/images/thumbnail_64.jpg" alt="Zola">
										</a>
									</div>
									<!-- /.Thumbnail -->
									<!-- Content Wrapper -->
									<div class="content-wrapper">
										<!-- line -->
										<div class="line">
										</div>
										<!-- /.line -->
										<!-- Title -->
										<div class="title">
											<a href="#">
												<h2>Magical places to Visit and Ven- ture to know</h2>
											</a>
										</div>
										<!-- /.Title -->
										<!-- Description -->
										<div class="desc">
											<p>Etiam eget erat accumsan, tempus purus a, sagittis nisi. Praesent laoreet interdum diam, ac ornare dolor mattis up.</p>
										</div>
										<!-- /.Description -->
									</div>
									<!-- Content Wrapper -->
									<!-- Peoples -->
									<div class="peoples">
										<div class="list-users-04">
						    				<ul class="images">
						    					<li><img src="assets/images/profile_25.jpg" alt="Zola"></li>
						    				</ul>
						    				<p>Linda Tithoms</p>
					    				</div>
									</div>
				    				<!-- /.Peoples -->
								</div>
								<!-- /.Contents -->
							</div>
						</div>
						<div class="col-12 col-lg-6">
			    			<div class="block-style-12">
								<!-- Contents -->
								<div class="contents">
									<!-- Thumbnail -->
									<div class="thumbnail-1">
										<span class="bg-purple">Travel</span>
										<a href="#">
											<img src="assets/images/thumbnail_65.jpg" alt="Zola">
										</a>
									</div>
									<!-- /.Thumbnail -->
									<!-- Content Wrapper -->
									<div class="content-wrapper">
										<!-- line -->
										<div class="line">
										</div>
										<!-- /.line -->
										<!-- Title -->
										<div class="title">
											<a href="#">
												<h2>Magical places to Visit and Ven- ture to know</h2>
											</a>
										</div>
										<!-- /.Title -->
										<!-- Description -->
										<div class="desc">
											<p>Etiam eget erat accumsan, tempus purus a, sagittis nisi. Praesent laoreet interdum diam, ac ornare dolor mattis up.</p>
										</div>
										<!-- /.Description -->
									</div>
									<!-- Content Wrapper -->
									<!-- Peoples -->
									<div class="peoples">
										<div class="list-users-04">
						    				<ul class="images">
						    					<li><img src="assets/images/profile_25.jpg" alt="Zola"></li>
						    				</ul>
						    				<p>Linda Tithoms</p>
					    				</div>
									</div>
				    				<!-- /.Peoples -->
								</div>
								<!-- /.Contents -->
							</div>
						</div>
						<div class="col-12 col-lg-6">
			    			<div class="block-style-12">
								<!-- Contents -->
								<div class="contents">
									<!-- Thumbnail -->
									<div class="thumbnail-1">
										<span class="bg-purple">Travel</span>
										<a href="#">
											<img src="assets/images/thumbnail_66.jpg" alt="Zola">
										</a>
									</div>
									<!-- /.Thumbnail -->
									<!-- Content Wrapper -->
									<div class="content-wrapper">
										<!-- line -->
										<div class="line">
										</div>
										<!-- /.line -->
										<!-- Title -->
										<div class="title">
											<a href="#">
												<h2>Magical places to Visit and Ven- ture to know</h2>
											</a>
										</div>
										<!-- /.Title -->
										<!-- Description -->
										<div class="desc">
											<p>Etiam eget erat accumsan, tempus purus a, sagittis nisi. Praesent laoreet interdum diam, ac ornare dolor mattis up.</p>
										</div>
										<!-- /.Description -->
									</div>
									<!-- Content Wrapper -->
									<!-- Peoples -->
									<div class="peoples">
										<div class="list-users-04">
						    				<ul class="images">
						    					<li><img src="assets/images/profile_25.jpg" alt="Zola"></li>
						    				</ul>
						    				<p>Linda Tithoms</p>
					    				</div>
									</div>
				    				<!-- /.Peoples -->
								</div>
								<!-- /.Contents -->
							</div>
						</div>
						<div class="col-12 col-lg-6">
			    			<div class="block-style-12">
								<!-- Contents -->
								<div class="contents">
									<!-- Thumbnail -->
									<div class="thumbnail-1">
										<span class="bg-purple">Travel</span>
										<a href="#">
											<img src="assets/images/thumbnail_67.jpg" alt="Zola">
										</a>
									</div>
									<!-- /.Thumbnail -->
									<!-- Content Wrapper -->
									<div class="content-wrapper">
										<!-- line -->
										<div class="line">
										</div>
										<!-- /.line -->
										<!-- Title -->
										<div class="title">
											<a href="#">
												<h2>Magical places to Visit and Ven- ture to know</h2>
											</a>
										</div>
										<!-- /.Title -->
										<!-- Description -->
										<div class="desc">
											<p>Etiam eget erat accumsan, tempus purus a, sagittis nisi. Praesent laoreet interdum diam, ac ornare dolor mattis up.</p>
										</div>
										<!-- /.Description -->
									</div>
									<!-- Content Wrapper -->
									<!-- Peoples -->
									<div class="peoples">
										<div class="list-users-04">
						    				<ul class="images">
						    					<li><img src="assets/images/profile_25.jpg" alt="Zola"></li>
						    				</ul>
						    				<p>Linda Tithoms</p>
					    				</div>
									</div>
				    				<!-- /.Peoples -->
								</div>
								<!-- /.Contents -->
							</div>
						</div>
						<div class="col-12 col-lg-6">
			    			<div class="block-style-12">
								<!-- Contents -->
								<div class="contents">
									<!-- Thumbnail -->
									<div class="thumbnail-1">
										<span class="bg-purple">Travel</span>
										<a href="#">
											<img src="assets/images/thumbnail_68.jpg" alt="Zola">
										</a>
									</div>
									<!-- /.Thumbnail -->
									<!-- Content Wrapper -->
									<div class="content-wrapper">
										<!-- line -->
										<div class="line">
										</div>
										<!-- /.line -->
										<!-- Title -->
										<div class="title">
											<a href="#">
												<h2>Magical places to Visit and Ven- ture to know</h2>
											</a>
										</div>
										<!-- /.Title -->
										<!-- Description -->
										<div class="desc">
											<p>Etiam eget erat accumsan, tempus purus a, sagittis nisi. Praesent laoreet interdum diam, ac ornare dolor mattis up.</p>
										</div>
										<!-- /.Description -->
									</div>
									<!-- Content Wrapper -->
									<!-- Peoples -->
									<div class="peoples">
										<div class="list-users-04">
						    				<ul class="images">
						    					<li><img src="assets/images/profile_25.jpg" alt="Zola"></li>
						    				</ul>
						    				<p>Linda Tithoms</p>
					    				</div>
									</div>
				    				<!-- /.Peoples -->
								</div>
								<!-- /.Contents -->
							</div>
						</div>
						<div class="col-12 col-lg-6">
			    			<div class="block-style-12">
								<!-- Contents -->
								<div class="contents">
									<!-- Thumbnail -->
									<div class="thumbnail-1">
										<span class="bg-purple">Travel</span>
										<a href="#">
											<img src="assets/images/thumbnail_69.jpg" alt="Zola">
										</a>
									</div>
									<!-- /.Thumbnail -->
									<!-- Content Wrapper -->
									<div class="content-wrapper">
										<!-- line -->
										<div class="line">
										</div>
										<!-- /.line -->
										<!-- Title -->
										<div class="title">
											<a href="#">
												<h2>Magical places to Visit and Ven- ture to know</h2>
											</a>
										</div>
										<!-- /.Title -->
										<!-- Description -->
										<div class="desc">
											<p>Etiam eget erat accumsan, tempus purus a, sagittis nisi. Praesent laoreet interdum diam, ac ornare dolor mattis up.</p>
										</div>
										<!-- /.Description -->
									</div>
									<!-- Content Wrapper -->
									<!-- Peoples -->
									<div class="peoples">
										<div class="list-users-04">
						    				<ul class="images">
						    					<li><img src="assets/images/profile_25.jpg" alt="Zola"></li>
						    				</ul>
						    				<p>Linda Tithoms</p>
					    				</div>
									</div>
				    				<!-- /.Peoples -->
								</div>
								<!-- /.Contents -->
							</div>
						</div>
						<div class="col-12 col-lg-6">
			    			<div class="block-style-12">
								<!-- Contents -->
								<div class="contents">
									<!-- Thumbnail -->
									<div class="thumbnail-1">
										<span class="bg-purple">Travel</span>
										<a href="#">
											<img src="assets/images/thumbnail_59.jpg" alt="Zola">
										</a>
									</div>
									<!-- /.Thumbnail -->
									<!-- Content Wrapper -->
									<div class="content-wrapper">
										<!-- line -->
										<div class="line">
										</div>
										<!-- /.line -->
										<!-- Title -->
										<div class="title">
											<a href="#">
												<h2>Magical places to Visit and Ven- ture to know</h2>
											</a>
										</div>
										<!-- /.Title -->
										<!-- Description -->
										<div class="desc">
											<p>Etiam eget erat accumsan, tempus purus a, sagittis nisi. Praesent laoreet interdum diam, ac ornare dolor mattis up.</p>
										</div>
										<!-- /.Description -->
									</div>
									<!-- Content Wrapper -->
									<!-- Peoples -->
									<div class="peoples">
										<div class="list-users-04">
						    				<ul class="images">
						    					<li><img src="assets/images/profile_25.jpg" alt="Zola"></li>
						    				</ul>
						    				<p>Linda Tithoms</p>
					    				</div>
									</div>
				    				<!-- /.Peoples -->
								</div>
								<!-- /.Contents -->
							</div>
						</div>
						<div class="col-12 col-lg-6">
			    			<div class="block-style-12">
								<!-- Contents -->
								<div class="contents">
									<!-- Thumbnail -->
									<div class="thumbnail-1">
										<span class="bg-purple">Travel</span>
										<a href="#">
											<img src="assets/images/thumbnail_64.jpg" alt="Zola">
										</a>
									</div>
									<!-- /.Thumbnail -->
									<!-- Content Wrapper -->
									<div class="content-wrapper">
										<!-- line -->
										<div class="line">
										</div>
										<!-- /.line -->
										<!-- Title -->
										<div class="title">
											<a href="#">
												<h2>Magical places to Visit and Ven- ture to know</h2>
											</a>
										</div>
										<!-- /.Title -->
										<!-- Description -->
										<div class="desc">
											<p>Etiam eget erat accumsan, tempus purus a, sagittis nisi. Praesent laoreet interdum diam, ac ornare dolor mattis up.</p>
										</div>
										<!-- /.Description -->
									</div>
									<!-- Content Wrapper -->
									<!-- Peoples -->
									<div class="peoples">
										<div class="list-users-04">
						    				<ul class="images">
						    					<li><img src="assets/images/profile_25.jpg" alt="Zola"></li>
						    				</ul>
						    				<p>Linda Tithoms</p>
					    				</div>
									</div>
				    				<!-- /.Peoples -->
								</div>
								<!-- /.Contents -->
							</div>
						</div>
						<div class="ts-space20"></div>
						<!-- Pagination -->
						<div class="col-12">
							<ul class="pagination justify-content-center">
								<li class="page-item disabled">
									<span class="page-link">Prev</span>
								</li>
								<li class="page-item"><a class="page-link" href="#">01</a></li>
								<li class="page-item active" aria-current="page">
									<span class="page-link">
										02
										<span class="sr-only">(current)</span>
									</span>
								</li>
								<li class="page-item"><a class="page-link" href="#">03</a></li>
								<li class="page-item"><a class="page-link" href="#">04</a></li>
								<li class="page-item"><a class="page-link" href="#">...</a></li>
								<li class="page-item"><a class="page-link" href="#">18</a></li>
								<li class="page-item">
									<a class="page-link" href="#">Next</a>
								</li>
							</ul>
						</div>
						<!-- /.Pagination -->
						<div class="ts-space25"></div>
		    		</div>
	    		</div>
    			<!-- Block Style 3, 4, 5 -->
    			<div class="col-12 col-lg-4">
    				<div class="block-style-10">
    					<div class="block-title-1">
							<h3>TRENDING NEWS</h3>
							<img src="assets/images/svg/more-1.svg" alt="Zola">
						</div>
    					<div class="small-list-posts">
							<!-- Item -->
							<div class="item">
								<a href="#">
									<div class="thumbnail-img">
										<img src="assets/images/thumbnail_19.jpg" alt="Zola">
									</div>
									<div class="content">
										<h3>The Canadian model has started its own technology</h3>
										<span>5 MIN AGO</span>
									</div>
								</a>
							</div>
							<!-- Item -->
							<!-- Item -->
							<div class="item">
								<a href="#">
									<div class="thumbnail-img">
										<img src="assets/images/thumbnail_20.jpg" alt="Zola">
									</div>
									<div class="content">
										<h3>The Last Statements of the host of the most watched</h3>
										<span>9 MIN AGO</span>
									</div>
								</a>
							</div>
							<!-- Item -->
							<!-- Item -->
							<div class="item">
								<a href="#">
									<div class="thumbnail-img">
										<img src="assets/images/thumbnail_21.jpg" alt="Zola">
									</div>
									<div class="content">
										<h3>the Favorite places to venture for travelers from all over the</h3>
										<span>21 MIN AGO</span>
									</div>
								</a>
							</div>
							<!-- Item -->
							<!-- Item -->
							<div class="item">
								<a href="#">
									<div class="thumbnail-img">
										<img src="assets/images/thumbnail_22.jpg" alt="Zola">
									</div>
									<div class="content">
										<h3>The British singer ventures into the world of cinema and</h3>
										<span>8 MIN AGO</span>
									</div>
								</a>
							</div>
							<!-- Item -->
						</div>
    				</div>
    				<div class="ts-space50"></div>
    				<div class="block-style-4">
    					<a href="#">
    						<img class="img-fluid" src="assets/images/ads_01.jpg" alt="Zola">
    					</a>
    				</div>
    				<div class="ts-space50"></div>
    				<div class="block-style-5">
						<div class="block-title">
							<h3>OUR SPONSORS</h3>
						</div>
						<div class="block-content">
							<div class="block-wrapper">
								<ul>
									<li><a href="#"><img class="img-fluid" src="assets/images/ads_02.jpg" alt="Zola"></a></li>
									<li><a href="#"><img class="img-fluid" src="assets/images/ads_03.jpg" alt="Zola"></a></li>
									<li><a href="#"><img class="img-fluid" src="assets/images/ads_04.jpg" alt="Zola"></a></li>
									<li><a href="#"><img class="img-fluid" src="assets/images/ads_05.jpg" alt="Zola"></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="ts-space50"></div>
					<div class="block-style-6">
						<div class="block-title-1">
							<h3>TWITTER FEED</h3>
							<img src="assets/images/svg/more-1.svg" alt="Zola">
						</div>
						<div class="tweets">
			         		<!-- Item -->
			         		<div class="item">
			         			<a href="#">
				         			<div class="tweet-img">
				         				<img src="assets/images/tweet-img2.png" alt="Zola">
				         			</div>
				         			<div class="tweet-content">
				         				<i class="fa fa-twitter"></i>
				         				<h5>Zola News <span>@ZolaNews</span></h5>
				         				<p>Phasellus pulvinar iaculis nunc at placerat. Sed porta sollicitudin eros, vel sagittis turpis consequat <span>envato.d.pr/h7ivMe</span></p>
				         			</div>
				         		</a>
			         		</div>
			         		<!-- /.Item -->
			         		<!-- Item -->
			         		<div class="item">
			         			<a href="#">
				         			<div class="tweet-img">
				         				<img src="assets/images/tweet-img2.png" alt="Zola">
				         			</div>
				         			<div class="tweet-content">
				         				<i class="fa fa-twitter"></i>
				         				<h5>Zola News <span>@ZolaNews</span></h5>
				         				<p>Phasellus pulvinar iaculis nunc at placerat. Sed porta sollicitudin eros, vel sagittis turpis consequat <span>envato.d.pr/h7ivMe</span></p>
				         			</div>
				         		</a>
			         		</div>
			         		<!-- /.Item -->
			         		<!-- Item -->
			         		<div class="item">
			         			<a href="#">
				         			<div class="tweet-img">
				         				<img src="assets/images/tweet-img2.png" alt="Zola">
				         			</div>
				         			<div class="tweet-content">
				         				<i class="fa fa-twitter"></i>
				         				<h5>Zola News <span>@ZolaNews</span></h5>
				         				<p>Phasellus pulvinar iaculis nunc at placerat. Sed porta sollicitudin eros, vel sagittis turpis consequat <span>envato.d.pr/h7ivMe</span></p>
				         			</div>
				         		</a>
			         		</div>
			         		<!-- /.Item -->
			         	</div>
					</div>
    			</div>
    			<!-- /.Block Style 3, 4, 5 -->
    		</div>
    	</div>
    </div>
    <!-- /.Section Contents -->
	<!-- Section Footer -->
	<div id="section-footer" class="footer-03">
		<div class="container">
			<div class="row">
			   	<div class="ft-column col-md-12 col-lg-4">
		         	<div class="logo">
		         		<a href="#"><img src="assets/images/footer_logo.png" alt="Zola"></a>
		         	</div>
		         	<p>Phasellus pulvinar iaculis nunc at placerat. Sed porta sollicitudin eros, vel sagittis turpis consequat nec. Donec ac viverra ligula, in scelerisque leo. Proin massa quam, ornare in porta quis</p>
		         	<ul class="ft_social_links">
		                <li><a href="#"><i class="fa fa-facebook fa-lg"></i></a></li>
		                <li><a href="#"><i class="fa fa-twitter fa-lg"></i></a></li>
		                <li><a href="#"><i class="fa fa-instagram fa-lg"></i></a></li>
		            </ul>
			   	</div>
			   	<div class="ft-column col-md-12 col-lg-4">
		         	<h3>Instagram Photo</h3>
		         	<div class="instagram-01">
		         		<ul>
		         			<li><a href="#"><img class="img-fluid" src="assets/images/instagram_1.png" alt="Zola"></a></li>
		         			<li><a href="#"><img class="img-fluid" src="assets/images/instagram_2.png" alt="Zola"></a></li>
		         			<li><a href="#"><img class="img-fluid" src="assets/images/instagram_3.png" alt="Zola"></a></li>
		         			<li><a href="#"><img class="img-fluid" src="assets/images/instagram_4.png" alt="Zola"></a></li>
		         			<li><a href="#"><img class="img-fluid" src="assets/images/instagram_5.png" alt="Zola"></a></li>
		         			<li><a href="#"><img class="img-fluid" src="assets/images/instagram_6.png" alt="Zola"></a></li>
		         		</ul>
		         		<a href="#" class="view-more">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
		         	</div>
			   	</div>
			   	<div class="ft-column col-md-12 col-lg-4">
		         	<h3>Recent News</h3>
		         	<div class="recentnews-02">
		         		<!-- Item -->
		         		<div class="item">
		         			<a href="#">
		         				<div class="icon">
		         					<i class="fa fa-angle-double-right" aria-hidden="true"></i>
		         				</div>
			         			<div class="content">
			         				<p>The Canadian model has started its own tech</p>
			         				<span>6 MIN READ</span>
			         			</div>
			         		</a>
		         		</div>
		         		<!-- /.Item -->
		         		<!-- Item -->
		         		<div class="item">
		         			<a href="#">
		         				<div class="icon">
		         					<i class="fa fa-angle-double-right" aria-hidden="true"></i>
		         				</div>
			         			<div class="content">
			         				<p>The Canadian model has started its own tech</p>
			         				<span>6 MIN READ</span>
			         			</div>
			         		</a>
		         		</div>
		         		<!-- /.Item -->
		         		<!-- Item -->
		         		<div class="item">
		         			<a href="#">
		         				<div class="icon">
		         					<i class="fa fa-angle-double-right" aria-hidden="true"></i>
		         				</div>
			         			<div class="content">
			         				<p>The Canadian model has started its own tech</p>
			         				<span>6 MIN READ</span>
			         			</div>
			         		</a>
		         		</div>
		         		<!-- /.Item -->
		         		<!-- Item -->
		         		<div class="item">
		         			<a href="#">
		         				<div class="icon">
		         					<i class="fa fa-angle-double-right" aria-hidden="true"></i>
		         				</div>
			         			<div class="content">
			         				<p>The Canadian model has started its own tech</p>
			         				<span>6 MIN READ</span>
			         			</div>
			         		</a>
		         		</div>
		         		<!-- /.Item -->
		         	</div>
			   	</div>
			   	<div class="ft_backtotop">
			   		<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="611.98px" height="611.98px" viewBox="0 0 611.98 611.98" style="enable-background:new 0 0 611.98 611.98;" xml:space="preserve"><g><g id="Rocket"><g><path d="M85.311,478.813c-21.604,0-39.875,14.307-45.832,33.957l-20.799,68.585c-0.268,0.881-0.402,1.82-0.402,2.797
				c0,5.286,4.29,9.576,9.576,9.576c0.977,0,1.916-0.153,2.796-0.402l68.585-20.8c19.65-5.956,33.957-24.228,33.957-45.832
				C133.192,500.245,111.76,478.813,85.311,478.813z M583.277,0c-103.291,0-202.961,4.501-286.81,59.104
				c-44.204,28.786-80.919,69.083-110.548,114.13c-71.688,4.386-138.416,40.699-180.57,99.785
				c-5.746,8.063-6.934,18.521-3.16,27.656c3.773,9.155,11.989,15.686,21.757,17.352c25.818,4.348,54.413,15.936,83.275,33
				c-5.209,19.114-9.461,37.673-12.468,55.045c-1.609,9.192,1.379,18.635,7.987,25.224l77.932,77.912
				c5.439,5.439,12.755,8.408,20.301,8.408c1.647,0,3.275-0.134,4.922-0.422c17.391-3.007,35.949-7.259,55.063-12.468
				c17.065,28.901,28.652,57.496,33.019,83.313c1.647,9.768,8.216,17.965,17.353,21.776c3.543,1.455,7.258,2.164,10.975,2.164
				c5.898,0,11.74-1.819,16.682-5.324c59.066-42.136,95.398-108.882,99.746-180.589c45.047-29.648,85.344-66.345,114.111-110.567
				c54.564-83.793,59.123-187.619,59.123-286.81C612.006,12.851,599.135,0,583.277,0z M63.056,278.382
				c25.319-26.009,57.477-44.146,92.468-52.555c-13.215,25.856-24.381,52.287-33.594,78.334
				C102.088,293.225,82.304,284.434,63.056,278.382z M333.623,548.949c-6.053-19.286-14.844-39.07-25.799-58.894
				c26.066-9.212,52.498-20.378,78.354-33.612C377.77,491.454,359.633,523.649,333.623,548.949z M504.732,284.166
				C445.188,375.619,316.77,436.218,210.568,457.86l-56.462-56.442c21.662-106.22,82.26-234.619,173.694-294.164
				c63.414-41.273,142.801-48.571,226.574-49.643C553.322,141.384,546.006,220.752,504.732,284.166z M410.904,248.983
				c26.449,0,47.881-21.432,47.881-47.881s-21.432-47.881-47.881-47.881s-47.881,21.432-47.881,47.881
				S384.455,248.983,410.904,248.983z"/></g></g></g></svg>
			   	</div>
			   	
			</div>
		</div>
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="copyright-wrapper">
				   			<p>Copyright © 2019 Zola, Designed by <a target="_blank" href="https://themeforest.net/user/textheme/portfolio">TexTheme</a> All Rights Reserved.</p>
				   		</div>
					</div>
				</div>
			</div>
	   	</div>
	</div>
	<!-- /.Section Footer -->

    <!-- Javascript Files -->
	<script src="assets/js/jquery.min.js"></script>
	<!-- Bootstrap -->
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- Swiper Slider -->
	<script src="assets/js/swiper.min.js"></script>
	<!-- OWL Carousel -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- Waypoint -->
	<script src="assets/js/jquery.waypoints.min.js"></script>
	<!-- Easy Waypoint -->
	<script src="assets/js/easy-waypoint-animate.js"></script>
	<!-- Counter -->
	<script src="assets/js/jquery.countup.js"></script>
	<!-- Counter -->
	<script src="assets/js/jquery.countup.js"></script>
	<!-- NProgress -->
	<script src="assets/js/nprogress.js"></script>
	<!-- Ticker -->
	<script src="assets/js/jquery.newsTicker.min.js"></script>
	<!-- Scripts -->
	<script src="assets/js/scripts.js"></script>
	

</body>
</html>
