<?php
namespace Factory\Models;

class Users extends Collection
{
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
            new User(
                'polshnasha@mail.su',
                '789',
                'Полина',
                'Соколова'),
            new User(
                'wexlover@gmail.com',
                'qwe',
                'Данжон',
                'Арнаутов'),
            new User(
                'lorix@gmail.com',
                'asd',
                'Рамзан',
                'Никишин')
        ];
        parent::__construct($users);
    }
}
