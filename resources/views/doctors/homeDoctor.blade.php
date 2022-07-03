@extends('layouts.appDoctors')
@section('contentDoctors')

    <center>
        <h1>Welcome Doctor {{Session::get('user')}}</h1>
    </center>
    <html>
        <head>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
                google.charts.load("current", {packages:["corechart"]});
                google.charts.setOnLoadCallback(drawChart);
                function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    
                    ['Star', 'No Of Patient'],
                    @if(empty($doctorreviews1))
                        ['1', 0],
                    @else
                        @foreach($doctorreviews1 as $doctorreview)
                            ['1', {{$doctorreview->counter}}],
                        @endforeach
                    @endif
                    @if(empty($doctorreviews2))
                        ['2', 0],
                    @else
                        @foreach($doctorreviews2 as $doctorreview)
                            ['2', {{$doctorreview->counter}}],
                        @endforeach
                    @endif
                    @if(empty($doctorreviews3))
                        ['3', 0],
                    @else
                        @foreach($doctorreviews3 as $doctorreview)
                            ['3', {{$doctorreview->counter}}],
                        @endforeach
                    @endif
                    @if(empty($doctorreviews4))
                        ['4', 0],
                    @else
                        @foreach($doctorreviews4 as $doctorreview)
                            ['4', {{$doctorreview->counter}}],
                        @endforeach
                    @endif
                    @if(empty($doctorreviews5))
                        ['5', 0],
                    @else
                        @foreach($doctorreviews5 as $doctorreview)
                            ['5', {{$doctorreview->counter}}],
                        @endforeach
                    @endif
    
                ]);

                    var options = 
                    {
                        title: 'Reviews',
                        is3D: true,
                    };

                    var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
                    chart.draw(data, options);
                }
            </script>
        </head>
        <body>
            <div class="d-flex justify-content-center">
            <img src="{{URL::asset('/image/aaa1.png')}}" alt="profile Pic" height="400" width="800"><div id="piechart_3d" style="width: 900px; height: 500px;"></div>
            </div>
        </body>
    </html>

@endsection