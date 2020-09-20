 
     function ValidateLogin(){


        var username_error_login = document.getElementById('username-login-error-message');
        var password_error_login = document.getElementById('password-login-error-message');

        var usernameLogin = document.forms['form-login']['username-input-login'];
        var passwordLogin = document.forms['form-login']['password-input-login'];
          
        usernameLogin.addEventListener('focusout',checkUsernameLogin);
        passwordLogin.addEventListener('focusout',checkPasswordLogin);

         function checkUsernameLogin(){


          if(usernameLogin.value == "" || usernameLogin.value.length < 3){
                
            username_error_login.style.display="inline";
            usernameLogin.style.background='orange';
            

           }  
           else {
            usernameLogin.style.background='lightgreen';
            username_error_login.style.display="none";

           }

         }
      
         function checkPasswordLogin(){


          if(passwordLogin.value.length <6 || passwordLogin.value == ""){

            passwordLogin.style.background='orange';
            password_error_login.style.display="inline";

        }else {
           
          passwordLogin.style.background="lightgreen";
          password_error_login.style.display="none";

        }


         }
              

     }

    ValidateLogin();

