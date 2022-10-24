<?php

namespace App\DAO;

use App\Model\RecordModel;

class RecordDAO extends DAO {

    public $conexao;
    public function __construct()
    {
        parent::__construct();  
    } 

    public function insertRecord(RecordModel $model) {
        $sql = "INSERT INTO record (id_player, time_record, tentativas) VALUES (?, ?, ?)";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->id_player);
        $stmt->bindValue(2, $model->time_record);
        $stmt->bindValue(3, $model->tentativas);
        $stmt->execute();
    }

    public function updateRecord(RecordModel $model) {
        $sql = "UPDATE record SET time_record = ?, tentativas = ? WHERE id_player = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->time_record);
        $stmt->bindValue(2, $model->tentativas);
        $stmt->bindValue(3, $model->id_player);
        $stmt->execute();
    }

    public function registeredPlayerVerify(int $id) {
        $sql = "SELECT * FROM record WHERE id_player = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject();
    }

    public function getAllRowsById(int $id) {
        $sql = "SELECT p.id as id, p.username as username, r.time_record as time, r.tentativas as tentativas FROM record r
        JOIN Players p ON (r.id_player = p.id) WHERE p.id = ?;";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject();
    }
}