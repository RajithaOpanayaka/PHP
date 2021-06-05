<?php

class CalorieTracker{
    private $maxCalories;
    private $calories=0;
    public function __construct($maxCalories)
    {
        $this->maxCalories+=$maxCalories;
    }
    //two responsibilities track and show
    public function trackCalories($calories){
        $this->calories+=$calories;
        if($this->calories>$this->maxCalories){
            $this->showCalorieSurplus();
        }
    }
    public function showCalorieSurplus(){
        echo "Max calories exceeded.\n";
    }
}

?>