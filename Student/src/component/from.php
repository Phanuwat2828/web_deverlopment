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
        <a class="navbar-brand">Dog Compony</a>
        <div style="display: flex; flex-direction: row;" class="nav-item"> 

        </div>
      </div>
    </nav>
    <div class="content" style="width: 100%; height: 100%; display: flex; justify-content: center;">
        <div class="content_1 border border-light-subtle" style="width: 50%; height: 100%; display: flex; flex-direction: column; border-radius: 10px; padding: 50px; margin-top:20px;">
            <h1 class="title">Form</h1>
            <form action="set_session.php" method="POST">
            <div class="mb-3 user2">
                    <label for="exampleFormControlInput1" class="form-label">ชื่อนิสิต</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Figer768" name="name">
                </div>
                <div class="mb-3 user1">
                    <label for="exampleFormControlInput1" class="form-label">นามสกุลนิสิต</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Figer768" name="lastname">
                </div>
                <div class="mb-3 email">
                    <label for="exampleFormControlInput1" class="form-label">รหัสนิสิต</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="12345..." name="id">
                </div>
                
                <div class="input-group mb-3 e1">
                    <label class="input-group-text" for="inputGroupSelect01">คำนำหน้า</label>
                    <select class="form-select" id="inputGroupSelect01" name="gender">
                        <option value="Mr">Mr</option>
                        <option value="Mrs">Mrs</option>
                    </select>
                    
                </div>
                <div class="input-group mb-3 e1">
                    <label class="input-group-text" for="inputGroupSelect01">ชั้นปี</label>
                    <select class="form-select" id="inputGroupSelect01" name="level">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                    
                </div>
                <div class="password">
                  <label for="inputPassword5" class="form-label">เกรดเฉลี่ย</label>
                  <input type="text" id="inputPassword5" class="form-control" name="avg_gpa" placeholder="2.5,3.2">
                </div>

                <div class="mt-3 birth" style="margin-bottom: 10px;">
                  <label for="inputPassword6" class="form-label">Your Birth Day</label>
                  <input type="date" id="inputPassword6" class="form-control" value="2024-12-25" aria-describedby="passwordHelpBlock" name="birth">
                </div>
                <input type="hidden" name="status" value="add">

                <button class="btn btn-primary submit">ยืนยัน</button>
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
      ScrollReveal().reveal(".user2",{
        ...scrollreveal,
          origin:"top",
          delay:300
      })
      ScrollReveal().reveal(".user1",{
        ...scrollreveal,
          origin:"top",
          delay:200
      })
      ScrollReveal().reveal(".email",{
        ...scrollreveal,
          origin:"top",
          delay:400
      })
      ScrollReveal().reveal(".e1",{
        ...scrollreveal,
          origin:"top",
          delay:500
      })
      ScrollReveal().reveal(".password",{
        ...scrollreveal,
          origin:"top",
          delay:600
      })
      ScrollReveal().reveal(".birth",{
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