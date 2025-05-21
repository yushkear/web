<?php

spl_autoload_register(function ($class) {
    $file = str_replace('\\', '/', __DIR__) . str_replace('\\', '/', substr($class,9)) . '.php'; 
    // echo str_replace('\\', '/', __DIR__) . str_replace('\\', '/', substr($class,9)) . '.php';
   
    if (file_exists($file)) {
        require $file;
        
    }
});


use MyProject\Classes\User;
use MyProject\Classes\SuperUser;


$user1 = new User('Nikita', 'qwe123', 'password1');
$user2 = new User('Rtoma', 'asd456', 'password2');
$user3 = new User('max', 'zxc789', 'password3');



$user1->showInfo();
$user2->showInfo();
$user3->showInfo();

$user = new SuperUser('Lina', 'laguna', 'dragon slave', 'admin');
$user->showInfo();
$user->getInfo();

echo "<p>Всего обычных пользователей: " . User::$userCount . "\n</p>";
echo "<p>Всего cупер-пользователей: " . SuperUser::$superUserCount . "\n</p>";

