<?php 

if($_SERVER['REQUEST_METHOD']=='POST'){
 
   
    $showerror=false;
    include './partials/db_connect.php';
    $user_email=$_POST['uemail'];
   
    $user_name=$_POST['uname'];
    
    $user_pass=$_POST['upass'];
    $user_cpass=$_POST['cpass'];
    $existsql="SELECT *FROM register WHERE email='$user_email'";
    $result=mysqli_query($conn,$existsql);
    $numRows = mysqli_num_rows($result);
    
    if($numRows>0){
        echo "User Already Present";
    }
    else{
        
        if($user_pass==$user_cpass){
          
            $hash = password_hash($user_pass,PASSWORD_DEFAULT);
              $sql = "INSERT INTO `register` (`name`,`email`,`password`) VALUES ('$user_name','$user_email','$hash')";
              $success=mysqli_query($conn,$sql);
              
             
              if($success){
              
                echo "inserted ";
                $showAlert = true;
                header("Location:./index.php?signupsuccess=true");
                
            }
        }
        else{
            header("Location:./index.php?signupsuccess=false");
        }

        
    }
    


}


?>