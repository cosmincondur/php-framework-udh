<?php

class Product
{
    public function getData(): array
    {

        $dsn = "mysql:host=localhost;dbname=pfu_dave_hall;charset=utf8;port:3306";

        $pdo = new PDO($dsn, "root", "");

        $stmt = $pdo->query("SELECT * FROM product");

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
