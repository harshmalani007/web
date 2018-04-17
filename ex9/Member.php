<html>

  <head>
      <style>
          div{
              background-color: aquamarine;
              height: 90px;
              font-size: 28px;
              text-align: center;
              padding-top: 20px;
          }
      </style>
  </head>

</html>

<?php

   if(isset($_POST['submit'])){
       
       $dbServer="localhost";
       $dbUser="root";
       $dbPass="";
       $dbName="student";
      
       $conn=mysqli_connect($dbServer,$dbUser,$dbPass,$dbName);
       $user=$_POST['Username'];
       $pass=$_POST['Password'];
      // $hashedPwd=password_hash($pass,PASSWORD_DEFAULT);
       if(empty($user) || empty($pass))
       {
           
           header("location:index.php?index=empty");
           exit();
       }
    else{
           $sql = "SELECT * FROM username WHERE UserName='$user' AND PassWord='$pass'";
           $result= mysqli_query($conn,$sql);
           $resultcheck = mysqli_num_rows($result);
           $row=mysqli_fetch_assoc($result);
         
         if($pass != $row['PassWord']){
             header("location:index.php?index=nouserfound");
                
                exit();
         }
        if($pass == $row['PassWord']){
             echo "<div> WELCOME  ".$_POST['Username']."</div>";
            
         }
         
       }
       
       
       
   }
  
?>

