<!Doctype html>
<html>
    <head>
        <title>Php homework 45</title>
        <meta charset="UTF-8">
        <style>
            body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
            </style>
    </head>
    <body>

    <h2>4번 문제</h2>
    <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $tri_base = $_POST["tri_base"];
                $tri_height = $_POST["tri_height"];
                $tri_area = 0.5 * $tri_base * $tri_height;
                echo "삼각형 면적: " . $tri_area . "<br>";
            }
    ?>

    <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $rect_width = $_POST["rect_width"];
                $rect_height = $_POST["rect_height"];
                $rect_area = $rect_width * $rect_height;
                echo "직사각형 면적: " . $rect_area . "<br>";
            }
    ?>

    <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $circle_radius = $_POST["circle_radius"];
                $circle_area = pi() * $circle_radius * $circle_radius;
                echo "원 면적: " . $circle_area . "<br>";
            }
    ?>

    <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $box_length = $_POST["box_length"];
                $box_width = $_POST["box_width"];
                $box_height = $_POST["box_height"];
                $box_volume = $box_length * $box_width * $box_height;
                echo "직육면체 부피: " . $box_volume . "<br>";
            }
    ?>

    <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $cylinder_radius = $_POST["cylinder_radius"];
                $cylinder_height = $_POST["cylinder_height"];
                $cylinder_volume = pi() * $cylinder_radius * $cylinder_radius * $cylinder_height;
                echo "원통 부피: " . $cylinder_volume . "<br>";
            }
    ?>

    <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $sphere_radius = $_POST["sphere_radius"];
                $sphere_volume = (4 / 3) * pi() * pow($sphere_radius, 3);
                echo "구 부피: " . $sphere_volume . "<br>";
            }
    ?>

    <hr>
    <br>
    

    </body>
</html>
