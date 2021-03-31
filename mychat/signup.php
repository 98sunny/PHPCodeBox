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
    <link rel="stylesheet" type="text/css" href="css/signup.css">
    <title>Create New Account</title>
</head>

<body>
    <div class="signup-form">
        <form action="" method="post">
            <div class="form-header">
                <h2>Create your Account</h2>
                <p>Fill this forma dn start chatting with your friends</p>
            </div>
            <div class="form-group">
                <label for="username">Username ::</label>
                <input type="text" class="form-control" name="user_name" id="user_name" placeholder="Example: sam92"
                    autocomple="off" required>
            </div>
            <div class="form-group">
                <label for="password">Password ::</label>
                <input type="password" class="form-control" name="user_password" id="pass" placeholder="password"
                    autocomple="off" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address::</label>
                <input type="email" class="form-control" name="user_email" id="user_email"
                    placeholder="someone@email.com" autocomple="off" required>
            </div>
            <div class="form-group">
                <label for="country">Country ::</label>
                <select name="user_country" class="form-control" id="user_country" requiresd>
                    <option diabled="">Select a Country</option>
                    <option value="Afganistan">Afghanistan</option>
                    <option value="Albania">Albania</option>
                    <option value="Algeria">Algeria</option>
                    <option value="American Samoa">American Samoa</option>
                    <option value="Andorra">Andorra</option>
                    <option value="Angola">Angola</option>
                    <option value="Anguilla">Anguilla</option>
                    <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                    <option value="Argentina">Argentina</option>
                    <option value="Armenia">Armenia</option>
                    <option value="Aruba">Aruba</option>
                    <option value="Australia">Australia</option>
                    <option value="Austria">Austria</option>
                    <option value="Azerbaijan">Azerbaijan</option>
                    <option value="Bahamas">Bahamas</option>
                    <option value="Bahrain">Bahrain</option>
                </select>
            </div>
            <div class="form-group">
                <label for="gender">Select your Gender ::</label>
                <select name="user_gender" class="form-control" id="user_gender" requiresd>
                    <option diabled="">Select your gender :</option>
                    <option value="female">Female</option>
                    <option value="male">Male</option>
                    <option value="others">Others</option>
                </select>
            </div>
            <div class="form-group">
                <label class="checkbox-inline" for=""><input type="checkbox" required>
                    I accept the <a href="">Terms of use</a>&amp;<a href="#">Privacy Policy</a>
                </label>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg btn-block" name="sign_up">Sign up</button>
            </div>
    </div>
    <?php include('signup_user.php');?>
    </form>
    <div class="text-center small" style="color:#6742888;">Already have an Account? <a href="signin.php">Sign in</a>
    </div>

    </div>

</body>

</html>