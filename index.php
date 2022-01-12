<?php
require 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books Database</title>
    <style>
    table {
        border-collapse: collapse;
        width: 100%;
    }


    th, td {
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
       background-color: #D6EEEE;
    }
</style>
</head>

<body>
    <?php
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $sql = 'SELECT title,author,available,pages,isbn,id 
            FROM booklist';
    
    $q = $pdo->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
    $books = $q;
    //print_r($row);
    ?>
    <form action="./search.php" method="POST">
        <input type="text" name="title" placeholder="Search with title">
        <input type="submit" value="Search" style="background-color:green; ">
        
    </form>
    <a href="./create.php"><button style="background-color:green; float:right">Add Book</button></a>
    
    <br>
    <br>
    <table border="2" >
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Available</th>
            <th>Pages</th>
            <th>ISBN</th>
            <th>Option </th>
        </tr>
        
        <?php foreach ($books as $index => $book) : ?>
        
            <tr>
                <td><?php echo $index+1 ?></td>
                <td><?php echo $book['title']; ?></td>
                <td><?php echo $book['author']; ?></td>
                <td><?php echo $book['available']; ?></td>
                <td><?php echo $book['pages']; ?></td>
                <td><?php echo $book['isbn']; ?></td>
                <td> <a onclick="return confirm(' Are you want to delete the book')" href="<?php echo './delete.php?id=' . (int)($book['id']); ?>">
                        <button class="btn-delete">Delete</button>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>

    </table>
    <br>
    <br>
    
</body>

</html>