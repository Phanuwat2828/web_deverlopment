<?php 
  session_start(); 

  if (!isset($_SESSION['csrf_token'])) {
      $_SESSION['csrf_token'] = bin2hex(random_bytes(32)); 
  }
  session_regenerate_id(true);
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['csrf_token']) && $_POST['csrf_token'] == $_SESSION['csrf_token']) {
      include "connection_db.php";
      $login = $_POST["email_username"];
      $password_u = $_POST["password"];
      if (filter_var($login, FILTER_VALIDATE_EMAIL)) {
          $sql = "SELECT * FROM users WHERE email = ?";
      } else {
          $sql = "SELECT * FROM users WHERE username = ?";
      }
      $st = $conn->prepare($sql);
      $st->bind_param("s",$login);
      $st->execute();
      $result = $st->get_result();
      if($result->num_rows > 0){
        $user = $result->fetch_assoc();
        if(password_verify($password_u,$user['password'])){
          $_SESSION['user_id'] = $user['id'];
          $_SESSION['username'] = $user['username'];
          $_SESSION['email'] = $user['email'];
          header("Location: customer.php");
          exit();
        }else{
          echo "<script>alert('password incorrect');</script>";
        }
      }else{
        echo "<script>alert('ไม่พบผู้ใช้');</script>";
      }
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
            <a href="index.php" style="margin-right: 10px;">
              <button class="btn btn-primary">Register</button>
            </a>
           
          </div>
        </div>
    </nav>
    <div class="content" style="width: 100%; height: 90vh; display: flex; justify-content: center; align-items: center;">
        <div class="card mb-3 content_con" style="width: 80%;">
            <div class="row g-0 p-3">
                <div class="col-md-4">
                    <img src="https://i.pinimg.com/736x/e5/1e/b9/e51eb90194662a9e5b9c024021d36484.jpg"
                      class="img-fluid rounded-start img-1" alt="...">
                </div>
                <div class="content_1" style="width: 50%; height: auto; display: flex; flex-direction: column; border-radius: 10px; margin-top:20px; margin-left:20px; justify-content: center;">
                    <h1 class="title">Login</h1>
                    <form action="login.php" method="post">
                      <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                        <div class="mb-3 email">
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com or nick" name="email_username">
                        </div>
                        <div class="password">
                            <label for="inputPassword5" class="form-label">Password</label>
                            <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" name="password">
                            <div id="passwordHelpBlock" class="form-text" style="margin-bottom: 20px;">
                                Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                            </div>
                        </div>
                        <div class="form-check mb-3 check_me">
                            
                        </div>
                        <button class="btn btn-primary submit">Submit</button>
                    </form>
                </div>
            </div>
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
        ScrollReveal().reveal(".img-1",{
          ...scrollreveal,
            origin:"right",
            delay:300
        })
        ScrollReveal().reveal(".title",{
          ...scrollreveal,
            origin:"top",
            delay:300
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
        ScrollReveal().reveal(".check_me",{
          ...scrollreveal,
            origin:"top",
            delay:600
        })
        ScrollReveal().reveal(".submit",{
          ...scrollreveal,
            origin:"top",
            delay:700
        })

    </script>
</body>
</html>