<?php 
include 'views/head.php';
include 'glava.php';
include 'views/navbar.php';
include_once 'classes/user.php';
include_once 'classes/product.php';

$id = $_SESSION["id"];
$user = User::GetUser($id);
$total = 0;
if(isset($_POST["delete"])){
  foreach($_SESSION["cart"] as $keys => $values){
    if($values['item_name'] == $_POST["Pname"] ){
      unset($_SESSION['cart'][$keys]); 
    }
  }
}

if(isset($_POST["checkout"])){
    $checkoutName = $_POST["Cname"];
    if($res = Product::CheckoutProduct($checkoutName)){
      foreach($_SESSION["cart"] as $keys => $values){
        if($values['item_name'] == $checkoutName ){
          unset($_SESSION['cart'][$keys]); 
        }
      }
      header("location: thankyoupage.php");
    }
}


?>
<body>
<section class="h-100 gradient-custom">
  <div class="container py-5">
    <div class="row d-flex justify-content-center my-4">
      <div class="col-md-8">
        <div class="card mb-4">
          <div class="card-header py-3">
            <h5 class="mb-0">Košarica - <?php echo count($_SESSION["cart"]) ?> items</h5>
          </div>
          <div class="card-body">
          <?php 
              if(!empty($_SESSION["cart"])){
                $total = 0;
                foreach($_SESSION["cart"] as $keys => $values){
                ?>
                <div class="row">
              <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                <!-- Image  -->
                <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                  <img src="<?php echo $values['img_path'] ?>"
                    class="w-100" alt="Blue Jeans Jacket" />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                  </a>
                </div>
                <!-- Image -->
              </div>
              <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                <!-- Data -->
                <p><strong><?php echo $values['item_name'] ?></strong></p>
                <form action="cart.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="Pname" value="<?php echo $values['item_name']; ?>">
                <input class="btn btn-primary btn-sm me-1 mb-2" data-mdb-toggle="tooltip" type="submit" name="delete" value="Remove"/>
                </form>
                <!-- Data -->
              </div>
                <!-- Price -->
                <p class="text-start text-md-center">
                  <strong> <?php echo $values['item_price']  ?> €</strong>
                </p>
                <!-- Price -->
              </div>
            </div>

                
                <?php
                }
                $total += $values['item_price'];
              }
              ?>
            <!-- Single item -->
          

            <!-- Single item -->
          </div>
        </div>
        <div class="card mb-4">
          <div class="card-body">
            <p><strong>Dostava na dom:</strong></p>
            <p class="mb-0">1.1.2022 - 31.12.2022</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4">
          <div class="card-header py-3">
            <h5 class="mb-0">Povzetek</h5>
          </div>
          <div class="card-body">
            <ul class="list-group list-group-flush">
              <li
                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                Products
                
                <span><?php echo $total ?> €</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                Poštnina
                <span>Brezplačno</span>
              </li>
              <li
                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                <div>
                  <strong>Skupaj:</strong>
                  <strong>
                    <!--<p class="mb-0">(including VAT)</p> -->
                  </strong>
                </div>
                <span><strong><?php  echo $total?> €</strong></span>
              </li>
            </ul>

            <form action="cart.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="Cname" value="<?php echo $values['item_name']; ?>">
            <input class="btn btn-primary btn-lg btn-block" type="submit" name="checkout" value="Checkout"/>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php 

include 'views/head.php';
?>


</body>