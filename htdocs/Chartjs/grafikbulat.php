<?php
$koneksi     = mysqli_connect("localhost", "root", "", "hp");
$penjualan      = mysqli_query($koneksi, "SELECT Penjualan FROM smartphone order by ID asc");
$merek = mysqli_query($koneksi, "SELECT Merk FROM smartphone order by ID asc");
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Demo Grafik Lingkaran</title>
    <script src="js/Chart.js"></script>
    <style type="text/css">
            .container {
                width: 50%;
                margin: 15px auto;
            }
    </style>
  </head>
  <body>

    <div class="container">
            <canvas id="demobar" width="100" height="100"></canvas>
    </div>

      	<script  type="text/javascript">

    	  var ctx = document.getElementById("demobar").getContext("2d");
    	  var data = {
    	            labels: [<?php while ($p = mysqli_fetch_array($merek)) { echo '"' . $p['Merk'] . '",';}?>],
    	            datasets: [
    	            {
    	              label: "Penjualan Smartphone",
    	              data: [<?php while ($p = mysqli_fetch_array($penjualan)) { echo '"' . $p['Penjualan'] . '",';}?>],
                    backgroundColor: [
                      "rgba(59, 100, 222, 1)",
                      "rgba(203, 222, 225, 0.9)",
                      "rgba(102, 50, 179, 1)",
                      "rgba(201, 29, 29, 1)",
                      "rgba(81, 230, 153, 1)",
                      "rgba(246, 34, 19, 1)"]
    	            }
    	            ]
    	            };

    	  var myBarChart = new Chart(ctx, {
    	            type: 'pie',
    	            data: data,
    	            options: {
                    responsive: true
    	          }
    	        });
    	</script>

  </body>
</html><?php
$koneksi     = mysqli_connect("localhost", "root", "", "penjualan");
$bulan       = mysqli_query($koneksi, "SELECT bulan FROM discribe WHERE tahun='2016' order by id asc");
$penghasilan = mysqli_query($koneksi, "SELECT hasil_penjualan FROM discribe WHERE tahun='2016' order by id asc");
?>
<html>
    <head>
        <title>Belajarphp.net - ChartJS</title>
        <script src="Chart.bundle.js"></script>
 
        <style type="text/css">
            .container {
                width: 50%;
                margin: 15px auto;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <canvas id="myChart" width="100" height="100"></canvas>
        </div>
        <script>
            var ctx = document.getElementById("myChart");
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: [<?php while ($b = mysqli_fetch_array($bulan)) { echo '"' . $b['bulan'] . '",';}?>],
                    datasets: [{
                            label: 'Hasil Penjualan Toko',
                            data: [<?php while ($p = mysqli_fetch_array($penghasilan)) { echo '"' . $p['hasil_penjualan'] . '",';}?>],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)',
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)',
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
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
    </body>
</html>