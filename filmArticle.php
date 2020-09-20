<?php
    include "includes/connection.php";
    $sql="SELECT * FROM filmovi WHERE f_id='" . $_GET["f_id"] . "'";
    $result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie blog</title>
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="css/article.css">
    <link rel="stylesheet" href="css/registracija.css">
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

<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
  <div class="article" class="<?php if(isset($classname)) echo $classname;?>">
      
  <h1 class="naslovArticle"><?php echo $row["naslov"]; ?></a></h1>


    <div class="articleText">
  <p class="sadrzajArticle"><?php echo $row["sadrzaj"]; ?></a></p>
  <p class="slikaArticle"><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['slika'] ).'" height="400" width="260"/>';?></p>
   </div>
    <a class="nazadArticle" href="movies.php">Nazad na filmove</a>
   </div>
  <?php
	$i++;
    }
	?>



<div id="comment-section-div">



<div id="comment-form-div">

<p style="color: green;margin-bottom: 10px;">





<?php

    if(isset($_GET['success'])){

      if($_GET['success'] == 'commentsuccessful'){

        echo '<b>Komentar uspjesno postavljenj</b>';

      }


    }
    else {

      echo '' ;

    }


?>

</p>






 <?php 

if(isset($_GET['error'])){

if($_GET['error']=='emptycommenttext'){

        echo '<p class="p-error-register">Prazan text</p>';
    

    }
    else if($_GET['error']=='largecomment'){

      echo '<p class="p-error-register">Max text 255 karaktera</p>';
  

  }
    
}

?>






<?php

if(isset($_SESSION['username'])){

 

    echo '

    <div style="text-align: center; background-color: rgba(240, 255, 255, 0.8)"><h3>Ostavite komentar</h3></div>

     
    
    <div class="komentar">
      <form class="form-group" action="procesi/komentari.proces.php" method="POST" >
    
    
        <input  type="hidden" name="film-id-comment" value="'. $_GET['f_id'].'" readonly >
        <input  type="hidden" name="username-id-comment" value="'.$_SESSION['username_id'].'" readonly >
        <input  type="hidden" name="username-comment" value="'.$_SESSION['username'].'" readonly >
    
        
        <textarea class="form-control" name="text-comment" id="comment" rows="3" placeholder="Komentar" required></textarea>
    
 
    
       <button type="submit" name="comment-button"class="dugme" >Podijeli komentar</button>
      </form>
      </div>';


   }


else {

  echo 
  '
  <div class="upozorenje">
  <h3>
  Morate biti <a href="prijaviSe.php" style="color:red">prijavljenji</a> <br>
  da biste komentarisali 

  </h3>
  
  </div>' ;

}

?>

</div>




<div id="comments-view-div">

<h2 style="margin-bottom:30px;border-bottom: 2px solid black;width: 100%;text-align: center;">Komentari</h2>

<?php

  require('procesi/connection.php');

  $film_id = $_GET['f_id'];

  if(isset($_SESSION['username_id'])){

   $user_id = $_SESSION['username_id'];

  }


  
  $find_comments = mysqli_query($connect,"SELECT * FROM komentari WHERE f_id=$film_id ORDER BY datum desc");

  while($row =mysqli_fetch_assoc($find_comments) ){

   echo '<div class="komentar-text"">';


   if(isset($_SESSION['username_id'])){

    if($row['u_id']==$user_id){

      echo '<p style="color:green"><b>'.$row['korisnicko_ime'].'</b></p>';

    }

    else {
      echo '<p><b>'.$row['korisnicko_ime'].'</b></p>';

    }

  }
  else {
    echo '<p><b>'.$row['korisnicko_ime'].'</b></p>';

  }

 

 
    echo'<br>';
    echo '<p style="margin-top:10px">'.$row['sadrzaj'].'</p>';

    if(isset($_SESSION['username_id'])){

    if($row['u_id']==$user_id){

       echo '<a class="btn" style="color:red;background-color:black;" href="izbrisiKomentar.php?k_id='.$row['k_id'].'">Izbrisi</a>';

    }
  }
    
    echo '</div>';
  }

?>


</div>

</div>
<?php
include "includes/kraj.php"
?>

