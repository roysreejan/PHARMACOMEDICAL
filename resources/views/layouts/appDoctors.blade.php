<html>
    <head>
    <title>PHARMACOMEDICAL</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>    
    </head>
    <body>
        <div class="container">
            @include('inc.topNavDoctors')
             <div>
                @yield('contentDoctors')
            </div>
        </div>
    </body>
</html>