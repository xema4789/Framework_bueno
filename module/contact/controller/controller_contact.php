<?php
$path = $_SERVER['DOCUMENT_ROOT'] . '/Programacion/Tema5_1.0/Tema5_1.0/8_MVC_CRUD/';
include ($path . "/module/contact/model/DAOContact.php");

switch($_GET['op']){

    case 'list':
        include("module/contact/view/contactus.php");
    break;
}