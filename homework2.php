<!Doctype html>
<html>
    <head>
        <title>Php homework</title>
        <meta charset="UTF-8">
        <style>
            body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
            </style>
    </head>
    <body>

    <!--------------------------1번 문제------------------------------------------------->
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
<br>
<hr>

<!-------------------------------------2번 문제----------------------------------------------->
    <h2>2번 문제</h2>
    <h4>정수 n을 입력하면 n개의 난수가 출력됩니다 (n은 10이상 100이하)</h4>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<input type="number" name="n" min="10" max="100" required>
		<input type="submit" name="submit" value="입력">
	</form>
	<br>
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
<br>
<hr>

<!-----------------------------------------------3번 문제------------------------------------->
    <h2>3번 문제</h2>
    <h4>100 이하의 정수 n을 입력하세요.<br> n개의 피보나치 수열과 n-1항과 n항의 비례를 출력합니다</h4>
    <form method="post">
	    <input type="number" name="n" min="1" max="100" required>
	    <input type="submit" name="submit" value="입력">
    </form>

	<?php
		if(isset($_POST['n'])) {
			$n = $_POST['n'];
			$fibonacci = array(0, 1);

			for($i = 2; $i <= $n; $i++) {
				$fibonacci[$i] = $fibonacci[$i-1] + $fibonacci[$i-2];
			}

			echo "<p>";
			for($i = 0; $i < $n; $i++) {
				echo $fibonacci[$i] . " ";
			}
			echo "</p>";

			if($n > 2) {
				$ratio = $fibonacci[$n] / $fibonacci[$n-1];
				echo ($n-1) . "항과 " . $n . "항의 비례는 " . $ratio . " 입니다." . "<br>";
			}
		}
	?>

<br>
<hr>

<!----------------------------------------------------------------4번 문제------------------------------------------------------------->
    <h2>4번 문제</h2>
    <h3>도형 계산기</h3>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

    <!---------------------삼각형--------------------------->
		<h4>삼각형 면적</h4>
		<label for="tri_base">밑변:</label>
		<input type="text" id="tri_base" name="tri_base"><br><br>
		<label for="tri_height">높이:</label>
		<input type="text" id="tri_height" name="tri_height"><br><br>
        <input type="submit" name="submit" value="계산">

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $tri_base = $_POST["tri_base"];
                $tri_height = $_POST["tri_height"];
                $tri_area = 0.5 * $tri_base * $tri_height;
                echo "삼각형 면적: " . $tri_area . "<br>";
            }
        ?>

 <!-----------------------직사각형--------------------------->
		<h4>직사각형 면적</h4>
		<label for="rect_width">가로:</label>
		<input type="text" id="rect_width" name="rect_width"><br><br>
		<label for="rect_height">세로:</label>
		<input type="text" id="rect_height" name="rect_height"><br><br>
        <input type="submit" name="submit" value="계산">

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $rect_width = $_POST["rect_width"];
                $rect_height = $_POST["rect_height"];
                $rect_area = $rect_width * $rect_height;
                echo "직사각형 면적: " . $rect_area . "<br>";
            }
        ?>

 <!---------------------원--------------------------->
		<h4>원 면적</h4>
		<label for="circle_radius">반지름:</label>
		<input type="text" id="circle_radius" name="circle_radius"><br><br>
        <input type="submit" name="submit" value="계산">

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $circle_radius = $_POST["circle_radius"];
                $circle_area = pi() * $circle_radius * $circle_radius;
                echo "원 면적: " . $circle_area . "<br>";
            }
        ?>

 <!---------------------직육면체--------------------------->
		<h4>직육면체 부피</h4>
		<label for="box_length">길이:</label>
		<input type="text" id="box_length" name="box_length"><br><br>
		<label for="box_width">너비:</label>
		<input type="text" id="box_width" name="box_width"><br><br>
		<label for="box_height">높이:</label>
		<input type="text" id="box_height" name="box_height"><br><br>
        <input type="submit" name="submit" value="계산">

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $box_length = $_POST["box_length"];
                $box_width = $_POST["box_width"];
                $box_height = $_POST["box_height"];
                $box_volume = $box_length * $box_width * $box_height;
                echo "직육면체 부피: " . $box_volume . "<br>";
            }
        ?>

 <!---------------------원통--------------------------->
		<h4>원통 부피</h4>
		<label for="cylinder_radius">반지름:</label>
		<input type="text" id="cylinder_radius" name="cylinder_radius"><br><br>
		<label for="cylinder_height">높이:</label>
		<input type="text" id="cylinder_height" name="cylinder_height"><br><br>
        <input type="submit" name="submit" value="계산">

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $cylinder_radius = $_POST["cylinder_radius"];
                $cylinder_height = $_POST["cylinder_height"];
                $cylinder_volume = pi() * $cylinder_radius * $cylinder_radius * $cylinder_height;
                echo "원통 부피: " . $cylinder_volume . "<br>";
            }
        ?>

 <!---------------------구 부피--------------------------->
		<h4>구 부피</h4>
		<label for="sphere_radius">반지름:</label>
		<input type="text" id="sphere_radius" name="sphere_radius"><br><br>
		<input type="submit" name="submit" value="계산">

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $sphere_radius = $_POST["sphere_radius"];
                $sphere_volume = (4 / 3) * pi() * pow($sphere_radius, 3);
                echo "구 부피: " . $sphere_volume . "<br>";
            }
        ?>

	</form>    
<br>
<hr>

<!------------------------------5번 문제------------------------------------------------->
    <h2>5번 문제</h2>
    <?php
        if(isset($_POST['submit'])) {
            $year = $_POST['year'];
            $month = $_POST['month'];
        } else {
        $year = date('Y');
        $month = date('m');
        }

        $dateObj = new DateTime($year . '-' . $month . '-01');

        $firstDay = $dateObj->format('N');
        $numDays = $dateObj->format('t');
        $lastDay = (new DateTime($year . '-' . $month . '-' . $numDays))->format('N');
    ?>

    <form method="post">
    <label for="year">연도:</label>
    <input type="text" name="year" id="year" value="<?php echo $year; ?>"/><br/>
    <label for="month">월:</label>
    <input type="text" name="month" id="month" value="<?php echo $month; ?>"/><br/>
    <input type="submit" name="submit" value="보기"/><br/><br/>

<!------------------------- 달력 테이블 ------------------------->
    <table>
        <tr><th colspan="7"><?php echo $year; ?>년 <?php echo $month; ?>월</th></tr>
        <tr><th>일</th><th>월</th><th>화</th><th>수</th><th>목</th><th>금</th><th>토</th></tr>
        <tr>
        <?php
        for($i = 1 - $firstDay; $i <= $numDays + (7 - $lastDay); $i++) {
            if($i < 1 || $i > $numDays) {
                echo "<td></td>";
            } else {
                echo "<td>" . $i . "</td>";
            }
            if(($i + $firstDay) % 7 == 0) {
                echo "</tr><tr>";
            }
        }
        ?>
        </tr>
    </table>
</form>

</body>
</html>

