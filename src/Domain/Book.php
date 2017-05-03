<?php

namespace MyBooks\Domain;

class Book 
{
    /**
     * Book id.
     *
     * @var integer
     */
    private $id;

    /**
     * Book title.
     *
     * @var string
     */
    private $title;

    /**
     * Book content.
     *
     * @var string
     */
    private $content;

    /**
     * Book ISBN.
     *
     * @var string
     */
    private $isbn;

    /**
     * Book Author Id.
     *
     * @var string
     */
    private $authid;

    /**
     * Book Author.
     *
     * @var string
     */
    private $author;

    /*  id  */
    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    /*  Title  */
    public function getTitle() {
        return $this->title;
    }
    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }

    /*  Content  */
    public function getContent() {
        return $this->content;
    }
    public function setContent($content) {
        $this->content = $content;
        return $this;
    }

    /*  Author  */
    public function getAuthor() {
        return $this->author;
    }
    public function setAuthor($author) {
        $this->author = $author;
        return $this;
    }

    /*  ISBN  */
    public function getISBN() {
        return $this->isbn;
    }
    public function setISBN($isbn) {
        $this->isbn = $isbn;
        return $this;
    }

    public function getAuthId() {
        return $this->authid;
    }
    public function setAuthId($authid) {
        $this->authid = $authid;
        return $this;
    }

}