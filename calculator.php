<!DOCTYPE html>
<html>
<head>
	<title>calculator</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
</head>
<body>
<form action="" method="GET">

	<input type="text" name="num1" placeholder="Number 1"><br>
	<input type="text" name="num2"placeholder="Number 2"><br><br>
	
    <select name="operator">

    	<option value="none">None</option>
    	<option value="add">Addition</option>
    	<option value="Sub">Subtraction</option>
    	<option value="mul">Multiplication</option>
    	<option value="div">Division</option>


    </select><br><br>

    <button type="submit" name="submit">Calculate</button>

    </form>
    <p>Answer is:</p>

    <?php

    	if (isset($_GET['submit'])) {

    		$num1=$_GET['num1'];	// declaring variables and get values
    		$num2=$_GET['num2'];
    		$operator=$_GET['operator'];

    		//display the answer acording to the operator

    		switch ($operator) {
    				case 'add':
    					echo " Answer is:".($num1+$num2);//Addition
    					break;

    				case 'sub':
    					echo " Answer is:".($num1-$num2);//Subtraction
    					break;

    				case 'mul':
    					echo " Answer is:".($num1*$num2);//Multiplication
    					break;

    				case 'div':
    					echo " Answer is:".($num1/$num2);//Division
    					break;
    			
    				default:
    					echo "invalid operator";
    				break;
    		}


    		
    	}
    ?>
</body>
</html>