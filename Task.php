<?php
/**
 * Created by Ken.
 * User: Ken
 * Date: 2017/2/23
 * Time: 0:40
 */
class Task{
    public $description;
    public $completed = false;
    public function __construct($description)
    {
        $this->description = $description;
    }

    public function complete()
    {
        $this->completed = true;
    }
}

$task = new Task('123');
$task->complete();
var_dump($task->completed);
