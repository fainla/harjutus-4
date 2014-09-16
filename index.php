<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
	<h2>Arvutamine murd- ja täisarvudega</h2>
	<?php echo $float = 3.14; ?><br>
	<?php $variable = "7";
			$integer ="3";
		echo $float + 7;?><br>
	<?php echo 4/3;?>


	<h2> Murdarvude ümardamine</h2>
	<?php 
	echo (round($float, 1) . "<br>");
	echo (ceil ($float) . "<br>");
	echo (floor($float) . "<br>");
	?>

	<h2>Andmetüübi funktsioonid</h2>

<?php echo "Kas {$integer} on integer? " . is_int($integer) . "<br>"; 
	  echo "Kas {$float} on integer?" . is_int($float) . "<br>" . "<br>";
	  echo "Kas {$variable} on integer?" . is_numeric($variable) . "<br>";
	  echo "Kas {$variable} on float?" . is_float($variable) . "<br>";
	  echo "Kas {$variable} on number?" . is_numeric($variable) . "<br>";
	  echo "Kas {$float} on number?" . is_numeric($float) . "<br>";
	  echo "Kas {$float} on float?" . is_float($float) . "<br>";
	  echo "Kas {$float} on integer?" . is_numeric($float) . "<br>";
?><br>

<h2>Jadad (array)</h2>

<?php 
	$numbers = array(4, 8, 15, 16, 23, 42);
	$mixed = array(6, "rebane", "koer", 5.5, array("x", "y", "z"));
	echo $numbers [0] . "<br>";
	echo $numbers [1] . "<br>";
	echo $numbers [2] . "<br>";
	echo $numbers [3] . "<br>";
	echo $numbers [4] . "<br>";
	echo $numbers [5] . "<br>";
?>
<?php
	echo $mixed [4][1] . "<br>";
?>
<?php 
	$mixed[2] = "kass"; 
	$mixed[5] ="kass";
	$mixed[] = "hobune";
	
?>
<pre><?php echo print_r($mixed); ?></pre>

<h2>Associative arrays</h2>
<?php 
	$assoc = array("first_name" => "Frank", "last_name" => "Ainla", "e_mail" => "frank.ainla@khk.ee"); 
	echo $assoc ["first_name"] . "<br>";
	echo $assoc ["last_name"] . "<br>";
	echo "Minu nimi on ";
	echo $assoc ["first_name"];
	echo $assoc ["last_name"];
	echo "Minu e-mail on ";
	echo $assoc ["e_mail"];
?>


<h2>Array functions</h2>

<?php $numbers_2 = array(8,23,15,42,16,4); ?>

<?php
    sort($numbers_2);
    print_r($numbers_2);
?>
<?php
	rsort($numbers_2);
	print_r($numbers_2);
?>
<?php 
	
	$num_string = implode("ja", $numbers_2);
	echo "$num_string";

?>
<?php print_r(explode(" ja ", $num_string)); ?>
</body>


</html>