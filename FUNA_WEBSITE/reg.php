<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('img/1.jpg');
            background-size: cover;
            background-position: center;
            text-align: center;
            padding: 20px;
        }
        nav {

            color: deeppink;
            text-shadow: 0px 0px 10px #FFB6C1;
            padding: 10px;
            border-radius: 20px;

        }

        nav form{
            background: skyblue;
            padding: 50px;

        }
        form {
            background: skyblue;
            padding: 50px;
            border-radius: 5px;
            display: inline-block;
            text-align: left;
        }

        label {
            font-weight: bold;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: steelblue;
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 4px;
        }
        input[type="submit"]:hover {
            background-color: deeppink;
        }
        p a {
            color: #0000CD;
            text-decoration: none;
        }
        p a:hover {
            color: deeppink;
            text-decoration: underline;
        }
    </style>
</head>
<body>

<nav>
    <h1>  AMINA'S WEBSITE </p>
        Registration Form </h1>    

</nav>
    <form action="process.php" method="POST">
        <label> Full Name </label>
        <input type="text" name="nm" required placeholder="Enter Full Name..."><br>
        
        <label> Phone Number </label>
        <input type="text" name="pn" required placeholder="Enter Phone Number..."><br>
        
        <label> Email Address </label>
        <input type="text" name="email" required placeholder="Enter Email Address..."><br>
        
        <label> Password </label>
        <input type="password" name="pass" required placeholder="Enter Password..."><br>
        
        <input type="submit" name="reg_button" value="Register">
    </form>
    <p><a href="index.php"> Click Here to Login! </a></p>
</body>
</html>
