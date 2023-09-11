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
    //    var_dump($_SESSION['username'],$_SESSION['userid'], $_REQUEST);
        require 'view/home.php';
    }
    public function report(){

        $reportValues = $this->userModel->reportDetails();
        require 'view/report.php';
    }
    public function income(){   
        require 'view/income.php';
    }

    public function incomeDetail()  {
        // var_dump($_REQUEST);
        $this->userModel->incomeDetail($_REQUEST);
    }

    public function expense(){   
        require 'view/expense.php';
    }

    public function expenseDetails()  {
        $this->userModel->expenseDetails($_REQUEST);
    }


    

}