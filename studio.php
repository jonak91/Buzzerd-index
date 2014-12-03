<?php require_once( 'incl/functions.php' ); ?>
<?php require_once( 'incl/header.php' ); ?>

 <div class="container mtb">
	 	<div class="row">
	 		
	 		<?php 
	 		$sID = $_GET['sID'];
	 		$studio = get_studio($sID);
	 		?>
	 	
	 		<! -- MAIN CONTENAT AREA -->
	 		<div class="col-lg-8">
	 			<h1>working on it</h1>
	 			
	 			<h2>Name: <?php echo $studio['name']; ?></h2>
	 			<h2>Location: <?php echo $studio['city'].' '. $studio['state'].' '. $studio['zip']; ?></h2>
		 		<h2>List of movies from this studio:</h2>
		 		<?php $moviesfromstudio = get_moviesfromstudio($sID);
		 		foreach ($moviesfromstudio as $moviefromstudio) {?>
		 			<h2>Title: <a href="movie.php?mID=<?php echo $moviefromstudio['mID']; ?>"><?php echo $moviefromstudio['title']; ?></a></h2>
		 		<?php } ?>
		 		
			</div><! --/ MAIN CONTENT AREA -->
	 		
	 	</div><! --/row -->
	 </div><! --/container -->

<?php require_once( 'incl/footer.php' ); ?>
