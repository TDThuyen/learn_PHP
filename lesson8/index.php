<?php

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'posts';
$action     = isset($_GET['action']) ? $_GET['action'] : 'index';

switch ($controller) {
    case 'posts':
        require_once('controllers/PostsController.php');
        $controller = new PostsController();
        break;
    default:
        die('Controller không tồn tại');
}

$controller->{$action}();