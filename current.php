<?php
require ("config.php");
$sql = mysqli_fetch_array(mysqli_query($al, "SELECT * FROM sensor_data ORDER BY id DESC"));
?>
<div class="row row-cols-md-3 row-cols-1">
    <div class="col text-center">
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading display-5">Temperature</h4>
            <hr>
            <div class="progress" style="height:50px;">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar"
                    aria-valuenow="<?php echo $sql['temperature']; ?>" aria-valuemin="0" aria-valuemax="100"
                    style="width: <?php echo $sql['temperature']; ?>%"></div>
            </div>
            <p style="font-size:60px;"><?php echo $sql['temperature']; ?>&deg;C</p>
            <button class="btn btn-sm btn-danger"><?php echo $sql['time']; ?></button>
        </div>
    </div>

    <div class="col text-center">
        <div class="alert alert-primary" role="alert">
            <h4 class="alert-heading display-5">Humidity</h4>
            <hr>
            <div class="progress" style="height:50px;">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar"
                    aria-valuenow="<?php echo $sql['humidity']; ?>" aria-valuemin="0" aria-valuemax="100"
                    style="width: <?php echo $sql['humidity']; ?>%"></div>
            </div>
            <p style="font-size:60px;"><?php echo $sql['humidity']; ?>%</p>
            <button class="btn btn-sm btn-danger"><?php echo $sql['time']; ?></button>
        </div>
    </div>
    <div class="col text-center">
        <div class="alert alert-warning" role="alert">
            <h4 class="alert-heading display-5">Heat Index</h4>
            <hr>
            <div class="progress" style="height:50px;">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar"
                    aria-valuenow="<?php echo $sql['heatindex']; ?>" aria-valuemin="0" aria-valuemax="100"
                    style="width: <?php echo $sql['heatindex']; ?>%"></div>
            </div>
            <p style="font-size:60px;"><?php echo $sql['heatindex']; ?>%</p>
            <button class="btn btn-sm btn-danger"><?php echo $sql['time']; ?></button>
        </div>
    </div>
</div>