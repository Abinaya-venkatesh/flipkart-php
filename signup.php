<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>

      
        body {
            margin: 0;
            padding: 20px;
            font-family: Arial, sans-serif;
            background-image: url('images/background.jpg'); 
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        form {
            
            padding-top: 15px;
            padding-bottom: 15px;
            padding-left: 50px;
            padding-right: 55px;
            text-align: center;
            background: #e6eeea;
            
            
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="number"],
        input[type="submit"] {
            width: 95%;
            padding: 10px;
            margin: 3px 0;
            border: none;
            /* box-sizing: border-box; */
        }

        input[type="submit"] {
            background-color: #4CAF50; /* Green */
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049; /* Darker green */
        }

        input[type="checkbox"] {
            margin-right: 5px;
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

<form class="container" action="signup_query.php" method="post">
    <img src="images/pepagora-logo.svg" alt="logo" width="180" height="70">
    
  <p>
      I am a 
      <input type="radio" id="Supplier" name="user_type" value="Supplier" required>
      <label for="Supplier">Supplier</label>
      <input type="radio" id="buyer" name="user_type" value="Buyer" required>
      <label for="buyer">Buyer</label><br>
      
  </p>


    <input type="text" name="name" placeholder="Name" required><br><br>
    <input type="email" name="email" placeholder="Email" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>
    <input type="number" name="phone" placeholder="Mobile" required><br><br>
    <input type="checkbox" name="terms" required>
    <label for="terms_agree"> I Accept Terms and Conditions</label><br><br>
    <input type="submit" name="submit" value="JOIN PEPAGORA.COM">

    <p>already a member? <a href="signin.php">sign-in</a></p>
</form>

</body>
</html>
