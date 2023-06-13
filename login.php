<?php 


if($_SERVER['REQUEST_METHOD']=='POST'){
    
    $showerror=false;
    include 'partials/db_connect.php';
    $login_name=$_POST['email'];
    
    $login_pass=$_POST['password'];
    
    $existsql="SELECT *FROM register WHERE email='$login_name'";
    $result=mysqli_query($conn,$existsql);
    $numRows = mysqli_num_rows($result);
    $_SESSION['loggedin'] = false;
   
    if($numRows==1){
       
    
        $row = mysqli_fetch_assoc($result);
        
        if(password_verify($login_pass, $row['password'])){
            $showerror=true;
            session_start();
            $_SESSION['loggedin'] = true;
          
            $_SESSION['sno'] = $row['id'];
            $_SESSION['username'] = $row['name'];
            $_SESSION['email'] = $row['email'];
            
           
            // // header("Location:/index.php");
            // echo("<script>location.href ='./index.php';</script>");
            header("Location:./index.php?login=true");

        
        }
       

    }
   if($showerror==false){
    $_SESSION['errors'] = "error";
    header("location: index.php");
  
        echo '<div class=" alert alert-danger" role="alert">
        incorrect Password Please Login In with Correct password!
        
      </div>
      <h5 ><br><a href="./index.php">Click Here to Login Again </a></h5>';

    
 
   }

}

?>

?>