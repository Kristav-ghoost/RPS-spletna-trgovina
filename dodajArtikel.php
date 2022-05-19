<?php 
include 'views/head.php';
include 'glava.php';
include_once 'classes/product.php';
$err = "";

if (isset($_POST['submit'])) {
    if($product = Product::AddProduct($_POST['imeartikel'],$_POST['opis'],$_POST['cena'],$_FILES['slika'],$_SESSION['id'])) {
        header('location: index.php');
    } else {
        $err = "Nemorem dodati artikla!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<body class="d-flex flex-column min-vh-100">
    <?php include 'views/navbar.php';?>
    <section class="vh-100">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
            <div class="card text-black" >
            <div class="card-body">
                <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Dodaj artikel</p>

                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data" class="mx-1 mx-md-4">

                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fa fa-text-width fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="imeartikel">Ime artikla</label>
                            <input type="text" id="imeartikel" name="imeartikel" class="form-control" />
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="opis">Opis</label>
                            <textarea id="opis" name="opis" rows="4" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-money-bill fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="cena">Cena</label>
                            <input type="number" id="cena" name="cena" class="form-control" />
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-image fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="slika">Slika</label>
                            <input type="file" id="slika" name="slika" class="form-control" />
                        </div>
                    </div>

                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                        <button type="submit" name="submit" class="btn btn-primary btn-lg">Dodaj</button>
                    </div>
                    <?php echo $err;?>
                    </form>
                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp" class="img-fluid" alt="Sample image">
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    
    </section>
    <?php include 'views/footer.php';?>
 </body>
</html>