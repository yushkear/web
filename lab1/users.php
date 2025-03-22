<?php
require_once 'MyProject/CLasses/User.php';
require_once 'MyProject/CLasses/SuperUser.php';

$user1 = new User('Агроном','Сын_Агронома','Братва_и_Кольцо');
$user1 -> showinfo().PHP_EOL;
echo "<br>";

$user2 = new User('Рэдрик','Шухарт','Счастье_для_всех');
$user2 -> showinfo().PHP_EOL;
echo "<br>";

$user3 = new User('Филимон','Разгульдяев','Это_придумала_Полина');
$user3 -> showinfo().PHP_EOL;
echo "<br>";

$user4 = new SuperUser('Пауль','Атрейдес','Муад_диб','Король Фрименов');
$user4 -> showinfo().PHP_EOL;
echo "<br>";