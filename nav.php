<?php
    $count = "SELECT COUNT(*) AS count FROM sensor_data";
    $result = mysqli_query($al, $count);
    
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    }
?>
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
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="all-data.php">All Records</a>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn btn-primary">
                            Total Records <span class="badge bg-danger"><?php echo $row['count']; ?></span>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>