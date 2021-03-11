<!DOCTYPE html>
<html lang="en">
<head>
<style>table {
  text-align: center;
}</style>
    <meta charset="UTF-8">
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy it!</title>
</head>
<body>
<?php require_once 'process.php';?>
<?php 
if (isset($_SESSION['message']));?>
<div class="alert alert-<?=$_SESSION['msg_type']?>">
<?php 
// echo $_SESSION['message'];
unset($_SESSION['message']);
?>
</div>

<div class="container">
<?php
$mysqli=new mysqli('localhost','root','','crud') or die(mysqli_error($mysqli));

$result=$mysqli->query("select * from data") or die($mysqli->error);
pre_r($result);
// pre_r($result->fetch_assoc());
?>

<div class="row justify-content-center">
<h1 align="center">Buy it App</h1>
<table class="table">
<thead>
<tr>
<th>Item to buy</th>
<th colspan="2">Quantity</th>
<th>Action</th>
</tr></thead>
<?php
while ($row=$result->fetch_assoc()): ?> 
    <tr>
    <td><?php echo $row['name'];?></td> 
    <td><?php echo $row['qty'];?></td>
    <td>
    <a href="index.php?edit=<?php echo $row['id'];?>" class="btn btn-info">Edit</a>
    <a href="process.php?delete=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a>

    </td>
    </tr>
    <?php endwhile;?>

</table>
</div>

<?php
function pre_r($array){
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}
?>
<form action="process.php" method="post">
<input type="hidden" name="id" value="<?php echo $id; ?>">
<div class="row justify-content-center">

<div class="form-group">

<label for="item">Item</label>
<input type="text" name="item" class="form-control" id="item" value="<?php echo $item;?>">
</div>
<div class="form-group">
<label for="quantity">Quantity :</label>
<input type="number" name="qty" class="form-control" id="number" value="<?php echo $qty;?>">
</div>
<div class="form-group">
<?php 
if ($update==true):
?>
<button type="submit" class="btn btn-info" name="update">Update</button>
<?php else: ?>
<button type="submit" class="btn btn-primary" name="save">Save</button>

<?php endif;?>
</div>

</div></div>

</form>
    
</body>
</html>