<?php 
class Task{

	public $description;
	public $completed = false;

		function __construct($description)
		{
			$this->description = $description;
		}

		public function complete(){
			$this->completed = true;
			 return $this;
		}
	}
 $task = new Task('Learn OOP');
   $T  = $task->description;
    $ct = $task->complete();
     print_r($ct);
      print_r('<h1>'.$T.'<h1>');
        

?>