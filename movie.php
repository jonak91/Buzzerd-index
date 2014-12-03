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
		 		<?php $studio = get_studio($movie['studioID']); ?>
		 		<h2>Studio:<a href="studio.php?sID=<?php echo $studio['sID']; ?>"><?php echo $studio['name']; ?></a></h2>
		 		<h2>Starring: (actors)</h2>
		 		<?php $actorsfrommovie = get_actorsfrommovie($mID);
		 		foreach ($actorsfrommovie as $actorfrommovie) {?>
		 		<h2>Starring: (actors)<a href="actor.php?aID=<?php echo $actorfrommovie['aID']; ?>"><?php echo $actorfrommovie['first_name'].' '.$actorfrommovie['last_name']; ?></h2>
		 		<?php } ?>
		 		<h2>Book?<?php echo $movie['was_novel']; ?></h2>
		 		<h2>Timestamp: <?php echo $movie['timestamp']; ?></h2>
			</div><! --/ MAIN CONTENT AREA -->
	 		
	 	</div><! --/row -->
	 </div><! --/container -->

<?php require_once( 'incl/footer.php' ); ?>
