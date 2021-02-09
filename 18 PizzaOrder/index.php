<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        fieldset {
            border: 5px solid #64befa;
            border-radius: 5px;

        }

        #buttons {
            background-color: #64befa;
            /* Green */
            border: none;
            color: white;
            padding: 16px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
        }

        #buttons {
            background-color: white;
            color: black;
            border: 2px solid #64befa;
        }

        #buttons:hover {
            background-color: #64befa;
            color: white;
        }
    </style>
</head>
<body>
    <?php

$cost=0;
$mainCourse=$addOnStuff=$tip="";
if(isset($_POST['mainCourse'])){
    $mainCourse=$_POST['mainCourse'];
}

if(isset($_POST['addOn'])){
    $addOnStuff=$_POST['addOn'];
}else {
    $addOnStuff="";
}

if(isset($_POST['tip'])){
    $tip=$_POST['tip'];
}else {
    $tip=0;
}



if (isset($mainCourse) && $mainCourse=="pizza") {
    # code...
    $cost=5.95;
}elseif (isset($mainCourse) && $mainCourse=="hamburger") {
    $cost=6.95;
    
}else{
    $cost=4.95;
}
$addon=0;

if(empty($addOnStuff)) 
  {
    $addon=0;
  } 
  else 
  {
    $N = count($addOnStuff);
    for($i=0; $i < $N; $i++)
    {
      $addon+=0.75;
    //   echo "The add on amount is :",$addon;
    }
  }
  $subTotal=$cost+$addon;
  $tax=(7.75/100)*($subTotal);
  $total=$subTotal+$tax+($subTotal*($tip/100));

?>      
    <div id="main">
        <form action="" method="post">
            <fieldset style="display: inline;">
                <legend>Main Course</legend>
                <input type="radio" id="hamburger" name="mainCourse" value="hamburger">
                <label for="hamburger">Hamburger - $6.95</label><br>
                <input type="radio" id="pizza" name="mainCourse" value="pizza">
                <label for="pizza">Pizza - $5.95</label><br>
                <input type="radio" id="salad" name="mainCourse" value="salad">
                <label for="salad">Salad - $4.95</label>
            </fieldset>

            <fieldset style="display: inline;">
                <legend>Add on items($0.75/each)</legend>
                <input type="checkbox" id="lto" name="addOn[]" value="lto">
                <label for="lto">Lettuce, Tomato, Onions</label><br>
                <input type="checkbox" id=kmm name="addOn[]" value="kmm">
                <label for="kmm">Ketchup, mustard, mayo</label><br>
                <input type="checkbox" id="ff" name="addOn[]" value="ff">
                <label for="ff">French Fries</label><br>
            </fieldset>
            <br>

<fieldset style="display: inline;padding: 60px 10px;">
<legend><label for="tip">Choose a tip:</label></legend>

<select name="tip" id="tip" style="width:150px;height:20px;font-size:large;">
  <option value="10">10%</option>
  <option value="15">15%</option>
  <option value="20">20%</option>
 <option value="0">Next Time</option>
</select>
</fieldset>

            <fieldset style="display: inline;" id="total">
                <legend>Order total</legend>
                <label for="subTotal">Sub Total : </label>
                <input type="text" id="subTotal" name="subTotal" value="<?php echo round($subTotal,2);?>">
                <br><br>
                <label for="tax">Tax(7.75%) : </label>
                <input type="text" id="tax" name="tax" value="<?php echo round($tax,2);?>">
                <br><br>
                <label for="orderTotal">Order Total : </label>
                <input type="text" id="subTotal" name="subTotal" value="<?php echo round($total,2);?>">
                <br><br>
            </fieldset>
            <div style="display:inline-block">
                <input id="buttons" type="submit" value="Submit"><br><br>
                <input id="buttons" type="reset" value="Reset"><br><br>
                <button id="buttons" type="button" onclick="javascript:window.close()">Exit</button>
            </div>
        </form>
    </div>


    
</body>


</html>