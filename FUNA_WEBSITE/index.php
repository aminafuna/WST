<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

      <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('img/6.jpg');
            background-size: cover;
            background-position: center;
            text-align: center;
            padding: 20px;
        }
        h1 {
            color: deepskyblue;
        }
        form {
            background: powderblue;
            padding: 50px;
            border-radius: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
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
            color: deepskyblue;
            text-decoration: none;
        }
        p a:hover {
            color: deeppink;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    
    <h1> Welcome to My Login Page! </h1>

    <form action="process.php" method="POST">

        <label> Email Address </label></br>
        <input type="text" name="login_email" placeholder="Enter Email..." required>
        </br></br>

        <label> Password </label></br>
        <input type="password" name="login_pass" placeholder="Enter Password..." required>
        </br></br>

        <input type="submit" name="login" value="LOGIN">
    </form>

    <p><a href="reg.php"> Click Here to Register! </a></p>

</body>
</html>