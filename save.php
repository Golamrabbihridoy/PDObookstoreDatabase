<?php
require 'config.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAVE</title>
</head>

<body>
    <?php
      
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

       $data = [$_POST];
        $title = $_POST['title'];
        $author = $_POST['author'];
        $available = $_POST['available'];
        $pages = $_POST['pages'];
        $isbn = $_POST['isbn'];
        echo $title;

       $array = array(':title' => $title,
       ':author' => $author,
       ':available' => $available,
       ':pages' => $pages,
       ':isbn' => $isbn
        );
       $sql = "INSERT INTO booklist(
        title,
        author,
        available,
        pages,
        isbn
    )
    VALUES (
       :title,
       :author,
       :available,
       :pages,
       :isbn
    )";
    $query = $pdo->prepare($sql);
    $query ->execute($array);
    header('Location:index.php');
  

    ?>
</body>

</html>