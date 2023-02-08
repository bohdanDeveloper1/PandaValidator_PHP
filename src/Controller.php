<?php

include_once 'Form.html';
include_once 'PandaValidator.php';

$pandavalidator = new PandaValidator();
$pandavalidator->checktext();
$pandavalidator->checkGrade();
$pandavalidator->setFile();
$pandavalidator->checkFile();
$pandavalidator->checkErrors();


