<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <form action="Login3.php" method="POST">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />

<!-- font awesome  -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="csslogin.css">

  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <title>User</title>
  </head>
  <body>
    
    <div class="card" data-aos="fade-right">
        <b><p class="login">Login</p></b>
       
 
        <form>
            <label>Username</label>
            <input type="text" name="username" class="form_login" placeholder="Username" autocomplete="off" oninvalid="this.setCustomValidity('Mohon Isi Sesuai Dengan Ketentuan')" oninput="this.setCustomValidity('')" required >
            
 </center>
            <label>Password</label>
            <input type="password" id="myInput" class="form_login" placeholder="Password" name="password" required oninvalid="this.setCustomValidity('Mohon Isi Minimal 8 Karakter')" oninput="this.setCustomValidity('')" minlength="8">

            
           <label class="lihat">Lihat Password
<input type="checkbox" onclick="myFunction()" class="check" ></label>
<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}


</script>

 
           <input type="submit" class="btn btn-outline-success" value="LOGIN" name="submit"></input>
<br>

            <center>
              <table>
                <tr>
                  <td> <p class="belum"> Belum Punya Akun?</td>
                    <td> <u><a class="link" href="register.php" >Register Disini</a></p></u></td>

                </tr>
               
               
                </table>
            </center>

            <br/>
            <br/>

            
            
        </form>
    
    </div>

   
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>



  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  </body>

</html>