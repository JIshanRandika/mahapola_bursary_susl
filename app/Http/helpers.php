<?php


function checkPermission($permissions){
    $userAccess = getMyPermission(auth()->user()->is_permission);
    foreach ($permissions as $key => $value) {
        if($value == $userAccess){
            return true;
        }
    }
    return false;
}


function getMyPermission($id)
{
    switch ($id) {
        case 1:
            return 'vice_chancellor';
            break;
        case 2:
            return 'registrar';
            break;
        case 31:
            return 'graduate_studies_assistant_registrar';
            break;
        case 32:
            return 'agriculture_science_assistant_registrar';
            break;
        case 33:
            return 'applied_sciences_assistant_registrar';
            break;
        case 34:
            return 'geomatics_assistant_registrar';
            break;
        case 35:
            return 'management_studies_assistant_registrar';
            break;
        case 36:
            return 'medicine_assistant_registrar';
            break;
        case 37:
            return 'social_sciences_assistant_registrar';
            break;
        case 38:
            return 'technology_assistant_registrar';
            break;
        case 4:
            return 'student_affairs_division_clerk';
            break;
        case 5:
            return 'finance_division_clerk';
            break;
        default:
            return 'student';
            break;
    }
}


?>
