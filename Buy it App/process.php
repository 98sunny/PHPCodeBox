<?php

session_start();
$mysqli= new mysqli('localhost','root','','crud') or die(mysql_error($mysqli));
$id=0;
$update=false;
    $item='';
        $quantity='';
        

if (isset($_POST['save'])) {
    $name=$_POST['item'];
    $qty=$_POST['qty'];
    $mysqli->query("insert into data(name,qty) values('$name','$qty');") or die($mysqli->error);
    $_SESSION['message']="Record saved";
    $_SESSION['msg_type']="Success";
    header("location: index.php");
}
if (isset($_GET['delete'])) {
    # code...
    $id=$_GET['delete'];
    $mysqli->query("delete from data where id=$id") or die($mysqli->error());
      $_SESSION['message']="Record deleted";
    $_SESSION['msg_type']="Success";
    header("location: index.php"); 
}
if (isset($_GET['edit'])) {
    $id=$_GET['edit'];
    $update=true;
    $result=$mysqli->query("select * from data where id=$id") or die($mysqli->error());
 
    if(count(array($result))==1){
        $row=$result->fetch_array();

        $item=$row['name'];
        echo $item;
        $quantity=$row['qty'];
        echo $quantity;        
    }
    # code...
}
if(isset($_POST['update'])){
    $id=$_POST['id'];
    $item=$_POST['item'];
    $quantity=$_POST['qty'];
    $mysqli->query("update data set name='$item', qty='$quantity' where id=$id;") or die($mysqli->error);


    $_SESSION['message']="Record has been updated";
    $_SESSION['msg_type']="warning";
    header('location: index.php');
 
   
}
?>