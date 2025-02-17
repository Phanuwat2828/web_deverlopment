<?php
session_start(); 

if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32)); 
}
if (isset($_SESSION['user_id'])) {
  header("Location: customer.php");
  exit();
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['csrf_token']) && $_POST['csrf_token'] == $_SESSION['csrf_token']) {
        $password_u = $_POST["password"];
        $password_con = $_POST["confirm_password"];
        if ($password_u != $password_con) {
            echo "<script>alert('Password and Confirm Password aren\'t the same!');</script>";
            echo "<script>window.history.back();</script>";
            exit();
        }
        include "connection_db.php";
        $username = $_POST["username"];
        $email = $_POST["email"];
        $sql_command = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
        $stm = $conn->prepare($sql_command);
        $password_u = password_hash($password_u, PASSWORD_BCRYPT);
        $stm->bind_param("sss", $username, $email, $password_u);
        $stm->execute();
        $stm->close();
        $conn->close();

        header("Location: /login.php");
        exit();
    } else {

        echo "<script>alert('Invalid CSRF token!');</script>";
        echo "<script>window.history.back();</script>";
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  </head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <nav class="navbar bg-body-tertiary sticky-top">
      <div class="container-fluid">
        <a class="navbar-brand">Eat Dog Compony</a>
        <div style="display: flex; flex-direction: row;" class="nav-item"> 
          <a href="login.php" style="margin-right: 10px;">
            <button class="btn btn-primary">Login</button>
          </a>
        </div>
      </div>
    </nav>
    <div class="content" style="width: 100%; height: 100%; display: flex; justify-content: center;">
        <div class="content_1 border border-light-subtle" style="width: 50%; height: 100%; display: flex; flex-direction: column; border-radius: 10px; padding: 50px; margin-top:20px;">
            <h1 class="title">Register</h1>
            <form action="index.php" method="post">
              <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                <div class="mb-3 user">
                    <label for="exampleFormControlInput1" class="form-label">User Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Figer768" name="username">
                </div>
                <div class="mb-3 email">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
                </div>
                <div class="password">
                  <label for="inputPassword5" class="form-label">Password</label>
                  <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" name="password">
                  <div id="passwordHelpBlock" class="form-text" style="margin-bottom: 20px;">
                      Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                  </div>
                  <label for="inputPassword5" class="form-label">Confirm Password</label>
                  <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" name="confirm_password">
                  <div id="passwordHelpBlock" class="form-text" style="margin-bottom: 20px;">
                      Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                  </div>
                </div>

                <button class="btn btn-primary submit" style="margin-top: 20px;">Submit</button>
            </form>
        </div>

    </div>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script>
      const scrollreveal = {
          distance:"50px",
          origin:"bottom",
          duration:1000
      }
      ScrollReveal().reveal(".content",{
        ...scrollreveal,
          origin:"right",
          delay:200
      })
      ScrollReveal().reveal(".user",{
        ...scrollreveal,
          origin:"top",
          delay:300
      })
      ScrollReveal().reveal(".title",{
        ...scrollreveal,
          origin:"top",
          delay:200
      })
      ScrollReveal().reveal(".email",{
        ...scrollreveal,
          origin:"top",
          delay:400
      })
      ScrollReveal().reveal(".password",{
        ...scrollreveal,
          origin:"top",
          delay:500
      })
      ScrollReveal().reveal(".birth",{
        ...scrollreveal,
          origin:"top",
          delay:600
      })
      ScrollReveal().reveal(".select-img",{
        ...scrollreveal,
          origin:"top",
          delay:700
      })
      ScrollReveal().reveal(".check_me",{
        ...scrollreveal,
          origin:"top",
          delay:800
      })
      ScrollReveal().reveal(".submit",{
        ...scrollreveal,
          origin:"top",
          delay:900
      })

  </script>

</body>
</html>