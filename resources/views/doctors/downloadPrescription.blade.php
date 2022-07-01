<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    </head>
    <body>
        <form>
            <div class="d-flex justify-content-center pt-5">
            <table class = "table table-bordered rounded" style="width:800px">
                @foreach ($prescription as $pre)
                <tr>
                    <td>
                        <center>
                            <h1 style="color:red;">PHARMACOMEDICAL</h1>
                            <p class="fw-bold">For Better Health</p>
                            <p class="fw-bold text-primary" style="font-size: 20px">Dr.    @foreach ($doctorName as $doctorname) {{$doctorname->name}} @endforeach</p>
                            <div class="d-flex flex-row justify-content-center fw-bold text-secondary" style="font-size: 14px">
                                <p>Doctor ID: {{$pre->doctorID}}</p>&nbsp;|&nbsp;<p>Prescription ID: {{$pre->prescriptionID}}</p>&nbsp;|&nbsp;<p>Appointment ID: {{$pre->appID}}</p>
                            </div>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="d-flex flex-row justify-content-center fw-bold" style="font-size: 16px">
                            <p>Patient Name: <u>{{$pre->name}}</u></p>&emsp;<p>Patient ID: {{$pre->userID}}</p>&emsp;<p>Age: {{$pre->userID}}</p>&emsp;<p>Sex: {{$pre->gender}}&emsp;<p>Date: {{$pre->userID}}</p>
                        </div>
                    </td>

                </tr>
                <tr style="height: 300px;">
                    <td>
                        <table>
                            <tr>
                                <td>
                                    <div class="ps-4">
                                        <img src="{{URL::asset('/image/Rx.png')}}" alt="profile Pic" height="40" width="40">
                                    </div>
                                </td>
                                <td style="padding-left: 60px;">
                                    @foreach ($medicinelists as $value)
                                        <div class="ps-5 pb-1">
                                            {{$value}}
                                        </div>
                                    @endforeach
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td><p class="fw-bold">Advice: <span class="fw-normal">{{$pre->advice}}</span></p></td>
                </tr>
                <tr>
                    <td>
                    <center>
                        <div class="fw-semibold text-dark" style="font-size: 11px">
                            <p>Bashundhara R/A. Dhaka, Bangladesh</p>
                            <p>Phone: +8801810101010, Email: pharmacomedical@gmail.com, Web: www.pharmacomedical.com</p>
                        </div>
                        </center>
                    </td>
                </tr>
                @endforeach
            </table>
            </div>
        </form>
        <div class="d-flex justify-content-center">
            <span>
                <a href="javascript:window.print()" class="btn btn-success"><i class="fa fa-print"></i> Print</a>
            </span>
        </div>
    </body>
</html>
