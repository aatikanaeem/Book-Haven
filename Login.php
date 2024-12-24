<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="Login.css">
    <link rel="icon" type="image/jpeg" href="pictures/greenicon.jpeg">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="form">
        <form action="action_page.php" method="POST">
            <h1>Login</h1>
            <div class="name">
                <label for="fname">Name:</label>
                <input type="text" name="name" placeholder="Name" required>
                <i class='bx bx-user'></i>
            </div>
            <div class="email">
                <label for="email">Email:</label>
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="pass">
                <label for="password">Password:</label>
                <input type="password" name="password" placeholder="Password" required>
                <i class='bx bxs-lock'></i>
            </div>
            <button type="submit" name="signUp">SUBMIT</button>
            <button type="reset">Reset</button>
            <a href="BOOKHAVEN.php">Back to Home Page</a>
        </form>
    </div>
</body>

</html>