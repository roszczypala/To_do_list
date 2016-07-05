<?php
require_once 'Task.php';
require_once 'index.php';

if(isset($_GET['taskId'])){
    foreach($_SESSION['task'] as $zadania){
       foreach($zadania as $zadan){
            if($zadan == $_GET['taskId']){
            $zadania->finishTask();
        }
    }
}
}
var_dump($_SESSION['tasks']);

header('Location: index.php');
