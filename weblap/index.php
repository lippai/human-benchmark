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
            <div class="col text-center background mb-5" style="height: 33rem;">
                <p class="my-3"><i class="bi bi-lightning-fill pulse" style="font-size: 8rem;"></i></p>
                <h1 style="font-size: 5rem;">Human Benchmark</h1>
                <p class="h5">Measure your abilities with brain games and cognitive tests.</p>
                <a type="button" class="btn btn-warning btn-lg mt-3 mb-5" href="reaction_time_test.php">Get Started</a>
            </div>
        </div>
    </div>

    <div class="container py-5">
      <div class="d-flex justify-content-center">
        <div class="row py-3">
          <div class="col">
              <a class="card text-decoration-none text-reset bg-light" style="width: 18rem; height: 16rem;" href="reaction_time_test.php">
                  <div class="card-body text-center">
                    <h5 class="card-title"><i class="bi bi-lightning-fill" style="font-size: 4rem;"></i></h5>
                    <h3 class="card-subtitle my-3">Reaction Time</h6>
                    <p class="card-text" style="font-size: 1.2rem;">Test your visual reflexes.</p>
                  </div>
              </a>
          </div>
          <div class="col">
              <a class="card text-decoration-none text-reset bg-light" style="width: 18rem; height: 16rem;" href="typing_test.php">
                  <div class="card-body text-center">
                    <h5 class="card-title"><i class="bi bi-keyboard-fill" style="font-size: 4rem;"></i></h5>
                    <h3 class="card-subtitle my-3">Typing</h6>
                    <p class="card-text" style="font-size: 1.2rem;">How many words per minute can you type?</p>
                  </div>
              </a>
          </div>
          <div class="col">
              <a class="card text-decoration-none text-reset bg-light" style="width: 18rem; height: 16rem;" href="aim2.php">
                  <div class="card-body text-center">
                    <h5 class="card-title"><i class="bi bi-bullseye" style="font-size: 4rem;"></i></h5>
                    <h3 class="card-subtitle my-3">Aim Trainer</h6>
                    <p class="card-text" style="font-size: 1.2rem;">How quickly can you hit all the targets?</p>
                  </div>
              </a>
          </div>
      </div>
      </div>
      <div class="d-flex justify-content-center">
        <div class="row">
          <div class="col">
              <a class="card text-decoration-none text-reset bg-light" style="width: 18rem; height: 16rem;" href="chimp.php">
                  <div class="card-body text-center">
                    <h5 class="card-title"><i class="bi bi-file-bar-graph" style="font-size: 4rem;"></i></h5>
                    <h3 class="card-subtitle my-3">Chimp Test</h6>
                    <p class="card-text" style="font-size: 1.2rem;">Are you smarter than a chimpanzee?</p>
                  </div>
              </a>
          </div>
          <div class="col">
              <a class="card text-decoration-none text-reset bg-light" style="width: 18rem; height: 16rem;" href="number_memory.php">
                  <div class="card-body text-center">
                    <h5 class="card-title"><i class="bi bi-123" style="font-size: 4rem;"></i></h5>
                    <h3 class="card-subtitle my-3">Number Memory</h6>
                    <p class="card-text" style="font-size: 1.2rem;">Remember the longest number you can.</p>
                  </div>
              </a>
          </div>
          <div class="col">
              <a class="card text-decoration-none text-reset bg-light" style="width: 18rem; height: 16rem;" href="versek/remenyhez.html">
                  <div class="card-body text-center">
                    <h5 class="card-title"><i class="bi bi-card-heading" style="font-size: 4rem;"></i></h5>
                    <h3 class="card-subtitle my-3">Poems</h6>
                    <p class="card-text" style="font-size: 1.2rem;">Yes.</p>
                  </div>
              </a>
          </div>
      </div>
      </div>
    </div>

    <footer class="container-fluid bg-light mt-5 border-top py-3">
        <p class="text-muted">Copyright 2022-2022 Human Benchmark</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
