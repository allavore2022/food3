<?php

/* model/data-layer.php
 * returns data for my app
 *
 */
class Datalayer {
    /** getMeals() returns an array of meals
     *  @return array
     */
    function getMeals()
    {
        return array("breakfast", "2nd breakfast", "lunch", "dinner");
    }

    /** getCondiments() returns an array of condiments
     *  @return array
     */
    function getCondiments()
    {
        return array("ketchup", "mustard", "kim chi", "sriracha", "mayo");
    }
}
