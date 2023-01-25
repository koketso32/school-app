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
            <div class="col-md-6 mb-3">
              <label for="exampleFormControlInput1" class="form-label">Names *</label>
              <input type="email" class="form-control" required="true" 
                oninvalid="this.setCustomValidity('Please fill in all the required fields *')"
                oninput="this.setCustomValidity('')"
                id="exampleFormControlInput1" placeholder="John Robert">
            </div>
            <div class="col-md-6 mb-3">
              <label for="exampleFormControlInput1" class="form-label">Surname *</label>
              <input type="email" class="form-control" required="true" 
                oninvalid="this.setCustomValidity('Please fill in all the required fields *')"
                oninput="this.setCustomValidity('')"
                id="exampleFormControlInput1" placeholder="Doe">
            </div>
            <div class="col-md-6 mb-3">
              <label for="exampleFormControlInput1" class="form-label">Email address *</label>
              <input type="email" class="form-control" required="true" 
                oninvalid="this.setCustomValidity('Please fill in all the required fields *')"
                oninput="this.setCustomValidity('')"
                id="exampleFormControlInput1" placeholder="john.doe@example.com">
            </div>
            <div class="col-md-6 mb-3">
              <label for="exampleFormControlInput1" class="form-label">Phone Number *</label>
              <input type="email" class="form-control" required="true" 
                oninvalid="this.setCustomValidity('Please fill in all the required fields *')"
                oninput="this.setCustomValidity('')"
                id="exampleFormControlInput1" placeholder="0712345678">
            </div>
            <div class="col-md-6 mb-3">
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Register
              </button>
              <input type="button" class="btn btn-default" value="Go Back Home" onclick="document.location.href='index.php'">
            </div>
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    Clicking on the "Understood, Proceed" button means you have made sure everything looks good
                    and you are happy to proceed with registering this user.
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" value="Understood, Proceed">
                  </div>
                </div>
              </div>
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