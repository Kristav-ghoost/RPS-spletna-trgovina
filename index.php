<?php 
include 'views/head.php';
include 'glava.php';


if(isset($_POST["poslji"])){
    
    $items = array(
        'item_name' => $_POST["pro_name"],
        'item_price' => $_POST["pro_price"],
        'img_path' => $_POST["img_path"]
    );
    $_SESSION["cart"][0] = $items;
    header("location: cart.php");
    //echo $items['img_path'];
}

?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<main class="d-flex flex-column min-vh-100">
    <?php include 'views/navbar.php';?>

    <!-- SEARCH BAR -->
    <div style="margin: 25px 300px 0px 300px;">
        <div class="input-group">
            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
            <button type="button" class="btn btn-outline-primary">search</button>
        </div>
    </div> 


    <!-- LAYOUT
    <div style="margin: 100px;">--> 
        <section class="section-products">
        <div class="container">

            <?php for($i = 1; $i <= 3; $i++){ ?>
                <div class="row justify-content-center text-center">
                    <?php for($j = 1; $j <= 4; $j++){ ?>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <form action="index.php" method="POST" enctype="multipart/form-data">
                                    <div id="product-2" class="single-product">
                                        <input type="hidden" name = "img_path" value = "https://www.tradeinn.com/f/13758/137583821/adidas-real-madrid-third-20-21-t-shirt.jpg"></input>
                                        <div class="part-1" style="background: url(https://www.tradeinn.com/f/13758/137583821/adidas-real-madrid-third-20-21-t-shirt.jpg) no-repeat center;  background-size: cover; ">
                                            <span class="discount">15% off</span>
                                            <ul>
                                                <li><a class="article-icons" href="#"><i class="fa-solid fa-cart-plus"></i></a></li>
                                                <li><a class="article-icons"  href="#"><i class="fa-regular fa-heart"></i></a></li>
                                                <li><a class="article-icons"  href="#"><i class="fas fa-plus"></i></a></li>
                                                <li><a class="article-icons"  href="#"><i class="fas fa-expand"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="part-2">
                                            <!-- <h3 class="product-title">Here Product Title</h3> -->
                                            <input type="hidden" name="pro_name" value="Here Product Title"> Here Product Title </input>
                                            <!-- <h4 class="product-price">$49.99</h4> -->
                                            <input type="hidden" name="pro_price" value="49.99"> 49.99 </input>
                                            <input class="btn btn-primary profile-button" type="submit" name="poslji" value="Dodaj v kosarico" />
                                        </div>
                                    </div>
                            </form>
                        </div>
                    <!-- <div class="col-md-3 col-sm-6">
                         <div class="product-grid2">
                             <div class="product-image2">
                                 <a href="#">
                                     <img class="pic-1" src="https://www.tuningblog.eu/wp-content/uploads/2019/03/BMW-M3-E30-Restomod-Turbo-Tuning-Redux-Leichtbau-3.jpg">
                                     <img class="pic-2" src="https://www.tuningblog.eu/wp-content/uploads/2019/03/BMW-M3-E30-Restomod-Turbo-Tuning-Redux-Leichtbau-3.jpg">
                                 </a>
                                 <ul class="social">
                                     <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                     <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                 </ul>
                                    <a class="add-to-cart" href="#">Add to cart</a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="artikel.php">Beetlejuice</a></h3>
                                    <span class="price">$420.69</span>
                                </div>
                            </div>
                        </div>-->
                    <?php } ?>    
                </div>
            <?php } ?>
        </div>
        </section>
</main>
    <a href="./cart.php" class="float">
        <i class="fa fa-shopping-cart my-float"></i>
    </a>
    <?php include 'views/footer.php';?>
</body>
</html>
