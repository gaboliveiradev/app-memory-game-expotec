<?php

namespace App\DAO;

use App\Model\LoginModel;

class LoginDAO extends DAO {

    public $conexao;
    public function __construct()
    {
        parent::__construct();  
    } 

    public function insertPlayer(LoginModel $model) {
        $sql = "INSERT INTO Players (username) VALUES (?)";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, strtoupper($model->username));
        $stmt->execute();
    }

    public function verifyUsernamePlayer(string $username) {
        $sql = "SELECT * FROM players WHERE username = ?";
        
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, strtoupper($username));
        $stmt->execute();

        return $stmt->fetchObject();
    }

    public function getById(string $username) {
        $sql = "SELECT id FROM Players WHERE username = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, strtoupper($username));
        $stmt->execute();

        return $stmt->fetchObject();
    }
}