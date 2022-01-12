<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>create page</title>
</head>

<body>
<h1 style=" text-align:center">GIVE NEW BOOK INFORMATION</h1>
<div  style="padding-left: 420px;">
  <form action="./save.php" method="POST">
    
    <label for="lname">Title:</label><br>
    <input required type="text" id="lname" name="title" placeholder="Enter the title of book"><br>
    <label for="author">Author:</label><br>
    <input required type="text" id="author" name="author" placeholder="Enter the author of book"><br>
    <label for="available">Available:</label><br>
    <input required type="text" id="availabe" name="available" placeholder="available?"><br>
    <label for="pages">Pages:</label><br>
    <input required type="text" id="pages" name="pages" placeholder="Enter the number of pages?"><br>
    <label for="isbn">ISBN:</label><br>
    <input  required type="text" id="isbn" name="isbn" placeholder="Enter ISBN"><br>
    <br>
    <input type="submit" style="color:blue;" value="SAVE">
    
  </form>
</div>
</body>

</html>