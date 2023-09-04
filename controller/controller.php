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
    public function loginCheck()
        {
            $this->userModel->loginCheck($_POST);
        }


    public function signup()
    {
        require "view/signup.html";
    }
    public function signupLogic(){
        $this->userModel->signUp($_POST);
    }
    public function home(){
//        var_dump($_SESSION['username'],$_SESSION['userid']);
        require 'view/home.php';
    }
    public function report(){
        require 'view/report.html';
    }
    public function income(){   
        require 'view/income.html';
    }

}