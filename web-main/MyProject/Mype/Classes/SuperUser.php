<?php
declare(strict_types=1);

namespace MyProject\Classes;

class SuperUser extends User
{
    public string $role;

    public function __construct(string $name, string $login, string $password, string $role)
    {
        parent::__construct($name, $login, $password);
        $this->role = $role;
    }

    public function showInfo(): void
    {
        parent::showInfo();
        echo "Роль: {$this->role}\n";
    }
}