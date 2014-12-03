<?php require_once( 'incl/header.php' ); ?>

 <div class="container mtb">
	 	<div class="row">
	 	
	 		<! -- MAIN CONTENAT AREA -->
	 		<div class="col-lg-8">
	 			<h1>All studios</h1>
		 		
		 		<?php
		 		$studios = get_studios();
		 		print_r(get_studios());
		 		foreach ($studios as $studio) { ?>
		 		<h2>Title: <?php $movie['name'] ?></h2>
		 		<?php } ?>
			</div><! --/ MAIN CONTENT AREA -->
	 		
	 	</div><! --/row -->
	 </div><! --/container -->

<?php require_once( 'incl/footer.php' ); ?>
