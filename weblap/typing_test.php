<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="styles2.css">
    <link rel="stylesheet" href="typingstyles.css">
    <title>Speed Typing Test</title>
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

    <div class="app">
      <div class="click-area">
        <div class="bars">
            <form action="feltolt.php" method="POST">
                <input type="hidden" id="typing" name="typing"/>
                <button type="submit" value="Elküld" id="score">Save Score</button>
            </form>
          <!--<button id="score">Save Score</button>-->
        </div>
        <div class="bars"> 
          <p>Timer: </p>
          <p id="timetext">30</p>
        </div>
        <div class="bars"> 
          <p>Words/minute: </p>
          <p id="wpm">0</p>
        </div>
            <div class="innertext">
                <p></p>
            </div>
            <div class="typing-text">
              <textarea cols="100" rows="5" style="resize: none" class="input-field"></textarea>
            </div>          
      </div>
  </div>
 

    <script src="paragraphs.js"></script>
    <script src="typing.js"></script>
    <script type="text/javascript">
      var myvar='<?php if(isset($_SESSION["name"])){
        echo $_SESSION["name"];
      }else{
        echo "Nem vagy bejelntkezve";
      }?>';
      
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>