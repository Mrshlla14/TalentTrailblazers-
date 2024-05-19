<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="assets/13.png" alt="" width="100" height="auto"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Login</title>
    <script>
        function login() {
            form action ="cookie-login.php.php" method="post" 
            var username = document.getElementsByName('username')[0].value;
            var password = document.getElementsByName('password')[0].value;

            // Periksa apakah username dan password tidak kosong
            if (username !== '' && password !== '') {
                alert('Login Berhasil!!  Welcome, ' + username + ':)');
            } else {
                // Jika ada kolom yang kosong, maka tampilkan pesan kesalahan
                alert('Masukkan Username dan Password!!');
            }
        }
    </script>
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
            <a href="Login.php">Login</a>
        </nav>
    </header>
    <main>
        <div class="form-login">
            <h3>Silahkan Masuk Temanku!! </h3>
            <input type="text" name="username" placeholder="Username" />
            <input type="password" name="password" placeholder="Password" />
            <!-- Call login() function when button is clicked -->
            <button type="button" onclick="login()">Login</button>
            <a href="Regis.php">Daftar Dulu</a>
        </div>
    </main>
    <footer>
        <h5>&copy; TALENTTRAILBLAZERS</h5>
    </footer>
</center>
</body>
</html>
