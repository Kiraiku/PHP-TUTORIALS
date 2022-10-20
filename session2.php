<?php
session_start();
echo $_SESSION["name"];
echo "<hr>";
echo $_SESSION["age"];
echo "<hr>";
echo $_SESSION["weight"];

// remove allsession created. simply logout
session_destroy();
session_start();