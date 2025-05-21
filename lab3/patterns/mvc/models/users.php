<?php
namespace MVC\Models;

class Users
{
    public $collection;

    public function __construct(public ?array $users = null)
    {
        $users ??= [
            new User(
                 'nikivabosss322@gmail.com',
                 '123',
                 'Никита',
                 'Басихин'),
            new User(
                 'Yuskovskiy@mail.ru',
                 '456',
                 'Сеега',
                 'Юшков'),
        ];
        $this->collection = $users;
    }
}
