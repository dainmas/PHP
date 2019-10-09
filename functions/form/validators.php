<?php

function validate_not_empty($field_input, &$field) {
    if ($field_input === '') {
        $field['error'] = 'Laukas negali būti tuščias!';
        return false;
    } else {
        return true;
    }
}

function validate_is_number($field_input, &$field) {
    if (!is_numeric($field_input)) {
        $field['error'] = 'Turi būti įrašytas skaičius!';
        return false;
    } else {
        return true;
    }
}

function validate_is_positive($field_input, &$field) {
    if ($field_input < 0) {
        $field['error'] = 'Privalo būti teigiamas skaičius!';
        return false;
    } else {
        return true;
    }
}

function validate_max_120($field_input, &$field) {
    if ($field_input > 120) {
        $field['error'] = 'Skaičius turi būti mažesnis, negu 120!';
        return false;
    } else {
        return true;
    }
}

function validate_is_string($field_input, &$field) {
    if (!is_string($field_input)) {
        $field['error'] = 'Įrašykite raides!';
        return false;
    } else {
        return true;
    }
}

function validate_is_email($field_input, &$field) {
    if (!filter_var($field_input, FILTER_VALIDATE_EMAIL)) {
        $field['error'] = 'Neteisingas emailo formatas!';
        return false;
    } else {
        return true;
    }
}
