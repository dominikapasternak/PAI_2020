<?php


class User{
    private $id;
    private $email;
    private $password;
    private $name;
    private $surname;
    private $role;

    public function __construct(
        $id,
        $email,
        $password,
        $name,
        $surname,
        $role) {
        $this->id = $id;
        $this->email = $email;
        $this->password = $password;
        $this->name = $name;
        $this->surname = $surname;
        $this->role = $role;
    }

    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email): void{
        $this->email = $email;
    }
    public function getPassword(){
        return $this->password;
    }
    public function setPassword($password): void{
        $this->password = $password;
    }
    public function setName($name): void{
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
    public function setSurname($surname): void{
        $this->surname = $surname;
    }
    public function getSurname(){
        return $this->surname;
    }
    public function getId(){
        return $this->id;
    }
    public function getRole(){
        return $this->role;
    }
    public function setRole(string $role): void{
        $this->role = $role;
    }
}