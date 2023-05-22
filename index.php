<?php include_once ("totalQuantity.php"); ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    >
    <meta http-equiv="X-UA-Compatible"
          content="ie=edge"
    >
    <!--Google Charts CDN-->
    <script
            type="text/javascript"
            src="https://www.gstatic.com/charts/loader.js">
    </script>
    <!--Google Charts Visualisation Script-->
    <script type="text/javascript" defer>
        google.charts.load('current', {'packages':['bar']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Most Purchased 3 Product', 'Quantity'],
                <?php
                echo "['$topThreePurchasedKeys[0]',$quantityFirstProduct],";
                echo "['$topThreePurchasedKeys[1]',$quantitySecondProduct],";
                echo "['$topThreePurchasedKeys[2]',$quantityThirdProduct]";
                ?>
            ]);

            var options = {
                chart: {
                    title: 'Cyper Space Most Purchased Top 3 Items',
                    subtitle: 'All Products Name:  Monitor, Keyboard, Headphones, Mouse, Laptop',
                }
            };

            var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

            chart.draw(data, google.charts.Bar.convertOptions(options));
        }
    </script>
    <!--Main Css-->
    <link rel="stylesheet" href="style.css">
    <!--Bootstrap CDN-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Cyper Space | Optional Task</title>
</head>
<body>
    <!--Title-->
    <div>
        <h1 class="mt-3 mb-4">Cyper Space Purchased Virtualition</h1>
    </div>
    <!--Description Of Chart-->
    <div>
        <p>
            *This data showing most purchased items.
        </p>
    </div>
    <!--Chart-->
    <div id="columnchart_material" class="mt-5" style="width: 800px; height: 500px;"></div>
</body>
</html>
