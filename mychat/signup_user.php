<?php
include("./include/connection.php");
if ($con -> connect_errno) {
  echo "Failed to connect to MySQL: " . $con -> connect_error;
  exit();
}
if(isset($_POST['sign_up'])){
    $name=htmlentities(mysqli_real_escape_string($con,$_POST['user_name']));
    $pass=htmlentities(mysqli_real_escape_string($con,$_POST['user_password']));
    $email=htmlentities(mysqli_real_escape_string($con,$_POST['user_email']));
    $country=htmlentities(mysqli_real_escape_string($con,$_POST['user_country']));
    $gender=htmlentities(mysqli_real_escape_string($con,$_POST['user_gender']));
    
    $rand=rand(1,2);

    if ($name=='') {
        echo "<script type='text/javascript'>alert('We cannot verify your name');</script>";
    }

    if(strlen($pass)<8){
        echo "<script type='text/javascript'>alert('Password should be of min 8 characters $pass');</script>";
        exit();
    }

    $check_email="Select * from users where user_email='$email'";
    $run_email=mysqli_query($con,$check_email);
    $check=mysqli_num_rows($run_email);
    echo mysqli_num_rows($run_email);
    if($check==1){
        echo "<script type='text/javascript'>alert('Email already exists. Please try again');</script>";
        echo "<script  type='text/javascript'>window.open('signup.php','_self');</script>";
        exit();
    }
    if ($rand==1) {
        $profile_pic="images/codingcafe1.png";
    }
    elseif ($rand==2) {
        $profile_pic="images/codingcafe2.png";
    }
                                        
    $insert="insert into users(user_name,user_pass,user_email,user_profile,user_country,user_gender)
    values('$name','$pass','$email','$profile_pic','$country','$gender');";
   
    $query=mysqli_query($con,$insert);
    if($query){
        echo "<script  type='text/javascript'>alert('Congrats $name, you account has been created successfully');</script>";
        echo "<script  type='text/javascript'>window.open('signin.php','_self');</script>";
    }
    else {
        echo "<script  type='text/javascript'>alert('Registration failed, try again!');</script>";
        echo "<script  type='text/javascript'>window.open('signup.php','_self');</script>";
    }


}

?>