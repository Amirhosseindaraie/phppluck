<?php
 
$peoples = array(
    array("name" => "jeffrey", "age" => 28),
    array("name" => "john", "age" => 20)
);
// the common way
function array_pluck($toPluck, $arr) {
    $ret = array();
    foreach($arr as $item) {
        $ret[] = $item[$toPluck];
    }
    return $ret;
}
// the fabulous way
function array_pluck ($toPluck, $arr) {
    return array_map(function ($item) use ($toPluck) {
        return $item[$toPluck];
    }, $arr); 
}
 
print_r(array_pluck("name", $peoples)); // array("jeffrey", "john")
