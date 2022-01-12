<?php
  require 'config.php';
  $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $id = $_GET['id'];
        
        $q = $pdo->prepare("DELETE FROM booklist
        WHERE id = $id");

         $q->execute();
      
       header('Location:index.php');

?>