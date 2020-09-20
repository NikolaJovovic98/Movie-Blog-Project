<?php
    include "includes/connection.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie blog</title>
    <link rel="stylesheet" href="nav.css">
   
    <link rel="stylesheet" href="css/search.css">
 
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
<?php 
    $title=$genre=$actor=$director="";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $title = test_input($_POST["title"]);
      $genre = test_input($_POST["genre"]);
      $actor = test_input($_POST["actor"]);
      $director = test_input($_POST["director"]);
    }
    
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }



 ?>  
 <style>
  body  {
      
      background-image:  url(images/background2.jpg);
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
      
      
      }

</style>
    <div class="wrapper">
      <p class="slabel">Pretražujte filmove i serije po naslovu, žanru, režiseru ili glumcima</p>
                  <form action="searchResult.php" method="post" name= "form">
                    <div>
                   
                   
                      <input class="sinput" type="text" name="title" id="input" placeholder="Pretraga">
                    </div>
                    <br>
                    
                    <button  class="search" type="submit" name="Submit" value="Search">  Search</button>
                  </form>
                  <br>
                  <br>
</div>

   






<?php include "includes/kraj.php"
?>
     