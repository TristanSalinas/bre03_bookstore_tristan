<?php
class AuthorManager
{

  private PDO $db;

  public function __construct()
  {
    $this->connexion(); // à l'instanciation le manager se connecte à la db
  }

  private function connexion(): void
  {

    $host = 'localhost';
    $port = '3306';
    $user = 'root';
    $password = '';
    $dbname = 'bdd_bookstore_tristan';

    $connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";

    try {
      $this->db = new PDO(
        $connexionString,
        $user,
        $password
      );
    } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    }
  }


  public function findAll(): array {}

  public function findOne(int $id): Author {}

  public function create(Author $newAuthor): void {}

  public function delete(int $authorId): void {}

  public function update(Author $author): void {}
}
