<?php require_once( 'incl/functions.php' ); ?>
<?php require_once( 'incl/header.php' ); ?>

 <div class="container mtb">
	 	<div class="row">
	 		
	 		<?php
			  if(isset($_POST['submit'])){
					add_actor($_POST);
				}
		?>
	 	
	 		<! -- MAIN CONTENAT AREA -->
	 		<div class="col-lg-8">
						<h2>Add actor</h2>
						<form method="post" name="add_actor">
								<div>
									<label for="first_name">First Name:</label> <input type="text" name="first_name" placeholder="Ex: Nick" />
								</div>
								<div>
									<label for="last_name">Last Name:</label> <input type="text" name="last_name" placeholder="Ex: Ocean's Eleven" />
								</div>
								<div>
									<label for="bio">Biography:</label> <textarea name="bio" rows="5" cols="100"></textarea>
								</div>
								<div>
									<label for="dob">Date of Birth:</label> <input type="text" name="dob" placeholder="Ex: 1991-11-13" />
								</div>
								<div>
								<label for="won_oscar"> Has this actor/actress won an oscar?</label>
									<select name="won_oscar">
										<option value="0">No</option>
										<option value="1">Yes</option>
									</select>
							</div>
							<input type="submit" name="submit" value="Add Actor" />
						</form>
						
						
			</div><! --/ MAIN CONTENT AREA -->
	 	</div><! --/row -->
	 </div><! --/container -->

<?php require_once( 'incl/footer.php' ); ?>
