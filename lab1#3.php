<?php
<form method="post">
Enter a number:<input type="text" name="input"><br><br>
<input type="submit" name="submit" value="Submit">
</form>
?>
<?php
	if($_post)
	{
		$input=$_POST('input');

		for ($i=2; $i <=$input-1 ; $i++) { 
			if($input %$i==0)
			{
				$value=True;
			}
		}
		if(isset($value)&&$value)
		{
			echo 'The number'.$input,'is not a prime';
		}
		else
		{
			echo"the number".$input.'is prime';
		}
	}
?>