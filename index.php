<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>harjutus-2 - PHP põhitõed</title>
</head>

<body>
    <h1>See dokument on minu esimene katsetus PHP-ga</h1>
	<?php echo "See siin on meelepärane string"; 
		echo "<br>";
		echo "Sinu teksti esimene pool" . " ja sinu teksti teine pool.";?>
		 <br>
	<?php echo 2 + 3; ?>	
	 <br>
	 <?php echo 2 * 4; ?>
	 <br>
	 <?php echo 2 / 4; ?>
	 <br>
	 <?php echo 4 - 2; ?>
	 
<?php // Selline on üks variant üherealisest kommentaarist. ?>
<?php # Selline on teine variant üherealisest kommentaarist. ?>
<?php
    /*
        See
		on mitmerealine
		kommentaar.
    */
?>

</body>
</html>