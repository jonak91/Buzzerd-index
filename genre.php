<?php require_once( 'incl/functions.php' ); ?>
<?php require_once( 'incl/header.php' ); ?>

 <div class="container mtb">
	 	<div class="row">
	 		
	 		<?php 
	 		$gID = $_GET['gID'];
	 		$genre = get_genre($gID);
	 		?>
	 	
	 		<! -- MAIN CONTENAT AREA -->
	 		<div class="col-lg-8">
	 			<h1>working on it</h1>
	 			
	 			<h2>Name: <?php echo $genre['name']; ?></h2>
		 		<?php $moviesfromgenre = get_moviesfromgenre($gID);
		 		foreach ($moviesfromgenre as $moviefromgenre) {?>
		 		<h2>Starring: (actors)<a href="movie.php?mID=<?php echo $moviefromgenre['mID']; ?>"><?php echo $moviefromgenre['title']; ?></h2>
		 		<?php } ?>
			</div><! --/ MAIN CONTENT AREA -->
	 		
	 	</div><! --/row -->
	 </div><! --/container -->

<?php require_once( 'incl/footer.php' ); ?>
