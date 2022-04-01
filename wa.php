<?php

if ($_POST['submit']) {
    $mob = $_POST['mobileno'];
    $web_add = 'https://api.whatsapp.com/send/?phone=%2B91'.$mob.'&text&app_absent=0';
    header('Location: '.$web_add);
} else {
    echo "Error";
}
