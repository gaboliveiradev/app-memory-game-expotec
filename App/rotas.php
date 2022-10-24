<?php

use App\Controller\{
    GameController,
    LoginController,
    RankController,
    RecordController
};

$parse_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($parse_uri) {
    case "/login":
        LoginController::index();
    break;

    case "/login/auth":
        LoginController::auth();
    break;

    case "/game":
        GameController::index();
    break;

    case "/congratulations":
        RecordController::index();
    break;

    case "/rank":
        RankController::index();
    break;
    
    default:
        header("Location: /login");
    break;
}