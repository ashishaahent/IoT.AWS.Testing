<?php
require ("config.php");
$sql = mysqli_query($al, "SELECT * FROM sensor_data ORDER BY id DESC");
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
</head>
<body>
    <?php include ("nav.php"); ?>
    <div class="container py-3">
        <h6 class="border-bottom display-6 py-3">All Recorded Data</h6>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Temperature</th>
                    <th scope="col">Humidity</th>
                    <th scope="col">Heat Index</th>
                    <th scope="col">Time</th>
                    <th scope="col">Date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sr = 1;
                while ($pr = mysqli_fetch_array($sql)) {
                    ?>
                    <tr>
                        <th scope="row"><?php echo $sr++; ?></th>
                        <td><?php echo $pr['temperature']; ?>&deg;C</td>
                        <td><?php echo $pr['humidity']; ?>%</td>
                        <td><?php echo $pr['heatindex']; ?>&deg;C</td>
                        <td><?php echo $pr['time']; ?></td>
                        <td><?php echo $pr['date']; ?></td>
                    </tr>
                    <?php
                }
                setcookie("records", $sr - 1, time() + 3600);
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>