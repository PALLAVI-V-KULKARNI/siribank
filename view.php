<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="create.css" class="rel">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    

    <title>Account Details</title>
</head>

<body style="background-color:peachpuff;">


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Siri Bank</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php?id= ">Home</a>
                    </li>



                </ul>

            </div>
        </div>
    </nav>

    <?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "bank";

    // Create a connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Die if connection was not successful
    if (!$conn) {
        die("Sorry we failed to connect: " . mysqli_connect_error());
    }


    $sql = "SELECT * FROM `users`";
    $result = mysqli_query($conn, $sql);

    // Find the number of records returned
    $num = mysqli_num_rows($result);
    //echo $num;
    //echo " records found in the DataBase<br>";

    ?>

    <div class="container">


        <h2 class="text-center pt-4">ACCOUNT DETAILS</h2>


        <br>

        <div class="row">
            <div class="col">
                <div class="table-responsive-sm">

                    <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                        <thead>

                            <tr>
                                <th scope="col" class="text-center py-2">Sno</th>
                                <th scope="col" class="text-center py-2">Account Holder Name</th>
                                <th scope="col" class="text-center py-2">Email-Id</th>
                                <th scope="col" class="text-center py-2">Bank Balance(in Rs.)</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($rows = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr>
                                    <td class="py-2"><?php echo $rows['id'] ?></td>
                                    <td class="py-2"><?php echo $rows['name'] ?></td>
                                    <td class="py-2"><?php echo $rows['email'] ?></td>
                                    <td class="py-2"><?php echo $rows['balance'] ?></td>

                                </tr>
                            <?php
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>