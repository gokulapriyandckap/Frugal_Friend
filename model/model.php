<?php
require 'connection.php';


class UserModule extends Database
{


    public function logincheck($data)
    {

    }

    public function signUp($data)
    {
        $email = $data['email'];
        $check = $this->db->query("SELECT * FROM users WHERE email = '$email'");
        $exists = $check->fetchAll(PDO::FETCH_OBJ);
        if ($exists) {
            header('location:/');
        } else {
            $username = $data['userName'];
            $email = $data['email'];
            $password = $data['password'];
            $insert = $this->db->query("INSERT INTO users(name,email,password)VALUES ('$username','$email','$password')");
//            header();
            echo 'user created';
        }
    }
}