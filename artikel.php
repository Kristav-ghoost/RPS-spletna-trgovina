<?php 
include 'views/head.php';
include 'glava.php';

function get_ad($id){
	global $conn;
	$id = mysqli_real_escape_string($conn, $id);
    $query = "SELECT product.*, user.first_name FROM product LEFT JOIN user ON product.user_tk = user.user_id WHERE id_product = $id";
    $res = $conn->query($query);
	if($obj = $res->fetch_object()){
		return $obj;
	}
	return null;
}

$id = $_GET["id"];
$artikel = get_ad($id);

$image = file_get_contents('/mnt/rps/' . $artikel->image);
$image_codes = base64_encode($image);
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
                            <li data-thumb="data:image/jpg;charset=utf-8;base64,<?php echo $image_codes ?>"> <img src="data:image/jpg;charset=utf-8;base64,<?php echo $image_codes ?>" width="600" height="400" /> </li>
                            <li data-thumb="https://www.tuningblog.eu/wp-content/uploads/2019/03/BMW-M3-E30-Restomod-Turbo-Tuning-Redux-Leichtbau-3.jpg"> <img src="https://www.tuningblog.eu/wp-content/uploads/2019/03/BMW-M3-E30-Restomod-Turbo-Tuning-Redux-Leichtbau-3.jpg" /> </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="card">
                    <div class="d-flex flex-row align-items-center">
                        <div class="p-ratings"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div> <span class="ml-1">5.0</span>
                    </div>
                    <div class="about"> <span class="font-weight-bold"> <?php echo $artikel->name ?> </span>
                        <h4 class="font-weight-bold">$<?php echo $artikel->price ?></h4>
                    </div>
                    <div class="buttons"> <button class="btn btn-outline-warning btn-long cart">Add to Cart</button> <button class="btn btn-warning btn-long buy">Buy it Now</button> <button class="btn btn-light wishlist"> <i class="fa fa-heart"></i> </button> </div>
                    <hr>
                    <div class="product-description">
                        <div><span class="font-weight-bold">Color:</span><span> blue</span></div>
                        <div class="my-color"> <label class="radio"> <input type="radio" name="gender" value="MALE" checked> <span class="red"></span> </label> <label class="radio"> <input type="radio" name="gender" value="FEMALE"> <span class="blue"></span> </label> <label class="radio"> <input type="radio" name="gender" value="FEMALE"> <span class="green"></span> </label> <label class="radio"> <input type="radio" name="gender" value="FEMALE"> <span class="orange"></span> </label> </div>
                        <div class="d-flex flex-row align-items-center"> <i class="fa fa-calendar-check-o"></i> <span class="ml-1">Delivery from Slovenia, 15-45 days</span> </div>
                        <div class="mt-2"> <span class="font-weight-bold"><b>Description</b></span>
                            <p><?php echo $artikel->description ?></p>
                            <div class="bullets">
                                <div class="d-flex align-items-center"> <span class="dot"></span> <span class="bullet-text"><b>Seller: </b><?php echo $artikel->first_name ?></span> </div>
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
