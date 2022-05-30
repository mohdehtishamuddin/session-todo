<?php
session_start();
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO List</title>
    <link rel="stylesheet" href="./css/style.php">
    <link href="style.php" type="text/css" rel="stylesheet">
</head>

<body>
         <h3><a href="destroy.php">Destroy</a></h3>
    <div class="container">
        <h2>TODO LIST</h2>
        <h3>Add Item</h3>
        <form action="" method="post">
            <p>
                <input id="new-task" name="new_task" type="text">
                <button type="submit">Add</button>
            </p>
        </form>

        <?php
        if (!isset($_SESSION["todo"])) {
            $_SESSION["todo"] = array();
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $task = $_POST["new_task"];

            array_push($_SESSION["todo"], $task);
        };
        ?>

        <h3>Todo</h3>
        <ul id="incomplete-tasks">

            <?php
            foreach ($_SESSION["todo"] as $key => $value) {
                echo "<li>
                        <form action='check.php' method='post'>
                            <input type='checkbox' onclick='form.submit()' value='$key' name='chk'>
                        </form>  
                        <label>$value</label><input type='text'>
                        <a href='edit.php?id=$key'><button class='edit'>Edit</button></a>
                        <a href='remove.php?id=$key'><button class='delete'>Delete</button></a> 
                        </li>";
            };
            ?>

        </ul>

        <h3>Completed</h3>
        <ul id="completed-tasks">
            <?php
            // print_r($_SESSION["complete_todo"]);
            // die();
            foreach($_SESSION["complete_todo"] as $key => $value) {
                echo "<li>
                <form action='uncheck.php' method='post'>
                    <input type='checkbox' onclick='form.submit()' value='$key' name='unchk'>
                </form>  
                <label>$value</label><input type='text'> 
                <a href='delete.php?id=$key'><button class='delete'>Delete</button></a>
                 </li>";
            };
            ?>
        </ul>
    </div>
</body>

</html>