<?php
namespace app\controllers;
use app\core\Application;
use app\core\Controller;
use app\core\Request;

class AuthController extends Controller{
    public function login(){
        $this->setLayout('auth');
        return $this->render('login');
    }

    public function register(Request $request){
        $this->setLayout('auth');
        if($request->isPost()){
            return 'Handle Submit Data';
        }
        return $this->render('register');
    }

}
?>