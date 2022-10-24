<?php

namespace App\Controller;

use App\Model\LoginModel;

class LoginController extends Controller {
    
    public static function index() {
        parent::render("Login/login");
        $_SESSION["response"] = "";
    }

    public static function auth() {
        $model = new LoginModel();
        $model->username = $_GET["username"];
        $obj = $model->auth($_GET["username"]);

        if($obj == false) {
            header("Location: /login");
            $_SESSION["response"] = "Este username já está sendo utilizado, escolha outro.";
        } else {
            $id = $model->getById($_GET["username"]);
            header("Location: /game?id_player=" . $id->id);
        }

    }
}