<?php
$module = isset($_GET['s']) ? $_GET['s'] : 'view';
switch ($module) {
    case 'view':
    default:
        include('guru/view.php');
        break;
    case 'add':
        include('guru/add.php');
        break;
    case 'save':
        include('guru/save.php');
        break;
    case 'edit':
        include('guru/edit.php');
        break;
    case 'update':
        include('guru/update.php');
        break;
    case 'delete':
        include('guru/delete.php');
        break;
}
