<?php

class UserEntity {
    private $id;
    private $name;
    private $mail;
    private $hashed_password;
    private $validated;
    private $role;

    public function __construct($id, $name, $mail, $hashed_password, $validated, $role) {
        $this->id = $id;
        $this->name = $name;
        $this->mail = $mail;
        $this->hashed_password = $hashed_password;
        $this->validated = $validated;
        $this->role = $role;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getMail() {
        return $this->mail;
    }

    public function getHashedPassword() {
        return $this->hashed_password;
    }

    public function getValidated() {
        return $this->validated;
    }

    public function getRole() {
        return $this->role;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setMail($mail) {
        $this->mail = $mail;
    }

    public function setHashedPassword($hashed_password) {
        $this->hashed_password = $hashed_password;
    }

    public function setValidated($validated) {
        $this->validated = $validated;
    }

    public function setRole($role) {
        $this->role = $role;
    }

}

?>

