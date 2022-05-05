<?php 
include 'views/head.php';
include 'glava.php';
?>
<!DOCTYPE html>
<html lang="en">

<body class="d-flex flex-column min-vh-100">
    <?php include 'views/navbar.php';?>

    <!-- LAYOUT -->
    <div style="margin: 40px;">
        
        <link rel='stylesheet' href='https://sachinchoolur.github.io/lightslider/dist/css/lightslider.css'>
    <div class="container-fluid mt-2 mb-3">
        <div class="row no-gutters">
            <div class="col-md-5 pr-2">
                <div class="card">
                    <div class="demo">
                        <ul id="lightSlider">
                            <li data-thumb="https://www.tuningblog.eu/wp-content/uploads/2019/03/BMW-M3-E30-Restomod-Turbo-Tuning-Redux-Leichtbau-3.jpg"> <img src="https://www.tuningblog.eu/wp-content/uploads/2019/03/BMW-M3-E30-Restomod-Turbo-Tuning-Redux-Leichtbau-3.jpg" /> </li>
                            <li data-thumb="https://www.tuningblog.eu/wp-content/uploads/2019/03/BMW-M3-E30-Restomod-Turbo-Tuning-Redux-Leichtbau-3.jpg"> <img src="https://www.tuningblog.eu/wp-content/uploads/2019/03/BMW-M3-E30-Restomod-Turbo-Tuning-Redux-Leichtbau-3.jpg" /> </li>
                            <li data-thumb="https://i.imgur.com/DhKkTrG.jpg"> <img src="https://i.imgur.com/DhKkTrG.jpg" /> </li>
                            <li data-thumb="https://i.imgur.com/kYWqL7k.jpg"> <img src="https://i.imgur.com/kYWqL7k.jpg" /> </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="card">
                    <div class="d-flex flex-row align-items-center">
                        <div class="p-ratings"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div> <span class="ml-1">5.0</span>
                    </div>
                    <div class="about"> <span class="font-weight-bold">BeetleJuice </span>
                        <h4 class="font-weight-bold">$3,444</h4>
                    </div>
                    <div class="buttons"> <button class="btn btn-outline-warning btn-long cart">Add to Cart</button> <button class="btn btn-warning btn-long buy">Buy it Now</button> <button class="btn btn-light wishlist"> <i class="fa fa-heart"></i> </button> </div>
                    <hr>
                    <div class="product-description">
                        <div><span class="font-weight-bold">Color:</span><span> blue</span></div>
                        <div class="my-color"> <label class="radio"> <input type="radio" name="gender" value="MALE" checked> <span class="red"></span> </label> <label class="radio"> <input type="radio" name="gender" value="FEMALE"> <span class="blue"></span> </label> <label class="radio"> <input type="radio" name="gender" value="FEMALE"> <span class="green"></span> </label> <label class="radio"> <input type="radio" name="gender" value="FEMALE"> <span class="orange"></span> </label> </div>
                        <div class="d-flex flex-row align-items-center"> <i class="fa fa-calendar-check-o"></i> <span class="ml-1">Delivery from sweden, 15-45 days</span> </div>
                        <div class="mt-2"> <span class="font-weight-bold">Description</span>
                            <p>The minimalist collaboration features chairs, lightening, Shelves, Sofas, Desks and various home accessories, all offering form and function at the same point.We use high-strength clamps and joinery techniques specially designed for engineered wood beds. Ergo, no irksome creaks - and you can sleep like a baby, well into adulthood!</p>
                            <div class="bullets">
                                <div class="d-flex align-items-center"> <span class="dot"></span> <span class="bullet-text">Best in Quality</span> </div>
                                <div class="d-flex align-items-center"> <span class="dot"></span> <span class="bullet-text">Anti-creak joinery</span> </div>
                                <div class="d-flex align-items-center"> <span class="dot"></span> <span class="bullet-text">Sturdy laminate surfaces</span> </div>
                                <div class="d-flex align-items-center"> <span class="dot"></span> <span class="bullet-text">Relocation friendly design</span> </div>
                                <div class="d-flex align-items-center"> <span class="dot"></span> <span class="bullet-text">High gloss, high style</span> </div>
                                <div class="d-flex align-items-center"> <span class="dot"></span> <span class="bullet-text">Easy-access hydraulic storage</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>
    <script src='https://sachinchoolur.github.io/lightslider/dist/js/lightslider.js'></script>
    <script>
        $('#lightSlider').lightSlider({
            gallery: true,
            item: 1,
            loop: true,
            slideMargin: 0,
            thumbItem: 9
        });
    </script>





    </div>


    <?php include 'views/footer.php';?>
</body>
</html>
