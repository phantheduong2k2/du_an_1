<?php
$url = isset($_GET['url']) ? $_GET['url'] : '/';
switch ($url) {
    case '/':
        require_once "site/business/homepage.php";
        home();
        break;

    default:
        # code
        break;
}
?>
