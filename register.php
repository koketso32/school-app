<!Doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>Registration</title>
  </head>
  <body>
    <div class="container-fluid">
        <header>
            <h3>Registration</h3>
        </header>
        <div class="row">
          <form action="regist.php" method="post">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Names</label>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="John Robert">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Surname</label>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Doe">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="john.doe@example.com">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="0712345678">
            </div>
            <div class="mb-3">
              <input type="submit" value="Register">
              <input type="button" value="Cancel" onclick="document.location.href='index.php'">
            </div>
          </form>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>