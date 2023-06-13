<?php 
 
echo'<!-- Modal -->
<div class="modal fade" id="exampleModalsignup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Login</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action ="./signup.php" method="post">
      <div class="mb-3">
    <label for="exampleInputEmail11" class="form-label">Enter Your Name</label>
    <input type="text" name="uname" class="form-control" id="exampleInputEmail11" aria-describedby="emailHelp">
  
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail12" class="form-label">Email address</label>
    <input type="email"  name="uemail" class="form-control" id="exampleInputEmail12" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword13" class="form-label">Password</label>
    <input type="password"  name="upass" class="form-control" id="exampleInputPassword13">
  </div>
  <div class="mb-3">
  <label for="exampleInputPassword131" class="form-label">Password</label>
  <input type="password"  name="cpass" class="form-control" id="exampleInputPassword131">
</div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>';?>

