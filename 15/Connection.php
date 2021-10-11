<?php

class Connection
{
    public PDO $pdo;

    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=127.0.0.1;dbname=notes', 'root', '');
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function getNotes()
    {
        $statement = $this->pdo->prepare('SELECT * FROM notes ORDER BY create_date DESC');
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addNote($note)
    {
        $statement = $this->pdo->prepare('INSERT INTO notes (title, description, create_date)
                                        VALUES (:title, :description, :date)');
        $statement->bindValue('title', $note['title']);
        $statement->bindValue('description', $note['description']);
        $statement->bindValue('date', date('Y-m-d H:i:s'));
        return $statement->execute();
    }

    public function getNoteById($id)
    {
        $statement = $this->pdo->prepare('SELECT * FROM notes WHERE id = :id');
        $statement->bindValue('id', $id);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_ASSOC);
    }
}