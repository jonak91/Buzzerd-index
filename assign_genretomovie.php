<?php require_once( 'incl/functions.php' ); ?>
<?php require_once( 'incl/header.php' ); ?>

 <div class="container mtb">
	 	<div class="row">
	 		
	 		<?php
			  if(isset($_POST['submit'])){
					assign_gtm($_POST);
				}
		?>
	 	
	 		<! -- MAIN CONTENAT AREA -->
	 		<div class="col-lg-8">
						<h2>Assign Genre to Movie</h2>
						<form method="post" name="assign_gtm">
							 <label for="movie"> Select movie in this genre:</label>
									<select name="movie">
										<?php 
										$movies = get_movies();
										foreach($movies as $movie){ ?>
										<option value="<?php echo $movie['mID']; ?>"><?php echo $movie['title']; ?></option>
										<?php } ?>
									</select>
									<label for="genre"> Select genre name:</label>
									<select name="genre">
										<?php 
										$genres = get_genres();
										foreach($genres as $genre){ ?>
										<option value="<?php echo $genre['gID']; ?>"><?php echo $genre['name']; ?></option>
										<?php } ?>
									</select>
							<input type="submit" name="submit" value="Assign" />
						</form>
						
						
			</div><! --/ MAIN CONTENT AREA -->
	 	</div><! --/row -->
	 </div><! --/container -->

<?php require_once( 'incl/footer.php' ); ?>
