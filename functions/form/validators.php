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
        $field['error'] = 'Lauke negali būti mažiau, nei 8 simboliai!';
        return false;
    } else {
        return true;
    }
}

function validate_team($field_input, &$field) {
    //masyva is duonbazes gaunam:
    $teams = file_to_array('data/teams.txt');
   

    if (!empty($teams)) {
        foreach ($teams as $value) {
            if (strtoupper($value['team']) == strtoupper($field_input)) {
                $field['error'] = 'Tokia komanda jau egzistuoja';
                return false;
            }
        }
    }
    return true;
}

function validate_player($field_input, &$field) {
    //komandų masyva is duonbazes gaunam:
    $teams = file_to_array('data/teams.txt');
  
    if (!empty($teams)) {
        foreach ($teams as $team) {
            foreach ($team['players'] as $player) {
             
                if (strtoupper($player) == strtoupper($field_input)) {
                    $field['error'] = 'Toks žaidėjas jau egzistuoja';
                    return false;
                }
            }
        }
    }
    return true;
}
