<?php require_once( 'incl/functions.php' ); ?>
<?php require_once( 'incl/header.php' ); ?>

 <div class="container mtb">
	 	<div class="row">
	 		
	 		<?php
			  if(isset($_POST['submit'])){
					add_movie($_POST);
				}
		?>
	 	
	 		<! -- MAIN CONTENAT AREA -->
	 		<div class="col-lg-8">
						<h2><a href="add_movie.php">Add Movie</a></h2>
						<h2><a href="add_actor.php">Add Actor</a></h2>
						<h2><a href="add_studio.php">Add Studio</a></h2>
						<h2><a href="add_genre.php">Add Genre</a></h2>
						<h2><a href="assign_actortomovie.php">Assign Actor to Movie</a></h2>
						<h2><a href="assign_genretomovie.php">Assign Genre to Movie</a></h2>
						<h2>recently added:</h2>
			</div><! --/ MAIN CONTENT AREA -->
	 	</div><! --/row -->
	 </div><! --/container -->

<?php require_once( 'incl/footer.php' ); ?>
