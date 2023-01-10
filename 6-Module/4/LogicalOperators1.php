<?php
/*
AND - Both
OR - neko mora biti tacno
&& - both mora da bude tacno
|| - neko mora biti tacno
! - if not...
*/
$name = "Nemanja";
$permisija = (true);
$loggedin = (true);
echo ($permisija && $loggedin) ? "Hello, $name!" : "Hello, guest!";