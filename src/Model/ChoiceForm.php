<?php

abstract class FormField
{
    // Ім'я поля форми (name)
    protected $label;
    // Значення поля форми
    protected $value;
    // Масив з помилками валідації - не робитиму
    protected $errors = [];
    // Дані з форми
    protected $data = [];
    // Повертає HTML код поля форми
    public abstract function getHtml(): string;
    //перевірка
  public abstract function validate(): bool;
    // Встановлює дані форми
    public function setData(array $data) : void
  {
      $this->data = $data;
      $this->value = $data[$this->label] ?? null;
  }
    //перевірка чи дані пройшли валідацію, чи масив з помилками порожній
    public function isValid(): bool
    {
        return empty($this->errors);
    }
    //  Повертає масив з помилками валідації
    public function getErrors(): array
    {
        return $this->errors;
    }
    // Встановлює ім'я поля форми
    public function setLabel(string $label): string
    {
        return $this->label = $label;
    }
    // Повертає значення поля форми
    public function getValue() : string|array
    {
      return $this->value;
    }

}

