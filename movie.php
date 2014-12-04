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
		 		<h2>Studio: <a href="studio.php?sID=<?php echo $studio['sID']; ?>"><?php echo $studio['name']; ?></a></h2>
		 		<?php $actorsfrommovies = get_actorsfrommovies($mID);
		 		foreach ($actorsfrommovies as $actorfrommovie) {?>
		 		<h2>Starring: <a href="actor.php?aID=<?php echo $actorfrommovie['aID']; ?>"><?php echo $actorfrommovie['first_name'].' '.$actorfrommovie['last_name']; ?></a></h2>
		 		<?php }
		 		if($movie['was_novel'] == "0"){
		 			$answer = "no";
		 		}else{
		 			$answer = "yes";
		 		}
		 		?>
		 		<h2>Genre(s):</h2>
		 		<?php $genresfrommovies = get_genresfrommovies($mID);
		 		foreach ($genresfrommovies as $genrefrommovie) { ?>
		 		<h2><a href="genre.php?gID=<?php echo $genrefrommovie['gID']; ?>"><?php echo $genrefrommovie['name']; ?></a></h2>
		 		<?php } ?>
		 		<h2>Book? <?php echo $answer; ?></h2>
		 		<h2>Timestamp: <?php echo $movie['timestamp']; ?></h2>
			</div><! --/ MAIN CONTENT AREA -->
	 		
	 	</div><! --/row -->
	 </div><! --/container -->

<?php require_once( 'incl/footer.php' ); ?>
