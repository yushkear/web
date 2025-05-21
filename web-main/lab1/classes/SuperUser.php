<?php
require_once("User.php");
/*
    1. В текстовом редакторе создайте файл SuperUser.php
    2. Опишите класс SuperUser, наследованный от класса User. Для подклчения User.php используйте выражение require_once
    3. В классе SuperUser создайте свойство role
    4. Перегрузите конструктор супер-класса так, чтобы он принимал четвёртым параметром значение для свойства role
    5. Вызовите из конструктора родительский конструктор и передайте в него первые три параметра
    6. Перегрузите метод супер-класса showInfo() так, чтобы выводилось и значение свойства role
    7. В файле users.php создайте объект $user, экземпляр класса SuperUser
    8. Вызовите метод showInfo() объекта $user
*/
/**
 * SuperUser, наследованный от класса User
 */
class SuperUser extends User{
     /**
 * @param public $role - роль пользователя
 */
    public $role;
    
    // перегрузка конструкторa
    /*
 * Функция конструктор
 * @param string $name, string $login, string $password, string $role
 * @return вывод св-в $this->name, $this->login, $this->password, $this->role
 */	
    function __construct($name, $login, $password, $role) {
        parent::__construct($name, $login, $password);   // перегрузка с выполнением родительского метода
        $this->role = $role;
    }
    
 /*
 * Функция вывода значение свойств класса
 * @param string $name, string $login, string $password
 * @return св-ва классов $this->name, $this->login, $this->password, $this->role
 */	       
    function showInfo(){
         echo "<p><b>name:</b> {$this->name} <b>login:</b> {$this->login} <b>password:</b> {$this->password} <b>role:</b> {$this->role} </p>";
    }    
}
    


