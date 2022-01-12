<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>

</head>
<body>
    <?php 
        require 'config.php';
        require 'phpmysqlconnect.php';
        $title =$_POST['title'];

        $task =[];
        foreach ($books as $book) :  
               if($title == $book['title']){
                   array_push($task,$book);

               }
        endforeach; 


    ?>
    <table border="1">
        <tr>
            
            <th>Title</th>
            <th>Author</th>
            <th>Available</th>
            <th>Pages</th>
            <th>ISBN</th>
            <th>Option </th>
        </tr>
        <?php foreach ($task as $key => $item) : ?>
            <tr>

                <td><?php echo $item['title']; ?></td>
                <td><?php echo $item['author']; ?></td>
                <td><?php echo $item['available']; ?></td>
                <td><?php echo $item['pages']; ?></td>
                <td><?php echo $item['isbn']; ?></td>
                <td> <a href="<?php echo  './delete.php?id=' . (int)($item['id']); ?>">
                        <button class="btn-delete">Delete</button>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>

    </table>
     
</body>
</html>