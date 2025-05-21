<?php
 declare(strict_types=1);
/*  1.Опишите класс User
    2. В классе создайте свойства name, login и password
    3.В классе создайте и опишите метод showInfo(), который выводит информацию о пользователе в произвольной форме
    4.В рабочем каталоге создайте файл users.php. С помощью выражения require подключите файл User.php и создайте три объекта, экземпляра класса User: $user1, $user2 и $user3
    5.Задайте произвольные значения свойств name, login и password для каждого из объектов
    7.Вызовите метод showInfo() для каждого объекта
    
    */  
    
/**
 * User Class
 */    
class User { 
    /**
 * @param public $name - имя пользователя
 *        public $login - логин 
          public $password - пароль 
 */
    public $name; 
    public $login; 
    public $password;
    
    /*
 * Функция вывода значение свойств класса
 * @param string $name, string $login, string $password
 * @return св-ва классов $this->name, $this->login, $this->password, $this->role
 */	 
    
    function showInfo(){
         echo "<p><b>name:</b> {$this->name} <b>login:</b> {$this->login} <b>password:</b> {$this->password}</p>";
        
     }
    /*
 * Функция конструктор
 * @param string $name, string $login, string $password
 * @return св-ва классов $this->name, $this->login, $this->password, $this->role
 */	 
    function __construct($name, $login, $password){  //Конструктор
      $this->name = $name;
      $this->login = $login;
      $this->password = $password;
    }

    /*
 * Функция деструктор
 * @param string $name, string $login, string $password
 * @return вывод логина при удалении информации об элементах класса
 */	  
    function __destruct(){  // Деструктор
      echo "Пользователь <b>{$this->login}</b> удален <br>";
    }
}
 
