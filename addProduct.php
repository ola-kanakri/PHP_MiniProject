<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
    <title>Home</title>
</head>

<body >
   
  
      
    <!-- Navbar --> 
    <header >
      <div class="menu-bar" style="position: fixed;">
        <nav class="navbar navbar-expand-lg navbar-light "  >
          <a class="navbar-brand" href="viewProduct.php" style="font-weight: bold; color: white;">Ola Kanakri</a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" ></span>
           
          </button>


          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto" >

              <li class="nav-item ">
                <a class="nav-link" href="viewProduct.php">Home </a>
              </li>
              
            </ul>
          </div>
        </nav>
      </div>     
    </header>



    <div class="container">
  	<div class="p-5 my-4 rounded-3" ></div>   
   
<div class="container"  style = "background-color:#eeeee4;  padding : 20px 50px; " >
    <br><br>


<!-- Form start here -->
  <form  action="" method="post" style=" color: #d38312;" > 

    <div class="form-group">
      <label for="Item">Product Name :</label>
        <input type="text" class="form-control" id="Item" placeholder="Enter Product Name" name="Item" required>
    </div><br>

    <div class="form-group">
      <label  for="Price">Price :</label>
        <input type="number" class="form-control" id="Price" placeholder="Enter Price" name="Price" required>
    </div><br>

    <div class="form-group">
      <label for="Image">Image :</label>
        <input type="text" class="form-control"  id="Image"  name="Image" required>
    </div><br>

    <div class="form-group">
      <label  for="Describtion">Describtion :</label>
     <textarea  class="form-control" id="Describtion" placeholder="Enter Describtion" name="Describtion" required ></textarea>      
    </div><br>

    <div class="form-group">        
      <input type="submit" class="btn"  name="addProduct_btn" value="Add Product" style="background-color: #d38312;  color: white; margin-left: 450px;">
    </div>

  </form>
</div>
</div>



<div class="container"  style="margin:100px 0px; ">
<div class="p-5 my-4  rounded-3" style ="text-align:center;">
         
         <h1  style=" color :#f4b7b4 ;font:bold;"> All Products </h1>
         
     </div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Item Name</th>
      <th scope="col">Price</th>
      <th scope="col">Image</th>
      <th scope="col">Describtion</th>
    </tr>
  </thead>

  <tbody>
      <?php 

      if(isset($_POST['addProduct_btn'])) 
      { 
          $_SESSION ['Item'] .= $_POST['Item']."<br>";
          $_SESSION ['Price'] .= $_POST['Price']."<br>";
          $_SESSION ['Image'] .= $_POST['Image']."<br>";
          $_SESSION ['Describtion'] .= $_POST['Describtion']."<br>";
          
          echo " <tr scope='col'> <td>".$_SESSION ['Item'] 
          ."</td> <td> ".$_SESSION ['Price']."</td> <td>". 
          $_SESSION ['Image'] ."</td> <td> ".
          $_SESSION ['Describtion'] ."</td> </tr> ";
      }
      ?>
  </tbody>
</table> 



</div>
</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>