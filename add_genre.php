<?php require_once( 'incl/functions.php' ); ?>
<?php require_once( 'incl/header.php' ); ?>

 <div class="container mtb">
	 	<div class="row">
	 		
	 		<?php
			  if(isset($_POST['submit'])){
					add_genre($_POST);
				}
		?>
	 	
	 		<! -- MAIN CONTENAT AREA -->
	 		<div class="col-lg-8">
						<h2>Add Genre</h2>
						<form method="post" name="add_genre">
								<div>
									<label for="name">genre name:</label> <input type="text" name="name" placeholder="Ex: sci fi" />
								</div>
							<input type="submit" name="submit" value="Add Genre" />
						</form>
						
						
			</div><! --/ MAIN CONTENT AREA -->
	 	</div><! --/row -->
	 </div><! --/container -->

<?php require_once( 'incl/footer.php' ); ?>
