<?php require_once( 'incl/functions.php' ); ?>
<?php require_once( 'incl/header.php' ); ?>

 <div class="container mtb">
	 	<div class="row">
	 	
	 		<! -- MAIN CONTENAT AREA -->
	 		<div class="col-lg-8">
	 			<h1>All actors</h1>
		 		
		 		<?php
		 		$actors = get_actors();
		 		foreach ($actors as $actor) { ?>
		 		<h2>Name: <a href="actor.php?aID=<?php echo $actor['aID']; ?>"><?php echo $actor['first_name'].' '.$actor['last_name']; ?></a></h2>
		 		<h2>Year: <?php echo $actor['dob']; ?></h2>
		 		<?php } ?>
			</div><! --/ MAIN CONTENT AREA -->
	 		
	 </div><! --/row -->
	 </div><! --/container -->

<?php require_once( 'incl/footer.php' ); ?>
