<?php

class Person {
    protected $firstName;
    protected $lastName;
    protected $nickname;

    function __construct($firstName, $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;

    }

    public function setNickName($nickname) {
        if (! empty($nickname)) {
            $this->nickname = $nickname;
        }
    }

    public function getNickname() {
        return $this->nickname;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function fullName() {
        return $this->firstName . ' ' . $this->lastName
    }
}


$person1 = new Person('Julian', 'Hernandez');
