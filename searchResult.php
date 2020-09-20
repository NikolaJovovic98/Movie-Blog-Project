<?php
    include "includes/connection.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie blog</title>
    <link rel="stylesheet" href="nav.css">
   
    <link rel="stylesheet" href="css/searchRSL.css">
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.pkgd.min.js"></script>
    <script src="https://npmcdn.com/flickity@2/dist/flickity.pkgd.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
    <script src="run.js"></script>
    <script src="js/script.js" ></script>

<?php
    include "includes/pocetak.php"
?>
<?php 
 // should be at the top of your php

if (isset($_REQUEST['title'])) {
   $_SESSION['title'] = $_REQUEST['title'];
}

$myvar = isset($_SESSION['title']) ? $_SESSION['title'] : "no var";


?>
<style>
  body  {
      
      background-image:  url(images/background2.jpg);
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
      
      
      }

</style>
        <?php
  $result_per_page = 2;
  
  $sql2="select naslov, zanr, reziser, glavna_uloga1, glavna_uloga2, sadrzaj from 
  filmovi where naslov like '$myvar'
                                  or zanr like '$myvar'
                                  or reziser like '$myvar'
                                  or glavna_uloga1 like '$myvar'
                                  or glavna_uloga2 like '$myvar'
       union                           
  select naslov, zanr, reziser, glavna_uloga1, glavna_uloga2, sadrzaj from
  serije where naslov like '$myvar'
                                  or zanr like '$myvar'
                                  or reziser like '$myvar'
                                  or glavna_uloga1 like '$myvar'
                                  or glavna_uloga2 like '$myvar'";
                                  

                                  $sql_row=mysqli_query($conn, $sql2);

                                  $num=@mysqli_num_rows($sql_row);
                    
                                        
  if($num > 0)
                                      
    {
                                      
      ?>


      <?php

          while($sql_res=@mysqli_fetch_assoc($sql_row))

          {

      ?>

              
    <div class="rezultat">
                    

                    <h4><?php echo $sql_res["naslov"]; ?></h4>
                  

                  žanr:  <?php echo $sql_res["zanr"]; ?>,

                    Režija: <?php echo $sql_res["reziser"]; ?>,

                    Glavne uloge: <?php echo $sql_res["glavna_uloga1"]; ?> , 

                    <?php echo $sql_res["glavna_uloga2"]; ?>

                    <br>
                    <br>
                    <p><?php echo $sql_res["sadrzaj"]; ?></p>
      </div>
              <?php

          } 
          
          ?>


              



            <?php
          
            
            $num_of_pages=ceil($num/$result_per_page);
            if (!isset($_GET['page'])) {
              $page = 1;

            }else{
              $page = $_GET['page'];
            }
            $this_page_result = ($page-1)*$result_per_page;
            $sql2="select naslov, zanr, reziser, glavna_uloga1, glavna_uloga2, sadrzaj from 
            filmovi where naslov like '$myvar'
                                            or zanr like '$myvar'
                                            or reziser like '$myvar'
                                            or glavna_uloga1 like '$myvar'
                                            or glavna_uloga2 like '$myvar'
                 union                           
            select naslov, zanr, reziser, glavna_uloga1, glavna_uloga2, sadrzaj from
            serije where naslov like '$myvar'
                                            or zanr like '$myvar'
                                            or reziser like '$myvar'
                                            or glavna_uloga1 like '$myvar'
                                            or glavna_uloga2 like '$myvar'
                                            limit" .$this_page_result . ',' . $result_per_page;
                                            
      

            for($page=1; $page<=$num_of_pages; $page++){
              echo '<a href="searchResult.php?page='. $page . '">'. $page . '</a> ';
            }
            ?>



            <?php

            }

            else

            {

            ?>
            
            <?php

            }

            ?>

            <?php

            
?>

<div class="rezultat">
            <p>Niste zadovoljni? Pokusajte eksernu pretragu pomocu Google </p>
          
            <script async src="https://cse.google.com/cse.js?cx=017090782669646667830:0ytowv93goa"></script>
                <div class="gcse-search"></div>
</div>
<?php
    include "includes/kraj.php"
?>