<?php
require ("config.php");
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>AAHENT IoT AWS PoC</title>
    <script type="text/javascript" src="scripts/jquery-3.1.1.min.js"></script>
    <script>
        function ajaxCall() {
            $.ajax({
                url: "last-10-records.php",
                success: function (result) {
                    $("#last-10-records").html(result);
                }
            });

            $.ajax({
                url: "current.php",
                success: function (result) {
                    $("#current").html(result);
                }
            });

            $.ajax({
                url: "charts.php",
                success: function (result) {
                    $("#charts").html(result);
                }
            });
        }

        ajaxCall(); // To output when the page loads
        setInterval(ajaxCall, 10000); // 5000 milliseconds = 5 seconds
    </script>

</head>

<body>
    <?php include("nav.php");?>
    <div class="container py-3">
        <h6 class="border-bottom display-6 py-3">Live Data <img src="live.gif" width="30"></h6>
        <div id="current"></div>
        
        <h6 class="border-bottom display-6 py-3">Last 10 Records</h6>
        <div id="last-10-records"></div>

        <h6 class="border-bottom display-6 py-3">Live Prediction <img src="live.gif" width="30"></h6>
        <div id="charts"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>

</body>
</html>