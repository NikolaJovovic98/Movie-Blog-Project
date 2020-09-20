
<?php
    include "includes/connection.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie blog</title>
   
    <link rel="stylesheet" href="css/admin.css">
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <script src="https://cdn.ckeditor.com/ckeditor5/20.0.0/classic/ckeditor.js"></script>
    
  
   
</head>
<?php
    include "includes/adminHeader.php"
?>
<form action="">
          <h3>Add Addmin</h3>
          <label for="name">Username:</label><br>
          <input type="text" id="name" class="field" name="name"><br>
          <label for="pass">Password</label><br>
          <input type="password" class="field" id="pass" name="pass"><br><br>
          <input type="submit" class="dugme" value="OK">
            </form> 

            <div >
        <form action="">
          <h3>Change your username</h3>
          <label for="name">Old username:</label><br>
          <input type="text" class="field" id="name" name="name"><br>
          <label for="name">Username:</label><br>
          <input type="text" class="field" id="name" name="name"><br>
          <input type="submit" class="dugme" value="SAVE">
        </form>
        <form action="">
          <h3>Change your password</h3>
          <label for="pass">Old Password</label><br>
          <input type="password" id="pass" class="field" name="pass"><br><br>
          <label for="pass">New Password</label><br>
          <input type="password" id="pass" class="field" name="pass"><br><br>
          <label for="pass">Confirm</label><br>
          <input type="password" id="pass" class="field" name="pass"><br><br>
          <input type="submit" class="dugme" value="SAVE">
        </form>
      </div>