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

    <style>
      .navbar{
        background-color: #1e4877;
        height: 80px;
        margin: 20px;
        border-radius: 16px;
        padding: 0.5rem;
      }

      .navbar-brand{
        font-weight: 500;
        /*color: #1e4877;*/
        color: white;
        font-size: 24px;
        transition: 0.3s color;
      }
      .navbar-brand:hover, .navbar-brand:active{
        color: white;
      }
      .login-button{
        background-color: white;
        color: #1e4877;
        font-size: 14px;
        padding: 8px 20px;
        border-radius: 50px;
        text-decoration: none;
        transition: 0.3s background-color;
      }
      .login-button:hover{
        background-color: #c3c3c3;
      }
      .navbar-toggler{
        border: none;
        font-size: 1.25rem;
      }
      .navbar-toggler:focus, .btn-close:focus{
        box-shadow: none;
        outline: none;
      }
      .nav-link{
        color: white;
        /*color: #1e4877; */
        font-weight: 500;
        position: relative;
      }
      .dropdown-item{
        color: white;
        position: relative;
      }
      .nav-link:hover, .nav-link:active, .dropdown-item:hover, .dropdown-item:active{
        /*color: #000;*/
        color: white;
      }

      @media (min-width: 991px) {
        .nav-link::before, .dropdown-item::before{
          content: "";
          position: absolute;
          bottom: 0;
          left: 50%;
          transform: translateX(-50%);
          width: 0;
          height: 0.5px;
          background-color:white;
          /*background-color: #1e4877; */
          visibility: hidden;
          transition: 0.3s ease-in-out;
        }
        .nav-link:hover::before, .nav-link.active::before{
          width: 100%;
          visibility: visible;
        }
        .dropdown-item:hover::before, .dropdown-item.active::before{
          width: 80%;
          visibility: visible;
        }
      }
      .hero-section{
        background: white;
        background-size: cover;
        width: 100%;
      }
      .hero-section .container{
        height: 100vh;
        z-index: 1;
        position: relative;

      }
      .hero-section h1{
        font-size: 1.5em;
      }
      .non{
        cursor: default;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select:none;
        user-select:none;
      }
      .dropdown-item:hover{
        background-color: unset;
      }
      /*.hero-section::before{
        background-color: rgb(0, 0, 0, 0.6);
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
      }*/
    </style>
</head>
<body>
      <!--Navbar-->
      <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
          <button class="navbar-toggler ps-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars text-light"></i>
          </button>
          <a class="navbar-brand fw-bolder d-none d-lg-block non" href="#"><img src="{!! asset('/icons/tms_logo.png')!!}" alt="Logo" height="35" class="d-inline-block align-middle ">
            TMS YMS</a>
          <a class="d-md-block d-lg-none navbar-brand fw-bolder align-middle non" href="#">TMS YMS</a>
          <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header position-relative" style="background-color: #1e4877;">
              <h5 class="offcanvas-title align-middle non text-light fw-bolder" id="offcanvasNavbarLabel">YMS TMS</h5>
              <div data-bs-theme="dark">
              <button type="button" class="btn-close position-absolute top-0 end-0 " data-bs-dismiss="offcanvas" aria-label="Close" style="padding-top: 3.5rem; padding-right: 3.1rem"></button>
              </div>
            </div>
            <div class="offcanvas-body" style="background-color: #1e4877;">
              <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                <!--Trailer Status-->
                <li class="nav-item ">
                  <a class="nav-link mx-lg-2 active text-light" aria-current="page" href="#">Trailer Status</a>
                </li>

                <!--options shipments-->
                <li class="nav-item dropdown ">
                  <a class="nav-link mx-lg-2 text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Shipments
                  </a>
                  <ul class="ms-4 dropdown-menu dropdown-menu-start" style="background-color: #1e4877; border:none">
                    <li><a class="dropdown-item" href="#">Traffic Workflow Start</a></li>
                    <li><a class="dropdown-item" href="#">Live Shipments</a></li>
                    <li><a class="dropdown-item" href="#">All Shipments</a></li>
                  </ul>
                </li>

                <!--options catalog-->
                <li class="nav-item mx-lg-2 dropdown ">
                  <a class="nav-link text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Carriers
                  </a>
                  <ul class="ms-4 dropdown-menu dropdown-menu-start" style="background-color: #1e4877; border:none">
                    <li><a class="dropdown-item" href="#">Carrier Management</a></li>
                    <li><a class="dropdown-item" href="#">Driver Management</a></li>
                    <li><a class="dropdown-item" href="#">Trailer Management</a></li>
                    <li><a class="dropdown-item" href="#">Truck Management</a></li>
                  </ul>
                </li>

                <!--options calendar-->
                <li class="nav-item dropdown ">
                  <a class="nav-link text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Appoinment Viewer
                  </a>
                  <ul class="ms-4 dropdown-menu dropdown-menu-start" style="background-color: #1e4877; border:none">
                    <li><a class="dropdown-item text-light" href="#">WH Appointment Approval</a></li>
                    <li><a class="dropdown-item text-light" href="#">WH Appointment Viewer</a></li>
                    <li><a class="dropdown-item text-light" href="#">Historical Calendar Viewer</a></li>
                  </ul>
                </li>

                <!--options Maintenance-->
                <li class="nav-item dropdown ">
                  <a class="nav-link text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Maintenance
                  </a>
                  <ul class="ms-4 dropdown-menu dropdown-menu-start" style="background-color: #1e4877; border:none">
                    <li><a class="dropdown-item  text-light" href="#">Maintenance Done</a></li>
                    <li><a class="dropdown-item  text-light" href="#">Truck Maintenance</a></li>
                    <!--<li>
                      <hr class="dropdown-divider">
                    </li>-->
                  </ul>
                </li>

              </ul>
            </div>
          </div><p class="navbar-brand fw-bolder d-none d-lg-block non" style="color: #1e4877;">TMS YMS
                 </p>
          <a href="" class="login-button"><i class="fa-solid fa-user"></i></a>
        </div>
      </nav>
      <!--End Navbar-->

      <!--Section-->
      <section class="hero-section">
        <div class="container d-flex align-items-center justify-content-center fs-1 flex-column">
          <h1>Traffic Workflow Start</h1>
        </div>
      </section>
      <!--End Section-->

  
</body>
</html>