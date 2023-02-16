<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Geekseat</title>
</head>
<body>
    <form action="" method="post">
        <div>
            Person A
        </div>
        <div>
            Age of death
            <input type="text" name="personAaod" id="">
            Year of death
            <input type="text" name="personAyod" id="">
        </div>
        <div>
            Person B
        </div>
        <div>
            Age of death
            <input type="text" name="personBaod" id="">
            Year of death
            <input type="text" name="personByod" id=""> 
        </div>
        <div>
            <input type="submit" value="submit" name="submit">
        </div>
    </form>
</body>
</html>
<?php
include "function.php";
$personAaod = isset($_POST['personAaod']) ? $_POST['personAaod'] : '';
$personAyod = isset($_POST['personAyod']) ? $_POST['personAyod'] : '';;
$personBaod = isset($_POST['personBaod']) ? $_POST['personBaod'] : '';;
$personByod = isset($_POST['personByod']) ? $_POST['personByod'] : '';;
if(isset($_POST['submit'])){
    $perhitunganA = new Perhitungan($personAaod,$personAyod);
    $perhitunganB = new Perhitungan($personBaod,$personByod);
    echo "Person A Born on Year = ".$personAyod." - ".$personAaod." = ".$perhitunganA->perhitunganBornOnYear().", number of people killed on year ".$perhitunganA->perhitunganBornOnYear()." is ".$perhitunganA->perhitunganVillager()."</br>";
    echo "Person B Born on Year = ".$personByod." - ".$personBaod." = ".$perhitunganB->perhitunganBornOnYear().", number of people killed on year ".$perhitunganB->perhitunganBornOnYear()." is ".$perhitunganB->perhitunganVillager()."</br>";
    echo "So the average is ".$perhitunganA->average($perhitunganA->perhitunganVillager(),$perhitunganB->perhitunganVillager(),2)."</br>";
}
?>