<?php


//ОТРИМУЄ ТА ОБРОБЛЯЄ ДАНІ (ЯКІ КОРИСТУВАЧ ВВІВ У View І ЯКІ ПОТІМ БУЛИ ПЕРЕДАНІ В CONTROLLER)

class ProductServise
{
  //  public $technologies;
   public  function setTechologies()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['courses'])) {
                $_SESSION["courses"] = $_POST['courses'];
            }
        }
    }


   public function showTechologies()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST["courses"])) {
                //рахуємо вартість всіх обраних курсів та виводимо курси, які обрав користувач
                $pay = 0;
                foreach ($_POST["courses"] as $key =>$value) {
                    echo "U choose $value that cost $key" . " </br>";
                    $pay += $key;
                }
                echo "U shood pay $pay" . "</br>";
            } else{
                echo "choose at list 1 course";
            }
        }

    }

}

