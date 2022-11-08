<?php 
if(isset($_SERVER['HTTPS'])&& $_SERVER['HTTPS']==='on'){
    $url="https://";
}else{
    $url="http://";
    $url.=$_SERVER['HTTP_HOST'];
    $url.=$_SERVER['REQUEST_URI'];
    $url;
}
$page=$url;
$sec="10";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="refresh" content="<?php echo $sec;?>" URL="<?php echo $page; ?>">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos AT</title>



    <link rel="stylesheet" href="style/css/estilos-uno.css">
    <link rel="stylesheet" href="style/css/bootstrap.min.css">
    <script src="style/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
</head>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>

<body class="" id="bodybg">
    <nav class="navbar navbar-expand-lg bg-danger">
        <div class="container-fluid">
            <a class="navbar-brand text-white fs-2 fw-bold" href="#">CONTROL DE LOTES</a>
        </div>

        <form class="container offset-md-7 text-center text-white" role="search">
            <div class="row gx-5">
                <div class="col h4">
                    <h4>Fecha:&nbsp;</h4>
                    <script>
                    date = new Date().toLocaleDateString();
                    document.write(date);
                    </script>
                </div>

                <div class="col">
                    <h4>Hora:&nbsp;</h4>
                    <h4 id="HoraActual"> </h4>
                </div>

            </div>

        </form>
    </nav>

    <main class="m-5 p-5">

        <div class="border border-dark col-md-3 text-center">
            <div class="py-3">
                <div class="py-3">
                    <h1 class="">Modelo Actual</h1>
                    <h1 class="">0000</h1>
                </div>
            </div>
        </div>

        <div class="my-5 border border-dark col-3 text-center">
            <div class="py-3">
                <div class="py-3">
                    <h2>Conteo de piezas</h2>
                    <br>
                    <input type="text" name="qty" id="">
                    <br><br>
                    <div class="py-3 fs-2 bg-success text-white">40</div>
                </div>
            </div>
        </div>

        <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="bg-success text-white text-center m-1">
                    <div class="card-header">Modelo</div>
                    <div class="card-body">
                        <h5 class="h1 card-title">
                            <spain id="IdVendidos">35</spain>
                        </h5>
                        <p class="card-text">Baja en las ventas vs mes anterior</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="bg-warning text-white text-center m-1">
                    <div class="card-header">Modelo 761</div>
                    <div class="card-body">
                        <h5 class="h1 card-title">
                            <spain id="Idalmacen">35</spain>
                        </h5>
                        <p class="card-text">inventario vs mes anterior</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="bg-info text-white text-center m-1">
                    <div class="card-header">Modelo</div>
                    <div class="card-body">
                        <h5 class="h1 card-title">
                            <spain id="Idngreso">35</spain>
                        </h5>
                        <p class="card-text">disminucion de ingresos vs mes anterior</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-3 ">
            <div class="col-md-12 text-center ">
                <h2>Reporte de ventas</h2>
            </div>
            <canvas id="myChart" width="100" height="50"></canvas>

        </div>
        <div class="row my-3 ">
            <div class="col-md-12 text-center "></div>
            <canvas id="idcontTabla"></canvas>
        </div>
    </div>

    </main>
</body>


<script>
// JavaScript code
showTime();

function showTime() {
    myDate = new Date();
    hours = myDate.getHours();
    minutes = myDate.getMinutes();
    seconds = myDate.getSeconds();
    if (hours < 10) hours = 0 + hours;

    if (minutes < 10) minutes = "0" + minutes;

    if (seconds < 10) seconds = "0" + seconds;

    $("#HoraActual").text(hours + ":" + minutes + ":" + seconds);
    setTimeout("showTime()", 1000);
}


CargarGrafica();

function CargarGrafica() {
    $.ajax({
        url: 'controlador_graf.php',
        type: 'POST'


    }).done(function(resp) {
        var titulo = [];
        var cantidad = [];
        var data = JSON.parse(resp);
        for (var i = 0; i < data.length; i++) {
            titulo.push(data[i][1]);
            cantidad.push(data[i][2]);
        }
        const ctx = document.getElementById('myChart');
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: titulo,
                datasets: [{
                    label: '# of Votes',
                    data: cantidad,
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
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    })

}
</script>

</html>