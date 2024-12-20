<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite([
        'resources/sass/app.scss',
        'resources/js/app.js'
        ])
</head>
<body>
  <!--Navegation menu-->
  <section>
    <div>
      <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #1e4877; color:white">
        <div class="container-fluid d-flex justify-content-start">
          <button class="navbar-toggler" style="border: none;" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" ></span>
          </button>
          <a class="navbar-brand fw-bolder text-light fs-4" href="#">
            <img src="{!! asset('/icons/tms_logo.png')!!}" alt="Logo" height="35" class="d-inline-block align-middle">
            TMS YMS
          </a>
          <div class="offcanvas offcanvas-start " tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <!--<div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>-->
            <div class="offcanvas-body" style="background-color: #1e4877;">
              <ul class="navbar-nav justify-content-start flex-grow-1 pe-3">

                <li class="nav-item">
                  <a class="nav-link text-light" aria-current="page" href="#">Home</a><i class="fa-solid fa-bars"></i>
                </li>
                <li class="nav-item dropdown ">
                  <a class="nav-link text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Shipments
                  </a>
                  <ul class="dropdown-menu dropdown-menu-start">
                    <li><a class="dropdown-item" href="#">Live Shipments</a></li>
                    <li><a class="dropdown-item" href="#">All Shipments</a></li>
                    <!--<li>
                      <hr class="dropdown-divider">
                    </li>-->
                  </ul>
                </li>

              </ul>
              <!--<form class="d-flex mt-3" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>-->
            </div>
          </div>
        </div>
      </nav>
    </div>
  </section>


    <!--Navegation menu-->
    <section>
      <div class="">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">
              <img src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
              TMS YMS
            </a>  

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </section>


  <section>
    <div class="container mt-4">
      <form>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </section>
</body>
</html>