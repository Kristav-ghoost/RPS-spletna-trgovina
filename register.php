<?php 
include 'views/head.php';
include 'glava.php';
include_once 'classes/user.php';
$err = "";


if (isset($_POST['submit'])) {
    if ($_POST['geslo'] !=$_POST['ponovigeslo']){
        $err = "Gesli se ne ujemata";
    }
    else{
        $reg = User::Register($_POST['upoime'],$_POST['geslo'],$_POST['email'],$_POST['ime'],$_POST['priimek'],$_POST['telstevilka']);
        if ($reg){
            header('location: login.php');
            die();//tu se konca php koda
        }
        else{
            $err = "Uporabnisko ime ali geslo sta zasedena";
        }
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

                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="mx-1 mx-md-4">

                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="upoime">Uporabniško ime</label>
                            <input type="text" id="upoime" name="upoime" class="form-control" />
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="geslo">Geslo</label>
                            <input type="password" id="geslo" name="geslo" class="form-control" />
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="ponovigeslo">Ponovi geslo</label>
                            <input type="password" id="ponovigeslo" name="ponovigeslo" class="form-control" />
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="email">Email</label>
                            <input type="text" id="email" name="email" class="form-control" />
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="ime">Ime</label>
                            <input type="text" id="ime" name="ime" class="form-control" />
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="priimek">Priimek</label>
                            <input type="text" id="priimek" name="priimek" class="form-control" />
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="telstevilka">Telefonska številka</label>
                            <input type="text" id="telstevilka" name="telstevilka" class="form-control" />
                        </div>
                    </div>

                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                        <button type="submit" name="submit" class="btn btn-primary btn-lg">Register</button>
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



