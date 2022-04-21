<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<title>Hello, world!</title>
</head>
 <body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
	<div class="container">
		<div class="row">
			<div class="col">
				<h1>Hello, <?php $nama ?> !</h1>
				<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt ad non eligendi nisi, rem, beatae nobis soluta quis ducimus ipsam perspiciatis atque corrupti possimus? Animi neque inventore odit labore voluptatibus.</p>
				<h1>Daftar Peserta :</h1>
				<ul>
					<?php 
					foreach ($mhs as $item){
						echo "<li> $item </li>";
					}
					?>
				</ul>					
			</div>
		</div>
	</div>