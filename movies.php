<?php require_once( 'incl/functions.php' ); ?>
<?php require_once( 'incl/header.php' ); ?>

 <div class="container mtb">
	 	<div class="row">
	 	
	 		<! -- MAIN CONTENAT AREA -->
	 		<div class="col-lg-8">
	 			<h1>All movies</h1>
	 			<table style="width:100%">
					<tr>
					<td><h2>Title:</h2></td> <td><h2>Year:</h2></td>
					</tr>
					<?php
		 		$movies = get_movies();
		 		foreach ($movies as $movie) {
		 		?>
		 		<tr>
		 		<td><h2><a href="movie.php?mID=<?php echo $movie['mID']; ?>"><?php echo $movie['title']; ?></a></h2></td> <td><h2><?php echo $movie['year_released']; ?></h2></td>
		 		</tr>
		 		<?php } ?>



					</table>
		 		
</div><! --/ MAIN CONTENT AREA -->
	 		
	 </div><! --/row -->
	 </div><! --/container -->

<?php require_once( 'incl/footer.php' ); ?>
