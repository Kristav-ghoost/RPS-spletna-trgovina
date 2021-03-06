<?php

class User {
    public $user_id;
    public $username;
    public $password;
    public $email;
    public $first_name;
    public $last_name;
    public $phone_number;
    public $registration_time;

    public function __construct($user_id,$username,$password,$email,$first_name,$last_name,$phone_number,$registration_time){
        $this->user_id = $user_id;
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->phone_number = $phone_number;
        $this->registration_time = $registration_time;
    }

    public static function Register($username,$password,$email,$first_name,$last_name,$phone_number){
        global $conn;//povezava z bazo
        $username = $conn->real_escape_string($username);
        $email = $conn->real_escape_string($email);
        $first_name = $conn->real_escape_string($first_name);
        $last_name = $conn->real_escape_string($last_name);
        $phone_number = $conn->real_escape_string($phone_number);
        $pass = password_hash($password, PASSWORD_ARGON2ID);

        $sql1 = "SELECT * FROM user WHERE username='$username' OR email='$email' LIMIT 1";
        $row = $conn->query($sql1);//preverimo ce obstaja tak uporabnik z taksnim uporabniskim imenom
        $rows = $row->num_rows;

        if($rows == 0){//ce ne obstaja vrne true
            $sql2 = "INSERT INTO user (username,password,email,first_name,last_name,phone_number,registration_time) VALUES ('$username','$pass','$email','$first_name','$last_name','$phone_number',now())";
            $result = $conn->query($sql2);
            return true;
        }else{//drugac vrne false
            return false;
        }
    }

    public static function Login($username, $password){
        global $conn;//povezava z bazo
        $username = $conn->real_escape_string($username);

        $sql = "SELECT * FROM user WHERE username='$username'";
        $result = $conn->query($sql);
        if ($user = $result->fetch_object()){
            if(password_verify($password, $user->password)){
                return $user;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    public static function GetUser($id){
        global $conn;
        $id = mysqli_real_escape_string($conn, $id);
        $query = "SELECT * FROM user WHERE user_id=$id";
        $res = $conn->query($query);
        if($obj = $res->fetch_object()){
            return $obj;
        }
        return null;
    }

    public static function UpdateUser($id,$username,$first_name, $last_name, $email,$phone_number){
        global $conn;//povezava z bazo
        $username = $conn->real_escape_string($username);
        $email = $conn->real_escape_string($email);
        $first_name = $conn->real_escape_string($first_name);
        $last_name = $conn->real_escape_string($last_name);
        $phone_number = $conn->real_escape_string($phone_number);
        $query = "UPDATE user SET username = '$username', email = '$email', first_name = '$first_name', last_name ='$last_name', phone_number = '$phone_number'  WHERE user_id = $id;";
	    $res = $conn->query($query);

    }

    public static function UpdatePassword($id,$pass1, $pass2){
        global $conn;
        if($pass1 == $pass2){
            $password = password_hash($pass1, PASSWORD_ARGON2ID);
            $query = "UPDATE user SET password = '$password' WHERE user_id = $id;";
            $res = $conn->query($query);
        }
        else{
            return "Gesli se ne ujemata";
        }
    }
}
?>