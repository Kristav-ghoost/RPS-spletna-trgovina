<?php 
include 'views/head.php';
include 'glava.php';

//MAIL SE NE DELA KER NI SMTP ENABLAN
/*
function sanitize_my_email($field) {
    $field = filter_var($field, FILTER_SANITIZE_EMAIL);
    if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

if (isset($_POST['submit'])) {
    $ime = $conn->real_escape_string($_POST['ime']);
    $email = $conn->real_escape_string($_POST['email']);
    $sporocilo = $conn->real_escape_string($_POST['sporocilo']);

    $secure_check = sanitize_my_email($email);
    if ($secure_check == false) {
        echo "Invalid input";
    } else { //send email 
        if (!mail($email, "Kontakt", $sporocilo)){
            echo 'ERROR';
        }
    }
}*/

?>
<!DOCTYPE html>
<html lang="en">
    <body class="d-flex flex-column min-vh-100">
        <?php include 'views/navbar.php';?>
        <section> 
            <div class="container py-4">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" id="contactForm">
                    <div class="mb-3">
                    <label class="form-label" for="ime">Ime</label>
                    <input class="form-control" id="ime" type="text" name="ime" placeholder="Ime" data-sb-validations="required" />
                    <div class="invalid-feedback" data-sb-feedback="ime:required">Ime je obvezno.</div>
                    </div>

                    <div class="mb-3">
                    <label class="form-label" for="email">Email</label>
                    <input class="form-control" id="email" type="email" name="email" placeholder="Email" data-sb-validations="required, email" />
                    <div class="invalid-feedback" data-sb-feedback="email:required">Email je obvezen.</div>
                    <div class="invalid-feedback" data-sb-feedback="email:email">Email ni ustrezen.</div>
                    </div>

                    <div class="mb-3">
                    <label class="form-label" for="sporocilo">Sporo??ilo</label>
                    <textarea class="form-control" id="sporocilo" name="sporocilo" type="text" placeholder="Sporo??ilo" style="height: 10rem;" data-sb-validations="required"></textarea>
                    <div class="invalid-feedback" data-sb-feedback="sporocilo:required">Sporo??ilo je obezno.</div>
                    </div>
                    <!--
                    <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center mb-3">Sporo??ilo poslano!</div>
                    </div>

                    <div class="d-none" id="submitErrorMessage">
                    <div class="text-center text-danger mb-3">Napaka pri po??iljanju sporo??ila!</div>
                    </div>-->

                    <div class="d-grid">
                    <button class="btn btn-primary btn-lg" type="submit" name="submit">Po??lji</button>
                    </div>
                </form>
            </div>
       </section>
    </body>
    <?php include 'views/footer.php';?>
</html>
