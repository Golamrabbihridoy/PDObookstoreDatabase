<?php
require 'config.php';
$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $sql = 'SELECT title,author,available,pages,isbn,id 
            FROM booklist';
    
    $q = $pdo->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
    $books = $q;