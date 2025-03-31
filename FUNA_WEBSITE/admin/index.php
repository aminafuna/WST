<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login </title>
        
    <style>
        body {
            font-family: Arial, sans-serif;
            background: turquoise;
            background-size: cover;
            background-position: center;
            text-align: center;
            padding: 20px;
        }
        h1 {
            color: midnightblue;
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
    <h1> Login Page for Admin </h1>

    <form action="adminprocess.php" method="POST">

        <label>Email Address </label></br>
        <input type = "text" name="email" required placeholder="Enter Email here . . ."> </p>

        <label>Password </label></br>
        <input type = "password" name="pass" required placeholder="Enter Password here . . ."> </p>
        
        <input type = "submit" name="admin_login" value="LOGIN">

    </form>
</body>
</html>