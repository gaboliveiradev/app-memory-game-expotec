<?php

namespace App\DAO;

use \PDO;

class RankDAO extends DAO {

    public $conexao;
    public function __construct()
    {
        parent::__construct();
    }

    public function getRankPlayersByTime() {
        $sql = "SELECT p.username as username, r.time_record as time, r.tentativas as tentativas 
        FROM record r JOIN players p ON (r.id_player = p.id) ORDER BY r.time_record ASC;";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

}