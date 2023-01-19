<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Title</title>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/style.css">
	</head>
	<body>
		<header>
			<?php include('partials/header-top.php') ?>
			<?php include('partials/header-bottom.php') ?>
		</header>
		<main>
			<section class="py-50">
				<div class="container">
					<div class="d-flex column-gap-60">
						<div class="flex-grow">
							<div>
								<img class="d-block w-full ratio-2x1 img-cover" src="assets/img/content/1.jpg (4).webp" alt="">
								<h2 class="fs-30 fw-400 mb-0">Parents who try to be their children’s best friends</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel urna eget lectus molestie rhoncus sed in nunc. Vestib tincidunt facilisis ligula sed viverra. Duis porttitor sapien maximus, volutpat massa malesuada. Curabitur orci est, molestie eget orci, tincidunt dictum felis. Cras ante nunc, pharetra eu rutrum aliquet, gestas eget ex. Suspendisse potenti vietlott Quisque asvitae eros efficitur lacus viverra molestie at ut mi. Quisque id mollis nibh...</p>
							</div>
							<div class="mt-65">
								<img class="d-block w-full ratio-2x1 img-cover" src="assets/img/content/2.jpg (4).webp" alt="">
								<h2 class="fs-30 fw-400 mb-0">Graduations could be delayed as external examiners</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel urna eget lectus molestie rhoncus sed in nunc. Vestib tincidunt facilisis ligula sed viverra. Duis porttitor sapien maximus, volutpat massa malesuada. Curabitur orci est, molestie eget orci, tincidunt dictum felis. Cras ante nunc, pharetra eu rutrum aliquet, gestas eget ex. Suspendisse potenti vietlott Quisque asvitae eros efficitur lacus viverra molestie at ut mi. Quisque id mollis nibh...</p>
							</div>
							<div class="mt-65">
								<img class="d-block w-full ratio-2x1 img-cover" src="assets/img/content/3.jpg (4).webp" alt="">
								<h2 class="fs-30 fw-400 mb-0">Private schools adopt a Ucas-style application system</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel urna eget lectus molestie rhoncus sed in nunc. Vestib tincidunt facilisis ligula sed viverra. Duis porttitor sapien maximus, volutpat massa malesuada. Curabitur orci est, molestie eget orci, tincidunt dictum felis. Cras ante nunc, pharetra eu rutrum aliquet, gestas eget ex. Suspendisse potenti vietlott Quisque asvitae eros efficitur lacus viverra molestie at ut mi. Quisque id mollis nibh...</p>
							</div>
							<div class="mt-65">
								<img class="d-block w-full ratio-2x1 img-cover" src="assets/img/content/1.jpg (3).webp" alt="">
								<h2 class="fs-30 fw-400 mb-0">Cambridge digs in at the top of university league table</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel urna eget lectus molestie rhoncus sed in nunc. Vestib tincidunt facilisis ligula sed viverra. Duis porttitor sapien maximus, volutpat massa malesuada. Curabitur orci est, molestie eget orci, tincidunt dictum felis. Cras ante nunc, pharetra eu rutrum aliquet, gestas eget ex. Suspendisse potenti vietlott Quisque asvitae eros efficitur lacus viverra molestie at ut mi. Quisque id mollis nibh...</p>
							</div>
						</div>
						<div class="w-min-300">
							<div>
								<?php include('partials/sidebar-search.php') ?>
							</div>
							<div class="mt-30">
								<?php include('partials/sidebar-news.php') ?>
							</div>
							<div class="mt-30">
								<?php include('partials/sidebar-tags.php') ?>
							</div>
							<div class="mt-30">
								<?php include('partials/sidebar-categories.php') ?>
							</div>
							<div class="mt-30">
								<?php include('partials/sidebar-banner.php') ?>
							</div>
						</div>
					</div>
				</div>
			</section>
			<?php include('partials/newsletter.php') ?>
		</main>
		<footer>
			<?php include('partials/footer-top.php') ?>
			<?php include('partials/footer-bottom.php') ?>
		</footer>
	</body>
</html>