<?php
/**
 * Created by PhpStorm.
 * User: remos
 * Date: 11.01.2019
 * Time: 15:10
 */

$conflights = mysqli_connect("localhost", "root", "", "puffinair");
//gives back all attractions ordered by provided value
function getAbflugsortMatch($input){
    $alle = [];
    global$conflights;
    $departures = mysqli_query($conflights, "SELECT Abflugsort from flugroute where Abflugsort LIKE '$input%'");
    while ($departure = mysqli_fetch_array($departures)) {
        $alle[] = $departure;
    }
    return $alle;
}