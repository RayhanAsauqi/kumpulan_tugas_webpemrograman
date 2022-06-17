<html>
    <head>
        <title>Tutorial Cara membuat Login Dengan PHP MySQLi - page Admin</title>
    </head>
    <body>
        <h2>Halaman Admin</h2>
        <!-- cek apakah sudah login -->

        <?php
            session_start();
            if($_SESSION['status'] !="login");
        ?>
        <h4>Selamat Datang, <?php echo $_SESSION['username']; ?>! Anda telah login.</h4>
        <br/>
        <a href="logout.php">LOGOUT</a>
    </body>
</html>