<?php
require ("config.php");
$count = "SELECT COUNT(*) AS count FROM sensor_data";
$result = mysqli_query($al, $count);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
}
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
            url: "all-data.php",
            success: function(result) {
                $("#vegan").html(result);
            }
        });

        $.ajax({
            url: "current.php",
            success: function(result) {
                $("#vegan2").html(result);
            }
        });

        $.ajax({
            url: "ai-output.php",
            success: function(result) {
                $("#vegan3").html(result);
            }
        });
    }

    ajaxCall(); // To output when the page loads
    setInterval(ajaxCall, 5000); // 5000 milliseconds = 5 seconds
    </script>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">AAHENT IoT PoC AWS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn btn-primary">
                            Total Records <span class="badge bg-danger"><?php echo $row['count'];?></span>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container py-3">
        <h6 class="border-bottom display-6 py-3">Live Data <img src="live.gif" width="30"></h6>
        <div id="vegan2"></div>
        <h6 class="border-bottom display-6 py-3">Live Prediction <img src="live.gif" width="30"></h6>
        <div id="vegan3"></div>
        <h6 class="border-bottom display-6 py-3">All Data</h6>
        <div id="vegan"></div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>