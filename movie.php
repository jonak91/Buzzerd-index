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
	 		$mID = $_GET['mID'];
	 		$movie = get_movie($mID);
	 		?>
	 	
	 		<! -- MAIN CONTENAT AREA -->
	 		<div class="col-lg-8">

					<table style="width:100%">
						
					<tr><td><h2>Title: <?php echo $movie['title']; ?></h2></td> <td><h2>Year: <?php echo $movie['year_released']; ?></h2></td></tr>
					<tr><td colspan="2"><h2>Synopes: <?php echo $movie['synopsis']; ?></h2></td></tr>
					<tr><td colspan="2"><?php $studio = get_studio($movie['studioID']); ?><h2>Studio: <a href="studio.php?sID=<?php echo $studio['sID']; ?>"><?php echo $studio['name']; ?></a></h2></td></tr>
					<tr>
		 		<td colspan="2"><h2>Starring:</h2></td>
		 		</tr>
					<?php $actorsfrommovies = get_actorsfrommovies($mID);
		 		foreach ($actorsfrommovies as $actorfrommovie) {?>
		 		<tr>
		 		<td colspan="2"><h2><a href="actor.php?aID=<?php echo $actorfrommovie['aID']; ?>"><?php echo $actorfrommovie['first_name'].' '.$actorfrommovie['last_name']; ?></a></h2></td>
		 		</tr>
		 		<?php } ?>
		 		<tr>
		 		<td colspan="2"><h2>Genre(s):</h2></td>
		 		</tr>
		 		<?php $genresfrommovies = get_genresfrommovies($mID);
		 		foreach ($genresfrommovies as $genrefrommovie) { ?>
					<tr>
					<td<td colspan="2"></td><td><h2><a href="genre.php?gID=<?php echo $genrefrommovie['gID']; ?>"><?php echo $genrefrommovie['name']; ?></a></h2></td>
					</tr>
					<?php } ?>
					
					<?php
		 		if($movie['was_novel'] == "0"){
		 			$answer = "no";
		 		}else{
		 			$answer = "yes";
		 		}
		 		?>
		 		<tr><td><h2>Book?</h2></td><td><h2><?php echo $answer; ?></h2></td></tr>
					</table>
					
					
					

			</div><! --/ MAIN CONTENT AREA -->
	 	</div><! --/row -->
	 </div><! --/container -->

<?php require_once( 'incl/footer.php' ); ?>
