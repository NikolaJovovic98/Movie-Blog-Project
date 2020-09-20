
<?php
    include "includes/connection.php";
    $sql="SELECT * FROM blog_objave ORDER BY b_id DESC";
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
    <link rel="stylesheet" href="css/newsStyle.css">
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


<!-- dodaj while session isset da zapamti ovo ili nesto ako -->

<p >
<?php 



        if(isset($_SESSION['username'])){
                  
                

                 echo '<p style="background-color:coral;color: green;font-size:18px;margin:20px;text-align:center">
                 
                 <b>Prijavljeni ste '.$_SESSION['username'].'</b><br>Dobrodosli na sajt ! Istrazite Sve </p>';

   
  

        }
        else  if(isset($_SESSION['admin_username'])) {

          echo '<p style="background-color:coral;color: green;font-size:18px;margin:20px;text-align:center">
                 
          <b>Prijavljeni ste '.$_SESSION['admin_username'].'</b><br><b>Dobrodosli Administratore</b></p>';

        }

        else if(isset($_GET['success'])) {
             
          echo '';

        }

        else {

          echo '<p style="margin: 15px;">
          Idite na Registruj se dugme za <b>registraciju</b> ili na prijavi se dugme za <b>prijavu</b> </p>';

        }
        


?></p>



<p>

<?php

if(isset($_GET['success'])){

          if( $_GET['success']=='registrationsuccessful'){

            echo '<p style="color: green;font-size:18px;margin:20px;text-align:center">
            
            <b>Registrovani ste !</b> Idite na Prijavi se da bi se prijavili !</p>';


   }
                    }
                
    else {
        
        echo '';


    }

?>

</p>


<div class="wrapper">

<div class="carousel">
        <div class="slider">


<div class="card">

                <div class="opis">
                    <h4>Forest Gamp</h4>
                    <p >                           
                    Režiser: Robert Zameckis <br>
                    Godina: 1994 <br>
                    Uloge: <br> Tom Hanks
                    <br> Robin Wright
                  </p>
                  </div>
                <div class="card-bg" style="background-image: url(images/forestGamp.jpg);">
                </div>
                
          </div>
      
          <div class="card">
              <div class="opis">
              <h4>Supernatural</h4>
            <p >                           
                Režiser: Eric Kripke <br>
                Godina: 2005 - 2020 <br>
                Uloge: <br> Jensen Ackles
                <br> Jared Padalacki
              </p>
            </div>
            <div class="card-bg" style="background-image: url(images/supernatural.jpg);">
            </div>
          </div>
      
          <div class="card">
            <div class="opis">
                <h4>La Vita e Bella</h4>
              <p >                           
                  Režiser: Roberto Benigni <br>
                  Godina: 1997 <br>
                  Uloge: <br> Roberto Benigni
                <br> Nicoletta Braschi
                </p>
              </div>
            <div class="card-bg" style="background-image: url(images/lavita.jpg);">
            </div>
          </div>
      
          <div class="card">
            <div class="opis">
                <h4>Breaking Bad</h4>
              <p >                           
                  Režiser: Vince Gilligan <br>
                  Godina: 2008 - 2013<br>
                  Uloge: <br> Bryan Cranston
                  <br>Aaron Paul
                </p>
              </div>
            <div class="card-bg" style="background-image: url(images/breaking.jpg);">
            </div>
          </div>
      
          <div class="card">
          <div class="opis">
                <h4>The Shawshank Redemption</h4>
                <p>
                Režiser: Frank Darabont <br>
                Godina: 1994 <br>
                Uloge: <br> Tim Robbins
                <br> Morgan Freeman
                </p>
              </div>
            <div class="card-bg" style="background-image: url(images/redemption.jpg);">
            </div>
          </div>
      
          <div class="card">
          <div class="opis">
                <h4>Walking Dead</h4>
              <p >                           
              Režiser: Frank Darabont<br>
                Godina: 2010 -  <br>
                Uloge: <br> Andrew Lincoln
                <br> Norman Reedus
                </p>
              </div>
            <div class="card-bg" style="background-image: url(images/dead.jpg);">
            </div>
          </div>
      
          <div class="card">
          <div class="opis">
                <h4>Scent of a woman</h4>
                <p>
                Režiser: Martin Brest <br>
                Godina: 1992 <br>
                Uloge: <br> Al Pacino
                <br> Chris O'Donnell
                </p>
              </div>
            <div class="card-bg" style="background-image: url(images/scent.jpg);">
            </div>
          </div>
      
          <div class="card">
          <div class="opis">
                <h4>Stranger Things</h4>
                <p>
                Režiser: The Duffer Brothers <br>
                Godina: 2016 -  <br>
                Uloge: <br> Finn Wolfhard
                <br> Millie Bobby Brown
                </p>
              </div>
            <div class="card-bg" style="background-image: url(images/stranger.webp);">
            </div>
          </div>
      
          <div class="card">
          <div class="opis">
                <h4>Saving Private Ryan</h4>
                <p>
                Režiser: Steven Spielberg <br>
                Godina: 1998 <br>
                Uloge: <br> Tom Hanks
                <br> Tom Sizemore
                </p>
              </div>
            <div class="card-bg" style="background-image: url(images/rajan.jpg);">
            </div>
          </div>
          <div class="card">
          <div class="opis">
                <h4>Orange is the new black</h4>
                <p>
                Režiser: Jenji Kohan <br>
                Godina: 2010 - 2019 <br>
                Uloge: <br> Taylor Schilling
                <br> Danielle Brooks
                </p>
              </div>
            <div class="card-bg" style="background-image: url(images/orange.jpg);">
            </div>
          </div>
        </div>
      </div>
</div>


<div>

	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
  <div class="vijest" class="<?php if(isset($classname)) echo $classname;?>">

	<p  class="slikaPost"><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['slika'] ).'" height="200" width="100"/>';?></p>
 <p class="naslovPost"><a href="article.php?b_id=<?php echo $row["b_id"]; ?>" ><?php echo $row["naslov"]; ?></a></p>
  
  </div>
	<?php
	$i++;
	}
	?>

    



<?php
include "includes/kraj.php"
?>

