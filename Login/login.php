<!doctype html>
<html>
    <head>
        <title>
            Terrafiles.net Login
        </title>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<style>
body {
    background: url('https://i.pinimg.com/originals/71/92/5c/71925c75936297af1e041e98cebfdfe6.jpg');
  background-repeat: no-repeat;
  background-size: cover;
}
    .login-box {
        max-width: 700px;
        float: none;
        margin: 150px auto;
    }
    .login-left {
        
    }
</style>
    </head>
    <body>
        <div class="container">
            <div class="login-box">
            <div class="row">
                <div class="col-md-6 login-left">
                    <h2> Login Here </h2>
                    <form action="validation.php" method="post">
                        <div class="form-group">
                            <label>Username:</label>
                            <input type="text" name="username" class="form-control" required>
                            <label>Password:</label>
                            <input type="password" name="password" class="form-control" required>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
                <div class="col-md-6 login-right">
                    <h2> Register Here </h2>
                    <form action="registration.php" method="post">
                        <div class="form-group">
                            <label>Username:</label>
                            <input type="text" name="username" class="form-control" required>
                            <label>Password:</label>
                            <input type="password" name="password" class="form-control" required>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                </div>
            </div>
        </div>
      </div>
        
        
        
        
        <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>