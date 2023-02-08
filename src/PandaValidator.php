<?php

class PandaValidator
{
    protected  $validtext = 'panda';
    protected $grade = '3';
    protected $errors = [];
    protected $file;

    public function checktext() : void
    {
        if(isset($_POST['panda'])) {
           if($_POST['panda'] !== $this->validtext) {
               $this->errors[] = 'Your text isn`t valid';
           }
        }
    }

    public  function checkGrade() : void
    {
        if(isset($_POST['grade'])) {
            if($_POST['grade'] !== $this->grade) {
                $this->errors[] = 'Your grade isn`t valid';
            }
        }
    }

    public function checkErrors()
    {
        foreach ($this->errors as $error) {
            echo $error  . '</br>';
        }
    }

    public function setFile()
    {
        if(isset($_POST['image'])){
            $this->file = $_POST['image'];
        }
    }

    public function checkFile()
    {
        if (empty($this->file)) {
            $this->errors[] = 'You must send a file';
        }
    }
}

