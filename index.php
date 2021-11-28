<?php
require_once "./commons/utils.php";
require_once "dao/pdo.php";

$url = isset($_GET['url']) ? $_GET['url'] : '/';
switch ($url) {
    case '/':
        require_once "site/business/homepage.php";
        home();
        break;
    case 'lien-he':
        require_once "site/business/contact.php";
        contact();
        break;
    default:
        # code
        break;
}
?>
