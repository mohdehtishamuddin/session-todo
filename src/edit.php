<?php 
session_start();
ob_start();
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
    <div class="container">
        <h2>TODO LIST</h2>
        <h3>Add Item</h3>
        <form action="" method="post">
            <p>
                <input id="new-task" name="new_task" value="<?php echo $_SESSION['todo'][$_GET['id']] ?>" type="text">
                <button type="submit">update</button>
            </p>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $task = $_POST["new_task"];
            $_SESSION['todo'][$_GET['id']]=$task;
            header("Location:index.php");
        };
        ?>
    </div>  
</body>
</html>