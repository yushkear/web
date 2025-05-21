<?php
declare(strict_types=1);

namespace MyProject\Mype\Classes;

class User
{
    public $name;
    public $login;
    private $password;

    public function __construct($name, $login, $password) {
        $this->name = $name;
        $this->login = $login;
        $this->password = $password;

    public function showInfo() {
        return "Имя: {$this->name}, Логин: {$this->login}<br>";
    }
}