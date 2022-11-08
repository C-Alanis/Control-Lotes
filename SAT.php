<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos AT</title>

    <link rel="stylesheet" href="style/css/bootstrap.min.css">
    <script src="style/js/bootstrap.bundle.min.js"></script>
</head>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<body>

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


    <div class="content">

    </div>





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
</script>

</html>