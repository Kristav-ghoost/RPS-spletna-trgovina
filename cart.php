<?php 
include 'views/head.php';
include 'glava.php';
include 'views/navbar.php';
include_once 'classes/user.php';

$id = $_SESSION["id"];
$user = User::GetUser($id);



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
                <button type="button" class="btn btn-primary btn-sm me-1 mb-2" data-mdb-toggle="tooltip"
                  title="Remove item">
                  <i class="fas fa-trash"></i>
                </button>
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
            <p class="mb-0">12.10.2020 - 14.10.2020</p>
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
                <span><?php  echo $total?> €</span>
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

            <button type="button" class="btn btn-primary btn-lg btn-block">
              Go to checkout
            </button>
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