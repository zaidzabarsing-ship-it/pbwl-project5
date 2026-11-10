<?php

require_once "inc/Koneksi.php";
require_once "app/Matakuliah.php";

$matkul = new App\Matakuliah();

$action = $_GET['action'] ?? '';

switch ($action) {
    case 'store':
        if (isset($_POST['store'])) {
            $matkul->store();
        }
        break;

    case 'update':
        if (isset($_POST['update'])) {
            $matkul->update();
        }
        break;

    case 'delete':
        if (isset($_POST['matkul_id'])) {
            $matkul->delete($_POST['matkul_id']);
        }
        break;

    default:
        header("Location: index.php?page=matkul");
        break;
}

header("Location: index.php?page=matkul");
exit;
