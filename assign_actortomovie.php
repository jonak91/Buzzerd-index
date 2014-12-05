<?php require_once( 'incl/functions.php' ); ?>
<?php require_once( 'incl/header.php' ); ?>

 <div class="container mtb">
	 	<div class="row">
	 		
	 		<?php
			  if(isset($_POST['submit'])){
					assign_atm($_POST);
				}
		?>
	 	
	 		<! -- MAIN CONTENAT AREA -->
	 		<div class="col-lg-8">
						<h2>Assign Actor to Movie</h2>
						<form method="post" name="assign_atm">
								<label for="actor"> Select actor/actress name:</label>
									<select name="actor">
										<?php 
										$actors = get_actors();
										foreach($actors as $actor){ ?>
										<option value="<?php echo $actor['aID']; ?>"><?php echo $actor['first_name'].' '.$actor['last_name']; ?></option>
										<?php } ?>
									</select>
							 <label for="movie"> Select movie that this actor/actress starred in:</label>
									<select name="movie">
										<?php 
										$movies = get_movies();
										foreach($movies as $movie){ ?>
										<option value="<?php echo $movie['mID']; ?>"><?php echo $movie['title']; ?></option>
										<?php } ?>
									</select>
							<input type="submit" name="submit" value="Assign" />
						</form>
						
						
			</div><! --/ MAIN CONTENT AREA -->
	 	</div><! --/row -->
	 </div><! --/container -->

<?php require_once( 'incl/footer.php' ); ?>
