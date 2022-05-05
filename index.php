<?php 
include 'views/head.php';
include 'glava.php';
?>
<!DOCTYPE html>
<html lang="en">

<body class="d-flex flex-column min-vh-100">
    <?php include 'views/navbar.php';?>

    <!-- SEARCH BAR -->
    <div style="margin: 25px 300px 0px 300px;">
        <div class="input-group">
            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
            <button type="button" class="btn btn-outline-primary">search</button>
        </div>
    </div> 


    <!-- LAYOUT -->
    <div style="margin: 100px;">
        <div class="container">

            <?php for($i = 1; $i <= 3; $i++){ ?>
                <div class="row">
                    <?php for($j = 1; $j <= 4; $j++){ ?>
                        <div class="col-md-3 col-sm-6">
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
                        </div>
                    <?php } ?>    
                </div>
            <?php } ?>

        </div>
    </div>


    <?php include 'views/footer.php';?>
</body>
</html>
