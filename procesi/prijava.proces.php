<?php



    if(isset($_POST['login-button'])){
           
        session_start();
        include 'connection.php';

             $username = trim(filter_var($_POST['username-input-login'],FILTER_SANITIZE_STRING));
             $password = trim(filter_var($_POST['password-input-login'],FILTER_SANITIZE_STRING));      
             
            

    if(empty($username) || empty($password)){


        header('location: ../prijaviSe.php?errorlogin=emptyfields');
        exit();
    }

    else {

        $sql = 'SELECT * FROM user_pass WHERE korisnicko_ime=? ';

    
       $stmt = mysqli_stmt_init($connect);
      
        if(!mysqli_stmt_prepare($stmt,$sql)){
   
           header('Location: ../prijaviSe.php?errorlogin=sqlerror');
           exit();
   
        }
        else {
            
            mysqli_stmt_bind_param($stmt,'s', $username);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
   
            if($row = mysqli_fetch_assoc($result)){
         
              $passwordCheck=password_verify($password,$row['lozinka']);
   
               if($passwordCheck==false){
   
                   header('Location: ../prijaviSe.php?errorlogin=wrongpassword');
                   exit();
   
               }
               
               else if ($passwordCheck==true){

                if($row['korisnicko_ime']=='admin' && $row['id']==1){

                    $_SESSION['admin_username'] = $row['korisnicko_ime'];
                    $_SESSION['admin_id'] = $row['id'];
 
                    header('Location: ../index1.php?success=adminloginsuccessful');
                    exit();

                }
   
              else {
                            $_SESSION['username'] = $row['korisnicko_ime'];
                             $_SESSION['username_id'] = $row['id'];

                             header('Location: ../index1.php?success=loginsuccessful');
                            exit();

              }
                
   
               }
   
               else {
   
                   header('Location: ../prijaviSe.php?errorlogin=wrongpassword');
                   exit();
   
               }
   
            }
            else {
   
               header('Location: ../prijaviSe.php?errorlogin=nouser');
               exit();
   
            }
   
        }
   
     }
     
     mysqli_stmt_close($stmt);
    mysqli_close($connect);

    
   }
   
   else {
   
    header('Location: ../prijaviSe.php');
    exit();
   
   }