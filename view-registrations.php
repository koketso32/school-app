<?php
    include 'db_config.php';

    $users = $conn->query("SELECT * FROM user AS u ORDER BY u.names ASC");
?>
<!Doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>View Registrations</title>
  </head>
  <body>
    <div class="container-fluid">
        <header>
            <h3>View Registrations</h3>
            <input type="search" name="search" id="search" placeholder="Please enter name and hit search" style="width: 16rem;">
            <input type="submit" value="Search">
        </header><br>
        <div class="row">
            <?php
                if($users->rowCount() <= 0)
                {
                    echo "<h3>No One has been registered yet: ".$users->rowCount()."</h3>";
                }
                else {
                    # code...
                    while ($user = $users->fetch(PDO::FETCH_ASSOC)) {
                        # code...
                        echo '
                            <div class="col-md-3 col-sm-6 mr-2 mb-2" onclick="document.location.href=\'define-registration.php?u='.md5($user['userid']).'\'">
                                <div class="card border-0 border-bottom-yellow shadow-lg shadow-hover">
                                    <div class="card-body text-center">
                                        <div class="text-center">
                                            <i class="fa fa-2x fa-code my-2"></i>
                                        </div>
                                        '.$user['names'].' '.$user['surname'].'
                                    </div>
                                </div>
                            </div>
                        ';
                    }
                }
            ?>
            
            <!-- <div class="col-md-3 col-sm-6 mr-2 mb-2">
                <div class="card border-0 border-bottom-yellow shadow-lg shadow-hover">
                    <div class="card-body text-center">
                        <div class="text-center">
                            <i class="fa fa-2x fa-code my-2"></i>
                        </div>
                        First Registration
                    </div>
                </div>
            </div> -->
        </div><br>
        <input type="button" value="Go Back to homepage" onclick="document.location.href='index.php'">
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