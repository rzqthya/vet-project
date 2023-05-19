<html>

<head>
    <title>Badat Travel | Daftar</title>
    <link rel="icon" href="image/badat_travel.png">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <style>
        .b {
            background-size: cover;
        }

    </style>
</head>

<body style="background: url(image/background2.jpg); background-size: cover;" class="trans">
    <div class="white-text" style="background-color: rgba(0, 0, 0, 0.75); width: 100%; height:700px; margin-top: -35px;">
        <center>
            <div style="padding-top: 125px;">
                <a href="index.php" onclick="window.close();">
                    <img src="image/badat_travel.png" class="img-responsive" style="width: 100px; height: 100px;">
                </a>
                <p style="font-family: News701 BT; font-size: 21px;">Silahkan Buat Akun</p>
                <div class="container" style="width: 500px;">
                    <form method="post" action="signup_p.php">
                        <div class="input-field">
                            <input type="text" name="username" id="user">
                            <label for="user">Username</label>
                        </div>
                        <div class="input-field">
                            <input type="password" name="password" id="pass">
                            <label for="pass">Password</label>
                        </div>
                        <div class="input-field">
                            <input type="text" name="fullname" id="full">
                            <label for="full">Nama Lengkap</label>
                        </div>
                        <a href="signup_p.php" style="font-family: segoe ui light;"><button class="btn waves-effect blue">DAFTAR <i class="ion-android-person-add"></i></button></a>
                    </form>
                    <p class="left">Sudah punya akun? Silahkan langsung Login ==></p><a href="signin.php" style="font-family: segoe ui light;"><button class="btn waves-effect">LOGIN <i class="ion-log-in"></i></button></a>
                </div>
            </div>
        </center>
    </div>
</body>

</html>
