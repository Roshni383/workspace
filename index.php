
    <?php include('constant.php'); ?>

    <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>To-Do List</title>

  <style>
    body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f4f4f4;
}

.todo-list {
  max-width: 400px;
  margin: 50px auto;
  background-color: #fff;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

h1 {
  text-align: center;
}

form {
  display: flex;
  margin-bottom: 20px;
}

input[type="text"] {
  flex: 1;
  padding: 5px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

button {
  padding: 5px 10px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 3px;
  cursor: pointer;
}

ul {
  list-style-type: none;
  padding: 0;
}

li {
  display: flex;
  align-items: center;
  margin-bottom: 10px;
}

input[type="checkbox"] {
  margin-right: 10px;
}

label {
  font-size: 18px;
}

input[type="checkbox"]:checked + label {
  text-decoration: line-through;
  color: #aaa;
}

    </style>
</head>
<body>

  <div class="todo-list">
    <h1>To-Do List</h1>
    <form id="task-form">
    <form action="" method="POST">
      <input type="text" id="new-task" name="task"placeholder="Enter a new task">
      <button type="submit" name="submit">Add Task</button>
    </form>
    <ul id="task-list" name="task-list">
    </ul>
  </div>
  <script src="script.js"></script>
</body>


</html>
<?php

if(isset($_POST['submit'])) 
{
    $task=$_POST['task'];
    $status="pending";

    $sql = "INSERT INTO TASK SET 
    task='$task';

";


$res = mysqli_query($conn, $sql) or die(mysqli_error());

if($res==TRUE)
{

    echo "inserting";
   
}
else
{
    echo "error inserting";
   
  
}


}








?>