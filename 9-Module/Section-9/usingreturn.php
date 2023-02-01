<?php
function NumAdd ($a, $b){
    $res = $a + $b;
    return $res;
}

echo NumAdd(10, 230) . PHP_EOL;
function CheckRoles($role){
    if (is_null($role)){
        echo "You have no roles!\n";
        return;
    }
    switch ($role){
        case "admin": echo "Hello admin!\n";
        break;
        case "user": echo "Hello user!\n";
        break;
        default: break;
    }
}

echo CheckRoles("admin");