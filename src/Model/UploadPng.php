<?php

class UploadPng
{
    //перевірити чи файл підходить по типу і розміру, загрузити файл в окрему папку
    protected $errors = [];
    protected $uploadDirectory;

    public function __construct(string $uploadDirectory) {
        $this->uploadDirectory = $uploadDirectory;
    }

    public function setFile() : void {
        if(!empty($_FILES['image'])){
            $this->validateFile();
            $this->upload();
        }else{
            $this->errors[] = 'you must send a file';
            echo 'trouble with installing file' . '</br>';
        }
    }

    // Валідація типу та розміру файлу
    public function validateFile() : bool {
         //Валідуємо тип файлу
//        $allowedTypes = ['image/jpg', 'image/jpeg', 'image/jpeg', 'image/png'];
//        if (!in_array($this->file['type'], $allowedTypes)) {
//            $this->errors[] = 'Invalid file type. Allowed type is png and jpeg';
//        }

        // Валідуємо розмір файлу
        $maxSize = 5 * 1024 * 1024; // 10 MB
        if ($_FILES['image']['size'] > $maxSize) {
            $this->errors[] = 'File is too large. Max allowed size: 5 MB';
            return false;
        }
        //перевірка чи масив помилок порожній, повертаємо bool
        return true;
    }

    // Завантаження файлу в папку
    public function upload() : bool {
        if (!$this->validateFile()) {
            echo "upload = false";
            return false;
        }
        //місце розташування файлу
        $destination = $this->uploadDirectory . '/' . $_FILES['image']['name'];

        //перенесення файлу в папку
//        if (move_uploaded_file($_FILES['image']['tmp_name'], $destination)) {
//            echo "File was installed" . '</br>';
//        } else {
//            echo "Problem with path" . '</br>';
//        }
        if (is_uploaded_file($_FILES['image']['tmp_name'])) {
            // Завантаження файлу в вказану папку
           //move_uploaded_file($_FILES['image']['tmp_name'], './uploaded_images/' . $_FILES['image']['name']);
            echo 'file uploaded';
           // move_uploaded_file($_FILES['image']['tmp_name'], $this->uploadDirectory . $_FILES['image']['name']);
            echo "File was installed" . '</br>';
        }else {
            echo "Problem with path" . '</br>';
        }

        return true;
    }

    // Отримання помилок валідації
    public function getErrors() {
        foreach ($this->errors as $error) {
            echo $error . '</br>';
        }
    }


}





























