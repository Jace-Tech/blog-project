<?php require_once("./db/config.php"); ?>
<?php require_once("./admin/store/category.php"); ?>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Zola">
	<meta name="description" content="Concept Magazine News Blogs">
	<title>Zola | Home</title>
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

	<style>
		.vid-responsive {
			width: 100%;
			height: 100%;
			object-fit: cover;
		}
	</style>
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
					<div class="right col-6">

					</div>
				</div>
			</div>
		</div>
		<!-- Nav Content -->
		<?php include("./include/nav.php"); ?>
		<!-- /Nav Content -->
	</header>
	<!-- /.Section Navbar V1 -->
	<!-- Section Slider 02 -->
	<div id="section-slider" class="slider03">
		<!-- Slider Content -->
		<div class="slider-content">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<?php
						$query = "SELECT * FROM `blog` ORDER BY `date` DESC LIMIT 3";
						$result = mysqli_query($conn, $query);

						if (mysqli_num_rows($result) > 0) {
							while ($row = mysqli_fetch_assoc($result)) {
								$file = explode("|", $row['image'])[0];
								$type = explode("|", $row['image'])[1];
						?>
								<!-- Item -->
								<div class="thumbnail-1 v1">
									<a href="post-detail.php?blogId=<?= $row["blog_id"]; ?>">
										<?php if($type === "image"): ?>
											<img src="./uploads/<?= $file; ?>" alt="Zola">
										<?php else: ?>
											<video src="./uploads/<?= $file; ?>" class="vid-responsive"></video>
										<?php endif; ?>
										<div class="overlay">
											<div class="overlay-content">
												<div class="list-users-02">
													<ul class="images">
														<li><img src="assets/images/profile_7.jpg" alt="Zola"></li>
													</ul>
													<!-- TODO: Add Authors name -->
													<p>
														<span>
															<?php  
																$queryAdmin = "SELECT `username` FROM `admin` LIMIT 1";
																$resultAdmin = mysqli_query($conn, $queryAdmin);
																$adminName = mysqli_fetch_assoc($resultAdmin)['username'];

																echo $adminName;
															?>
														</span>
													</p>
													<h3><?= $row['title'] ?></h3>
													<!-- <\ -->
												</div> 
											</div>
										</div>
									</a>
								</div>
								<!-- /.Item -->
						<?php
							}
						}
						?>
					</div>
				</div>
			</div>
		</div>
		<!-- /.Slider Content -->
	</div>
	<!-- /.Section Slider 02 -->
	<!-- Section Contents -->
	<div id="section-contents">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="block-title-2">
						<h3>MOST POPULAR</h3>
					</div>
				</div>
				<!-- Block Style 12 -->
				<div class="col-12 col-lg-4">
					<div class="block-style-12">
						<!-- Contents -->
						<div class="contents">
							<!-- Thumbnail -->
							<div class="thumbnail-1">
								<span class="bg-yellow">Business</span>
								<a href="#">
									<img src="assets/images/thumbnail_49.jpg" alt="Zola">
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
										<h2>The attention Systems are im- proved Thanks to this Application</h2>
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
										<li><img src="assets/images/profile_24.jpg" alt="Zola"></li>
									</ul>
									<p>Lily Clover</p>
								</div>
							</div>
							<!-- /.Peoples -->
						</div>
						<!-- /.Contents -->
					</div>
				</div>
				<div class="col-12 col-lg-4">
					<div class="block-style-12">
						<!-- Contents -->
						<div class="contents">
							<!-- Thumbnail -->
							<div class="thumbnail-1">
								<span class="bg-purple">Travel</span>
								<a href="#">
									<img src="assets/images/thumbnail_50.jpg" alt="Zola">
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
				<div class="col-12 col-lg-4">
					<div class="block-style-12">
						<!-- Contents -->
						<div class="contents">
							<!-- Thumbnail -->
							<div class="thumbnail-1">
								<span class="bg-orange">Business</span>
								<a href="#">
									<img src="assets/images/thumbnail_51.jpg" alt="Zola">
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
										<h2>The Automatic driving in electric Cars is of Great help</h2>
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
										<li><img src="assets/images/profile_26.jpg" alt="Zola"></li>
									</ul>
									<p>Dan Woodstrap</p>
								</div>
							</div>
							<!-- /.Peoples -->
						</div>
						<!-- /.Contents -->
					</div>
				</div>
				<!-- /.Block Style 12 -->
			</div>
			<div class="ts-space70"></div>
			<div class="row">
				<div class="col-12 col-lg-8">
					<div class="row">
						<div class="col-12 col-lg-6">
							<div class="block-style-8">
								<!-- Block Title 2 -->
								<div class="block-title-2">
									<h3>TECHNOLOGY</h3>
								</div>
								<!-- /.Block Title 2 -->
								<!-- Contents -->
								<div class="contents">
									<!-- Thumbnail -->
									<div class="thumbnail-1">
										<span class="bg-green">Technology</span>
										<a href="#">
											<img src="assets/images/thumbnail_52.jpg" alt="Zola">
											<div class="overlay">
												<div class="overlay-content">
													<div class="list-users-02">
														<ul class="images">
															<li><img src="assets/images/profile_10.jpg" alt="Zola"></li>
														</ul>
														<p><span>Bily Jacksom</span></p>
													</div>
												</div>
											</div>
										</a>
									</div>
									<!-- /.Thumbnail -->
									<!-- Content Wrapper -->
									<div class="content-wrapper">
										<!-- Date -->
										<div class="date">
											<h5>5 MIN READ</h5>
										</div>
										<!-- /.Date -->
										<!-- Title -->
										<div class="title">
											<a href="#">
												<h2>Every Time the Youngest entrep- reneurs Invest in the Stock Market</h2>
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
									<!-- Small List Posts -->
									<div class="small-list-posts">
										<!-- Item -->
										<div class="item">
											<a href="#">
												<div class="thumbnail-img">
													<img src="assets/images/thumbnail_05.jpg" alt="Zola">
												</div>
												<div class="content">
													<h3>Welcome to Akroot is a Spe- cialized Design Agency.</h3>
													<span>5 MIN READ</span>
												</div>
											</a>
										</div>
										<!-- Item -->
										<!-- Item -->
										<div class="item">
											<a href="#">
												<div class="thumbnail-img">
													<img src="assets/images/thumbnail_06.jpg" alt="Zola">
												</div>
												<div class="content">
													<h3>Welcome to Akroot is a Spe- cialized Design Agency.</h3>
													<span>5 MIN READ</span>
												</div>
											</a>
										</div>
										<!-- Item -->
										<!-- Item -->
										<div class="item">
											<a href="#">
												<div class="thumbnail-img">
													<img src="assets/images/thumbnail_07.jpg" alt="Zola">
												</div>
												<div class="content">
													<h3>Welcome to Akroot is a Spe- cialized Design Agency.</h3>
													<span>5 MIN READ</span>
												</div>
											</a>
										</div>
										<!-- Item -->
									</div>
									<!-- /.Small List Posts -->
								</div>
								<!-- /.Contents -->
							</div>
						</div>
						<div class="col-12 col-lg-6">
							<div class="block-style-8">
								<!-- Block Title 2 -->
								<div class="block-title-2">
									<h3>LIFE</h3>
								</div>
								<!-- /.Block Title 2 -->
								<!-- Contents -->
								<div class="contents">
									<!-- Thumbnail -->
									<div class="thumbnail-1">
										<span class="bg-grey">Travel</span>
										<a href="#">
											<img src="assets/images/thumbnail_53.jpg" alt="Zola">
											<div class="overlay">
												<div class="overlay-content">
													<div class="list-users-02">
														<ul class="images">
															<li><img src="assets/images/profile_11.jpg" alt="Zola"></li>
														</ul>
														<p><span>Olby Oltraford</span></p>
													</div>
												</div>
											</div>
										</a>
									</div>
									<!-- /.Thumbnail -->
									<!-- Content Wrapper -->
									<div class="content-wrapper">
										<!-- Date -->
										<div class="date">
											<h5>5 MIN READ</h5>
										</div>
										<!-- /.Date -->
										<!-- Title -->
										<div class="title">
											<a href="#">
												<h2>Trends is Now Business from Ho- me through a Smart Phone</h2>
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
									<!-- Small List Posts -->
									<div class="small-list-posts">
										<!-- Item -->
										<div class="item">
											<a href="#">
												<div class="thumbnail-img">
													<img src="assets/images/thumbnail_09.jpg" alt="Zola">
												</div>
												<div class="content">
													<h3>Welcome to Akroot is a Spe- cialized Design Agency.</h3>
													<span>5 MIN READ</span>
												</div>
											</a>
										</div>
										<!-- Item -->
										<!-- Item -->
										<div class="item">
											<a href="#">
												<div class="thumbnail-img">
													<img src="assets/images/thumbnail_10.jpg" alt="Zola">
												</div>
												<div class="content">
													<h3>Welcome to Akroot is a Spe- cialized Design Agency.</h3>
													<span>5 MIN READ</span>
												</div>
											</a>
										</div>
										<!-- Item -->
										<!-- Item -->
										<div class="item">
											<a href="#">
												<div class="thumbnail-img">
													<img src="assets/images/thumbnail_11.jpg" alt="Zola">
												</div>
												<div class="content">
													<h3>Welcome to Akroot is a Spe- cialized Design Agency.</h3>
													<span>5 MIN READ</span>
												</div>
											</a>
										</div>
										<!-- Item -->
									</div>
									<!-- /.Small List Posts -->
								</div>
								<!-- /.Contents -->
							</div>
						</div>
						<div class="ts-space70"></div>
						<div class="col-12">
							<div class="block-style-13">
								<div class="thumbnail-video">
									<a href="#">
										<img class="img-fluid" src="assets/images/thumbnail_54.jpg" alt="Zola">
									</a>
								</div>
								<div class="content-wrapper">
									<div class="author-title">
										<h5>John Citizen <span>in</span> Videos</h5>
										<h1>The Video that is Spreading and Becomes Viral Because of its Involvement in Fashion</h1>
									</div>
									<div class="recent-videos">
										<!-- Item -->
										<div class="item">
											<a href="#">
												<div class="video_thumbnail">
													<div class="play-btn">
														<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
															<path d="M443.86,196.919L141.46,10.514C119.582-2.955,93.131-3.515,70.702,9.016c-22.429,12.529-35.819,35.35-35.819,61.041
																	v371.112c0,38.846,31.3,70.619,69.77,70.829c0.105,0,0.21,0.001,0.313,0.001c12.022-0.001,24.55-3.769,36.251-10.909
																	c9.413-5.743,12.388-18.029,6.645-27.441c-5.743-9.414-18.031-12.388-27.441-6.645c-5.473,3.338-10.818,5.065-15.553,5.064
																	c-14.515-0.079-30.056-12.513-30.056-30.898V70.058c0-11.021,5.744-20.808,15.364-26.183c9.621-5.375,20.966-5.135,30.339,0.636
																	l302.401,186.405c9.089,5.596,14.29,14.927,14.268,25.601c-0.022,10.673-5.261,19.983-14.4,25.56L204.147,415.945
																	c-9.404,5.758-12.36,18.049-6.602,27.452c5.757,9.404,18.048,12.36,27.452,6.602l218.611-133.852
																	c20.931-12.769,33.457-35.029,33.507-59.55C477.165,232.079,464.729,209.767,443.86,196.919z" />
														</svg>
													</div>
													<img class="img-fluid" src="assets/images/thumbnail_55.jpg" alt="Zola">
												</div>
												<div class="video_description">
													<h4>Video <span>01:45</span></h4>
													<h2>Happily Engaged: the young Singer now a</h2>
													<p>Sed porta sollicitudin eros, vel sagittis turpis conse- quat nec. Donec ac viverra ligula.</p>
												</div>
											</a>
										</div>
										<!-- /.Item -->
										<!-- Item -->
										<div class="item">
											<a href="#">
												<div class="video_thumbnail">
													<div class="play-btn">
														<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
															<path d="M443.86,196.919L141.46,10.514C119.582-2.955,93.131-3.515,70.702,9.016c-22.429,12.529-35.819,35.35-35.819,61.041
																	v371.112c0,38.846,31.3,70.619,69.77,70.829c0.105,0,0.21,0.001,0.313,0.001c12.022-0.001,24.55-3.769,36.251-10.909
																	c9.413-5.743,12.388-18.029,6.645-27.441c-5.743-9.414-18.031-12.388-27.441-6.645c-5.473,3.338-10.818,5.065-15.553,5.064
																	c-14.515-0.079-30.056-12.513-30.056-30.898V70.058c0-11.021,5.744-20.808,15.364-26.183c9.621-5.375,20.966-5.135,30.339,0.636
																	l302.401,186.405c9.089,5.596,14.29,14.927,14.268,25.601c-0.022,10.673-5.261,19.983-14.4,25.56L204.147,415.945
																	c-9.404,5.758-12.36,18.049-6.602,27.452c5.757,9.404,18.048,12.36,27.452,6.602l218.611-133.852
																	c20.931-12.769,33.457-35.029,33.507-59.55C477.165,232.079,464.729,209.767,443.86,196.919z" />
														</svg>
													</div>
													<img class="img-fluid" src="assets/images/thumbnail_56.jpg" alt="Zola">
												</div>
												<div class="video_description">
													<h4>Video <span>00:52</span></h4>
													<h2>Great changes will Happen this Summer in the</h2>
													<p>Sed porta sollicitudin eros, vel sagittis turpis conse- quat nec. Donec ac viverra ligula.</p>
												</div>
											</a>
										</div>
										<!-- /.Item -->
										<!-- Item -->
										<div class="item">
											<a href="#">
												<div class="video_thumbnail">
													<div class="play-btn">
														<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
															<path d="M443.86,196.919L141.46,10.514C119.582-2.955,93.131-3.515,70.702,9.016c-22.429,12.529-35.819,35.35-35.819,61.041
																	v371.112c0,38.846,31.3,70.619,69.77,70.829c0.105,0,0.21,0.001,0.313,0.001c12.022-0.001,24.55-3.769,36.251-10.909
																	c9.413-5.743,12.388-18.029,6.645-27.441c-5.743-9.414-18.031-12.388-27.441-6.645c-5.473,3.338-10.818,5.065-15.553,5.064
																	c-14.515-0.079-30.056-12.513-30.056-30.898V70.058c0-11.021,5.744-20.808,15.364-26.183c9.621-5.375,20.966-5.135,30.339,0.636
																	l302.401,186.405c9.089,5.596,14.29,14.927,14.268,25.601c-0.022,10.673-5.261,19.983-14.4,25.56L204.147,415.945
																	c-9.404,5.758-12.36,18.049-6.602,27.452c5.757,9.404,18.048,12.36,27.452,6.602l218.611-133.852
																	c20.931-12.769,33.457-35.029,33.507-59.55C477.165,232.079,464.729,209.767,443.86,196.919z" />
														</svg>
													</div>
													<img class="img-fluid" src="assets/images/thumbnail_57.jpg" alt="Zola">
												</div>
												<div class="video_description">
													<h4>Video <span>00:32</span></h4>
													<h2>Record in the sale of tickets to the concert that</h2>
													<p>Sed porta sollicitudin eros, vel sagittis turpis conse- quat nec. Donec ac viverra ligula.</p>
												</div>
											</a>
										</div>
										<!-- /.Item -->
									</div>
									<div class="see-all-comments">
										<a href="#">See All Comments</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Block Style 3, 4, 5 -->
				<div class="col-12 col-lg-4">
					<div class="block-style-3">
						<div class="block-title-1">
							<h3>STAY CONNECTED</h3>
							<img src="assets/images/svg/more-1.svg" alt="Zola">
						</div>
						<div class="block-content">
							<!-- Item -->
							<div class="block-item">
								<div class="block-left">
									<div class="social">
										<i class="fa fa-facebook"></i>
									</div>
									<div class="followers">
										<div class="content">
											<span class="count">75.820 +</span>
											<span class="text">FANS</span>
										</div>

									</div>
								</div>
								<div class="block-right">
									<div class="content">
										<a href="#">Like Page</a>
									</div>
								</div>
							</div>
							<!-- /.Item -->
							<!-- Item -->
							<div class="block-item">
								<div class="block-left">
									<div class="social">
										<i class="fa fa-twitter"></i>
									</div>
									<div class="followers">
										<div class="content">
											<span class="count">27.257 +</span>
											<span class="text">FOLLOWERS</span>
										</div>

									</div>
								</div>
								<div class="block-right">
									<div class="content">
										<a href="#">Like Page</a>
									</div>
								</div>
							</div>
							<!-- /.Item -->
							<!-- Item -->
							<div class="block-item">
								<div class="block-left">
									<div class="social">
										<i class="fa fa-instagram"></i>
									</div>
									<div class="followers">
										<div class="content">
											<span class="count">19.275</span>
											<span class="text">FOLLOWERS</span>
										</div>

									</div>
								</div>
								<div class="block-right">
									<div class="content">
										<a href="#">Like Page</a>
									</div>
								</div>
							</div>
							<!-- /.Item -->
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
			<div class="ts-space70"></div>
			<div class="block-style-7">
				<a href="#"><img class="img-fluid" src="assets/images/ads_07.jpg" alt="Zola"></a>
			</div>
			<div class="ts-space100"></div>
			<div class="row">
				<!-- Block Style 12 -->
				<div class="col-12 col-lg-4">
					<div class="block-style-12">
						<!-- Contents -->
						<div class="contents">
							<!-- Thumbnail -->
							<div class="thumbnail-1">
								<span class="bg-yellow">Business</span>
								<a href="#">
									<img src="assets/images/thumbnail_58.jpg" alt="Zola">
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
										<h2>The attention Systems are im- proved Thanks to this Application</h2>
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
										<li><img src="assets/images/profile_24.jpg" alt="Zola"></li>
									</ul>
									<p>Lily Clover</p>
								</div>
							</div>
							<!-- /.Peoples -->
						</div>
						<!-- /.Contents -->
					</div>
				</div>
				<div class="col-12 col-lg-4">
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
				<div class="col-12 col-lg-4">
					<div class="block-style-12">
						<!-- Contents -->
						<div class="contents">
							<!-- Thumbnail -->
							<div class="thumbnail-1">
								<span class="bg-orange">Business</span>
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
										<h2>The Automatic driving in electric Cars is of Great help</h2>
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
										<li><img src="assets/images/profile_26.jpg" alt="Zola"></li>
									</ul>
									<p>Dan Woodstrap</p>
								</div>
							</div>
							<!-- /.Peoples -->
						</div>
						<!-- /.Contents -->
					</div>
				</div>
				<div class="col-12 col-lg-4">
					<div class="block-style-12">
						<!-- Contents -->
						<div class="contents">
							<!-- Thumbnail -->
							<div class="thumbnail-1">
								<span class="bg-yellow">Business</span>
								<a href="#">
									<img src="assets/images/thumbnail_61.jpg" alt="Zola">
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
										<h2>The attention Systems are im- proved Thanks to this Application</h2>
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
										<li><img src="assets/images/profile_24.jpg" alt="Zola"></li>
									</ul>
									<p>Lily Clover</p>
								</div>
							</div>
							<!-- /.Peoples -->
						</div>
						<!-- /.Contents -->
					</div>
				</div>
				<div class="col-12 col-lg-4">
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
				<div class="col-12 col-lg-4">
					<div class="block-style-12">
						<!-- Contents -->
						<div class="contents">
							<!-- Thumbnail -->
							<div class="thumbnail-1">
								<span class="bg-orange">Business</span>
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
										<h2>The Automatic driving in electric Cars is of Great help</h2>
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
										<li><img src="assets/images/profile_26.jpg" alt="Zola"></li>
									</ul>
									<p>Dan Woodstrap</p>
								</div>
							</div>
							<!-- /.Peoples -->
						</div>
						<!-- /.Contents -->
					</div>
				</div>
				<div class="col-12 col-lg-4">
					<div class="block-style-12">
						<!-- Contents -->
						<div class="contents">
							<!-- Thumbnail -->
							<div class="thumbnail-1">
								<span class="bg-yellow">Business</span>
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
										<h2>The attention Systems are im- proved Thanks to this Application</h2>
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
										<li><img src="assets/images/profile_24.jpg" alt="Zola"></li>
									</ul>
									<p>Lily Clover</p>
								</div>
							</div>
							<!-- /.Peoples -->
						</div>
						<!-- /.Contents -->
					</div>
				</div>
				<div class="col-12 col-lg-4">
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
				<div class="col-12 col-lg-4">
					<div class="block-style-12">
						<!-- Contents -->
						<div class="contents">
							<!-- Thumbnail -->
							<div class="thumbnail-1">
								<span class="bg-orange">Business</span>
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
										<h2>The Automatic driving in electric Cars is of Great help</h2>
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
										<li><img src="assets/images/profile_26.jpg" alt="Zola"></li>
									</ul>
									<p>Dan Woodstrap</p>
								</div>
							</div>
							<!-- /.Peoples -->
						</div>
						<!-- /.Contents -->
					</div>
				</div>
				<div class="col-12 col-lg-4">
					<div class="block-style-12">
						<!-- Contents -->
						<div class="contents">
							<!-- Thumbnail -->
							<div class="thumbnail-1">
								<span class="bg-yellow">Business</span>
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
										<h2>The attention Systems are im- proved Thanks to this Application</h2>
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
										<li><img src="assets/images/profile_24.jpg" alt="Zola"></li>
									</ul>
									<p>Lily Clover</p>
								</div>
							</div>
							<!-- /.Peoples -->
						</div>
						<!-- /.Contents -->
					</div>
				</div>
				<div class="col-12 col-lg-4">
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
				<div class="col-12 col-lg-4">
					<div class="block-style-12">
						<!-- Contents -->
						<div class="contents">
							<!-- Thumbnail -->
							<div class="thumbnail-1">
								<span class="bg-orange">Business</span>
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
										<h2>The Automatic driving in electric Cars is of Great help</h2>
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
										<li><img src="assets/images/profile_26.jpg" alt="Zola"></li>
									</ul>
									<p>Dan Woodstrap</p>
								</div>
							</div>
							<!-- /.Peoples -->
						</div>
						<!-- /.Contents -->
					</div>
				</div>
				<div class="ts-space20"></div>
				<div class="col-12">
					<div class="load-more-btn">
						<a class="btn" href="#">Load More</a>
					</div>
				</div>
				<div class="ts-space30"></div>
				<!-- /.Block Style 12 -->
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
					<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="611.98px" height="611.98px" viewBox="0 0 611.98 611.98" style="enable-background:new 0 0 611.98 611.98;" xml:space="preserve">
						<g>
							<g id="Rocket">
								<g>
									<path d="M85.311,478.813c-21.604,0-39.875,14.307-45.832,33.957l-20.799,68.585c-0.268,0.881-0.402,1.82-0.402,2.797
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
				S384.455,248.983,410.904,248.983z" />
								</g>
							</g>
						</g>
					</svg>
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