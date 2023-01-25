<?php
    include 'db_config.php';

    $uid=$_GET['u'];

    $users = $conn->query("SELECT * FROM user AS u WHERE md5(u.userid)=$uid ORDER BY u.names ASC");
?>
<!Doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Define a Registration</title>
  </head>
<body>
    <div class="container-fluid">
        <div class="row">
            <?php
                if ($users->rowCount() <= 0) {
                    # code...
                    # nothing for now, this should never be the case
                }
                else {
                    # code...
                    $user=$users->fetch(PDO::FETCH_ASSOC);
                    echo 'User: '.$user['names'];
                }
            ?>
            <center><i class="bi bi-person-circle"></i></center>
        </div>
    </div>
</body>
</html>