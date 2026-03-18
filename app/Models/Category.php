<?php
namespace App\Models;

USE PDO;

class Category
{
   private $pdo;
   
   public function __construct(PDO $pdo)
   {
    $this->pdo = $pdo;
   }

   public function category($name)
   {
      $sql = "INSERT INTO categories(name) VALUES (?)";
      $stmt = $this->pdo->prepare($sql);
      $stmt->execute([$name]);
      return $stmt;
   }

   public function showCategory()
   {
      $sql = "SELECT id,name FROM categories";
      $stmt = $this->pdo->prepare($sql);
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
   }
}