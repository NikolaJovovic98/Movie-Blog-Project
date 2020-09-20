<?php



if(isset($_POST['comment-button'])){

    include 'connection.php';
    session_start();

    $username = $_POST['username-comment'];
    $commentText = $_POST['text-comment'];
    $username_id = $_POST['username-id-comment'];
    $film_id = $_POST['film-id-comment'];



     if(empty($commentText)){

        header("Location: ../movies.php?error=emptycommenttext");
        exit();

    }

   else if (strlen($commentText)>255){

     
    header("Location: ../movies.php?error=largecomment");
    exit();

   }

   else {

    $querry = "INSERT INTO komentari(f_id,u_id,korisnicko_ime,sadrzaj) VALUES(?,?,?,?)";

    $statement = mysqli_prepare($connect,$querry);

    mysqli_stmt_bind_param($statement,'iiss',$film_id,$username_id,$username,$commentText);

    mysqli_stmt_execute($statement);

    header('Location: ../movies.php?success=commentsuccessful');
    exit();

  

   }

   

}

else {

    header('location: ../movies.php');
    exit();

}
