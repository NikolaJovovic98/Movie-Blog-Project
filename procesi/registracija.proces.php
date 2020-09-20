<?php


if(isset($_POST['register-button'])){


        
       session_start();

      include 'connection.php';


        $name = trim(filter_var($_POST['name-input'],FILTER_SANITIZE_STRING));
        $surname = trim(filter_var($_POST['surname-input'],FILTER_SANITIZE_STRING));
        $username = trim(filter_var($_POST['username-input'],FILTER_SANITIZE_STRING));
        $email = trim(filter_var($_POST['email-input'],FILTER_SANITIZE_EMAIL));
        $password = trim(filter_var($_POST['password-input'],FILTER_SANITIZE_STRING));
        $password_repeat = trim(filter_var($_POST['password-repeat-input'],FILTER_SANITIZE_STRING));

        // $_SESSION['username']= $username;

if(empty($name) && empty($surname) && empty($username) && empty($email) &&  empty($password) && empty($password_repeat)){

    header('location: ../registrujSe.php?error=emptyfields');
    exit();
        

    } 
    
    else if(empty($name)){

        header('location: ../registrujSe.php?error=emptyname');
        exit();

    }
    
    else if(empty($surname)){

        header('location: ../registrujSe.php?error=emptysurname');
        exit();

    }
    else if(empty($username)){

        header('location: ../registrujSe.php?error=emptyusername');
        exit();

    }

    else if(empty($email) || !filter_var($email,FILTER_VALIDATE_EMAIL) ){

        header('location: ../registrujSe.php?error=emptymail');
        exit();

    }
 
    else if (strlen($password)<6){

        header('location: ../registrujSe.php?error=passwordWeak');
        exit();

    }

    else if($password!=$password_repeat){

        header('location: ../registrujSe.php?error=passwordsxmatch');
        exit();

    }


    else {


    $username_query = "SELECT * FROM user_pass WHERE korisnicko_ime='$username' OR email='$email'";

    $result = mysqli_query($connect,$username_query);

    if(mysqli_num_rows($result) > 0){

       
        header("Location: ../registrujSe.php?error=usernametaken");
        exit();
           
          
        
    }


    else {

    $hashedPassword = password_hash($password,PASSWORD_DEFAULT);

    $querry = "INSERT INTO user_pass(ime,prezime,email,korisnicko_ime,lozinka) VALUES(?,?,?,?,?)";

    $statement = mysqli_prepare($connect,$querry);

    mysqli_stmt_bind_param($statement,'sssss',$name,$surname,$email,$username,$hashedPassword);

    mysqli_stmt_execute($statement);

   // header("Location: ../index1.php?success=loginsuccessful");
   header("Location: ../index1.php?success=registrationsuccessful");
    exit();


    
    }

  

    }



    mysqli_stmt_close($statement);
    mysqli_close($connect);


}

    else {

    header('location: ../registrujSe.php');
    exit();

}
