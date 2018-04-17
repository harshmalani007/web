<?php

   if(isset($_POST['signup']))
   {
       $dbServer="localhost";
       $dbUser="root";
       $dbPass="";
       $dbName="student";
       $conn=mysqli_connect($dbServer,$dbUser,$dbPass,$dbName);
       $user=$_POST['Username'];
       $pass=$_POST['Password'];
       $email=$_POST['Email'];
       $Rpass=$_POST['Rpassword'];
       
       if(empty($user) || empty($pass) || empty($email) || empty($Rpass) )
       {
           header("location:reset.php?reset=empty");
           exit();
       }
         if(!filter_var( $email,FILTER_VALIDATE_EMAIL )){
               header("location:reset.php?reset=email");
               exit();
           }
       
               $sql="SELECT * FROM username WHERE UserName='$user' AND EMAIL='$email'";
              
       
               $result=mysqli_query($conn,$sql);
               $resultCheck=mysqli_num_rows($result);
               if($resultCheck>0){
                    $sql="UPDATE username SET PassWord='$pass' WHERE UserName='$user';";
                       $result=mysqli_query($conn,$sql);
                       header("location:reset.php?reset=success");
                       exit();
                   
               }
               else{
                   
                       header("location:reset.php?reset=sorry");
                       exit();
                  
                       
                   }
             
   }
   




?>