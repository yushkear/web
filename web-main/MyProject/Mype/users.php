<?php
declare(strict_types=1);

spl_autoload_register(function ($className) {
    // Удаляем namespace prefix (MyProject\Classes\) из имени класса
    $relativeClass = str_replace('MyProject\\Classes\\', '', $className);
    
    // Формируем правильный путь к файлу
    $file = __DIR__ . '/Classes/' . str_replace('\\', '/', $relativeClass) . '.php';
    
    if (file_exists($file)) {
        require $file;
    } else {
        throw new Exception("Class {$className} not found in path: {$file}");
    }
});

// Пример использования
use MyProject\Classes\SuperUser;

$superUser = new SuperUser('Admin', 'admin', '12345', 'Administrator');
$superUser->showInfo();