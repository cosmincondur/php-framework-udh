<?php

namespace App\Models;

use PDO;

class Product
{
    public function getData(): array
    {
        $dsn = "mysql:host=db;dbname=phpmvc_udh;charset=utf8;port:3306";

        $pdo = new PDO($dsn, "root", "root", [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);

        $stmt = $pdo->query("SELECT * FROM product");

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
