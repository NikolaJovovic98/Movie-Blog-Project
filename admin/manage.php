<?php
    include "includes/connection.php";
    $sql="select * from blog_objave";
$result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie blog</title>
   
    <link rel="stylesheet" href="../css/admin.css">
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <script src="https://cdn.ckeditor.com/ckeditor5/20.0.0/classic/ckeditor.js"></script>
    
  
   
</head>
<?php
    include "includes/adminHeader.php"
?>
<div class="panell">
	<a class="item2" href="manage.php">Postovi</a>
	<a class="item2" href="manageMovie.php">Filmovi</a>
	<a class="item2" href="manageShow.php">Serije</a>
</div>
<div class="container">
	<table class="table ">
	<tr class="tableh">
	<td >Naslov</td>
	<td>Akcija</td>

	</tr>
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
  <tr class="<?php if(isset($classname)) echo $classname;?>">

	<td><?php echo $row["naslov"]; ?></td>
	
	<td><a class="btn" href="delete.php?b_id=<?php echo $row["b_id"]; ?>">Izbriši</a></td>
	</tr>
	<?php
	$i++;
	}
	?>
</table>
</div>

</body>
</html>


          