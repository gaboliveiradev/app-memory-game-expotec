<?php

namespace App\Model;

use App\DAO\RankDAO;

class RankModel {
    

    public function getRankPlayerByTime() {
        $dao = new RankDAO();
        return $dao->getRankPlayersByTime();
    }
}