<?php

namespace App\Controller;

use App\DAO\RecordDAO;
use App\Model\RecordModel;

class RecordController extends Controller {

    public static function index() {
        $model = new RecordModel();
        
        $model->id_player = $_GET["id_player"];
        $model->time_record = $_GET["time_record"];
        $model->tentativas = $_GET["tentativas"];
        $model->save( (int) $_GET["id_player"]);

        $model1 = new RecordModel();
        $obj = $model1->getAllRowsById( (int) $_GET["id_player"]);

        include "./View/modules/Congratulations/congratulations.php";
    }
}