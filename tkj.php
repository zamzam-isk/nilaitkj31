<?php
$module = isset($_GET['m']) ? $_GET['m'] : 'home';
switch ($module) {
    case 'home':
    default:
        include('home.php');
        break;

    case 'jurusan':
        include('jurusan/index.php');
        break;
    case 'santri':
        include('santri/index.php');
        break;
    case 'mapel':
        include('mapel/index.php');
        break;
    case 'guru':
        include('guru/index.php');
        break;
    case 'nilai':
        include('nilai/index.php');
        break;
}
