<?php 
include './partials/_header.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$registration = $_POST['registration'];
$name= $_POST['name'];
$email= $_POST['email'];



if ($registration == "success"){
    // some action goes here under php
    echo json_encode(array("abc"=>'successfuly registered'));
} 
} 

echo'<table class="table container  mt-3 table-striped table-bordered">
<thead>
  <h4 class="container"><b>Ordered Details:</b></h4>

</thead>
<tbody>
  <tr>

    <th>Payment_id:</th>
    <td>
      <?php echo $payment_id;?>
    </td>
   

  </tr>
  <tr>

    <th >Customer_name:</th>
    <td>
      <?php echo  $name;?>
    </td>


  </tr>
  <tr>

    <th >Customer Email:</th>
    <td>
      <?php echo  $email;?>
    </td>


  </tr>
  <tr>

    <th >Customer No.:</th>
    <td>
      <?php echo  $phone;?>
    </td>


  </tr>
  <tr>

    <th >Amount Paid.:</th>
    <td>
      <?php echo  $amount;?>
    </td>


  </tr>
</tbody>
</table>';


?>