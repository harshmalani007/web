<html>

    <head>
         <title>
         Billing info
         </title>
        
         <style>
             *{
                 background-color: beige;
             }
             #Wrapper{
                 border: 1px solid black;
                 width: 800px;
                 position: relative;
                 left: 400px;
                 top: 50px;
             }
             
             #heading{
                 background-color: gray;
                 height: 50px;
                 text-align: center;
                 font-size: 30px;
                 color: white;
                 margin: 2px;
                 margin-top: 5px;
                 padding-top: 10px;
                 border-top-left-radius: 25px;
                 border-top-right-radius: 25px;
                 
             }
             
             #order-summary{
                 position: relative;
                 left: 80px;
             }
             table{
                 width: 500px;
                 
             }
             
             th{
                 background-color: gainsboro;
                 border: none;
             }
             
             #content{
                 position: relative;
                 left: 40px;
                 width: 600px;
             }
             
         </style>
    </head>

    <body>
        
        <?php 
         
    
         
        
       
        
        ?>
        
        
        
        <div id="Wrapper">
        
            <div id="heading">Order Summary</div>
            <div id="content">
             <h3> Name: <?php echo $_POST['firstname'].'&nbsp;'.$_POST['lastname']; ?></h3>
             <h3>Address: <?php echo $_POST['address1'].'&nbsp;'.$_POST['address2']; ?> &nbsp; <?php echo $_POST['city']?> &#44;<?php echo $_POST['state']?>&#44; <?php echo $_POST['country']."-".$_POST['code'];  ?> </h3>
                
            <h3>Phone:<?php echo $_POST['Phone']; ?></h3>
            <h3>Email:<?php echo $_POST['email']; ?></h3>
                
               
                
            <div id="order-summary">
                <table border="1">
                
                    <thead ><th id="table-head">ORDERS PLACED</th>
                            <th>
                           </th>
                    </thead>
                
                    <tbody>
                        <tr>
                            <?php 
                               session_start();
                              if(isset($_SESSION['POMAPX2']))
                              {
                                  echo "<td>".$_SESSION['POMAPX2']."</td>"."<td> Rs.4000 </td>";                     
                              }
                                                     

//                            else{
//                                session_unset['POMAPX2'];
//                            }
                              ?>
                        </tr>
                        <tr>
                            <?php 
                              if(isset($_SESSION['ABIBAS']))
                              {
                                  echo "<td>".$_SESSION['ABIBAS']."</td>"."<td> Rs.5000 </td>";                     
                              }
                           
                              ?>
                        </tr>
                        <tr>
                            <?php 
                              if(isset($_SESSION['NIKYFREEBOK']))
                              {
                                  echo "<td>".$_SESSION['NIKYFREEBOK']."</td>"."<td> Rs.3000 </td>";                              }
                              ?>
                        </tr>
                        <tr>
                            <?php 
                              if(isset($_SESSION['SARA']))
                              {
                                  echo "<td>".$_SESSION['SARA']."</td>"."<td> Rs.5000 </td>";                       }       
                              ?>
                        </tr>
                        <tr>
                            <?php 
                              if(isset($_SESSION['LOWCASTE']))
                              {
                                  echo "<td>".$_SESSION['LOWCASTE']."</td>"."<td> Rs.4000 </td>";                              }
                              ?>
                        </tr>
                        <tr>
                            <?php 
                              if(isset($_SESSION['APPARELS']))
                              {
                                  echo "<td>".$_SESSION['APPARELS']."</td>"."<td> Rs.3000 </td>";             
                              }
                             session_destroy(); 
                            
                              ?>
                        </tr>
                        
                    </tbody>
                
                </table>
                
            </div>
            
             
        
            </div>
        </div>
    
    
    
    
    
    
    
    </body>
</html>
