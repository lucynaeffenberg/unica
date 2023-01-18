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
					<div class="d-flex">
						<div class="text-center bg-navy text-white p-50">
							<h2 class="fs-24 fw-400 mb-0 mt-0">Address</h2>
							<p class="mt-10">40 Baria Street 133/2, NewYork City, US</p>
							<h2 class="fs-24 fw-400 mb-0">Phone</h2>
							<p class="mt-10">(+88) 111 555 666</p>
							<h2 class="fs-24 fw-400 mb-0">Email</h2>
							<p class="mt-10">infodeercreative@gmail.com</p>
							<h2 class="fs-24 fw-400 mb-0">Working time</h2>
							<p class="mt-10 mb-0">Monday - Friday: 08 AM - 06 PM</p>
						</div>
						<iframe
							src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d79024.36000923143!2d19.456769459196657!3d51.76026024935793!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spl!2spl!4v1674072832905!5m2!1spl!2spl"
							class="d-block flex-grow border-0"
							allowfullscreen=""
							loading="lazy"
							referrerpolicy="no-referrer-when-downgrade"
						></iframe>
					</div>
				</div>
			</section>
			<?php include('partials/contact-form.php') ?>
			<?php include('partials/newsletter.php') ?>
		</main>
		<footer>
			<?php include('partials/footer-top.php') ?>
			<?php include('partials/footer-bottom.php') ?>
		</footer>
	</body>
</html>