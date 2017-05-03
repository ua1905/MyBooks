<?php

namespace MyBooks\Domain;

class Author 
{
    /**
     * Author id.
     *
     * @var integer
     */
    private $id;

    /**
     * Author Author First Name.
     *
     * @var string
     */
    private $firstname;

    /**
     * Author Author Last Name.
     *
     * @var string
     */
    private $lastname;

    /*  id  */
    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    /*  FirstName  */
    public function getFirstname() {
        return $this->firstname;
    }
    public function setFirstname($firstname) {
        $this->firstname = $firstname;
        return $this;
    }

    /*  LastName  */
    public function getLastname() {
        return $this->lastname;
    }
    public function setLastname($lastname) {
        $this->lastname = $lastname;
        return $this;
    }
}