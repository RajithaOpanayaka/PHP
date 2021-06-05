<?php
require_once "ShowMessage.php";
class CalorieTracker{
    private $maxCalories;
    private $calories=0;
    public function __construct($maxCalories)
    {
        $this->maxCalories+=$maxCalories;
    }
    //one responsibilities track 
    public function trackCalories($calories){
        $this->calories+=$calories;
        if($this->calories>$this->maxCalories){
            ShowMessage::show("Max calories exceeded");
        }
    }
}

?>