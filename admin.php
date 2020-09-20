
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
    
    <script src="run.js" defer></script>
    <script src="js/admin.js" defer></script>
</head>
<body>
    <header>

        <div class="heder" class="container-fluid" >
            <div class="left">
                <h3 class="naslov">Superb Movie Bloggers</h3> 
                <p class="sub">Blog for authentic cinema lovers, everything about movies in one place! </p>
            </div>

            <div class = "right">
                <button class="button" id="leave"><a class="leave" href="home.html"> Leave</a></button>
         
        </div>
  
         
            <div class="container-fluid">
              <ul class="nav navbar-nav">
                <li class="item" style="color:azure; left: 300%"><h2>Hello admin! </h2></li>
        
              
              </ul>
            </div>
          
    </header>
    <div class="dugmad2">
      <div class="dugmad" id="myDIV">
        <button class="dugme" type="button" class="tablinks" onclick="openTab(event, 'add')"> Manage Post</button>
        
        <button class="dugme" type="button" class="tablinks" onclick="openTab(event, 'create')"> Add Post</button>
      
        <button class="dugme" type="button" class="tablinks" onclick="openTab(event, 'users')"> See all users</button>
        
        <button class="dugme" type="button" class="tablinks" onclick="openTab(event, 'addadmin')"> Add Admin</button>
        
        <button class="dugme" type="button" class="tablinks" onclick="openTab(event, 'settings')"> Settings</button>
        
      </div>
    </div>
   
    
    <div id="add" class="tabcontent" style="display: block">
      <table class="table">
        <thead>
          <tr>
            <th>Title</th>
            <th colspan="2">Action</th>
            
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Leon Proffesional</td>
            <td>Publish</td>
            <td>Delete</td>
          </tr>
          <tr>
            <td>Unknown</td>
            <td>Publish</td>
            <td>Delete</td>
          </tr>
          <tr>
            <td>Prestige</td>
            <td>Publish</td>
            <td>Delete</td>
          </tr>
        </tbody>
      </table>
    </div>

    <div id="create" class="tabcontent" style="display: none">
  
    <form action="createPost.php" method="post" name="form">
      
        

      </form>
     </div>

    <div  id="users" class="tabcontent" style="display: none">
          <h3>All users</h3>
          <table class="table">
            <thead>
              <tr>
                <th>Username</th>
                <th>E-mail</th>
                <th>Password</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Mirko</td>
                <td>mirko@gmail.com</td>
                <td>m123</td>
              </tr>
              <tr>
                <td>Stanko</td>
                <td>stanko@gmail.com</td>
                <td>s321</td>
              </tr>
              <tr>
                <td>Rajko</td>
                <td>rajko@gmail.com</td>
                <td>Delete</td>
              </tr>
            </tbody>
          </table>
      </div>
      <div id="addadmin" class="tabcontent" style="display: none">
        <form action="">
          <h3>Add Addmin</h3>
          <label for="name">Username:</label><br>
          <input type="text" id="name" class="field" name="name"><br>
          <label for="pass">Password</label><br>
          <input type="password" class="field" id="pass" name="pass"><br><br>
          <input type="submit" class="dugme" value="OK">
            </form> 
            <h3>All admins</h3>
          <table class="table">
            <thead>
              <tr>
                <th>Username</th>
              
                <th colspan="2">Password</th>
                
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Mirko</td>
            
                <td>m123</td>   
                <td>remove</td>
              </tr>
              <tr>
                <td>Stanko</td>  
                <td>s321</td>
                <td>remove</td>
              
              </tr>
              <tr>
                <td>Rajko</td>
                <td>raja2</td>
                <td>remove</td>
              </tr>
            </tbody>
          </table>
      </div>

      <div id="settings" class="tabcontent" style="display: none">
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

    </div>

 
  
  
  
</body>
