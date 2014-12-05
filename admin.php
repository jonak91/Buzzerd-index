<?php require_once( 'incl/functions.php' ); ?>
<?php require_once( 'incl/header.php' ); ?>

<div id="blue">
	    <div class="container">
			<div class="row">
			    <?php
			    if(isset($_POST['submit'])){
			    $title=$_POST['title'];
				header( "Location: /results.php?result=$title");
				}
		        ?>
				<form method="post" name="search">
				<div>
				<label for="name">Search Movies:</label><input type="text" name="title" placeholder="Ex: Home Alone 2" />
				</div>
				<input type="submit" name="submit" value="Search" />
				</form>
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div>
	
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
						<h2>Recently Added:</h2>
						<table style="width:100%">
					<tr>
					<td><h2>Title:</h2></td> <td><h2>Year:</h2></td>
					</tr>
					<?php
		 			$recentmovies = get_5mostrecentmovies();
		 			foreach ($recentmovies as $recentmovie) {
		 			?>
					<tr>
		 			<td><h2><a href="movie.php?mID=<?php echo $recentmovie['mID']; ?>"><?php echo $recentmovie['title']; ?></a></h2></td> <td><h2><?php echo $recentmovie['year_released']; ?></h2></td>
		 			</tr>
		 			<?php } ?>
		 		</table>
		 		
		 		<table style="width:100%">
					<tr>
					<td><h2>Name:</h2></td>
					</tr>
					<?php
					$count = 0;
		 			$recentactors = get_5mostrecentactors();
		 			foreach ($recentactors as $recentactor) {
		 			$count++;
		 			?>
					<tr>
		 			<td><h2><a href="actor.php?aID=<?php echo $recentactor['aID']; ?>"><?php echo $recentactor['first_name'].' '.$recentactor['last_name'].' ('.$count.')'; ?></a></h2></td>
		 			</tr>
		 			<?php } ?>
		 		</table>
			</div><! --/ MAIN CONTENT AREA -->
	 	</div><! --/row -->
	 </div><! --/container -->

<?php require_once( 'incl/footer.php' ); ?>
