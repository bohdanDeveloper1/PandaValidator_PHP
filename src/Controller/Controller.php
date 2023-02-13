<?php

session_start();
include_once 'View/Form.html.php';
include_once 'Model/PandaValidator.php';
include_once 'Model/UploadPng.php';

$pandavalidator = new PandaValidator();
//тут питання чи загрузить фото у файл images.png, можливо треба робити include або змінювати путь
$uploadPng = new UploadPng('uploaded_images/');

$pandavalidator->checktext();
$pandavalidator->checkGrade();
$pandavalidator->checkErrors();

$uploadPng->setFile();
//$uploadPng->validateFile(); тут помилка зв'язана з типом файлу
//$uploadPng->upload();
$uploadPng->getErrors();




