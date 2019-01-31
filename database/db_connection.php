<?php
/**
 * Created by PhpStorm.
 * User: remos
 * Date: 11.01.2019
 * Time: 15:10
 */

$conflights = mysqli_connect("aeschlic.mysql.db.internal", "aeschlic_Skulj", "m226.2019!", "aeschlic_Skulj");

//gives back all attractions ordered by provided value
function getAbflugsorte(){
    $alle = [];
    global $conflights;
    $departures = mysqli_query($conflights, "SELECT DISTINCT Abflugsort from flugroute");
    while ($departure = mysqli_fetch_row($departures)) {
        $alle[] = $departure[0];
    }
    return $alle;
}

function getAnkunftsorte(){
    $alle = [];
    global $conflights;
    $arrivals = mysqli_query($conflights, "SELECT DISTINCT Ankunftsort from flugroute");
    while ($arrival = mysqli_fetch_row($arrivals)) {
        $alle[] = $arrival[0];
    }
    return $alle;
}

function getAbflugnummer ($abflugsort, $ankunftsort){
 $alle = [];
    global $conflights;
    $flights = mysqli_query($conflights, "SELECT Flugnummer FROM flugroute WHERE Ankunftsort = '$ankunftsort' AND Abflugsort = '$abflugsort';");
    while ($flight = mysqli_fetch_array($flights)) {
        $alle[] = $flight;
    }
    return $alle;
}

function getAnkunftnummer ($ankunftsort1, $abflugsort1){
    $alle = [];
    global $conflights;
    $flights1 = mysqli_query($conflights, "SELECT Flugnummer FROM flugroute WHERE Abflugsort = '$abflugsort1' AND Ankunftsort = '$ankunftsort1';");
    while ($flight1 = mysqli_fetch_array($flights1)) {
        $alle[] = $flight1;
    }
    return $alle;
}

function getFlugzeugtyp ($abflugsort, $ankunftsort){

    $alle = [];
    global $conflights;
    $flights = mysqli_query($conflights, "SELECT Flugzeugtyp FROM flugroute WHERE Ankunftsort = '$ankunftsort' AND Abflugsort = '$abflugsort';");
    while ($flight = mysqli_fetch_array($flights)) {
        $alle[] = $flight;
    }
    return $alle;
}

function getFlugzeugtyp1 ($ankunftsort1, $abflugsort1){

    $alle = [];
    global $conflights;
    $flights1 = mysqli_query($conflights, "SELECT Flugzeugtyp FROM flugroute WHERE Abflugsort = '$abflugsort1' AND Ankunftsort = '$ankunftsort1';");
    while ($flight1 = mysqli_fetch_array($flights1)) {
        $alle[] = $flight1;
    }
    return $alle;
}

function getPreis($abflugsort, $ankunftsort){

    $alle = [];
    global $conflights;
    $prices = mysqli_query($conflights, "SELECT Preis FROM flugroute WHERE Abflugsort = '$abflugsort' AND Ankunftsort = '$ankunftsort';");
    while ($price = mysqli_fetch_array($prices)) {
        $alle[] = $price;
    }
    return $alle;
}

function getPreis2($ankunftsort1, $abflugsort1){

    $alle = [];
    global $conflights;
    $prices1 = mysqli_query($conflights, "SELECT Abflugszeit FROM flugroute WHERE Ankunftsort = '$ankunftsort1' AND Abflugsort = '$abflugsort1';");
    while ($price1 = mysqli_fetch_array($prices1)) {
        $alle[] = $price1;
    }
    return $alle;
}

function getAbflugszeit($abflugsort, $ankunftsort){

    $alle = [];
    global $conflights;
    $times = mysqli_query($conflights, "SELECT Abflugszeit FROM flugroute WHERE Abflugsort = '$abflugsort' AND Ankunftsort = '$ankunftsort';");
    while ($time = mysqli_fetch_array($times)) {
        $alle[] = $time;
    }
    return $alle;
}

function getAbflugszeit1 ($ankunftsort1, $abflugsort1){
    $alle = [];
    global $conflights;
    $times1 = mysqli_query($conflights, "SELECT Abflugszeit FROM flugroute WHERE Ankunftsort = '$ankunftsort1' AND Abflugsort = '$abflugsort1';");
    while ($time1 = mysqli_fetch_array($times1)) {
        $alle[] = $time1;
    }
    return $alle;
}