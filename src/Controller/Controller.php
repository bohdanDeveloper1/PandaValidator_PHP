<?php

//КЕРУЄ ВСЄЮ ПРОГРАМОЮ 

//use View\View;
//use Model\ProductServise;
include_once("View/View.php");
include_once("Model/ProductServise.php");

//викликаю функцію із View і показую HTML форму користувачу
$show = new Show();
$productServise = new ProductServise();


$show->showCourses();
$productServise->setTechologies();
$productServise->showTechologies();