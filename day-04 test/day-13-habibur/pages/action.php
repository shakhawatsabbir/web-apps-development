<?php

require_once "../vendor/autoload.php";
use App\classes\series;

if(isset($_POST['btn']))
{
    $series = new series($_POST);
    $result = $series->makeSeries();
    include 'index.php';

}
else{
    header('Location: index.php');
}