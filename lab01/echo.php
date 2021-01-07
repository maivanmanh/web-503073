<?php
    echo "Số biến có trong GET: " . count($_GET) . "<br>";
    echo "<ul>";
    foreach ($_GET as $key => $value) {
        echo "<li>$key: ";
        if (is_array($_GET[$key])) {
            print_r($_GET[$key]);
        }else {
            echo $_GET[$key];
        }
        echo "</li>";
    }
    echo "</ul>";

    echo "<br><br>Số biến có trong POST: " . count($_POST) . "<br>";
    echo "<ul>";
    foreach ($_POST as $key => $value) {
        echo "<li>$key: ";
        if (is_array($_POST[$key])) {
            print_r($_POST[$key]);
        }else {
            echo $_POST[$key];
        }
        echo "</li>";
    }
    echo "</ul>";
?>