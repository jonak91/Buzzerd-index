<?php require_once( 'incl/functions.php' ); ?>
<?php require_once( 'incl/header.php' ); ?>

 <div class="container mtb">
	 	<div class="row">
	 		
	 		<?php
			  if(isset($_POST['submit'])){
					add_studio($_POST);
				}
		?>
	 	
	 		<! -- MAIN CONTENAT AREA -->
	 		<div class="col-lg-8">
						<h2>Add Studio</h2>
						<form method="post" name="add_studio">
								<div>
									<label for="name">Studio Name:</label> <input type="text" name="name" placeholder="Ex: Warner Bros" />
								</div>
								<div>
									<label for="city">City:</label> <input type="text" name="city" placeholder="Ex: Chicago" />
								</div>
								<div>
									<label for="state">State:</label> <input type="text" name="state" placeholder="Ex: Michigan" />
								</div>
								<div>
									<label for="zip">Table Description:</label> <input type="text" name="zip" placeholder="Ex: 18512" />
								</div>
								<div>
							<input type="submit" name="submit" value="Add Studio" />
						</form>
						
						
			</div><! --/ MAIN CONTENT AREA -->
	 	</div><! --/row -->
	 </div><! --/container -->

<?php require_once( 'incl/footer.php' ); ?>
