<?php

function validate_not_empty($field_input, &$field) {
    if ($field_input === '') {
        $field['error'] = 'Laukas negali b?ti tuš?ias!';
        return false;
    } else {
        return true;
    }
}

function validate_is_number($field_input, &$field) {
    if (!is_numeric($field_input)) {
        $field['error'] = 'Turi b?ti užrašytas skai?ius!';
        return false;
    } else {
        return true;
    }
}

function validate_is_positive($field_input, &$field) {
    if ($field_input < 0) {
        $field['error'] = 'Privalo b?ti teigiamas skai?ius!';
        return false;
    } else {
        return true;
    }
}

function validate_max_120($field_input, &$field) {
    if ($field_input > 120) {
        $field['error'] = 'Skai?ius turi b?ti mažesnis, negu 120!';
        return false;
    } else {
        return true;
    }
}

function validate_is_string($field_input, &$field) {
    if (!is_string($field_input)) {
        $field['error'] = 'Užrašykite raides!';
        return false;
    }

    return true;
}

function validate_is_email($field_input, &$field) {
    if (!filter_var($field_input, FILTER_VALIDATE_EMAIL)) {
        $field['error'] = 'Neteisingas emailo formatas!';
        return false;
    } else {
        return true;
    }
}

function validate_password($field_input, &$field) {
    if (strlen($field_input) < 8) {
        $field['error'] = 'Lauke negali b?ti mažiau, nei 8 simboliai!';
        return false;
    } else {
        return true;
    }
}

function validate_fields_match($filtered_input, &$form, $params) {
    if (!empty($field_input)) {
        $form['fields']['password'] == $form['fields']['password_repeat'];
        return true;
    } else {
        $field['error'] = '?veskite password iš naujo!';
        return false;
    }
}
