<?php

class ChoiceFormField extends  FormField
{
    protected $html;
    protected $errors;

    public function getHtml(): string
    {
        $html = '<div class="form-field">';
        $html .= '<label for="' . $this->data['id'] . '">' . $this->label . '</label>';
        $html .= '<input type="text" id="' . $this->data['id'] . '" name="' . $this->data['name'] . '" value="' . $this->value . '">';
        $html .= '</div>';
        return $html;
    }

    public function validate(): bool
    {
        if (empty($this->value)) {
            $this->errors[] = 'This field is required';
        }
        return count($this->errors) === 0;
    }
}