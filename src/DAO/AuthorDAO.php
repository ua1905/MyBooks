<?php

namespace MyBooks\DAO;

use Doctrine\DBAL\Connection;
use MyBooks\Domain\Author;

class AuthorDAO
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

    public function find($id) {
        $sql = "select * from author where auth_id=?";
        $row = $this->db->fetchAssoc($sql, array($id));

        if ($row)
            return $this->buildAuthor($row);
        else
            throw new \Exception("No author matching id " . $id);
    }

    /**
     * Creates an Author object based on a DB row.
     *
     * @param array $row The DB row containing Book data.
     * @return \MyBooks\Domain\Book
     */
    private function buildAuthor(array $row) {
        $author = new Author();
        $author->setId($row['auth_id']);
        $author->setFirstname($row['auth_first_name']);
        $author->setLastname($row['auth_last_name']);
        return $author;
    }

}