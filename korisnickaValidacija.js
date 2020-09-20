

      function ValidateRegistration() {

        var name_error = document.getElementById('name-error-message');
        var surname_error = document.getElementById('surname-error-message');
        var username_error = document.getElementById('username-error-message');
        var email_error = document.getElementById('email-error-message');
        var password_error = document.getElementById('password-error-message');
        var password2_error = document.getElementById('password2-error-message');

        var name = document.forms['form-singup']['name-input'];
        var surname = document.forms['form-singup']['surname-input'];
        var username = document.forms['form-singup']['username-input'];
        var email = document.forms['form-singup']['email-input'];
        var password = document.forms['form-singup']['password-input'];
        var password2 = document.forms['form-singup']['password-repeat-input'];

 

            name.addEventListener('focusout',checkName);
            surname.addEventListener('focusout',checkSurname);
            username.addEventListener('focusout',checkUsername);
            email.addEventListener('focusout',checkEmail);
            password.addEventListener('focusout',checkPassword);
            password2.addEventListener('focusout',checkPassword2);
       
            function checkName(){

              if(name.value == "" || name.value.length < 2){
               
               name_error.style.display="inline";
               name.style.background='orange';
               

              }  
              else {
               name.style.background='lightgreen';
               name_error.style.display="none";

              }

           } 

           function checkSurname(){

            if(surname.value == "" || surname.value.length < 2){
             
             surname_error.style.display="inline";
             surname.style.background='orange';
             

            }  
            else {
             surname.style.background='lightgreen';
             surname_error.style.display="none";

            }

         } 

            function checkUsername(){

               if(username.value == "" || username.value.length < 3){
                
                username_error.style.display="inline";
                username.style.background='orange';
                

               }  
               else {
                username.style.background='lightgreen';
                username_error.style.display="none";

               }

            } 
        
            function validateEmail(email){
                var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        
                if (reg.test(email.value) == false) 
                {
                   
                    return false;
                }
        
                return true;
        
            }

            function checkEmail(){

                
              if(validateEmail(email)){

               
               email.style.background='lightgreen';
               email_error.style.display="none";
               

              }
              else {

                 email_error.style.display="inline";
                email.style.background='orange';

              }
             

            }
            
            function checkPassword(){

                if(password.value.length <6 || password.value == ""){

                    password.style.background='orange';
                    password_error.style.display="inline";

                }else {
                   
                   password.style.background="lightgreen";
                   password_error.style.display="none";

                }

            }


            function checkIfTwoPasswordsMatch() {

                    if(password.value === password2.value){

                      return true;

                    }

                    else {

                     return false;

                    }

              }

              function checkPassword2(){

                if(!checkIfTwoPasswordsMatch() || password.value==""){



                    password2.style.background='orange';
                    password2_error.style.display="inline";

                }
                else{ 
                    
                    password2.style.background='lightgreen';
                password2_error.style.display="none"; 
            
            }

               
            }

           
        
             }
    

     
             ValidateRegistration();