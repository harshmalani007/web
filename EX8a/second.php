<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            #Personal-Wrapper{
                border: 2px solid black;
                position: relative;
                left: 400px;
                top: 50px;
                width: 600px;
                padding:80px;
                padding-top: 20px;
            }
            
            #Shipping-Wrapper{
                border: 2px solid black;
                position: relative;
                left: 400px;
                top: 50px;
                width: 600px;
                padding:80px;
                padding-top: 20px;
                margin-bottom: 50px;
                
            }
            #submit-btn{
                width: 400px;
                margin-left:100px;
                height: 40px;
                font-size: 20px;
            }
            
           
        
        </style>
    </head>
    <body>
        <?php
        
         session_start();
         $a=$_POST['Product'];
         
         foreach($a as  $value)
         {
             $_SESSION[$value]=$value;
             
         }
        
        
        

        
       
       
        ?>
        
        
        <form method="post" action="third.php">  
            
        
            <div id="Shipping-Wrapper">
                <h1> Shipping Details</h1>
                
        
                <input  ng-model="notification.checked" type="checkbox"             name="c1" value="Rs 200"> Overnight Rs.200<br>
        
                <input  ng-model="notification.checked" type="checkbox"              value="Rs 100"> Prime Account  Rs 100 <br>
        
                <input   ng-model="notification.checked"type="checkbox"            value="Rs 50" > Normal Delivery Rs 50<br>
         
    
            </div>
        
       
           
         
            <div id="Personal-Wrapper">
         
       
                <h1><b>Delivery Address</b></h1>
        
                <h3> Please fill in the form below </h3>
         
                <br>
            
           
                <table border="0" >
               
                    <tr>
                   
                        <td width="100px" > <h4 style="font:solid;"> Full Name:* </h4> </td>
                   
                   
                        <td width="100px"> <br><input type="text" name="firstname" value=""> <br>
                          <label for="firstname"> First Name </label> 
                   
                        </td>
                   
                        <td width="100px"> <br><input type="text" name="lastname" value=""> <br>
                          <label for="lastname" > Last Name </label>
                    
                        </td>
                   
                       
               
                    </tr>


              
                    <tr >

                    <td width="100px"> </td>   
                    <td width="100px" colspan="3"> <br><input type="text" name="address1" width="500px" value="">  <br>
                         
                        <label for="address"> Street Address</label>
                    </td>
             
                    </tr>
               
                    <tr >
                  
                        <td width="100px"> </td>
                    
                        <td width="100px" colspan="3"> <br><input type="text" name="address2" value=""> <br>
                          <label for="address"> Street Address line 2 </label>
                   
                        </td>
               
                    </tr>
               
                    <tr >
                   
                        <td width="100px"> </td>
                   
                        <td width="150px" > <br><input type="text" name="city" value=""> <br>
                   
                            <label for="city"> City</label>
                    
                        </td>
                  
                        <td width="250px" colspan="2" > 
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="state" value=""> <br>
                         
                            <label for="state">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; State/Province </label>
                   
                        </td>

            
                    </tr>
                
                    <tr >
                   
                        <td width="100px"> </td>
                  
                        <td width="150px" > <br><input type="text" name="code" value=""> <br>
                         
                            <label for="code"> Postal/Zip Code</label>
                   
                        </td>
                   
                        <td width="200px" colspan="2"> 
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <select name="country" placeholder="Select" >
                                 <option>Select</option> 
                                 <option value="India">India</option> 
                                 <option value="SriLanka">SriLanka</option>
                                 <option value="Myanmar">Myanmar</option> 
                                 <option value="Pakistan">Pakistan</option>
                                 <option>China</option> 
                                 <option>others</option>
                            </select>
                         
                            <label for="country"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;  Country </label>
                   
                        </td>
                    
              
                    </tr>
               
                    <tr>
                   
                        <td width="100px" > <h4 style="font:solid;"> Phone Number:* </h4>
                        </td>
                   
                  
                        <td width="150px"> <br><input type="text" name="area" value=""> <br>
                          
                            <label for="area"> Area Code </label>
                   
                        </td>
                    
                        <td width="200px" colspan="2"> 
                            <br>&nbsp;&nbsp;-&nbsp;&nbsp;<input type="text" name="Phone"> <br>
                          
                            <label for="Phone">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Phone Number </label>
                    
                        </td>
                    
               
                    </tr>
               
                    <tr >
                   
                        <td width="100px" > <h4 style="font:solid;"> Email:* </h4>
                        </td>
                   
                    
                        <td width="100px" colspan="3"> <br><input type="text" name="email" width="80" placeholder="myname@example.com" >  <br>
                          
                            <label for="email"> example@example.com</label>
                  
                        </td>
               
                    </tr>
              
               
                    <tr >
                   
                        <td width="100px"> </td>
                    
                        <td width="150px" > <br><input type="submit">
                   
                        </td>
               
                    </tr>
            
                </table>
        
        
            
                <br>
             
                <br>
         
             
                <div>
                    <input id="submit-btn" type="submit" name="submit" value="CONTINUE TO BILLING " >
             
                </div>
             
            
        
            </div>
            
        
        </form>
    </body>
</html>