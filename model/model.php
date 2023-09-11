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

    public function incomeDetail($details){
        // var_dump($details);
        $userId = $details['id'];
        $dateVal = $details['dateVal'];
        $transactionValue = $details['transactionValue'];
        $categoryInp = $details['categoryInp'];
        $AmountInputVal = $details['AmountInputVal'];
        $descriptionInputVal = $details['descriptionInputVal'];

        $insert = $this->db->query("INSERT INTO income_expenses (user_id,amount,description,category_id,transaction_id,date,transaction_mode) VALUES ('$userId','$AmountInputVal','$descriptionInputVal','$categoryInp',1,'$dateVal','$transactionValue')");
        // header('location:/income');
    }

    public function reportDetails()  {
        $userId = $_SESSION['userid'];
        $val = $this->db->query("SELECT * FROM `income_expenses` WHERE transaction_id = 1 AND user_id = '$userId'");
        $allValue = $val->fetchAll(PDO::FETCH_OBJ);
        return $allValue;
    }

    public function expenseDetails($expenseDetails){
        var_dump($expenseDetails);
        $userId = $expenseDetails['id'];
        $dateVal = $expenseDetails['dateVal'];
        $transactionValue = $expenseDetails['transactionValue'];
        $categoryInp = $expenseDetails['categoryInp'];
        $AmountInputVal = $expenseDetails['AmountInputVal'];
        $descriptionInputVal = $expenseDetails['descriptionInputVal'];

        $insert = $this->db->query("INSERT INTO income_expenses (user_id,amount,description,category_id,transaction_id,date,transaction_mode) VALUES ('$userId','$AmountInputVal','$descriptionInputVal','$categoryInp',2,'$dateVal','$transactionValue')");
        // header('location:/income');
    }
}