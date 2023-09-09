

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <form action="Login2.php" method="POST">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="login2.css">
</head>
<body>
 
    
 
    <div class="card">
        <p class="login">Register</p>
 
        <form>
            <label>Email</label>
            <input type="email" name="email" class="form_login" placeholder="Email" autocomplete="off" autofocus required oninvalid="this.setCustomValidity('Mohon Isi Sesuai Dengan Ketentuan')" oninput="this.setCustomValidity('')">
            <label>Username</label>
            <input type="text" name="username" class="form_login" placeholder="Username" autocomplete="off" required minlength="6" oninvalid="this.setCustomValidity('Mohon Di Isi Minimal 6 Karakter')" oninput="this.setCustomValidity('')">

            <label>Password</label>
            <input type="Password" name="password" class="form_login" placeholder="Password" autocomplete="off" required minlength="8" oninvalid="this.setCustomValidity('Mohon Di Isi Minimal 8 Karakter')" oninput="this.setCustomValidity('')">

 
            <label>Konfirmasi Password</label>
            <input type="Password" name="password2" class="form_login" placeholder="Konfirmasi Password" autocomplete="off" required minlength="8" oninvalid="this.setCustomValidity('Mohon Di Isi Minimal 8 Karakter')" oninput="this.setCustomValidity('')">
 
           
            <button type="submit" name="register" class="btn btn-outline-success" value=<?php echo date ("Y-m-d ") ?> >REGISTER</button>
 
            <br/>
            <br/>


            <center>
                <p class="belum"> Sudah Punya Akun?
                <u><a class="link" href="Login.php" class="register">Kembali Login</a></p></u>
            </center>
        </form>
        
    </div>
 
 
</body>
</html>