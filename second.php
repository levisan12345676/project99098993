<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOG IN</title>
    <link rel="stylesheet" href= "style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>


    



<div class="wrapper">
    <form method="POST" action="nextpadge.php">
        <h1>Login</h1>
        <div class="input-box">
            <input type="text" placeholder="Username" required>
            <i class="fa-solid fa-user"></i>
        </div>

        <div class="input-box">
            <input type="password" placeholder="password" required>
            <i class="fa-solid fa-lock"></i>
        </div>
      
        <div class="remember-forgot">
            <label><input type="checkbox">Remember me</label>
            <a href="#">Forgot Password?</a>
        </div>

        <button type="submit" class="btn">login</button>

        <div class="register-link">
         
        <p>Don t have an account? <a href="#">Register</a></p>

        </div>

    </form>
</div>


</body>
</html>