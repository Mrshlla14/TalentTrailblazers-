<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="assets/13.png" alt="" width="120" height="auto"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Registration</title>
    <script>
        function register() {
            var email = document.getElementsByName('email')[0].value;
            var username = document.getElementsByName('username')[0].value;
            var password = document.getElementsByName('password')[0].value;

            // Memeriksa apakah email, username dan password tidak kosong
            if (email !== '' && username !== '' && password !== '') {
                alert('Registration successful for ' + email + '! Please log in.');
            } else {
                // Jika ada kolom yang kosong, maka tampilkan pesan kesalahan
                alert('Please fill in all fields!');
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
        <a href="login.php">Login</a>
    </nav>
</header>
<main>
    <div class="form-login">
        <h3>Silahkan Daftar Temanku!! </h3>
        <input type="email" name="email" placeholder="Email" />
        <input type="text" name="username" placeholder="Username" />
        <input type="password" name="password" placeholder="Password" />
        <!-- Call register() function when button is clicked -->
        <button type="button" onclick="register()">Daftar</button>
    </div>
</main>
<footer>
    <h6>&copy; TALENTTRAILBLAZERS</h6>
</footer>
</center>
</body>
</html>
