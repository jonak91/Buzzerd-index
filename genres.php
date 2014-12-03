<?php require_once( 'incl/header.php' ); ?>

 <div class="container mtb">
	 	<div class="row">
	 	
	 		<! -- MAIN CONTENAT AREA -->
	 		<div class="col-lg-8">
	 			<h1>All studios</h1>
		 		
		 		<?php
		 		$movies = get_gneres();
		 		print_r(get_genres());
		 		foreach ($genres as $genre) { ?>
		 			<h2>Title: <?php $genre['name'] ?></h2>
		 		<?php } ?>
		 		<h2>Name:</h2>
		 		<h2>Number of movies:</h2>
			</div><! --/ MAIN CONTENT AREA -->
	 		
	 	</div><! --/row -->
	 </div><! --/container -->

<?php require_once( 'incl/footer.php' ); ?>
