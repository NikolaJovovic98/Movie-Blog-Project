
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
?> <div class="panell">
<a class="item2" href="addPost.php">Postovi</a>
<a class="item2" href="addMovie.php">Filmovi</a>
<a class="item2" href="addTvShows.php">Serije</a>
</div>
 <div  class="jumbotron">

  
      <h4>Nova serija</h4>
    <form class="form-group"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" name="form" enctype="multipart/form-data">
      <input class="form-control" type="text" name="naslov" placeholder="Naslov">
      <br>
      <input class="form-control" type="text" name="sezona" placeholder="Sezona">
      <br>
      <input class="form-control" type="text" name="zanr" placeholder="Zanr">
      <br>
      <input class="form-control" type="text" name="reziser" placeholder="Reziser">
      <br>
      <input class="form-control" type="text" name="glavna_uloga1" placeholder="Glavna uloga 1">
      <br>
      <input class="form-control" type="text" name="glavna_uloga2" placeholder="Glavna uloga 2">
      <br>
    
      <input class="form-control" type="text" name="sadrzaj" placeholder="lorem ipsum....">
      <input class="form-control btn-primary"  type="file" name="image" id="file">
             <img id="myImg" src="#" alt=" ">
            <br>
            <br>
        <input  class="form-control btn-success" type="submit" name="Submit" id="save" value="sačuvaj">  
      
      </form>
      </div>  
      <?php
       $naslov=$sezona=$zanr=$reziser=$glavna_uloga1=$glavna_uloga2=$sadrzaj="";
       if ($_SERVER["REQUEST_METHOD"]== "POST"){
         $naslov = test_input($_POST["naslov"]);
         $sezona = test_input($_POST["sezona"]);
         $zanr = test_input($_POST["zanr"]);
         $reziser = test_input($_POST["reziser"]);
         $glavna_uloga1 = test_input($_POST["glavna_uloga1"]);
         $glavna_uloga2 = test_input($_POST["glavna_uloga2"]);
         $sadrzaj = test_input($_POST["sadrzaj"]);
  
       }
       function test_input($data) {
         $data = trim($data);
         $data = stripslashes($data);
         $data = htmlspecialchars($data);
         return $data;
       }
       echo "<br>";

       echo "<br>";
       $msg = '';
       if($_SERVER['REQUEST_METHOD']=='POST'){
           $image = $_FILES['image']['tmp_name'];
           $img = file_get_contents($image);
           $con = mysqli_connect('localhost','root','','db_filmovi_serije') or die('Unable To connect');


        $sql="INSERT INTO serije(s_id, naslov, sezona, zanr, reziser, glavna_uloga1, glavna_uloga2, sadrzaj, slika)
        VALUES ('', '$naslov',' $sezona', '$zanr', '$reziser', '$glavna_uloga1', '$glavna_uloga2', '$sadrzaj', ?)";
         $stmt = mysqli_prepare($con,$sql);
         if ($naslov=='' || $sezona=='' || $zanr=='' || $reziser=='' || $glavna_uloga1==''||$glavna_uloga2=='' ||$sadrzaj==''){
          echo "Morate unijeti podatke";
        }else{
         mysqli_stmt_bind_param($stmt, "s",$img);
         mysqli_stmt_execute($stmt);
     
         $check = mysqli_stmt_affected_rows($stmt);
         if($check==1){
             $msg = 'Image Successfullly UPloaded';
         }else{
             $msg = 'Error uploading image';
         }
           mysqli_close($con);
     }
      
       }
    

 

?>