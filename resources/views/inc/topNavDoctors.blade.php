<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class = "nav-link" href="{{route('homeDoctor')}}"><b>Home</b></a>
        </li>
        <li class="nav-item active">
            <a class = "nav-link" href="{{route('doctorFee')}}"><b>Fee</b></a>
        </li>
        <li class="nav-item active">
            <a class = "nav-link" href="{{route('prescriptions')}}"><b>Prescriptions</b></a>
        </li>
        <li class="nav-item active">
            <a class = "nav-link" href="{{route('prescriptionsList')}}"><b>Prescriptions List</b></a>
        </li>
        <li>
            <a class = "nav-link" href="{{route('logout')}}"><b>Logout</b></a>
        </li>
        </ul>
    </div>
</nav>