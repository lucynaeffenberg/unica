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
					<h1 class="mt-0 mb-0 text-center text-uppercase fs-30 fw-500">Welcome To Ezuca</h1>
					<p class="mb-0 text-center">Let children creative and make a different</p>
					<div class="flex-cols flex-cols-2 mt-30">
						<div>
							<h2 class="mt-0 fs-20 fw-400">About Us</h2>
							<p>Lorem ipsum dolor sitdoni amet, consectetur dont adipis elite. Vivamus interdum ultrices augue. Aenean dos cursus lania. Duis et fringilla leonardo. Mauris mattis phare sem, debut curus risus viverra sed.</p>
							<h2 class="fs-20 fw-400">Our History</h2>
							<p>Led at felis arcu. Integer lorem lorem, tincidunt eu congue et, mattis ut ante. Nami suscipit, lectus id efficitur ornare, leo libero convalis nulla, vitae dignissim.</p>
							<ul class="lh-large mt-30">
								<li>University Faculties organise teaching and research into individual subjects.</li>
								<li>The University is rich in history - its famous buildings attract visitors.</li>
								<li>50 years of people, and achievements that continue to transform.</li>
								<li>The University's core values are as follows:freedom of thought.</li>
							</ul>
						</div>
						<div>
							<img class="w-full d-block" src="assets/img/content/about.jpg.webp" alt="">
						</div>
					</div>
				</div>
			</section>
			<?php include('partials/quotes.php') ?>
			<?php include('partials/team.php') ?>
			<?php include('partials/newsletter.php') ?>
		</main>
		<footer>
			<?php include('partials/footer-top.php') ?>
			<?php include('partials/footer-bottom.php') ?>
		</footer>
	</body>
</html>