<?php


$users = [
    ['uname' => 'tester',
    'psw' => 'check1'],

    ['uname' => 'admin',
    'psw' => 'gogreen1'],
];

if(isset($_POST['uname']) && isset($_POST['psw'])){
    $username = $_POST['uname'];
    $password = $_POST['psw'];

    foreach ($users as $user){
        if($user['uname'] === $username && $user['psw'] === $password){
            echo 'Login exitoso.' . '<br>';
        exit;
        }
    }
    echo 'Usuario o contraseña incorrectos';
}

