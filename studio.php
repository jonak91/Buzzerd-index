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
	 		$sID = $_GET['sID'];
	 		$studio = get_studio($sID);
	 		?>
	 	
	 		<! -- MAIN CONTENAT AREA -->
	 		<div class="col-lg-8">
	 			
	 			<table style="width:100%">
						
					<tr><td><h2>Name: <?php echo $studio['name']; ?></h2></td></tr>
					<tr><td><h2>Location: <?php echo $studio['city'].' '. $studio['state'].' '. $studio['zip']; ?></h2></td></tr>
					<tr>
		 		<td colspan="2"><h2>List of movies from this studio:</h2></td>
		 		</tr>
					<?php $moviesfromstudio = get_moviesfromstudio($sID);
		 		foreach ($moviesfromstudio as $moviefromstudio) {?>
		 		<tr>
		 		<td colspan="2"><h2>Title: <a href="movie.php?mID=<?php echo $moviefromstudio['mID']; ?>"><?php echo $moviefromstudio['title']; ?></a></h2></td>
		 		</tr>
		 		<?php } ?>
		 		
					</table>


			</div><! --/ MAIN CONTENT AREA -->
	 		
	 	</div><! --/row -->
	 </div><! --/container -->

<?php require_once( 'incl/footer.php' ); ?>
