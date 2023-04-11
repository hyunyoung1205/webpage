<!Doctype html>
<html>
    <head>
        <title>Php homework 1</title>
        <meta charset="UTF-8">
        <style>
            body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
            </style>
    </head>
    <body>

    <!--------------------------php 파일 !!!!!!!!!!!!! 1번 문제------------------------------------------------->
    <h2>1번 문제</h2>
    <?php
        $num = range(1, 30);
        $sum = array_sum($num);
        $product = array_product($num);
        echo "1부터 30까지의 합:<br>";

        for ($n =1; $n <= 30; $n ++) {
            if ($n <= "29" ){
                echo "$n + ";
            } else {
                echo "$n = ";
                }
        }
        echo $sum . "<br>" . "<br>";

        echo "1부터 30까지의 곱:<br>";
        for ($n =1; $n <= 30; $n ++) {
            if ($n <= "29" ){
                echo "$n * ";
            } else {
                echo "$n = ";
                }
        }
        echo $product . "<br>";
    ?>

    </body>
    </html>