<?php require_once( 'incl/functions.php' ); ?>
<?php require_once( 'incl/header.php' ); ?>

 <div class="container mtb">
	 	<div class="row">
	 		
	 		<?php 
	 		$search = $_GET['result'];
	 		$results = search($search);
	 		?>
	 		
	 	
	 		<! -- MAIN CONTENAT AREA -->
	 		<div class="col-lg-8">
		 			<?php
		 			if(!empty($results)) {
						foreach ($results as $result) { ?>
		 				<h2><a href="movie.php?mID=<?php echo $result['mID']; ?>"><?php echo $result['title']; ?></a></h2>
		 			<?php } 
						} else { ?> 
						<h3>Search not found</h3>
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
						<?php } ?>
		 			
						
						
						
			</div><! --/ MAIN CONTENT AREA -->
	 	</div><! --/row -->
	 </div><! --/container -->

<?php require_once( 'incl/footer.php' ); ?>
