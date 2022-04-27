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
        $username = mysqli_real_escape_string($conn, $username);
        $email = mysqli_real_escape_string($conn, $email);
        $first_name = mysqli_real_escape_string($conn, $first_name);
        $last_name = mysqli_real_escape_string($conn, $last_name);
        $phone_number = mysqli_real_escape_string($conn, $phone_number);
        $pass = password_hash($password, PASSWORD_ARGON2ID);

        $sql1 = "SELECT * FROM user WHERE username='$username' OR email='$email' LIMIT 1";
        $row = $conn->query($sql1);//preverimo ce obstaja tak uporabnik z taksnim uporabniskim imenom
        $rows = $row->num_rows;

        if($rows == 0){//ce ne obstaja vrne true
            $sql2 = "INSERT INTO user (username,password,email,first_name,last_name,phone_number,registration_time) VALUES ('$username','$pass','$email','$first_name','$last_name','$phone_number',now())";
            $result = $conn->query($sql2);
            return true;
        }
        else{//drugac vrne false
            return false;
        }
    }
}
?>