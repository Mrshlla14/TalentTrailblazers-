<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="assets/13.png" alt="" width="120" height="auto"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Login</title>
</head>
<body>
    <center>
        <header>
            <nav>
                <div class="logo">
                <img src="assets/13.png" alt="" width="150" height="auto" />
                </div>
                    <a href="index.php">Beranda</a>
                    <a href="#">Category</a>
                    <a href="login.php">Login</a>
            </nav>
        </header>
        <main>
            <div class="form-login">
                <h3>Silahkan Masuk Temanku!!</h3>
                <form action="login-proses.php" method="post">
                    <input class="input" type="text" name="username" placeholder="Username" required />
                    <input class="input" type="password" name="password" placeholder="Password" required />
                    <button type="submit" class="btn_login" name="login" id="login"> Login </button>
                </form>
                <a href="regis.php">Daftar Dulu</a>
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
