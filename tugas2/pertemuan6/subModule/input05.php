<html>
    <head>
        <title>LOGIN DISINI</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <h1>Program 4.8</h1>
        <form action="proses/proses05.php" method="POST" name="input">
            <h2>Login Disini…</h2>
            <label>User name</label>
            <div class = "form-group">
                <input type="text" name="username">
            </div>
            <label>Password</label>
            <div class = "form-group">
                <input type="password" name="password">
            </div>
            <button type="submit" name="Login" value="Login">Submit</button>
            <button type="reset" name="reset" value="Reset">Reset</button>
        </form>
    </body>
 </html>