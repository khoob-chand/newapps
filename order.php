
<?php include './partials/_header.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping page</title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
</head>

<div class="container">
<div class="row mt-4">
<div class="col-3 py-1 mb-2">
<div class="card mb-3 append">
    <!-- <img src="images/" class="card-img-top img" alt="..."> -->

    <h4 id="empty">Empty Card</h4>
    <h4 class="empty"style="display:none;">Adding To Car</h4>
    <div class="card-body" >
    <table class="table container  mt-3 table-striped table-bordered  ">
    <thead>
      <h4 class="container"></h4>
      <th>Poduct_name</th>
      <th >product_price:</th>
      

    </thead>
    <tbody id="product_name">
     
      
     
    </tbody>
  </table>
  <h5 class="d-inline  container px-0">Amount: <p class="d-inline"  id ="amount"></p></h5>
    

        <!-- <h5 class="card-title" ><b> Product name </b> </h5> -->
        <div class="price d-flex"><p class ="d-inline" id="product_name_cart"></p>
        <p id="product_price_cart" style="padding-left:10px;"> </p>
</div>
        <p class="card-text">
         <nbsp><nbsp>
          </p>
          <div>
          
          </div>
    </div>
</div>
</div>
</div>

</div>
<div class="container">
<div class="row mt-4">
<?php 
include './partials/db_connect.php';
$query = "SELECT * FROM `productdetail`;";
$result = mysqli_query($conn, $query);
$fetch= mysqli_fetch_assoc($result);

while($row = mysqli_fetch_assoc($result)) {
    echo '<div class="col-3 py-1 mb-2">
    <div class="card mb-3">
        <img src="images/'.$row['parduct_image'].'" class="card-img-top img grocery" alt="...">
        <div class="card-body btnpri" >
            <h5 class="card-title" id="product_name"> '.$row['product_name'].' </h5>
            <hr><p class="card-text" id="product_price"><b>Product Price</b><hr> Rs <nbsp><nbsp ><p class="d-inline" id="price">'.$row['product_price'].'</p>
              </p>
              <div>
              <a href="./showorder.php?id='.$row['p_id'].'" class="btn btn-primary card-btn text-center" >Buy Now</a>
              <button  class="btn btn-primary card-btn text-center">Add to card</button>
              </div>
        </div>
    </div>

</div>';

}


 ?> 

 </div>
 </div> 
<div class="container"><a href="cart.php" class="mb-3 text-center  btn-secondary p-1"  style="width: 10rem;" role="button">Add More Items </a></div> 


<script>
 let arr=[];
 console.log(arr);
 let sum=0;
 arr.forEach((e)=>{
    sum=sum+e;
 })
 let count =0;
    let  btn=document.getElementsByTagName('button');
    console.log(btn);
    Array.from(btn).forEach((item)=>{

       
        item.addEventListener("click",(e)=>{
          
            const empty=document.getElementById('empty');
            const amount=document.getElementById('amount');
            const empty2=document.getElementsByClassName('empty')[0];
            console.log(empty2);
            empty.style.display="none";
            empty2.style.display="block";    
            console.log(e.target.parentNode.parentNode.parentNode.parentNode.firstElementChild.innerHTML);
            const price=e.target.parentNode.parentNode.firstChild.innerHTML;
            const name=e.target.parentNode.parentNode.parentNode.parentNode.firstElementChild.innerHTML;
           
       let  product_price_name =document.getElementById('product_name_cart');
       let  tr =document.getElementById('product_name');
   
       let p_name=document.createElement('th');
       let p_price=document.createElement('th');
       let row=document.createElement('tr');
       amount.innerHTML=price;
      let stored=Number(amount.innerHTML)
     arr.push(stored);
     console.log(arr);

 
     
      
         amount.innerHTML=sum;
    //    console.log(amount)

  
         p_name.innerHTML=name;
       p_price.innerHTML=price
       row.append(p_name);
       row.append(p_price); 
            tr.append(row);
   
    });

    })

</script>


        </body>

</html>