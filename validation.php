<?php
/**
 * Script contain validation functions
 */

/**
 * Main validation function
 */
function validation()
{
    $result = array(
        'result' => true,
        'message' => 'Let\'s draw it!'
    );

    if (!checkType()) {
        $result = array(
            'result' => false,
            'message' => 'Type is invalid!'
        );

        return $result;
    }

//    if (!checkSize()) {
//        $result = array(
//            'result' => false,
//            'message' => 'Size is invalid!'
//        );
//
//        return $result;
//    }
//
//    if (!checkScriber()) {
//        $result = array(
//            'result' => false,
//            'message' => 'Scriber is invalid!'
//        );
//        return $result;
//    }
//
//    if (!checkName()) {
//        $result = array(
//            'result' => false,
//            'message' => 'Name is invalid!'
//        );
//
//        return $result;
//    }

    return $result;
}

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