<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie blog</title>
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="css/registracija.css">
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.pkgd.min.js"></script>
    <script src="https://npmcdn.com/flickity@2/dist/flickity.pkgd.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
    
   

  
    <script type="text/javascript" src="korisnickaValidacijaLogin.js" defer></script>
   
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


<div class="main-wrapper-singup">

<div><h1>Prijavi se </h1></div> 

<?php 

if(isset($_GET['errorlogin'])){

        if($_GET['errorlogin'] == 'emptyfields'){

                echo  '<p class="p-error-login">Prazna polja</p>';

         }

    else if($_GET['errorlogin']== 'invaliddata'){

        echo  '<p class="p-error-login">Pogresni podaci</p>'; 

    }

    else if($_GET['errorlogin']== 'wrongpassword'){

        echo  '<p class="p-error-login">Pogresna lozinka</p>'; 

    }

    else if($_GET['errorlogin']== 'nouser'){

        echo  '<p class="p-error-login">Korisnik ne postoji</p>'; 

    }

}


?>


<div>

<form action="procesi/prijava.proces.php" method="POST"  name="form-login">

				<input type="text" name="username-input-login" placeholder="Korisnicko ime" id="username-input-login-id"> <br>
					<p class="error-message" id="username-login-error-message">Korisničko ime mora imati minimum 3 karaktera</p>

				<input type="password" name="password-input-login" placeholder="Lozinka" id="password-input-login-id"> <br>
                    <p class="error-message" id="password-login-error-message">Lozinka mora imati minimum 6 karaktera</p>
                    
                    <button type="submit" name="login-button" >PRIJAVI SE!</button>

</form>

</div>

</div>
<?php
include "includes/kraj.php"
?>