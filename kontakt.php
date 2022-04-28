<?php 
include 'views/head.php';
include 'glava.php';
?>
<!DOCTYPE html>
<html lang="en">
    <body class="d-flex flex-column min-vh-100">
        <?php include 'views/navbar.php';?>
        <section> 
            <div class="container py-4">
                <form id="contactForm">
                    <div class="mb-3">
                    <label class="form-label" for="ime">Ime</label>
                    <input class="form-control" id="ime" type="text" placeholder="Ime" data-sb-validations="required" />
                    <div class="invalid-feedback" data-sb-feedback="ime:required">Ime je obvezno.</div>
                    </div>

                    <div class="mb-3">
                    <label class="form-label" for="email">Email</label>
                    <input class="form-control" id="email" type="email" placeholder="Email" data-sb-validations="required, email" />
                    <div class="invalid-feedback" data-sb-feedback="email:required">Email je obvezen.</div>
                    <div class="invalid-feedback" data-sb-feedback="email:email">Email ni ustrezen.</div>
                    </div>

                    <div class="mb-3">
                    <label class="form-label" for="sporocilo">Sporočilo</label>
                    <textarea class="form-control" id="sporocilo" type="text" placeholder="Sporočilo" style="height: 10rem;" data-sb-validations="required"></textarea>
                    <div class="invalid-feedback" data-sb-feedback="sporocilo:required">Sporočilo je obezno.</div>
                    </div>

                    <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center mb-3">Sporočilo poslano!</div>
                    </div>

                    <div class="d-none" id="submitErrorMessage">
                    <div class="text-center text-danger mb-3">Napaka pri pošiljanju sporočila!</div>
                    </div>

                    <div class="d-grid">
                    <button class="btn btn-primary btn-lg" type="submit">Pošlji</button>
                    </div>
                </form>
            </div>
       </section>
    </body>
    <?php include 'views/footer.php';?>
</html>
