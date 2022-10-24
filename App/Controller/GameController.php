<?php

namespace App\Controller;

class GameController extends Controller {

    public static function index() {
        parent::render("Game/game");
    }
}