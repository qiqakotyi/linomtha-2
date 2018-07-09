$(document).ready(function(){  
    $('#register_button').click(function(){  
         var username = $('#reg-username').val();  
         var password = $('#reg-password').val();  
         var email = $('#reg-email').val();  
         var age = $('#reg-age').val(); 

         if(username != '' && password != '' && email != '' && age != '')  
         {  
              $.ajax({  
                   url:"register.php",  
                   method:"POST",  
                   data: {username:username, password:password, email:email, age:age},  
                   success:function(data)  
                   {  
                        if(data == 'No')  
                        {  
                             alert("Wrong Data");
                        }  
                        else  
                        {  
                            alert('succefully registered');
                             $('#registerModal').hide();
                             location.reload();  
                        }  
                   }  
              });  
         }  
         else  
         {  
              alert("All Fields are required");  
         }  
    });  
});  