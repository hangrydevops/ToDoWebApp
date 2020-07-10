<html>
<head>
 <title>Create Todo list</title>
</head>
<body>
<h1>Create Todo List</h1>
<form method=”post” action=”create.php”>
 <p>Todo title: </p>
 <input name=”todoTitle” type=”text”>
 <p>Todo description: </p>
 <input name=”todoDescription” type=”text”>
 <br>
 <input type=”submit” name=”submit” value=”submit”>
</form>
</body>
</html>
<?php
 if(isset($_POST[‘submit’])) {
    $title = $_POST[‘todoTitle’];
    $description = $_POST[‘todoDescription’];
echo “you filled title “ . $title . “<br> and description “ . $description;
}
?>