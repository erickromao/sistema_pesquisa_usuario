<?php

if (!isset($_SESSION)) {
    session_start();
}

if ($_SESSION["isADM"]) {
    echo "1";
} else {
    echo "0";
}
