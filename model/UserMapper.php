<?php
require_once 'User.php';
require_once __DIR__.'/../Database.php';
class UserMapper{
    private $database;

    public function __construct(){
        $this->database = new Database();
    }
    public function addUser(
        string $name, string $surname, string $email, string $password
    ) {
        try {
            $stmt = $this->database->connect()->prepare('INSERT INTO Users (email, password, name, surname, role) VALUES (:email, :password, :name, :surname, 2);');
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':password', $password, PDO::PARAM_STR);
            $stmt->bindParam(':name', $name, PDO::PARAM_STR);
            $stmt->bindParam(':surname', $surname, PDO::PARAM_STR);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            return 'User registered!';
        }
        catch(PDOException $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    public function getUser(string $email)
    {
        try {
            $stmt = $this->database->connect()->prepare('SELECT * FROM Users WHERE email = :email;');
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->execute();

            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            return new User($user['id'], $user['email'], $user['password'], $user['name'], $user['surname'], $user['role']);
        }
        catch (PDOException $e){
            return 'Error: ' . $e->getMessage();
        }

    }
    public function getUsers(): array{
        try {
            $stmt = $this->database->connect()->prepare('SELECT * FROM Users WHERE email != :email;');
            $stmt->bindParam(':email', $_SESSION['id'], PDO::PARAM_STR);
            $stmt->execute();
            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $user;
        }
        catch(PDOException $e) {
            die();
        }
    }
    public function getDetails(int $id) {
        try{
            $stmt = $this->database->connect()->prepare('SELECT Users.name FROM Users WHERE id = :id;');
            $stmt->bindParam(':id', $id, PDO::PARAM_STR);
            $stmt->execute();
            $User = $stmt->fetch(PDO::FETCH_ASSOC);

            return $User;

        }catch (PDOException $e){
            return 'Error: ' . $e->getMessage();
        }
    }
    public function delete(int $id){
        try {
            $stmt = $this->database->connect()->prepare('DELETE FROM Users WHERE id = :id;');
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
        }
        catch(PDOException $e) {
            die();
        }
    }
}