<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="styles2.css">
    <title>Human Benchmark - Reaction Time Test</title>
    
</head>
<body>
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
            <a class="nav-link" href="http://localhost/HUMAN-BENCHMARK-MAIN/weblap/dashboard.html">Dashboard</a>
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
            <div class="col click-area" style="height: 33rem;">
                <div class="title">
                    <p class="my-3" stlye="text-align: center;"><i class="bi bi-lightning-fill" style="font-size: 8rem;"></i></p>
                    <h1 style="font-size: 5rem;">Reaction Time Test</h1>
                </div>
                <div class="h4 display-text d-flex justify-content-center">When the red box turns green, click as quickly as you can.<br>
                  Click anywhere to start.</div>
                <div class="display-html" stlye="text-align: center;"></div>
            </div>
        </div>
        <!--<div class="board row mb-5">
            <div class="recent-scores">
                <div class="score">-</div>
                <div class="score">-</div>
                <div class="score">-</div>
            </div>
        </div>-->
    </div>







    





    <div class="container">
      <div class="d-flex justify-content-center">
          <div class="row mt-5">
              <div class="col">
                  <div class="card" style="width: 30rem;">
                      <h5 class="card-title display-6">Statistics</h5>
                      <img src="k??pek/reaction.png" class="card-img-top" alt="...">                          
                  </div>
              </div>
              
              <div class="col">
                  <div class="card" style="width: 30rem;">
                      <div class="card-body">
                        <h5 class="card-title display-6">About the test</h5>
                        <p class="card-text">This is a simple tool to measure your reaction time.
                          <br><br>
                          The average (median) reaction time is 273 milliseconds, according to the data collected so far.
                          <br><br>
                          In addition to measuring your reaction time, this test is affected by the latency of your computer and monitor. Using a fast computer and low latency / high framerate monitor will improve your score.
                          <br><br>
                          Scores in this test are faster than the aim trainer test, because you can react instantly without moving the cursor.
                          <br><br>
                          This is discussed in further detail on the the statistics page. While an average human reaction time may fall between 200-250ms, your computer could be adding 10-50ms on top. Some modern TVs add as much as 150ms!
                          <br><br>
                          Other tools: What's My GPU?
                          <br><br>
                          If you want, you can keep track of your scores, and see your full history of reaction times.
                          Just perform at least 5 clicks and then save.</p>
                      </div>
                    </div>
              </div>
          </div>
      </div>
  </div>

  <footer class="container-fluid bg-light mt-5 border-top py-3">
      <p class="text-muted">Copyright 2022-2022 Human Benchmark</p>
  </footer>




    <script src="reaction.js"></script>
    <script type="text/javascript">
      var myvar='<?php if(isset($_SESSION["name"])){
        echo $_SESSION["name"];
      }else{
        echo "Nem vagy bejelntkezve";
      }?>';
      
    </script>
</body>
</html>