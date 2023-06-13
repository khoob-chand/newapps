<?php 
include 'partials/_header.php';
echo'<!-- Modal -->
<div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form>
      <div class="mb-3">
      <label for="exampleInputName1" class="form-label">Enter Your Name</label>
      <input type="text" name="email" class="form-control" id="exampleInputName1" aria-describedby="emailHelp">
    </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Email</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
 
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      </div>
     
    </div>
  </div>
</div>';
 echo '
 <h5 class="container">Profile</h5><div class="profile container mt-4">

   <div class="card card-size">
 
  <div class="card-body">
  <img src="./images/userimage.png" class="userimage card-img-top" alt="...">
  <input type="file" class="d-block mt-3 mb-3">
  
    <h5 class="card-title">Name</h5>
    <p class="card-text" id ="name">'.$_SESSION['username'].'</p><hr>
    <h5 class="card-title">Email</h5>
    <p class="card-text" id="email222">'.$_SESSION['email'].'</p><hr>
    <h5 class="card-title">Mobile</h5>
    <p class="card-text">+916264432600</p><hr>
    <a id ="btn"href="#" class="btn btn-primary ">Update Profile</a>
  </div>
</div>
 </div>';
 echo '<script>
 const element = document.getElementById("btn")
 

 element.addEventListener("click", myFunction)
 
 function myFunction() {
    const elemen = document.getElementById("exampleInputName1")
 const email = document.getElementById("exampleInputEmail1")
 const name=document.getElementById("name").innerHTML
 const emailid=document.getElementById("email222").innerHTML;
 console.log(emailid);
 elemen.value=name;
 email.value=emailid;


  $("#editmodal").modal("toggle");
 }</script>';

?>