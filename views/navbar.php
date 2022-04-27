<nav class="navbar navbar-dark navbar-expand bg-primary justify-content-between">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><i class="fa-brands fa-opencart"></i> </span><span class="d-none d-sm-inline px-1">e-commerce</span></a>
        <ul class="navbar-nav">
            <li class="nav-item text-center">
                <a href="index.php" class="nav-link" data-toggle="modal" data-target="#"><span class="fa fa-house"></span><span class="d-none d-sm-inline  px-1">Domov</span></a>
            </li>
            <li class="nav-item text-center">
                <a href="#" class="nav-link" data-toggle="modal" data-target="#"><span class="fa fa-circle-info"></span><span class="d-none d-sm-inline px-1">O nas</span></a>
            </li>
            <li class="nav-item text-center">
                <a href="#" class="nav-link" data-toggle="modal" data-target="#"><span class="fa fa-address-book"></span><span class="d-none d-sm-inline  px-1">Kontakt</span></a>
            </li>
        </ul>
        <ul class="nav navbar-nav">
            <?php if (!isset($_SESSION["user"])){?>
            <li class="nav-item text-center" id="signup-btn">
                <a href="register.php" class="nav-link" data-toggle="modal" data-target="#"><span class="fa fa-user"></span><span class="d-none d-sm-inline px-1">Registracija</span></a>
            </li>
            <li class="nav-item text-center" id="login-btn">
                <a href="login.php" class="nav-link" data-toggle="modal" data-target="#"><span class="fa fa-sign-in"></span><span class="d-none d-sm-inline px-1"> Prijava </span></a>
            </li>
            <?php }else{ ?>
                <li class="nav-item text-center" id="logout-btn">
                <a href="odjava.php" class="nav-link" data-toggle="modal" data-target="#"><span class="fa fa-sign-in"></span><span class="d-none d-sm-inline px-1"> Odjava </span></a>
            </li>
            <?php } ?>
        </ul>
    </div>
</nav>