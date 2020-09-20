<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie blog</title>
	<link rel="stylesheet" href="nav.css">
	<link rel="stylesheet" href="css/registracija.css">
	
   
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.pkgd.min.js"></script>
       <script src="https://npmcdn.com/flickity@2/dist/flickity.pkgd.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
     
	<script type="text/javascript" src="korisnickaValidacija.js" defer></script>

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

	   <div><h1>Registracija</h1></div> 
	   

	   
       <?php 

        if(isset($_GET['error'])){


                if($_GET['error']=='emptyfields'){

                    echo '<p class="p-error-register">Morate popuniti sva polja</p>';
                

                }
				
				else if($_GET['error'] == 'emptyname'){

                    echo '<p class="p-error-register">Prazno ime</p>';

				}
				
				else if($_GET['error'] == 'emptysurname'){

                    echo '<p class="p-error-register">Prazno prezime</p>';

                }

                else if($_GET['error'] == 'emptyusername'){

                    echo '<p class="p-error-register">Prazno Korisnicko ime</p>';

                }

                else if($_GET['error'] == 'emptymail'){

                    echo '<p class="p-error-register">Pogresan format email-a</p>';
                    
                }
                else  if($_GET['error']=='passwordWeak'){

                    echo '<p class="p-error-register">Lozinka minimum 6 karaktera</p>';

                }

                else  if($_GET['error']=='passwordsxmatch'){

                    echo '<p class="p-error-register">Lozinke se ne poklapaju</p>';

                }

                else  if($_GET['error']=='usernametaken'){

                    echo '<p class="p-error-register">Korisnik vec postoji</p>';

                }
            

        }

?>

	   <div>
			<form action="procesi/registracija.proces.php" method="POST"  name="form-singup">

				<input type="text" name="name-input" placeholder="Ime" id="name-input-id"> <br>
					<p class="error-message" id="name-error-message">Ime mora imati minimum 2 karaktera</p>

				<input type="text" name="surname-input" placeholder="Prezime" id="surname-input-id"> <br>
					<p class="error-message" id="surname-error-message">Prezime mora imati minimum 3 karaktera</p>

				<input type="text" name="username-input" placeholder="Korisničko ime" id="username-input-id"> <br>
					<p class="error-message" id="username-error-message">Korisničko ime mora imati minimum 3 karaktera</p>

				<input type="email" name="email-input" placeholder="Email" > <br>
					<p class="error-message" id="email-error-message">Nepravilan format email-a</p>

				<input type="password" name="password-input" placeholder="Lozinka"> <br>
					<p class="error-message" id="password-error-message">Lozinka mora imati minimum 6 karaktera </p>

				<input type="password" name="password-repeat-input" placeholder="Ponovi Lozinku"> <br>
					<p class="error-message" id="password2-error-message">Lozinke se ne poklapaju</p> <br>

				<button type="submit" name="register-button" >REGISTRUJ SE!</button>

			</form>
		</div>

</div>

<?php
include "includes/kraj.php"
?>