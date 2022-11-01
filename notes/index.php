<!DOCTYPE html>
<html lang="en">
<head>
	<title>Store</title>
</head>
<body>
	<!-- php를<?php열고, ?>닫기, ;(쎄미콜론)항상쓰기 -->
	
	<?php
		echo "Hello World";
		echo "<div>Hello World</div>";
		echo "<h2>Hello World</h2>";
		echo "<p>Hello World</p>";

		$number = "number";
		$a = 5;
		$bool = true;

		$float = 0.678;

		// .은 여기서 + 랑 같은의미
		echo '<p>'.$number.'</p>';
		echo '<p>'.$number.'</p>';
		echo "This' .$number. 'is equal to 5";
		echo "<p>This is a 'quote'</p>";
		// echo "<p>This is a "quote"</p>"; 이런식으로 안에 더블""쓰면 작동안함

		echo (5-3)*7;

		$firstname = "haelyn";
		$lastname = "kim";
		// $fullname = $firstname.' '.$lastname 아래거랑 같음?;
		$fullname = $firstname.$lastname;


		echo '<br>'.$fullname;

		echo $_GET['name'].'<br>';

		// echo $_POST['name'].'<br>'; 이거 쓸려면 파일하나더 필요해서 안쓸거임 

		echo "My name is {$_GET['name']}! I am 26 years {$_GET["age"]}old".'<br>';
		// ""쓸거면 {}밖에 같이 써줘야됨

		$colors = array("Red","Yellow","Blue");

		echo $colors[0].'<br>';
		echo $colors[1].'<br>';
		echo $colors[2].'<br>';
		print_r($colors);
		// 0은 빨간색,1은 노란색,2는 파란색임
		
		?>



		<!-- <div style="color:<? echo $colors[0];?>">This text has a different color.</div> -->
		<div style="color:<?= $colors[0];?>">This text has a different color.</div>
		<!-- 이 문장은 빨간색으로 표기 -->
		


		<?

		$colorsAssocative = [
			"red" => "#f00",
			"yellow" => "#ff0",
			"blue" => "#00f"
			];

			echo$colorsAssocative['yellow'];
			?>
			<div style="color:<?= $colorsAssocative['blue'];?>">This text has a different color.</div>



		<?
			// casting
			$a =5;
			$c = $a;

			$d = $c*2;

			echo $d;

			echo '<p>This is a paragraph.</p>';
			echo "<p>This is a paragraph.</p>";

			function print_p($v) {
				echo "<pre>",print_r($v),"</pre>";
			}

			print_p($_GET;
			print_p($colors;
			print_p($colorsAssocative;
		?>












</body>
</html>