
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
    <script src="../js/admin.js"></script>
  
  
   
</head>
<?php
    include "includes/adminHeader.php"
?>
<div class="panell">
  <a class="item2" href="addPost.php">Postovi</a>
	<a class="item2" href="addMovie.php">Filmovi</a>
	<a class="item2" href="addTvShows.php">Serije</a>
</div>
<div class="jumbotron">
    
      <h4>Nova vijest</h4>

      <?php

if(isset($_GET['greska'])){

      if($_GET['greska']=='praznopolje'){

          echo '<p style="color: red;">Prazno Polje</p>';

      }

}

else if(isset($_GET['uspjeh'])) {


  if($_GET['uspjeh']=='dodatfilm')

  echo '<p style="color: green;">Film Uspjesno Dodat</p>';

}

else {

  echo '';

}

?>

    <form class="form-group" action="dodajPost.php" method="post" name="form" enctype="multipart/form-data">
      <input class="form-control" type="text" name="naslov" placeholder="Naslov">
      <br>
      <textarea class="form-control" rows="5"  class="form-control" type="text" name="text" placeholder="lorem ipsum...."></textarea>
      <br>
      <input class="form-control btn-primary"  type="file" name="image" id="file">
             <img id="myImg" src="#" alt=" ">
            <br>
            <br>
            <button  class="form-control btn-success" type="submit" name="dodaj-post-dugme" id="save">Dodaj Post</button>
        


      </form>
      </div>
     