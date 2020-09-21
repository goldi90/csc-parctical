<html>  
<body>  
<form method="post">  
Enter First Number:  
<input type="number" name="number1" /><br><br>  
Enter Second Number:  
<input type="number" name="number2" /><br><br>  
<input  type="submit" name="submit" value="Add">  
</form>  
<?php  

if(isset($_POST['submit']))  {
        
    $number1 = $_POST['number1'];  
    $number2 = $_POST['number2'];  
    $sum =  $number1+$number2; 
    $sub =  $number1-$number2;    
    $mul =  $number1*$number2;    
    $modual= $number1%$number2;   
    $div=$number1/$number2; 

    echo "The sum of $number1 and $number2 is: ".$sum."<br>";   
    echo "The sub of $number1 and $number2 is: ".$sub."<br>";  
    echo "The multiply of $number1 and $number2 is: ".$mul."<br>";  
    echo "The modulas of $number1 and $number2 is: ".$modual."<br>";  
    echo "The division of $number1 and $number2 is: ".$div."<br>";  
    
    $num1sqr= sqrt($number1);
    $num2sqr= sqrt($number2);
    $num1rd = round($num1sqr, 2, PHP_ROUND_HALF_UP);
    $num2rd = round($num2sqr, 2, PHP_ROUND_HALF_UP);
    
    echo "The square root of ". $number1." number is ". $num1rd."<br>"; 
    echo "The square root of ". $number2." number is " .$num2rd."<br>"; 
    
    if ($number1>=$number2) {
        echo "the ".$number1." is bigger"; 
    } else {
    echo "the ".$number2." is bigger"; 
    }

}  

?>  
</body>  
</html>  
