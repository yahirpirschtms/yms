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
    <div class="">
      <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #1e4877; color:white">
        <div class="container-fluid d-flex justify-content-start">
          <button class="navbar-toggler" style="border: none;" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <i class="fa-solid fa-bars text-light"></i>
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
                  <a class="nav-link text-light" aria-current="page" href="#">Trailer Status</a>
                </li>

                <!--options shipments-->
                <li class="nav-item dropdown ">
                  <a class="nav-link text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Shipments
                  </a>
                  <ul class="ms-4 dropdown-menu dropdown-menu-start" style="background-color: #1e4877; border:none">
                    <li><a class="dropdown-item text-light" href="#">Live Shipments</a></li>
                    <li class="ms-2 me-4">
                      <hr class="dropdown-divider bg-white">
                    </li>
                    <li><a class="dropdown-item text-light" href="#">All Shipments</a></li>
                    <!--<li>
                      <hr class="dropdown-divider">
                    </li>-->
                  </ul>
                </li>

                <!--options catalog-->
                <li class="nav-item dropdown ">
                  <a class="nav-link text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Carriers
                  </a>
                  <ul class="ms-4 dropdown-menu dropdown-menu-start" style="background-color: #1e4877; border:none">
                    <li><a class="dropdown-item text-light" href="#">Carrier Management</a></li>
                    <li class="ms-2 me-4">
                      <hr class="dropdown-divider bg-white">
                    </li>
                    <li><a class="dropdown-item text-light" href="#">Driver Management</a></li>
                    <li class="ms-2 me-4">
                      <hr class="dropdown-divider bg-white">
                    </li>
                    <li><a class="dropdown-item text-light" href="#">Trailer Management</a></li>
                    <li class="ms-2 me-4">
                      <hr class="dropdown-divider bg-white">
                    </li>
                    <li><a class="dropdown-item text-light" href="#">Truck Management</a></li>

                    <!--<li>
                      <hr class="dropdown-divider">
                    </li>-->
                  </ul>
                </li>

                <!--options calendar-->
                <li class="nav-item dropdown ">
                  <a class="nav-link text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Appoinment Viewer
                  </a>
                  <ul class="ms-4 dropdown-menu dropdown-menu-start" style="background-color: #1e4877; border:none">
                    <li><a class="dropdown-item text-light" href="#">WH Appointment Approval</a></li>
                    <li class="ms-2 me-4">
                      <hr class="dropdown-divider bg-white">
                    </li>
                    <li><a class="dropdown-item text-light" href="#">WH Appointment Viewer</a></li>
                    <li class="ms-2 me-4">
                      <hr class="dropdown-divider bg-white">
                    </li>
                    <li><a class="dropdown-item text-light" href="#">Historical Calendar Viewer</a></li>
                    <!--<li>
                      <hr class="dropdown-divider">
                    </li>-->
                  </ul>
                </li>

                <!--options calendar-->
                <li class="nav-item dropdown ">
                  <a class="nav-link text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Maintenance
                  </a>
                  <ul class="ms-4 dropdown-menu dropdown-menu-start" style="background-color: #1e4877; border:none">
                    <li><a class="dropdown-item  text-light" href="#">Maintenance Done</a></li>
                    <li class="ms-2 me-4">
                      <hr class="dropdown-divider bg-white">
                    </li>
                    <li><a class="dropdown-item  text-light" href="#">Truck Maintenance</a></li>
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

    <nav class="navbar bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Default</a>
      </div>
    </nav>
  </section>
  
</body>
</html>