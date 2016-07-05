<?php
require_once 'Task.php';
session_start();

if(!isset($_SESSION['task'])){
    $_SESSION['task'] = [];
}

if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['taskName']) && isset($_POST['taskDescript'])){
        $_SESSION['task'][] = new Task($_POST['taskName'], $_POST['taskDescript']);
    }
}

foreach ($_SESSION['task'] as $zadania){
    $zadania->displayTask();
    ?>
    <form action="done.php" method="GET">
    <input type="hidden" name="taskId" value="<?= $zadania->nameTask ?>"/>
    <button type="submit">Finish</button>
    </form>
<?php
}
?>


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="Form.php" method="POST">
            <button type="submit">Przejdz do strony zadania</button>
        </form>
    </body>
</html>
