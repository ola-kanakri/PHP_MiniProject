
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
    <title>Add product</title>
</head>

<body >
   
<?php session_start(); ?>
      
    <!-- Navbar --> 
    <header >
      <div class="menu-bar">
        <nav class="navbar navbar-expand-lg navbar-light "  >
          <a class="navbar-brand" href="viewProduct.php" style="font-weight: bold; color: white;">OKstore</a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" ></span>
           
          </button>


          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto" >

              <li class="nav-item " >
                <a class="nav-link" href="viewProduct.php" >View Products </a>
              </li>

              <li class="nav-item " >
                <a class="nav-link" href="addProduct.php" >Add Products </a>
              </li>
              
            </ul>
          </div>
        </nav>
      </div>     
    </header>


    <br><br>
    <div class="container">
  	<div class="my-4" style="font-weight:bold; text-align:center; font-size:30px;">Add Products</div>   
   
    <div class="container"  style = "background-color:#e7e5f9;  padding : 20px 50px; " >
    <br><br>


<!-- Form start here -->

<form action="addProduct.php" method="post">
  <div class="form-group">
    <label for="productName">Product name</label>
    <input type="text" class="form-control" id="productName" placeholder="Enter product name" name="productName" Required>
  </div><br>

  <div class="form-group">
    <label for="regularPrice">Regular price <span>&#36;</span></label>
    <input type="number" class="form-control" id="regularPrice" placeholder="Regular price ($)" name="regularPrice" Required>
  </div><br>

  <div class="form-group">
    <label for="salePrice">Sale price <span>&#36;</span></label>
    <input type="number" class="form-control" id="salePrice" placeholder="Sale price ($)" name="salePrice" >
  </div><br>

  <div class="form-group">
    <label for="productImg">Product Image</label>
    <input type="text" class="form-control" id="productImg" placeholder="Images/T-shirt.png" name="productImg" Required>
  </div><br>

  <div class="form-group">
    <label for="productDescription">Product short description</label>
    <textarea class="form-control" id="productDescription" rows="3"  placeholder="Add product description" name="productDescription" Required></textarea>
  </div><br>

  <button type="submit" class="btn btn-primary" name="addButton" style="background-color:#1c9492;">Add Product</button>
  <br><br>
</form>
</div> </div><br><br>

<!-- Table start here -->
<section>
        <div class="container">
            <table class="table table-striped">
              
                <thead>
                  <tr>
                    <th scope="col">Product Name</th>
                    <th scope="col">Regular Price</th>
                    <th scope="col">Sale Price</th>
                    <th scope="col">Product Description</th>
                  </tr>
                  </thead>

                  <tbody>
                    <?php

                      

                      if(isset($_POST['addButton']))
                      {
                        // Add multiple products name separated by new line space in productName variable in the SESSION's array.
                        $_SESSION['productName'] .= $_POST['productName']."<br>";

                        $_SESSION['regularPrice'] .= $_POST['regularPrice']."<br>";

                        $_SESSION['salePrice'] .= $_POST['salePrice']."<br>";

                        $_SESSION['productImg'] .= $_POST['productImg']."<br>";

                        $_SESSION['productDescription'] .= $_POST['productDescription']."<br>";


                        echo " <tr scope='col'> 
                        <td>".$_SESSION ['productName']."</td> 
                        <td> ".$_SESSION ['regularPrice']."</td> 
                        <td>".$_SESSION ['salePrice'] ."</td> 
                        <td> ".$_SESSION ['productDescription'] ."</td> 
                        </tr> ";

                      }
                    
                    ?>
                  </tbody>
            </table>
        </div>
    </section>

    
  <!-- Footer -->
<footer class="new_footer_area bg_color">
            <div class="new_footer_top">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-3 col-md-6">
                            <div class="f_widget social-widget pl_70 wow fadeInLeft" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInLeft;">
                                <h2 class="f-title f_600 t_color f_size_18">Contact us</h2>
                                <div class="f_social_icon">
                                    <a href="#" class="fab fa-facebook"></a>
                                    <a href="#" class="fab fa-twitter"></a>
                                    <a href="#" class="fab fa-linkedin"></a>
                                    <a href="#" class="fab fa-pinterest"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer_bg">
                    <div class="footer_bg_one"></div>
                    <div class="footer_bg_two"></div>
                </div>
            </div>
            <div class="footer_bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-sm-7">
                            <p class="mb-0 f_400">© OlaKanakri Inc.. 2022 All rights reserved.</p>
                        </div>
                        <div class="col-lg-6 col-sm-5 text-right">
                            <p>Made with <i class="icon_heart"></i> in <a href="#">OlaKanakri</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>