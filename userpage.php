<?php 

if(isset( $_SESSION['loggedin'])&& $_SESSION['loggedin']==true){
  
    
     echo '<div class="container">
     <div class="mt-4 p-5 bg-secondary container mb-2 text-light rounded">
         <h1 class="display-4">Hello, welcome '.$_SESSION['username']. ' to the
             <?php echo $title?> Forom
         </h1>
         <p class="lead">
             <?php echo $desc?>
         </p>
         <hr class="my-4">
         <p>Keep it friendly.
             Be courteous and respectful. Appreciate that others may have an opinion different from yours.
             Stay on topic. ...
             Share your knowledge. ...
             Refrain from demeaning, discriminatory, or harassing behaviour and speech..</p>
         <p class="lead">
             <a class="btn btn-success btn-lg" href="#" role="button">Learn more</a>
         </p>
     </div>
     </div>';
    

}
?>