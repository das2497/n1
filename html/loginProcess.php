<?php
session_start();
require 'connection.php';

if (empty($_POST["uname"])) {
    echo "Please enter Username";
} elseif (empty($_POST["pass"])) {
    echo "Please enter Password";
} else {

    $rs_1 = Database::search("SELECT * FROM admin
    INNER JOIN admin_type ON admin.ad_type=admin_type.adt_id
    WHERE admin.ad_uname='" . $_POST["uname"] . "' AND admin.ad_password='" . $_POST["pass"] . "';");

    $rs_2 = Database::search("SELECT * FROM student WHERE std_email='" . $_POST["uname"] . "' AND std_password='" . $_POST["pass"] . "';");


    if ($rs_1->num_rows > 0) {

        $d = $rs_1->fetch_assoc();

        if ($d["ad_type"] == "1") {
            $_SESSION["AL_SA"] = $d;
            echo "Success";
        } elseif ($d["ad_type"] == "2") {
            $_SESSION["AL_AD"] = $d;
            echo "Success";
        }
    }elseif ($rs_2->num_rows > 0) {
        $_SESSION["AL_ST"] =$rs_2->fetch_assoc();
        echo "Success";
    } else {
        echo "Invalid Username Or Password ";
    }
}
