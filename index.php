<?php
	include 'script.php';

	if(empty($carrosel) || empty($r)){
		echo "Error";
		die();
		// registra log com monolog
	}

?>

<!doctype html>
<html lang="pt-br">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<!-- Main CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">

	<title>Deen</title>
</head>
<body>
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner cor">
			

			<?php
			$contador = 0;
			foreach($carrosel as $key=>$p):
				//print_r($p);
				$title = filter_var($p->title, FILTER_SANITIZE_SPECIAL_CHARS);
				$date = strftime('%d de %B de %Y', strtotime($p->pubDate));
				$date = filter_var($date, FILTER_SANITIZE_SPECIAL_CHARS);

				?>
				<div class="carousel-item xd <?php echo ($key == 0) ? 'active' : ''?> container">
					<div class="row">
						<div class="col-md-6">
							<h1 class="title_carroussel"> <?php echo $title ?>.</h1>
							<span class="date"><?php echo $date?></span><br/>

						</div>
						<div class="col-md-6"></div>
						<span class="controler"><?php echo ++$contador; ?> de 5</span>
					</div>
					
					
				</div>
				


				<?php
			endforeach;
			?>



		</div>
		<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>


	<div class="container">
		<div class="title_noticia">
			<h2> ÚLTIMAS NOTÍCIAS</h2>
		</div>


		<?php
		foreach($r as $n):
			$Ntitle = filter_var($n->title, FILTER_SANITIZE_SPECIAL_CHARS);
			$Ndate = strftime('%d de %B de %Y', strtotime($n->pubDate));
			$Ndate = filter_var($Ndate, FILTER_SANITIZE_SPECIAL_CHARS);

			?>
			<div class="noticia">
				<h3><?php echo $Ntitle ?>.</h3>
				<span class="date"> <?php echo $Ndate; ?></span>
			</div>
			<?php
		endforeach;
		?>

	</div>

	<!-- Jquery JavaScript -->
	<script src="assets/js/jquery.min.js"></script>

	<!-- Popper JavaScript -->
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->

	<!-- Bootstrap JavaScript -->
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>