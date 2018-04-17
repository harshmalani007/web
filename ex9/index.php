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
                left: 70px;
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
                color: white;
            }
            
            #forgot{
                position: relative;
                top: 40px;
            }
            #f{
                color: black;
            }
        
        </style>
     
    </head>
    <body>
    
        
        <?php 
          if(isset($_POST['submit']))
        
        
        ?>
        <h1>
            WELCOME TO OUR WEB PAGE !!
        </h1>
        
        <form method="post" action="Member.php">
            <div id="Form">
                <fieldset>
            
                    <legend><b>CONTACT FORM</b>  </legend>
                      <br>
                      <br>
                      <br>
                    <p>ENTER USERNAME:<input type="text" name="Username" value="">
                    </p>
                    <br>
                 
                    <p>ENTER PASSWORD:<input type="password" name="Password" value="">
                    </p>
                    <br>
                    <input id="submit-btn" type="submit" name="submit" value="LOG IN">
                    <button id="submit-btn" ><a href="signup.php">SIGN UP</a></button>
                    
                    <p id="forgot">FORGOT PASSWORD??<a id="f" href="Reset.php">CLICK HERE</a></p>
            
                     <br>
                      <br>
                      <br>  
                </fieldset>
        
        
        
            
            </div>
           
        </form>
    </body>
</html>