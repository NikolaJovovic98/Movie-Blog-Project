
<?php
    include "includes/connection.php";
    $sql="SELECT * FROM filmovi ORDER BY f_id DESC";
$result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie blog</title>
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/movies.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.pkgd.min.js"></script>
    <script src="https://npmcdn.com/flickity@2/dist/flickity.pkgd.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  

    <script src="js/script.js" ></script>
</head>
<?php
  include "includes/pocetak.php"
?>
<style>
body  {
      
      background-image:  url(images/background2.jpg);
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
      
      
      }
</style>
  <h1 class="istaknuto">Istaknuti filmovi</h3>

  <?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
  <div class="film" class="<?php if(isset($classname)) echo $classname;?>">
    <div class="slikaFilma">
      <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['slika'] ).'" height="200" width="130"/>';
      ?>
    </div>
    <div class="podaci">
      <h3><?php echo $row["naslov"]; ?></h3>
      <br>
      Godina: <?php echo $row["godina"]; ?>
      <br>
      Žanr: <?php echo $row["zanr"]; ?>
      <br>
      Režiser: <?php echo $row["reziser"]; ?>
      <br>
      Glavne uloge: <?php echo $row["glavna_uloga1"]; ?> ,  <?php echo $row["glavna_uloga2"]; ?>
      
    </div>
    <div class="trecaKolona">


    <a class="opsirnije" href="filmArticle.php?f_id=<?php echo $row["f_id"]; ?>">Opširnije...</a>

    </div>
 

 

  </div>
	<?php
	$i++;
	}
	?>





</div>

<?php
  include "includes/kraj.php"
?>