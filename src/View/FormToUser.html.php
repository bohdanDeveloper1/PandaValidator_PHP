<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Shop</title>
<meta charset="utf-8" />
</head>
<body>
      
<h3>Choose course that u would like to learn</h3>
<!-- не пишемо action -->
<form  method= "post">
    <!--    name задає ключ елемента до масиву $_POST["technologies"], value значення елемента  -->
    <p>ASP.NET: <input type="checkbox" name="courses[1400]" value = "ASP.NET"/></p> 
    <p>PHP: <input type="checkbox" name="courses[2000]" value="PHP" /></p>
    <p>Node.js: <input type="checkbox" name="courses[2500]" value = "Node.js" /></p>
    <!-- onclick() -метод php -->
    <input type="Submit" value="Send">
    <input type="submit" value = "Check my basket">
</form>
</body>
</html>