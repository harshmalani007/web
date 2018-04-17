<html>
    <head>
        
        
        <style>
          
            h1{
                 position: relative;
                top: 200px;
                left: 500px;
                width: 550px;
            }
            #Form{
                position: relative;
                top: 200px;
                left: 500px;
                width: 550px;
                background-color: bisque;
                
            }
            
          
            input{
                height: 24px;
            }
            #submit-btn{
                position: relative;
                top: 40px;
                left: 120px;
                width: 200px;
                height: 50px;
                background-color: dodgerblue;
                font-size: 28px;
                color: white;
            }
            p{
                position: relative;
                left: 80px;
                font-size: 22px;
                font-weight: 500;
                color: saddlebrown;
            }
              a{
                text-decoration: none;
                
            }
            
            #Already{
                position: relative;
                top: 40px;
            }
            
        
        </style>
     
    </head>
    <body>
    
        
        <?php 
          if(isset($_POST['submit']))
        
        
        ?>
       
        
        <form method="post" action="reset-details.php">
            <div id="Form">
                <fieldset>
            
                    <legend><b>PLEASE ENTER YOUR DETAILS</b>  </legend>
                      <br>
                      <br>
                      <br>
                    <p>ENTER USERNAME:<input type="text" name="Username" value="">
                    </p>
                    <br>
                     <p>ENTER EMAIL:<input type="text" name="Email" value="">
                    </p>
                    <br>
                    <p>ENTER PASSWORD:<input type="password" name="Password" value="">
                    </p>
                    <br>
                    <p>RETYPE PASSWORD:<input type="password" name="Rpassword" value="">
                    </p>
                    <br>
                    <input id="submit-btn" type="submit" name="signup" value="CHANGE PASSWORD">
                    
                   
                 
                     <br>
                      <br>
                      <br>  
                </fieldset>
        
        
        
            
            </div>
           
        </form>
    </body>
</html>