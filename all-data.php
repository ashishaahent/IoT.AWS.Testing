<?php
require("config.php");
$sql = mysqli_query($al, "SELECT * FROM sensor_data ORDER BY id DESC");
?>
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
        <th scope="row"><?php echo $sr++;?></th>
        <td><?php echo $pr['temperature'];?>&deg;C</td>
        <td><?php echo $pr['humidity'];?>%</td>
        <td><?php echo $pr['heatindex'];?>&deg;C</td>
        <td><?php echo $pr['time'];?></td>
        <td><?php echo $pr['date'];?></td>
      </tr>
      <?php
    }
    setcookie("records",$sr-1,time()+3600);
    ?>
  </tbody>
</table>