@extends('layouts.base_layout')

@section('head')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
@stop

@section('content')
    <div class="jumbotron">
        <h3 class="display-6">Proyecto Laravel IPS</h3>
        <p class="lead">Gráfico de barras que muestra la cantidad de usuarios de cada nacionalidad, tomados de una base de datos mysql</p>
        <hr class="my-4">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4 w-50 h-50">
                <canvas id="myChart" width="500" height="500" style="align-content: center"></canvas>
            </div>
            <div class="col-4"></div>
        </div>
    </div>

@stop

@section('scripts')

    <script>
        var ctx = document.getElementById('myChart');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($nationalities); ?>,
                datasets: [{
                    label: 'Nationalities',
                    data: <?php echo json_encode($data); ?>,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
@stop
