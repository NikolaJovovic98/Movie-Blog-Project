<?php


if(isset($_POST['dodaj-film-dugme'])){

    $con = mysqli_connect('localhost','root','','db_filmovi_serije') or die('Unable To connect');

    require 'test.php';

    $naslov_input = test_input($_POST['naslov']);
    $godina_input =test_input($_POST['godina']);
    $zanr_input = test_input($_POST['zanr']);
    $reziser_input = test_input($_POST['reziser']);
    $glavna_uloga1_input =test_input( $_POST['glavna_uloga1']);
    $glavna_uloga2_input =test_input( $_POST['glavna_uloga2']);
    $sadrzaj_input =test_input( $_POST['sadrzaj']);
    $image = $_FILES['image']['tmp_name'];
    $slika = file_get_contents($image);

  
 
      if(empty($naslov_input) || empty($godina_input) || 
      empty($zanr_input) || empty($reziser_input) || 
      empty($glavna_uloga1_input) || empty($glavna_uloga2_input) || empty($sadrzaj_input)){


       header('location: ../admin/addMovie.php?greska=praznopolje');
       exit();

      }

      else {

            
    $querry = "INSERT INTO filmovi(naslov,godina,zanr,reziser,glavna_uloga1,glavna_uloga2,sadrzaj,slika) VALUES(?,?,?,?,?,?,?,?)";

    $statement = mysqli_prepare($con,$querry);

    mysqli_stmt_bind_param($statement,'sissssss', $naslov_input,$godina_input,$zanr_input,$reziser_input,$glavna_uloga1_input,$glavna_uloga2_input,$sadrzaj_input,$slika);

    mysqli_stmt_execute($statement);

    header('Location: ../admin/addMovie.php?uspjeh=dodatfilm');
    exit();



      }


}

else {

    header('location: ../admin/addMovie.php');
    exit();

}

