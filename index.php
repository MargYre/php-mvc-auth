<?php
session_start();
require_once('./Model/Connection.php');

// Initialisation de la connexion à la base de données
$pdoBuilder = new Connection();
$db = $pdoBuilder->getDb();

// Définition des paramètres par défaut - on change simplement ces valeurs
$defaultController = 'navigation'; // au lieu de 'user'
$defaultAction = 'home';      // au lieu de 'login'

// Récupération des paramètres de routage
if ((isset($_GET['ctrl']) && !empty($_GET['ctrl'])) && 
    (isset($_GET['action']) && !empty($_GET['action']))) {
    $ctrl = $_GET['ctrl'];
    $action = $_GET['action'];
} else {
    $ctrl = $defaultController;
    $action = $defaultAction;
}

// Chargement et exécution du controller
require_once('./Controller/' . $ctrl . 'Controller.php');
$ctrl = $ctrl . 'Controller';
$controller = new $ctrl($db);
$controller->$action();