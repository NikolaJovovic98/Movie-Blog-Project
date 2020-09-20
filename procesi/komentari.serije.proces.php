<?php



if(isset($_POST['comment-series-button'])){

    include 'connection.php';
    session_start();

    $username = $_POST['username-comment'];
    $commentText = $_POST['text-comment'];
    $username_id = $_POST['username-id-comment'];
    $serija_id = $_POST['series-id-comment'];



     if(empty($commentText)){

        header("Location: ../series.php?error=emptycommenttext");
        exit();

    }

   else if (strlen($commentText)>255){

     
    header("Location: ../series.php?error=largecomment");
    exit();

   }

   else {

    $querry = "INSERT INTO komentari_serije(s_id,u_id,korisnicko_ime,sadrzaj) VALUES(?,?,?,?)";

    $statement = mysqli_prepare($connect,$querry);

    mysqli_stmt_bind_param($statement,'iiss',$serija_id,$username_id,$username,$commentText);

    mysqli_stmt_execute($statement);

    header('Location: ../series.php?success=commentsuccessful');
    exit();

  

   }

   

}

else {

    header('location: ../series.php');
    exit();

}
