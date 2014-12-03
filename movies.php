<?php require_once( 'incl/functions.php' ); ?>
<?php require_once( 'incl/header.php' ); ?>

 <div class="container mtb">
	 	<div class="row">
	 	
	 		<! -- MAIN CONTENAT AREA -->
	 		<div class="col-lg-8">
	 			<h1>All movies</h1>
	 			<?php
		 		$movies = get_movies();
		 		foreach ($movies as $movie) { ?>
		 		<h2>Title: <a href="movie.php?mID=<?php echo $movie['mID']; ?>"><?php echo $movie['title']; ?></a></h2>
		 		<h2>Year: <?php echo $movie['year_released']; ?></h2>
		 		<?php } ?>
		 		
</div><! --/ MAIN CONTENT AREA -->
	 		
	 </div><! --/row -->
	 </div><! --/container -->

<?php require_once( 'incl/footer.php' ); ?>
