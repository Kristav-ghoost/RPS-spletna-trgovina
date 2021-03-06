<nav class="navbar navbar-dark navbar-expand bg-primary justify-content-between">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><i class="fa-brands fa-opencart"></i> </span><span class="d-none d-sm-inline px-1">e-commerce</span></a>
        <ul class="navbar-nav">
            <li class="nav-item text-center">
                <a href="index.php" class="nav-link" data-toggle="modal" data-target="#"><span class="fa fa-house"></span><span class="d-none d-sm-inline  px-1">Domov</span></a>
            </li>
            <li class="nav-item text-center">
                <a href="o_nas.php" class="nav-link" data-toggle="modal" data-target="#"><span class="fa fa-circle-info"></span><span class="d-none d-sm-inline px-1">O nas</span></a>
            </li>
            <li class="nav-item text-center">
                <a href="kontakt.php" class="nav-link" data-toggle="modal" data-target="#"><span class="fa fa-address-book"></span><span class="d-none d-sm-inline  px-1">Kontakt</span></a>
            </li>
            <?php if (isset($_SESSION["user"])){?>
            <?php }else{ ?>
            <?php } ?>
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
                    <a href="cart.php" class="nav-link" data-toggle="modal" data-target="#"><span class="fa fa-shopping-cart"></span><span class="d-none d-sm-inline px-1"> Košarica </span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Račun(<?php echo $_SESSION["user"] ?>)
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li class="w-100">
                            <a class="dropdown-item" href="profile.php"><span class="fa fa-user-circle"></span><span class="d-none d-sm-inline px-1">Profil</span></a>
                        </li>
                        <li class="w-100">
                            <a class="dropdown-item" href="dodajArtikel.php"><span class="fa fa-plus"></span><span class="d-none d-sm-inline  px-1">Dodaj artikel</span></a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item text-center" id="logout-btn">
                    <a href="odjava.php" class="nav-link" data-toggle="modal" data-target="#"><span class="fa fa-sign-in"></span><span class="d-none d-sm-inline px-1"> Odjava </span></a>
                </li>
            <?php } ?>
        </ul>
    </div>
</nav>