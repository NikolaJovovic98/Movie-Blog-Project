
<?php session_start(); ?>

<body>
    <header>

        <div class="container-fluid"  class="heder">
            <div class="left">
                <h3 class="naslov">Kino vodič</h3> 
                <p class="sub">Blog za one koji ne žele da provedu čitavo veče tražeći pravi film! </p>
            </div>

            <div class = "right">


            <?php

            if(isset($_SESSION['username'])){

            
                                    echo '

                                    
                                    <div class="form-logout-div">

                                     <div> <h4 style="color:lightgreen"><b>'.$_SESSION['username'].'</b></h4> </div>  


                                     <div>

                                    <form action="procesi/logout.proces.php" method="POST">
                                                                                
                                    <button type="submit" name="logout_submit" style="background-color: black;color: white;">LOGOUT</button>

                                        </form>
                                        
                                        </div>  

                                        </div>  
                                        ';

                                }
                            
                else if(isset($_SESSION['admin_username'])){
                    
                    echo '';


                }


                else {
                    echo '
                    
                    <a class="admin" href="prijaviSe.php" style="text-decoration: none;">Prijavi se </a>
                    <a class="admin" href="registrujSe.php" style="text-decoration: none;">Registruj se </a>
                    
                    ';

                }

            ?>



<?php

if(isset($_SESSION['admin_username'])){


                        echo '

                        
                        <div class="form-logout-div">

                         <div> <h4 style="color:lightgreen"><b>'.$_SESSION['admin_username'].'</b></h4> </div>  


                         <div>

                        <form action="procesi/logout.proces.php" method="POST">
                                                                    
                        <button type="submit" name="logout_submit" style="background-color: black;color: white;">LOGOUT</button>

                            </form>
                            
                            </div>  

                            </div>  
                            ';

                    }
                
    else {
        
        echo '';


    }

?>






    
            </div>
        </div>
  
        <nav class="navbar">
         
              <ul class="nav navbar-nav">


                <li class="item">
                <?php  
                    
                    if(isset($_GET['success'])){
                            

                            echo '<a class="boja" href="index1.php?success=loginsuccessful">Pocetna</a>';
                       }
                       else {

                          echo '<a class="boja" href="index1.php">Pocetna</a>';

                       }
                       
                       
                ?>
            
            </li>

               
                <li class="item"> 
                    
                    <?php  
                    
                        if(isset($_GET['success'])){
                                

                                echo '<a class="boja" href="movies.php?success=loginsuccessful">Filmovi</a>';
                           }
                           else {

                              echo '<a class="boja" href="movies.php">Filmovi</a>';

                           }
                           
                           
                    ?>
                           
                 </li>

               

                <li class="item">
                    
                <?php  
                    
                    if(isset($_GET['success'])){
                            

                            echo '<a class="boja" href="series.php?success=loginsuccessful">Serije</a>';
                       }
                       else {

                          echo '<a class="boja" href="series.php">Serije</a>';

                       }
                       
                       
                ?>
            
            
            </li>


                <li class="item">
                    
                <?php  
                    
                    if(isset($_GET['success'])){
                            

                            echo '<a class="boja" href="about.php?success=loginsuccessful">O nama</a>';
                       }
                       else {

                          echo '<a class="boja" href="about.php">O nama</a>';

                       }
                       
                       
                ?>
            
            </li>



                <li class="item">
                    
                
                <?php  
                    
                    if(isset($_GET['success'])){
                            

                            echo '<a class="boja" href="search.php?success=loginsuccessful">Pretraga</a>';
                       }
                       else {

                          echo '<a class="boja" href="search.php">Pretraga</a>';

                       }
                       
                       
                ?>
            
            
            </li>


            <li class="item">
                    
                
                    <?php  
                        
                        if(isset($_SESSION['admin_username'])){
                                
                        
                                    echo '<a class="boja" href="admin/manage.php?success=loginsuccessful">Admin Panel</a>';

                           }
                           else {
    
                              echo '';
    
                           }
                           
                           
                    ?>
                
                
                </li>

              
              </ul>
            
          </nav>
    
    </header>