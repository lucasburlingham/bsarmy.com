<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/beforeIncludes.php';

if(isset($_GET['logout']) && $_GET['logout'] == 'true') {
	session_destroy();
	header("Location: /");

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content='Improving the barracks one little thing at a time. "It does not take a majority to prevail... but rather an irate, tireless minority, keen on setting brushfires of freedom in the minds of men." - Samuel Adams'>
	<title>BS Army</title>

	<?php require $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/elements/head.php'; ?>

	<style>
	.bd-placeholder-img {
		font-size: 1.125rem;
		text-anchor: middle;
		-webkit-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
	}

	@media (min-width: 768px) {
		.bd-placeholder-img-lg {
			font-size: 3.5rem;
		}
	}
	</style>


</head>

<body>

	<?php require $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/elements/nav.php'; ?>

	<main>

		<section class="py-5 text-center container">
			<div class="row py-lg-5">
				<div class="col-lg-6 col-md-8 mx-auto">

				<?php
					$randomTagline = [
						"one little thing",
						"one soldier",
						"one papercut",
						"one station",
					];

					$randomTagline = $randomTagline[rand(0, count($randomTagline) - 1)];
				?>
					<h1 class="font-weight-bold">Improving the barracks <?php echo $randomTagline; ?> at a time. </h1>
					<p class="lead text-muted">"It does not take a majority to prevail... but rather an irate, tireless minority, keen on setting brushfires of freedom in the minds of men." - Samuel Adams</p>
					<small>Mmmmm, warm brushfires.</small>
					<p>
						<a href="https://github.com/lucasburlingham/bsarmy.com/" target="_blank" rel="noopener noreferrer"
							class="btn btn-light-tan my-2">See our progress!</a>
						<a href="https://forms.gle/F9c7CEvEkwV6TbZNA" class="btn btn-dark-green my-2" target="_blank" rel="noopener noreferrer">Suggestion form</a>
					</p>
				</div>
			</div>
			<div class="row py-lg-5">
				<div class="col-lg-4"></div>
				<div class="col-lg-4">
					<h3 class="h3">
						So far, this site includes:	
					</h3>
					<ul class="list-group mx-1">
						<a class="list-group-item active" href="/DFAC/">
							DFAC Schedule for <?php echo date('F Y'); ?> <i class="fa-solid fa-arrow-right"></i>
						</a>
						<a class="list-group-item text-dark" href="/register/">
							Register to subscribe to DFAC SMS alerts <i class="fa-solid fa-arrow-right"></i>
						</a>

					</ul>
				</div>
				<div class="col-lg-4"></div>
			</div>
		</section>
		<!-- 
		<div class="album py-5 bg-light">
			<div class="container">

				<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
					<div class="col">
						<div class="card shadow-sm">
							<svg class="bd-placeholder-img card-img-top" width="100%" height="225"
								xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: Thumbnail"
								preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
								<title>Placeholder</title>
								<rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
									dy=".3em">Thumbnail</text>
							</svg>

							<div class="card-body">
								<p class="card-text">This is a wider card with supporting text below as a natural
									lead-in to additional
									content. This content is a little bit longer.</p>
								<div class="d-flex justify-content-between align-items-center">
									<div class="btn-group">
										<button type="button" class="btn btn-sm btn-outline-secondary">View</button>
										<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
									</div>
									<small class="text-muted">9 mins</small>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card shadow-sm">
							<svg class="bd-placeholder-img card-img-top" width="100%" height="225"
								xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: Thumbnail"
								preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
								<title>Placeholder</title>
								<rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
									dy=".3em">Thumbnail</text>
							</svg>

							<div class="card-body">
								<p class="card-text">This is a wider card with supporting text below as a natural
									lead-in to additional
									content. This content is a little bit longer.</p>
								<div class="d-flex justify-content-between align-items-center">
									<div class="btn-group">
										<button type="button" class="btn btn-sm btn-outline-secondary">View</button>
										<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
									</div>
									<small class="text-muted">9 mins</small>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card shadow-sm">
							<svg class="bd-placeholder-img card-img-top" width="100%" height="225"
								xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: Thumbnail"
								preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
								<title>Placeholder</title>
								<rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
									dy=".3em">Thumbnail</text>
							</svg>

							<div class="card-body">
								<p class="card-text">This is a wider card with supporting text below as a natural
									lead-in to additional
									content. This content is a little bit longer.</p>
								<div class="d-flex justify-content-between align-items-center">
									<div class="btn-group">
										<button type="button" class="btn btn-sm btn-outline-secondary">View</button>
										<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
									</div>
									<small class="text-muted">9 mins</small>
								</div>
							</div>
						</div>
					</div>

					<div class="col">
						<div class="card shadow-sm">
							<svg class="bd-placeholder-img card-img-top" width="100%" height="225"
								xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: Thumbnail"
								preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
								<title>Placeholder</title>
								<rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
									dy=".3em">Thumbnail</text>
							</svg>

							<div class="card-body">
								<p class="card-text">This is a wider card with supporting text below as a natural
									lead-in to additional
									content. This content is a little bit longer.</p>
								<div class="d-flex justify-content-between align-items-center">
									<div class="btn-group">
										<button type="button" class="btn btn-sm btn-outline-secondary">View</button>
										<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
									</div>
									<small class="text-muted">9 mins</small>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card shadow-sm">
							<svg class="bd-placeholder-img card-img-top" width="100%" height="225"
								xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: Thumbnail"
								preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
								<title>Placeholder</title>
								<rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
									dy=".3em">Thumbnail</text>
							</svg>

							<div class="card-body">
								<p class="card-text">This is a wider card with supporting text below as a natural
									lead-in to additional
									content. This content is a little bit longer.</p>
								<div class="d-flex justify-content-between align-items-center">
									<div class="btn-group">
										<button type="button" class="btn btn-sm btn-outline-secondary">View</button>
										<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
									</div>
									<small class="text-muted">9 mins</small>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card shadow-sm">
							<svg class="bd-placeholder-img card-img-top" width="100%" height="225"
								xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: Thumbnail"
								preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
								<title>Placeholder</title>
								<rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
									dy=".3em">Thumbnail</text>
							</svg>

							<div class="card-body">
								<p class="card-text">This is a wider card with supporting text below as a natural
									lead-in to additional
									content. This content is a little bit longer.</p>
								<div class="d-flex justify-content-between align-items-center">
									<div class="btn-group">
										<button type="button" class="btn btn-sm btn-outline-secondary">View</button>
										<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
									</div>
									<small class="text-muted">9 mins</small>
								</div>
							</div>
						</div>
					</div>

					<div class="col">
						<div class="card shadow-sm">
							<svg class="bd-placeholder-img card-img-top" width="100%" height="225"
								xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: Thumbnail"
								preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
								<title>Placeholder</title>
								<rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
									dy=".3em">Thumbnail</text>
							</svg>

							<div class="card-body">
								<p class="card-text">This is a wider card with supporting text below as a natural
									lead-in to additional
									content. This content is a little bit longer.</p>
								<div class="d-flex justify-content-between align-items-center">
									<div class="btn-group">
										<button type="button" class="btn btn-sm btn-outline-secondary">View</button>
										<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
									</div>
									<small class="text-muted">9 mins</small>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card shadow-sm">
							<svg class="bd-placeholder-img card-img-top" width="100%" height="225"
								xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: Thumbnail"
								preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
								<title>Placeholder</title>
								<rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
									dy=".3em">Thumbnail</text>
							</svg>

							<div class="card-body">
								<p class="card-text">This is a wider card with supporting text below as a natural
									lead-in to additional
									content. This content is a little bit longer.</p>
								<div class="d-flex justify-content-between align-items-center">
									<div class="btn-group">
										<button type="button" class="btn btn-sm btn-outline-secondary">View</button>
										<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
									</div>
									<small class="text-muted">9 mins</small>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card shadow-sm">
							<svg class="bd-placeholder-img card-img-top" width="100%" height="225"
								xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: Thumbnail"
								preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
								<title>Placeholder</title>
								<rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
									dy=".3em">Thumbnail</text>
							</svg>

							<div class="card-body">
								<p class="card-text">This is a wider card with supporting text below as a natural
									lead-in to additional
									content. This content is a little bit longer.</p>
								<div class="d-flex justify-content-between align-items-center">
									<div class="btn-group">
										<button type="button" class="btn btn-sm btn-outline-secondary">View</button>
										<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
									</div>
									<small class="text-muted">9 mins</small>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->

	</main>
<?php
// Add footer to page
require_once $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/elements/footer.php';

// Don't put php closing tag at the end, it can cause problems with redirects and headers?
require_once $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/afterIncludes.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/db_disconnect.php';

?>

</body>

</html>


