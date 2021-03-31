<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" type="text/css" href="css/signin.css">
    <title>Login</title>
</head>

<body>
    <div class="signin-form">
        <form action="" method="post">
            <div class="form-header">
                <h2>Sign in</h2>
                <p>Login to MyChat</p>
            </div>
            <div class="form-group">
                <label for="email">Email ::</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="someone@emai.com"
                    autocomple="off" required>
            </div>
            <div class="form-group">
                <label for="password">Password ::</label>
                <input type="password" class="form-control" name="pass" id="pass" placeholder="password"
                    autocomple="off" required>
            </div>
            <div class="small">
                Forgot Password?? <a href="forgot_pass.php">Click Here!</a><br>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg btn-block" name="sign_in">Sign in</button>
            </div>
    </div>

    <?php include("signin_user.php");?>
    </form>
    <div class="text-center small" style="color:#6742888;">Dont have an Account? <a href="signup.php">Create One</a>
    </div>

    </div>

</body>

</html>