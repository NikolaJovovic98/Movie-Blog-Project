<?php
    include "includes/connection.php";
    $sql="select * from user_pass";
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
    <a class="item2" href="manageUsers.php">Obrisi korisnika</a>
	<a class="item2" href="manageComment.php">Obrisi komentar</a>
	
	</div>




	<div class="container">
	<table class="table ">
	<tr class="tableh">
	<td style="padding-left: 10%;"> Naslov</td>
	<td style="padding-left: 5%;">Akcija</td>

	</tr>
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
  <tr class="<?php if(isset($classname)) echo $classname;?>">

	<td style="padding-left: 10%;"><?php echo $row["korisnicko_ime"]; ?></td>
	
	<td><a class="btn" style="padding-left: 10%; padding-right:10%;" href="deleteUsers.php?id=<?php echo $row["id"]; ?>">Izbriši</a></td>
	</tr>
	<?php
	$i++;
	}
	?>
</table>
</div>
</body>
</html>


