<?php require_once( 'incl/functions.php' ); ?>
<?php require_once( 'incl/header.php' ); ?>

 <div class="container mtb">
	 	<div class="row">
	 	
	 		<! -- MAIN CONTENAT AREA -->
	 		<div class="col-lg-8">
	 			<h1>All studios</h1>
		 		
		 		<?php
		 		$studios = get_studios();
		 		foreach ($studios as $studio) { ?>
		 		<h2>Name: <a href="studio.php?sID=<?php echo $studio['sID']; ?>"><?php echo $studio['name']; ?></a></h2>
		 		<h2>Location: <?php echo $studio['city'].' '. $studio['state'].' '. $studio['zip']; ?></h2>
		 		<?php } ?>
			</div><! --/ MAIN CONTENT AREA -->
	 		
	 	</div><! --/row -->
	 </div><! --/container -->

<?php require_once( 'incl/footer.php' ); ?>
