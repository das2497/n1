<?php

session_start();

if (isset($_SESSION["AL_SA"])) {

    $_SESSION["AL_SA"] = null;
    session_destroy();
    echo "success";
} elseif (isset($_SESSION["AL_AD"])) {

    $_SESSION["AL_AD"] = null;
    session_destroy();
    echo "success";
} elseif (isset($_SESSION["AL_ST"])) {
    $_SESSION["AL_ST"] = null;
    session_destroy();
    echo "success";
}
