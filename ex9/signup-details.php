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
           header("location:signup.php?signup=empty");
           exit();
       }
         if(!filter_var( $email,FILTER_VALIDATE_EMAIL )){
               header("location:signup.php?signup=email");
               exit();
           }
       
               $sql="SELECT * FROM username WHERE UserName='$user'";
               
       
               $result=mysqli_query($conn,$sql);
               $resultCheck=mysqli_num_rows($result);
               if($resultCheck>0){
                    header("location:signup.php?signup=usertaken");
                    exit();
                   
               }
               else{
                   if( $pass != $Rpass){
                       echo $pass . $Rpass;
                       //header("location:signup.php?signup=passwordsdontmatch");
                       //exit();
                   }
    
                   elseif( $pass == $Rpass){
                       //$hashedPwd=password_hash($pwd,PASSWORD_DEFAULT);
                       $sql="INSERT INTO username (UserName,PassWord,EMAIL) VALUES ('$user','$pass','$email');";
                       $result=mysqli_query($conn,$sql);
                       header("location:signup.php?signup=success");
                       exit();
                       
                   }
               }
   }




?>