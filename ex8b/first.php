<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
           /*<-----------START PARALLAX-------------->*/

            
            *{
                margin: 0px;
                border: 0px;
               
            }
                .parallax1
                    {
                    background: url(Bg1.jpg)   fixed 100%; 
                    color: white;
                    border-bottom-left-radius: 30px;
                    border-bottom-right-radius: 30px;
                    background-repeat: no-repeat;
                     }
            .parallax2
                    {
                    background: url(Bg2.jpg)   fixed 2%; 
                    color: white;
                    border-top-left-radius: 30px;
                    border-top-right-radius: 30px;
                    background-repeat: no-repeat;
                     }

               .parallax-inner{
                   
                   padding-bottom: 250px;
                   padding-top: 25%;
                   }
            h1{
                position: relative;
                left: 300px;
                font-size: 35px;
                align-self: center;
            }
            
            
            


             /*<-----------END PARALLAX-------------->*/
              #submit-btn{
                width: 600px;
                margin-left:500px;
                height: 80px;
                font-size: 20px;
            }
            
            #men,#women{
                position: relative;
                left: 280px;
            }
           
        </style>
        
        
        <script></script>
        <script>
         
        
        </script>
        
    </head>
    <body>
        <?php
        
        
        
        
         
        ?>
        
        <form action="second.php" method="post">
            
        
<!--------------       P A R A L L A X    S E C T I O N ------------------>

            <section class="parallax1">
                <div class="parallax-inner">
                   
                    
                
                </div>
            </section>



<!------------------- C O N T E N T   S E C T I O N ------------------------------>

            <section class="temp_section">
                <h1  > WELCOME TO HaPpY FeEt !  </h1> 
               
                <div id="men">
                    <table border="0" width="1300px">
                     <tr>
                       <td colspan="3" ><img src="images%20(1).jpg"></td>
                       <td> <img src="images%20(2).jpg"></td>
                       <td> <img src="images%20(3).jpg"></td>
                         
                     </tr>
                    <tr>
                       <td colspan="3" >Pime<br><input type="checkbox" name="Product[]" value="POMAPX2"> Rs.4000 </td>
                       <td>Addies<br><input type="checkbox" name="Product[]" value="ABIBAS"> Rs.5000 </td>
                       <td>NIKE<br><input type="checkbox" name="Product[]" value="NIKYFREEBOK"> Rs.3000 </td>
                         
                     </tr>
                    
                    
                    </table>
                        
                </div>
                
                <br>
                <br>
                <br>
                <div id="women">
                        <table border="0" width="1300px">
                     <tr>
                       <td colspan="3" ><img src="w1.jpg" width="225px" height="225px;"></td>
                       <td> <img src="W2.jpg" width="225px" height="225px;"></td>
                       <td> <img src="W3.jpg"></td>
                         
                     </tr>
                    
                    <tr>
                       <td colspan="3" >Sere<br><input type="checkbox" name="Product[]" value="SARA"> Rs.5000 </td>
                       <td> LOWER<br><input type="checkbox" name="Product[]" value="LOWCASTE"> Rs.4000 </td>
                       <td>DJ<br><input type="checkbox" name="Product[]" value="APPARELS"> Rs.3000 </td>
                         
                     </tr>
                    
                    
                    </table>
                
                </div>
                
                <div id="children">
                    
                </div>
    
            </section>


<!--------------       P A R A L L A X    S E C T I O N ------------------>

            <section class="parallax2">
               <div class="parallax-inner">
               <h2>  </h2>    
               </div>
            </section>


<!------------------- C O N T E N T   S E C T I O N ------------------------------>


            <section class="temp_section2">
              

                <div class="row">
    
                    <div class=""></div>
                    </div>
                  
            </section>
        
      
        <input id="submit-btn" type="submit"  name="next page" value="WANT TO BUY" >
        </form>
    </body>
</html>
