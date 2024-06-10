<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="assets/13.png" alt="" width="120" height="auto"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Register</title>
</head>
<body>
    <center>
    <header>
    <nav>
        <div class="logo">
            <img src="assets/13.png" alt="" width="150" height="auto" />
        </div>
        <a href="index.php">Home</a>
        <a href="#">Category</a>
        <a href="login.php">Login</a>
    </nav>
    </header>
<main>
        <div class="form-login">
                <h3>Silahkan Daftar Temanku!!</h3>
                <form action="register-proses.php" method="post">
                    <input type="email" name="email" placeholder="Email" required /><br />
                    <input type="text" name="username" placeholder="Username" required /><br />
                    <input type="password" name="password" placeholder="Password" required /><br />
                    <button type="submit" name="register">Daftar</button>
                </form>
            </div>
        </main>
        </center>
        <footer>
            <center>
                <h5>&copy; TALENTTRAILBLAZERS</h5>
            </center>
        </footer>
</body>
</html>