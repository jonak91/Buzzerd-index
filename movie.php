<?php require_once( 'incl/functions.php' ); ?>
<?php require_once( 'incl/header.php' ); ?>

 <div class="container mtb">
	 	<div class="row">
	 		
	 		<?php 
	 		$mID = $_GET['mID'];
	 		$movie = get_movie($mID);
	 		?>
	 	
	 		<! -- MAIN CONTENAT AREA -->
	 		<div class="col-lg-8">
	 			<h1>almost there</h1>
		 	
		 	 <h2>Title: <?php echo $movie['title']; ?></h2>
		 		<h2>Year: <?php echo $movie['year_released']; ?></h2>
		 		<h2>Synopes: <?php echo $movie['synopsis']; ?></h2>
		 		<h2>Studio: <?php echo $movie['studioID']; ?></h2>
		 		<h2>Starring: (actors)</h2>
		 		<h2>Book?<?php echo $movie['was_novel']; ?></h2>
		 		<h2>Timestamp: <?php echo $movie['timestamp']; ?></h2>
			</div><! --/ MAIN CONTENT AREA -->
	 		
	 	</div><! --/row -->
	 </div><! --/container -->

<?php require_once( 'incl/footer.php' ); ?>
