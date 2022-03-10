<?php
 
 session_start();
 if(!isset($_SESSION["user_painel"])){   
     header('Location:login.php');
 }

 
 $home = "home";  ?>
 <?php //echo md5('diego'); ?> 

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Hello, world!</title>
</head>

<body>
    <?php include_once "menu.php" ?>
    <div class="container mt-4 ">
        <?php include_once "breadcrumb.php" ?>
        <canvas id="myChart" class="text-center" width="600" height="400"></canvas>
    </div>

    <?php include_once "rodape.php" ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
    <!-- <script src="assets/js/graficoClientes.js"></script> -->
    <script>
        const ctx = document.getElementById('myChart');
        let qtdGratis = '';
        let qtdNormal = '';
        let qtdPremio = '';


        const data = {
            labels: [
                'Grátis',
                'Normal',
                'Prêmio'
            ],
            datasets: [{
                label: 'Quantidade de clientes por categoria',
                data: [300, 50, 100],
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)'
                ],
                hoverOffset: 4
                
            }]
           
        };
        console.log(data['datasets["data"]']);
        const config = {
            type: 'pie',
            data: data,
            options: {
                responsive: false
            }
        };

        const myChart = new Chart(ctx, config);
    </script>
    
</body>

</html>