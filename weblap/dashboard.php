<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Human Benchmark</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  </head>
  <body>
  <?php include "session.php" ?>
  <nav class="navbar sticky-top navbar-expand-lg bg-light">
        <div class="container">
          <a class="navbar-brand"><i class="bi bi-lightning-fill pulse"></i>HUMAN BENCHMARK</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="http://localhost/HUMAN-BENCHMARK-MAIN/weblap/index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="dashboard.php">Dashboard</a>
              </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/HUMAN-BENCHMARK-MAIN/weblap/sign_up.html">Sign Up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/HUMAN-BENCHMARK-MAIN/weblap/login.html">Login</a>
                </li>
            </ul>
          </div>
        </div>
    </nav>


    <div class="container-fluid">
        <div class="row">
            <div class="col text-center background mb-5" style="height: 10rem;">
            <h1 style="font-size: 2rem;" class="mt-5">
                <?php
                    $conn = mysqli_connect("localhost", "root","","weblap") or die('Unable To connect');

                    //$sql = "SELECT email, aim_score, chimp_score, reaction_score, number_score FROM MyGuests";
                    //$result = $conn->query($sql);
                    if(isset($_SESSION["name"])){
                      $result = mysqli_query($conn,"SELECT * FROM reg WHERE email='" . $_SESSION["name"] ."'");
                      $row  = mysqli_fetch_array($result);
                      if ($result->num_rows > 0) {
                        // output data of each row
                          echo "Email: " . $row["email"]. " - Aim score: " . $row["aim_score"]. " - Chimp score: " . $row["chimp_score"]." - Reaction score: " . $row["reaction_score"]."ms"." - Number score: " . $row["number_score"]."<br>";
                      } else {
                        echo "0 results";
                      }
                    }else{
                        echo "Nem vagy bejelentkezve!";
                    }
                  ?>                  
                </h1>
            </div>
        </div>
    </div>


    <footer class="container-fluid bg-light mt-5 border-top py-3">
        <p class="text-muted">Copyright 2022-2022 Human Benchmark</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
