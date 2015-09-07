<?php
/**
 * Script contain validation functions
 */

/**
 * Main validation function
 */
function validation()
{
    $success = array(
        'result' => true,
        'message' => 'Let\'s draw it!'
    );

    $errors = array();

    if (!checkType()) {
        $errors['type'] = array(
            'result' => false,
            'message' => 'Type is invalid!'
        );
    }

    if (!checkSize()) {
        $errors['size'] = array(
            'result' => false,
            'message' => 'Size is invalid!'
        );
    }

    if (!checkScriber()) {
        $result = array(
            'result' => false,
            'message' => 'Scriber is invalid!'
        );
        return $result;
    }

    if (!checkName()) {
        $result = array(
            'result' => false,
            'message' => 'Name is invalid!'
        );

        return $result;
    }

    if (0 == count($errors)) {
        $result['success'] = $success;
    } else {
        $result['errors'] = $errors;
    }

    return $result;
}
//TODO: Implement multiple figures

//    if (!isMulti()) {
//
//    }
//}

function checkType()
{
    $result = false;

    if (isset($_POST['type']) && !empty($_POST['type'])) {
        return true;
    }

    return $result;
}

function checkSize()
{
    $result = false;
    $maxSize = 20;
    if (isset($_POST['size']) && !empty($_POST['size'])) {
        $size = $_POST['size'];
        if ($maxSize > $size) {
            return true;
        }
    }

    return $result;
}

function checkScriber()
{
    $result = false;
    if (isset($_POST['scriber']) && !empty($_POST['scriber'])) {
        $scriber = $_POST['scriber'];
        if (preg_match('/\W/', $scriber)) {
            return true;
        }
    }

    return $result;
}

function checkName()
{
    $result = false;
    if (isset($_POST['name']) && !empty($_POST['name'])) {
        $name = $_POST['name'];
        if (preg_match('/\w+/', $name)) {
            return true;
        }
    }

    return $result;
}