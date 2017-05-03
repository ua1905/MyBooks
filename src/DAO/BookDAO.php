<?php

namespace MyBooks\DAO;

use Doctrine\DBAL\Connection;
use MyBooks\Domain\Book;

class BookDAO
{
    /**
     * Database connection
     *
     * @var \Doctrine\DBAL\Connection
     */
    private $db;

    /**
     * Constructor
     *
     * @param \Doctrine\DBAL\Connection The database connection object
     */
    public function __construct(Connection $db) {
        $this->db = $db;
    }

    /**
     * Return a list of all books, sorted by date (most recent first).
     *
     * @return array A list of all books.
     */
    public function findAll() {
        $sql = "select * from book order by book_id desc";
        $result = $this->db->fetchAll($sql);
        
        // Convert query result to an array of domain objects
        $books = array();
        foreach ($result as $row) {
            $bookId = $row['book_id'];
            $books[$bookId] = $this->buildBook($row);
        }
        return $books;
    }

    // public function findAuthor() {
    //     $sql = "select * from author order by auth_id desc";
    //     $result = $this->db->fetchAll($sql);
        
    //     // Convert query result to an array of domain objects
    //     $author = array();
    //     foreach ($result as $row) {
    //         $authorId = $row['auth_id'];
    //         $author[$authorId] = $this->buildAuthor($row);
    //     }
    //     return $author;
    // }

    /**
     * Creates an Book object based on a DB row.
     *
     * @param array $row The DB row containing Book data.
     * @return \MyBooks\Domain\Book
     */
    private function buildBook(array $row) {
        $book = new Book();
        $book->setId($row['book_id']);
        $book->setTitle($row['book_title']);
        $book->setContent($row['book_summary']);
        $book->setISBN($row['book_isbn']);
        $book->setAuthId($row['auth_id']);
        return $book;
    }

    // /**
    //  * Creates an Author object based on a DB row.
    //  *
    //  * @param array $row The DB row containing Book data.
    //  * @return \MyBooks\Domain\Book
    //  */
    // private function buildAuthor(array $row) {
    //     $author = new Book();
    //     $author->setId($row['auth_id']);
    //     $author->setFirstname($row['auth_first_name']);
    //     $author->setLastname($row['auth_last_name']);
    //     return $author;
    // }



    public function find($id) {
        $sql = "select * from book where book_id=?";
        $row = $this->db->fetchAssoc($sql, array($id));

        if ($row)
            return $this->buildBook($row);
        else
            throw new \Exception("No article matching id " . $id);
    }

}