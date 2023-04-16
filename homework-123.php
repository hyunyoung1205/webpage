<!Doctype html>
<html>
    <head>
        <title>Php homework 123</title>
        <meta charset="UTF-8">
        <style>
            body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
            </style>
    </head>
    <body>

     <!-------------------------- 1번 문제------------------------------------------------->
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
    <hr>
	
	<!-------------------------- 2번 문제------------------------------------------------->
    <h2>2번 문제</h2>
    <?php
	    if ($_SERVER["REQUEST_METHOD"] == "POST") {
		    $n = $_POST["n"];
		    $numbers = array();

		    for ($i=1; $i<=$n; $i++) {
			    $number = rand();
			    array_push($numbers, $number);
		    }

		    sort($numbers);

		    echo "생성된" . $n . "개의 난수: ";
		    foreach ($numbers as $number) {
			    echo $number . " ";
		    }
	    }
	?>
    <hr>
    
    <!-------------------------- 3번 문제------------------------------------------------->
    <h2>3번 문제</h2>
    
    <?php
		if(isset($_POST['n'])) {
			$n = $_POST['n'];
			$fibonacci = array(0, 1);
			$ratio = array();

			for($i = 2; $i <= $n; $i++) {
				$fibonacci[$i] = $fibonacci[$i-1] + $fibonacci[$i-2];
			}

			echo "<p>";
			for($i = 0; $i < $n; $i++) {
				echo $fibonacci[$i] . " ";
			}
			echo "</p>";

			for($k = 2; $k < $n; $k++ ) {
				$ratio[$k-2] = $fibonacci[$k] / $fibonacci[$k-1];
				echo $ratio[$k-2] .  "<br>";
			}
		}
	?>

    </body>
</html>
