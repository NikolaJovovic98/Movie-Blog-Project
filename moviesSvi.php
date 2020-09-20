<?php
    include "includes/connection.php";
    $sql="select * from filmovi";
    $result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie blog</title>
    <link rel="stylesheet" href="nav.css">
   
    <link rel="stylesheet" href="css/admin2.css">
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.pkgd.min.js"></script>
    <script src="https://npmcdn.com/flickity@2/dist/flickity.pkgd.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
    <script src="run.js"></script>
    <script src="js/script.js" ></script>
</head>
<?php include "includes/pocetak.php"
 ?>  
</div>
<div class="container">
	<table class="table ">
	<tr class="tableh">
	<td>Naslov</td>
	<td>Godina</td>
	<td>Žanr</td>
	<td>Reziser</td>
	<td>Glavna uloga 1</td>
	<td>Glavna uloga 2</td>

	</tr>
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
  <tr class="<?php if(isset($classname)) echo $classname;?>">

	<td><?php echo $row["naslov"]; ?></td>
	<td><?php echo $row["godina"]; ?></td>
	<td><?php echo $row["zanr"]; ?></td>
	<td><?php echo $row["reziser"]; ?></td>
  <td><?php echo $row["glavna_uloga1"]; ?></td>
  <td><?php echo $row["glavna_uloga2"]; ?></td>

	</tr>
	<?php
	$i++;
	}
	?>
</table>
</div>


<?php include "includes/kraj.php"
?>
     