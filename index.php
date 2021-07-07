<!Doctype html>
<html>
<head>
    <title>Register User</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="reg_box">
        <label><h1>Register Here</h1></label>
        <form action="server.php" method="post" class="wrapper">
            <div>
                <input type="text" name="username" required placeholder="Enter Username">
            </div>
            <div>
                <input type="email" name="email" required placeholder="Enter Email">
            </div>
            <div>
                <input type="password" name="password_1" required placeholder="Enter Password">
            </div>
            <div>
                <input type="password" name="password_2" required placeholder="Confirm Password">
            </div>

            <button type="submit" name="reguser">Register</button>
        </form>
    </div>
</body>
</html>