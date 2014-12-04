<?php require_once( 'incl/functions.php' ); ?>
<?php require_once( 'incl/header.php' ); ?>

 <div class="container mtb">
	 	<div class="row">
	 	
	 		<! -- MAIN CONTENAT AREA -->
	 		<div class="col-lg-8">
	 			<h1>All Genres</h1>
	 			
		 		<h2>Name:</h2>
		 		<?php
		 		$genres = get_genres();
		 		foreach ($genres as $genre) { ?>
		 		<h2><a href="genre.php?gID=<?php echo $genre['gID']; ?>"><?php echo $genre['name']; ?></a></h2>
		 		<?php } ?>
			</div><! --/ MAIN CONTENT AREA -->
	 		
	 	</div><! --/row -->
	 </div><! --/container -->

<?php require_once( 'incl/footer.php' ); ?>
