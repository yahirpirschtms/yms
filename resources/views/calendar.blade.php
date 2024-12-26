<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WH Appointment Viewer</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Cargar jQuery antes de FullCalendar -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Cargar FullCalendar 5.x con los plugins necesarios -->
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/interaction@5.11.0/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/timegrid@5.11.0/main.min.js"></script>

    <!-- Cargar Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

    <!-- Menú de navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #1e4877;">
        <div class="container-fluid">
            <button class="navbar-toggler" style="border: none;" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars text-light"></i>
            </button>
            <a class="navbar-brand fw-bolder text-light fs-4" href="#">
                <img src="{!! asset('/icons/tms_logo.png') !!}" alt="Logo" class="d-inline-block align-middle" style="max-height: 35px;"/>
                TMS YMS
            </a>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-body" style="background-color: #1e4877;">
                    <ul class="navbar-nav justify-content-start flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link text-light" aria-current="page" href="#">Trailer Status</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Contenido del Calendario -->
    <div class="container-fluid" style="margin-top: 100px;">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center mb-4">WH Appointment Viewer</h1>
                <!-- Calendario interactivo -->
                <div id="calendar"></div>
            </div>
        </div>
    </div>

    <!-- Slider lateral para mostrar los detalles del evento -->
    <div id="eventSlider" class="event-slider">
        <div class="slider-content">
            <button id="closeSliderBtn" class="btn-close" aria-label="Close">×</button>
            <h5 id="eventTitle" class="slider-title">Event Title</h5>
            <p id="eventDescription" class="slider-description">Event Description</p>
            <button id="offLandingMenuBtn" class="btn btn-primary">
                <i class="fa fa-warehouse"></i> Offlanding Menu
            </button>
        </div>
    </div>

    <style>
        #calendar {
            max-width: 80%;
            margin: 0 auto;
            height: 700px;
        }

        .fc-event {
            background-color: #4CAF50;
            color: white;
            border-radius: 5px;
            padding: 10px;
            font-size: 12px;
        }

        .fc-event-title {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .fc-event-description {
            font-size: 10px;
        }

        .fc-event:hover {
            background-color: #45a049;
        }

        /* Estilo del slider lateral */
        .event-slider {
            position: fixed;
            top: 0;
            right: -100%; /* Inicialmente oculto a la derecha */
            width: 400px;
            height: 100%;
            background-color: #f8f9fa;
            transition: right 0.3s ease;
            z-index: 1000;
            box-shadow: -2px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            display: flex;
            flex-direction: column;
        }

        .slider-content {
            overflow-y: auto;
            flex-grow: 1;
        }

        .slider-title {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .slider-description {
            font-size: 1rem;
            color: #333;
        }

        /* Mover el botón de cierre a la derecha */
        .btn-close {
            background: transparent;
            border: none;
            font-size: 2rem;
            color: #6c757d;
            padding: 0;
            margin: 0;
            position: absolute;
            top: 20px;
            right: 20px; /* Alineación a la derecha */
        }

        .btn-close:hover {
            color: #dc3545;
        }

        .btn {
            margin-top: 20px;
        }

        #offLandingMenuBtn {
            background-color: #1e4877;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 1rem;
        }

        #offLandingMenuBtn:hover {
            background-color: #155a7f;
        }

        #offLandingMenuBtn i {
            margin-right: 5px;
        }

        /* Mostrar el slider */
        .event-slider.show {
            right: 0;
        }

        /* Estilo para asegurar el color blanco en el texto de la barra de navegación */
        .navbar-dark .navbar-nav .nav-link {
            color: #ffffff !important; /* Asegura el color blanco en los enlaces */
        }

        .navbar-dark .navbar-brand {
            color: #ffffff !important; /* Asegura que el texto de la marca también sea blanco */
        }

        .navbar-dark .navbar-toggler-icon {
            background-color: #ffffff; /* Cambiar el color del ícono del toggler a blanco */
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Pasar los eventos desde PHP (en formato JSON) a JavaScript
            const events = {!! json_encode($events) !!};
            console.log(events); // Verifica si los eventos están llegando correctamente

            // Inicialización del calendario
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'timeGridDay',  // Vista inicial, puede ser timeGridWeek o timeGridMonth
                headerToolbar: {
                    left: 'prev,next today',  // Botones de navegación
                    center: 'title',  // Título del mes
                    right: 'timeGridDay,timeGridWeek,dayGridMonth'  // Vistas de día, semana y mes
                },
                events: events,  // Aquí se pasan los eventos a FullCalendar

                eventTimeFormat: {
                    hour: '2-digit',
                    minute: '2-digit',
                    meridiem: 'short',
                    hour12: true
                },

                // Función para mostrar los detalles del evento al hacer clic
                eventClick: function(info) {
                    // Obtener detalles del evento
                    var eventTitle = info.event.title;
                    var eventDescription = info.event.extendedProps.description;

                    // Llenar el contenido del slider con la información del evento
                    document.getElementById('eventTitle').innerText = eventTitle;
                    document.getElementById('eventDescription').innerText = eventDescription;

                    // Mostrar el slider
                    document.getElementById('eventSlider').classList.add('show');
                }
            });

            calendar.render();

            // Cerrar el slider cuando se haga clic en el botón de cierre
            document.getElementById('closeSliderBtn').addEventListener('click', function() {
                document.getElementById('eventSlider').classList.remove('show');
            });

            // Botón de Offlanding
            document.getElementById('offLandingMenuBtn').addEventListener('click', function() {
                alert('Offlanding Menu clicked!');
            });
        });
    </script>

    <!-- Cargar Bootstrap JS y Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>
