<?php

$cacheVersion = time();

// For production, remove ?$cacheVersion from the end of each link so we don't use up unnecessary bandwidth


echo <<<EOT

	<!-- Bootstrap (https://getbootstrap.com) -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
		integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
		integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
		integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
		crossorigin="anonymous"></script>

	<!-- htmx (https://htmx.org/)-->
	<script src="https://unpkg.com/htmx.org@1.9.5"></script>

	<!-- Project CSS -->
	<link rel="stylesheet" href="/assets/css/fonts.css?$cacheVersion">
	<link rel="stylesheet" href="/assets/css/normalize.css?$cacheVersion">
	<link rel="stylesheet" href="/assets/css/style.css?$cacheVersion">

	<!-- Project JS -->


	<!-- Meta -->
	<meta name="cache-version" content="$cacheVersion">

EOT;


?>