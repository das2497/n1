<?php

require 'connection.php';

if (empty($_POST['std_first_name'])) {
    echo "Please don't leave empty first name field";
} elseif (empty($_POST['std_last_name'])) {
    echo "Please don't leave empty lasn name field";
} elseif (empty($_POST['std_email'])) {
    echo "Please don't leave empty email field";
} elseif (empty($_POST['std_contact'])) {
    echo "Please don't leave empty contact field";
} elseif (empty($_POST['std_password'])) {
    echo "Please don't leave empty password field";
} else {

    $today = date("Y-m-d");

    Database::iud("INSERT INTO student (std_first_name,std_last_name,std_email,std_contact,std_password,std_reg_date) 
                    VALUES ('" . $_POST['std_first_name'] . "','" . $_POST['std_last_name'] . "','" . $_POST['std_email'] . "','" . $_POST['std_contact'] . "','" . $_POST['std_password'] . "','" . $today . "');");
    echo "success";
}
