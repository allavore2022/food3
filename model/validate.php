<?php
    /* model/validate.php
       *Contains validation functions for food app
    */

// validFood() returns true if food is not empty and contains only letters
function validFood($food){
//    $validFoods = array("tacos", "eggs", "pizza");
    $food = trim($food);
//    if(!empty($food) && ctype_alpha($food)){
//        return true;
//    } else {
//        return false;
//    }
    return !empty(trim($food) && ctype_alpha($food));
}