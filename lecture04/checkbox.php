<?php
$colors = $_POST["color"];

if (isset($_POST["color"])) {
    echo "你選擇的顏色為：<br>";
    foreach ($colors as $color) {
        echo $color . "<br>";
    }
} else {
    echo "<script>
            alert('請勾選至少一種顏色');
            window.location = 'checkbox.html';
        </script>";
}
