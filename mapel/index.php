<?php
$module = isset($_GET['s']) ? $_GET['s'] : 'view';
switch ($module) {
    case 'view':
    default:
        include('mapel/view.php');
        break;
    case 'add':
        include('mapel/add.php');
        break;
    case 'save':
        include('mapel/save.php');
        break;
    case 'edit':
        include('mapel/edit.php');
        break;
    case 'update':
        include('mapel/update.php');
        break;
    case 'delete':
        include('mapel/delete.php');
        break;
}
