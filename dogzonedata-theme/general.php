<?php 

$sexes = array('m' => 'Male', 'f', 'Female');

function debug_array($array){
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

function dateToSQL($date){
    if ($date == ""){ return ""; }
    return date_format(DateTime::createFromFormat('d/m/Y', $date), 'Y-m-d');
}

function SQLToDate($date){
    if ($date == ""){ return ""; }
    if (preg_match('/^\d{4}-\d{2}-\d{2}$/', $date)){ return date_format(DateTime::createFromFormat('Y-m-d', $date), 'd/m/Y'); }
    else { return date_format(DateTime::createFromFormat('Y-m-d H:i:s', $date), 'd/m/Y'); }
}


?>