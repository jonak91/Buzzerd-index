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
		 			<h2>Some stuff goes here</h2>
						<h2>Add movie</h2>
						<form method="post" name="add_movie">
								<div>
									<label for="title">Movie Title:</label> <input type="text" name="title" placeholder="Ex: Ocean's Eleven" />
								</div>
								<div>
									<label for="year_released">Table Description:</label> <input type="text" name="year_released" placeholder="Ex: 1991" />
								</div>
								<div>
									<label for="synopsis">Table Description:</label> <textarea name="synopsis" rows="5" cols="100"></textarea>
								</div>
								<div>
								<label for="was_novel"> Was novel before movie?</label>
									<select name="was_novel">
										<option value="0">No</option>
										<option value="1">Yes</option>
									</select>
							</div>
							<div>
							<label for="studioID"> Made by which studio?</label>
									<select name="studioID">
										<?php 
										$studios = get_studios();
										foreach($studios as $studio){ ?>
										<option value="<?php echo $studio['sID']; ?>"><?php echo $studio['name']; ?></option>
										<?php } ?>
									</select>
							</div>
							<input type="submit" name="submit" value="Add Movie" />
						</form>
						
						<h2>Add actor</h2>
						<form method="post" name="add_movie">
								<div>
									<label for="title">Movie Title:</label> <input type="text" name="title" placeholder="Ex: Ocean's Eleven" />
								</div>
								<div>
									<label for="year_released">Table Description:</label> <input type="text" name="year_released" placeholder="Ex: 1991" />
								</div>
								<div>
									<label for="synopsis">Table Description:</label> <textarea name="synopsis" rows="5" cols="100"></textarea>
								</div>
								<div>
								<label for="was_novel"> Was novel before movie?</label>
									<select name="was_novel">
										<option value="0">No</option>
										<option value="1">Yes</option>
									</select>
							</div>
							<div>
							<label for="studioID"> Made by which studio?</label>
									<select name="studioID">
										<?php 
										$studios = get_studios();
										foreach($studios as $studio){ ?>
										<option value="<?php echo $studio['sID']; ?>"><?php echo $studio['name']; ?></option>
										<?php } ?>
									</select>
							</div>
							<input type="submit" name="submit" value="Add Movie" />
						</form>
						<h2>Add studio</h2>
						<h2>Add genre</h2>
						<h2>assign actor to movie</h2>
						<h2>assign genre to movie</h2>
						<h2>recently added:</h2>
			</div><! --/ MAIN CONTENT AREA -->
	 	</div><! --/row -->
	 </div><! --/container -->

<?php require_once( 'incl/footer.php' ); ?>
