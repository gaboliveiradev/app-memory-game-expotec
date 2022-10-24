<?php

namespace App\Model;

use App\DAO\RecordDAO;

class RecordModel {

    public $id, $id_player, $time_record, $tentativas;

    public function save(int $id) {
        $dao = new RecordDAO();
        $obj = $dao->registeredPlayerVerify($id);

        if($obj == null) {
            $dao->insertRecord($this);
        } else {
            $dao->updateRecord($this);
        }
    }

    public function getAllRowsById(int $id) {
        $dao = new RecordDAO();
        return $dao->getAllRowsById($id);
    }
}