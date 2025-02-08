<?php
include './Database.php';
include './Util.php';

$db = new Database;
$util = new Util;

if (isset($_POST['add'])) {
    print_r($_POST); // 👀 Débogage : voir les données reçues

    $firstName = $util->testInput($_POST['firstName'] ?? '');
    $lastName = $util->testInput($_POST['lastName'] ?? '');
    $email = $util->testInput($_POST['email'] ?? '');
    $phone = $util->testInput($_POST['phone'] ?? '');

    if (empty($firstName) || empty($lastName) || empty($email) || empty($phone)) {
        echo $util->showMessage('danger', 'Tous les champs sont obligatoires.');
        exit;
    }

    if ($db->insert($firstName, $lastName, $email, $phone)) {
        echo $util->showMessage('success', 'User inserted successfully!');
    } else {
        echo $util->showMessage('danger', 'Something went wrong!');
    }
}
