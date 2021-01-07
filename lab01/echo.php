<?php
    echo "Số biến có trong GET: " . count($_GET) . "<br>";
    echo "<ul>";
    foreach ($_GET as $key => $value) {
        echo "<li>$key: " . $_GET[$key] . "</li>";
    }
    echo "</ul>";

    echo "<br><br>Số biến có trong POST: " . count($_POST) . "<br>";
    echo "<ul>";
    foreach ($_POST as $key => $value) {
        echo "<li>$key: " . $_POST[$key] . "</li>";
    }
    echo "</ul>";
?>