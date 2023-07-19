<?php

require 'connection.php';
    Database::iud("DELETE student WHERE std_id='" . $_POST['std_id'] . "';");
    echo "success";