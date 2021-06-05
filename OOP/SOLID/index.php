<?php

require_once "CalorieTracker.php";

$calorieTracker=new CalorieTracker(2000);
$calorieTracker->trackCalories(500);
$calorieTracker->trackCalories(1000);
$calorieTracker->trackCalories(700);
?>