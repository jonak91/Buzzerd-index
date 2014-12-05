<?php require_once( 'incl/functions.php' ); ?>
<?php require_once( 'incl/header.php' ); ?>

 <div class="container mtb">
	 	<div class="row">
	 	
	 		<! -- MAIN CONTENAT AREA -->
	 		<div class="col-lg-8">
	 			<h1>All studios</h1>
		 		
		 		<table style="width:100%">

					<td><h2>Name:</h2></td> <td><h2>Location:</h2></td>
					<?php
		 		$studios = get_studios();
		 		foreach ($studios as $studio) {
		 		?>
		 		<tr>
		 		<td><h2><a href="studio.php?sID=<?php echo $studio['sID']; ?>"><?php echo $studio['name']; ?></a></h2></td><td><h2><?php echo $studio['city'].' '. $studio['state'].' '. $studio['zip']; ?></td>
		 		<?php } ?>



					</table>
		 		
			</div><! --/ MAIN CONTENT AREA -->
	 		
	 	</div><! --/row -->
	 </div><! --/container -->

<?php require_once( 'incl/footer.php' ); ?>
