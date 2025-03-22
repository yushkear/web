<?php
require_once 'User.php';
class SuperUser extends User

{
    public $role;
    public function __construct($name, $login, $password,$role){
        parent::__construct($name, $login, $password);
        $this->role =  $role;
    }
    
    public function showinfo(){
        parent::showinfo();
        echo "Роль: ".$this->role."<br>";
    }
    
}
