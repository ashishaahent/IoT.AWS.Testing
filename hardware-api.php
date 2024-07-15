<?php
    if(!empty($_GET))
    {
        require("config.php");
        $sql = mysqli_query($al,"INSERT INTO sensor_data(hash_id,temperature,humidity,heatindex,time,date) VALUES('".uniqid()."','".$_GET['t']."','".$_GET['h']."','".$_GET['hi']."','".date('h:i a')."','".date('d-m-Y')."')"); 
        if($sql)
        {
            echo "Saved";
        }   
        else
        {
            echo "Error";
        }
    }
    else
    {
        echo "Bad Request";
    }