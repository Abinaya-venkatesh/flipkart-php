<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
<style>

      
        body {
            margin: 0;
            padding: 50px;
            font-family: Arial, sans-serif;
            background-image: url('images/background.jpg'); 
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        form {
            
            padding-top: 10px;
            padding-bottom: 30px;
            padding-left: 2px;
            padding-right: 2px;
            text-align: center;
            background: #e6eeea; 
        }
        #submit-button{
            width: 75%;
            padding: 9px;
            margin: 2px 0;
            border: none;
            background-color: #4CAF50; /* Green */
            color: white;
            cursor: pointer;

        }
        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="number"]
         {
            width: 70%;
            padding: 9px;
            margin: 2px 0;
            border: none;
            /* box-sizing: border-box; */
        }
        .facebook{
            background-color: #4CAF50; /* Green */
            color: white;
            cursor: pointer;
            border: none;
            padding: 10px;
            margin: 5px 0;
            border: none;
            background-color: #158cb2; /* blue */
            color: white;
            cursor: pointer;
        }
        .google{
            background-color: #d12c42; /* red */
            color: white;
            cursor: pointer;
            border: none;
            padding: 10px;
            margin: 5px 0;
            border: none;
            background-color: #ff0000; /* Green */
            color: white;
            cursor: pointer;
        }
        label {
            display: inline-block;
            margin-left: 1px;
        }

        p {
            color:black;
            text-align: center;
            margin-top:20px;
            margin-bottom: 20px;
        }
</style>
</head>
<body>


<form action="signin_query.php" method="post">
    <img src="images/pepagora-logo.svg" alt="logo" width="180" height="70">
    <input type="email" name="email" placeholder="Email" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>
    
    <input type="submit" name="submit" id="submit-button" value="Sign-in">

    <p>or, you can sign in with:</p>
    
    <input type="submit" name="submit1" class="facebook" value="facebook">
    <input type="submit" name="submit2" class="google" value="google">


    <p>not a member as yet?<a href="signup.php">sign-up</a></p>


    <a style="text-align:right;" href="forgot_password.php">forgot password</a>

    
</form>
    
</body>
</html>