<?php
declare(strict_types=1);
require("classes/SuperUser.php");
/*  
    7. В файле users.php создайте объект $user, экземпляр класса SuperUser
    8. Вызовите метод showInfo() объекта $user
*/

$user1 = new SuperUser('Olga','delf5','GD64834','user');
$user1->showInfo();
