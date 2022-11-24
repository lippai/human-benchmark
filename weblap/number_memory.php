<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Number memory</title>
    <link rel="stylesheet" href="number_memory.css">

</head>
<body>


    <?php include "session.php" ?>
    <nav class="navbar sticky-top navbar-expand-lg bg-light">
        <div class="container">
          <a class="navbar-brand"><i class="bi bi-lightning-fill"></i>HUMAN BENCHMARK</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="dashboard.html">Dashboard</a>
              </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="sign_up.html">Sign Up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.html">Login</a>
                </li>
            </ul>
          </div>
        </div>
    </nav>




    <div id="app">
        <div class="click-area">
            <div class="container kontener">
                <div class="level-text"></div>
                <h1 class="title">Number Memory</h1>
                
                <div class="display-text">The average person can remember 7 numbers at once. Can you do more?</div>
                <div class="display-text2"></div>
                <div class="inputArea">
                    <input id="input" type="text">
                </div>
                
                <div id="st">
                    <button id="start" type="button" style="background-color: yellow; border: none; font-size: larger; border-radius: 10px;">Start</button>
                </div>

                <div id="submit">
                    <button id="submitBtn" type="button" style="visibility: hidden; background-color: yellow; border: none; font-size: larger; border-radius: 10px;">Submit</button>
                </div>

                <div id="next">
                    <button id="nextBtn" type="button" style="visibility: hidden; background-color: yellow; border: none; font-size: larger; border-radius: 10px;">Next</button>
                </div>
                <div id="text">
                    <button id="restartBtn" type="button" style="visibility: hidden; background-color: yellow; border: none; font-size: larger; border-radius: 10px;">Restart</button>
                    <button id="saveBtn" type="button" style="visibility: hidden; background-color: yellow; border: none; font-size: larger; border-radius: 10px;">Save score</button>
                </div>
                
            
            </div>
        </div>
    </div>

    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="row">
                <div class="col">
                    <div class="card" style="width: 30rem;">
                        <h5 class="card-title display-6">Statistics</h5>
                        <img src="képek/reaction.png" class="card-img-top" alt="...">                          
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


    <script src="number_memory.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script type="text/javascript">
      var myvar='<?php if(isset($_SESSION["name"])){
        echo $_SESSION["name"];
      }else{
        echo "Nem vagy bejelntkezve";
      }?>';
</body>
</html>