<?php
require 'connection.php';


class UserModule extends Database
{


    public function loginCheck($data)
    {
        $email = $data['email'];
        $password = $data['password'];

        $fetch = $this->db->query("SELECT * from users where email ='$email' and  password='$password'");
        $datas = $fetch->fetchall();

        if ($datas) {
            $_SESSION['username'] = $datas[0]['name'];
            $_SESSION['userid'] = $datas[0]['id'];

            header('location:/home');
        } else {
            header('location:/login');
        }
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
            header('location:/');
        }
    }
}