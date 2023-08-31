<?php
require 'model/model.php';

class UserController
{

    private $userModel;

    public function __construct()
    {
        $this->userModel = new UserModule();
    }

    public function login()
    {
        require "view/login.html";
    }

    public function signup()
    {
        require "view/signup.html";
    }
    public function signupLogic(){
        $this->userModel->signUp($_POST);
    }

}