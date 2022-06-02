<?php 
include 'views/head.php';
include 'glava.php';

$index = 0;
$_SESSION["cart"] = array();
if(isset($_POST["poslji"])){

    $items = array(
        'item_name' => $_POST["pro_name"],
        'item_price' => $_POST["pro_price"],
        'img_path' => $_POST["img_path"]
    );

    $_SESSION["cart"][] = $items;
    header("location: cart.php");
}

function get_products(){
	global $conn;
    $query = "SELECT * FROM product";

	$res = $conn->query($query);
	$oglasi = array();
	while($oglas = $res->fetch_object()){
		array_push($oglasi, $oglas);
	}
	return $oglasi;
}

$artikli = get_products();
$counter = 0;

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

            <?php foreach($artikli as $artikel){
                if($counter % 4 == 0) { ?>
                    <div class="row justify-content-center text-center">
                <?php } $counter++;?>
                
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <form action="index.php" method="POST" enctype="multipart/form-data">
                                    <div id="product-2" class="single-product">
                                        <?php 
                                        $image = file_get_contents('/mnt/rps/' . $artikel->image);
                                        $image_codes = base64_encode($image);
                                        ?>
                                        <input type="hidden" name="pro_name" value="<?php echo $artikel->name; ?>"> <b><?php echo $artikel->name; ?> </b></input>
                                        <input type="hidden" name = "img_path" value = "data:image/jpg;charset=utf-8;base64,<?php echo $image_codes ?>"></input>
                                        <div class="part-1" style="background: url(data:image/jpg;charset=utf-8;base64,<?php echo $image_codes ?>) no-repeat center;  background-size: cover; object-fit: scale-down;">
                                          
                                        <!-- <span class="discount">15% off</span> -->
                                            <ul>
                                                <li><a class="article-icons" href="#"><i class="fa-solid fa-cart-plus"></i></a></li>
                                                <li><a class="article-icons"  href="#"><i class="fa-regular fa-heart"></i></a></li>
                                                <li><a class="article-icons"  href="#"><i class="fas fa-plus"></i></a></li>
                                                <?php if(isset($_SESSION["id"]) && ($_SESSION["id"] == $artikel->user_tk)) {?> 
                                                    <li><a class="article-icons" href="izbrisiArtikel.php?id=<?php echo $artikel->id_product; ?>"><i class="fas fa-minus"></i></a></li>
                                                <?php } ?>
                                                <li><a class="article-icons"  href="artikel.php?id=<?php echo $artikel->id_product; ?>"><i class="fas fa-expand"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="part-2">
                                            <!-- <input type="hidden" name="pro_name" value= </input> -->
                                            <input type="hidden" name="pro_price" value="<?php echo $artikel->price; ?>">Cena: <b>$<?php echo $artikel->price; ?> </b></input> <br>
                                            <input class="btn btn-primary profile-button" type="submit" name="poslji" value="Dodaj v kosarico" />
                                        </div>
                                    </div>
                            </form>
                        </div>
                    <?php } ?>    
                </div>
        </div>
        </section>
        <!-- <img src="./images/rps/6286974285122-2022-05-19Isolated_basketball.png">   -->
</main>
    <a href="./cart.php" class="float">
        <i class="fa fa-shopping-cart my-float"></i>
    </a>
    <?php include 'views/footer.php';?>
</body>
</html>
