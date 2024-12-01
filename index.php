<?php
// index.php
session_start();
require_once('./Model/Connection.class.php');
$pdoBuilder = new Connection();
$db = $pdoBuilder->getDb();

if ((isset($_GET['ctrl']) && !empty($_GET['ctrl'])) && 
    (isset($_GET['action']) && !empty($_GET['action']))) {
    $ctrl = $_GET['ctrl'];
    $action = $_GET['action'];
} else {
    $ctrl = 'user';  // Modifié pour notre cas d'authentification
    $action = 'login';
}

require_once('./Controller/' . $ctrl . 'Controller.class.php');
$ctrl = $ctrl . 'Controller';
$controller = new $ctrl($db);
$controller->$action();