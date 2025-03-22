<?php
class User
{ 
    public $name;
    public $login;
    private $password;
    
    public function __construct($name, $login, $password){
        $this->name = $name;
		$this->login = $login;
		$this ->password = $password;
      }
    
    
    
    public function showinfo(){
          echo "Имя пользователя: ".$this->name."<br>";
          echo "Логин: ".$this->login."<br>";
          echo "Пароль: ".$this -> password."<br>";
      }
    
    public function __destruct()
   {
       echo "Пользователь ".$this->login." удалён <br> ".PHP_EOL;
   }
}
