<?php 
include 'views/head.php';
include 'glava.php';
include 'views/navbar.php';
include_once 'classes/user.php';

$id = $_SESSION["id"];
$user = User::GetUser($id);

if(isset($_POST["poslji"])){
    $id = $_SESSION["id"];
    User::UpdateUser($id,$_POST["username"],$_POST["password"],$_POST["first_name"],$_POST["last_name"],$_POST["email"],$_POST["phone"]);
    header("location: profile.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<body>
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold"><?php echo $user->username ?></span><span class="text-black-50"><?php echo $user->email ?></span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Nastavitve Profila</h4>
                </div>
            <form action="profile.php" method="POST" enctype="multipart/form-data"> 
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Ime</label><input name="first_name" type="text" class="form-control" placeholder="first name" value="<?php echo $user->first_name ?>"></div>
                    <div class="col-md-6"><label class="labels">Priimek</label><input name ="last_name" type="text" class="form-control" value="<?php echo $user->last_name ?>" placeholder="surname"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Username</label><input name="username" type="text" class="form-control" placeholder="" value="<?php echo $user->username ?>"></div>
                    <div class="col-md-12"><label class="labels">Password</label><input name = "password" type="password" class="form-control" placeholder="" value=""></div>
                    <div class="col-md-12"><label class="labels">Telefonska stevilka</label><input name="phone" type="text" class="form-control" placeholder="" value="<?php echo $user->phone_number ?>"></div>
                    <div class="col-md-12"><label class="labels">Email</label><input name="email" type="text" class="form-control" placeholder="" value="<?php echo $user->email ?>"></div>

                </div>
                <div class="mt-5 text-center"><input class="btn btn-primary profile-button" type="submit" name="poslji" value="Shrani Podatke" /></div>
            </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<?php 
include 'views/footer.php';
?>
</body>