<?php


if(isset($_POST['dodaj-post-dugme'])){

    $con = mysqli_connect('localhost','root','','db_filmovi_serije') or die('Unable To connect');

    require 'test.php';

    $naslov_input = test_input($_POST['naslov']);
     $text_input = test_input($_POST['text']);
     $image = $_FILES['image']['tmp_name'];
     $slika = file_get_contents($image);

  
 
      if(empty($naslov_input) || empty($text_input)){


       header('location: ../admin/addPost.php?greska=praznopolje');
       exit();

      }

      else {

            
    $querry = "INSERT INTO blog_objave(naslov,sadrzaj,slika) VALUES(?,?,?)";

    $statement = mysqli_prepare($con,$querry);

    mysqli_stmt_bind_param($statement,'sss', $naslov_input,$text_input,$slika);

    mysqli_stmt_execute($statement);

    header('Location: ../admin/addPost.php?uspjeh=dodatfilm');
    exit();



      }


}

else {

    header('location: ../admin/addPost.php');
    exit();

}

