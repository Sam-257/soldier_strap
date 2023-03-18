<?php
    include "conn.php";
    if(isset($_GET['heart']) && isset($_GET['spo2'])){
        $heart= $_GET['heart'];
        $spo2= $_GET['spo2'];
        $add="INSERT INTO heart (heart, spo2) VALUES ('$heart','$spo2')";
        mysqli_query($conn,$add);
        echo $add;
    }
    if(isset($_GET['lat']) && isset($_GET['lon'])){
        $lat= $_GET['lat'];
        $lon= $_GET['lon'];
        $add="INSERT INTO gps (lat, lon) VALUES ('$lat','$lon')";
        mysqli_query($conn,$add);
        echo $add;
    }
    if(isset($_GET['tem'])){
        $tem= $_GET['tem'];
        $add="INSERT INTO temp (tem) VALUES ('$tem')";
        mysqli_query($conn,$add);
        echo $add;
    }
    
?>