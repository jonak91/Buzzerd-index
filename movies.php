<?php require_once( 'incl/functions.php' ); ?>
<?php require_once( 'incl/header.php' ); ?>

 <div class="container mtb">
	 	<div class="row">
	 	
	 		<! -- MAIN CONTENAT AREA -->
	 		<div class="col-lg-8">
	 			<h1>All movies</h1>



<?php
		 		$movies = get_movies();
		 		print_r(get_movies());
		 		
		 		foreach ($movies as $movie) { ?>
		 		<h2>Title: <?php echo $movie['title']; ?></h2>
		 		<h2>Year: <?php echo $movie['year_released']; ?></h2>
		 		<?php } ?>
		 		
</div><! --/ MAIN CONTENT AREA -->
	 		
	 </div><! --/row -->
	 </div><! --/container -->

<?php require_once( 'incl/footer.php' ); ?>
