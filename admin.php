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
						<h2>Add studio</h2>
						<h2>Add genre</h2>
						<h2>assign actor to movie</h2>
						<h2>assign genre to movie</h2>
						<h2>recently added:</h2>
			</div><! --/ MAIN CONTENT AREA -->
	 	</div><! --/row -->
	 </div><! --/container -->

<?php require_once( 'incl/footer.php' ); ?>
