<?php
class Task {
    public $nameTask;
    public $descriptionTask;
    public $taskDone = false;
    
    
    public function __construct($nameTask, $descriptionTask) {
        $this->nameTask = $nameTask;
        $this->descriptionTask = $descriptionTask;
        $this->taskDone;

    }
    
    public function __destruct(){
    }
    

    public function setNameTask($nameTask){
        $this->nameTask = is_string($nameTask)?$nameTask:"Brak nazwy";
    }
    
    public function setDescriptionTask($descriptionTask){
        $this->descriptionTask = is_string($descriptionTask)?$descriptionTask:"Brak wartosci";
    }
    

    public function getNameTask(){
        return $this->nameTask;
    }
    
    public function getDescriptionTask(){
        return $this->descriptionTask;
    }
    
    public function getTaskDone(){
        return $this->taskDone;
    }


    public function finishTask(){
        $this->taskDone = true;
    }
    
    
    public function displayTask(){
        if($this->taskDone == true){
        echo "<strike>Nazwa: $this->nameTask</strike>";
        echo "<br>";
        echo "<strike>Opis: $this->descriptionTask</strike>";
        echo "<br>";
        echo "<br>";
            } else {
        echo "Nazwa: ".$this->nameTask;
        echo "<br>";
        echo "Opis: ".$this->descriptionTask;
        echo "<br>";
        echo "<br>";
        }
    }
}
