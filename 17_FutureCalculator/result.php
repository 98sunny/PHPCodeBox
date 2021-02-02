<?php
$amt=floatval($_GET['amount']);
$interest=floatval($_GET['interest']);
$years=floatval($_GET['year']);
$totalInterest=1;
$interestPLus=($interest/100)+1;
for ($i=1; $i <=$years ; $i++) { 
    $totalInterest*=$interestPLus;
}

$fv=$amt*$totalInterest;
// echo $amt.'<br>';
// echo $interest.'<br>';
// echo $years.'<br>';
// echo $fv.'<br>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Future Value Calculator</title>
</head>
<body>
    <div id="mainFV">
        <h1>Future Values Calculator</h1>
        <div id="answer">
            <label>Investment Amount:</label> 
		<span><?php echo '$'.number_format($amt); ?></span><br>
		
		<label>Yearly Interest Rate:</label> 
		<span><?php echo ($interest).'%'; ?></span><br>
		
		
		<label>Number Of Years:</label> 
		<span><?php echo $years.' Years'; ?></span><br>
		
		<label>Future Value:</label> 
        <span><?php echo '$'.number_format($fv); ?></span><br>
        <button type="button"><a href="index.html">Go Back</a></button>
        </div>
        
    </div>
    
</body>
</html>