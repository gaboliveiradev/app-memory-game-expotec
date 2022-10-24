<?php

namespace App\Model;

use App\DAO\LoginDAO;

class LoginModel {

    public $id, $username;

    public function auth(string $username) {
        $dao = new LoginDAO();
        $obj = $dao->verifyUsernamePlayer($username);

        if($obj == null) {
            $dao->insertPlayer($this);
            return true;
        } else {
            return false;
        }
        
    }

    public function getById(string $username) {
        $dao = new LoginDAO();
        return $dao->getById($username);
    }
}