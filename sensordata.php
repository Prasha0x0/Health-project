<?php
$id=filter_input(INPUT_POST,"id",FILTER_VALIDATE_INT);
$rtemp=filter_input(INPUT_POST,"rtemp",FILTER_VALIDATE_INT);
$btemp=filter_input(INPUT_POST,"btemp",FILTER_VALIDATE_INT);
$bpm=filter_input(INPUT_POST,"bpm",FILTER_VALIDATE_INT);
$spo2=filter_input(INPUT_POST,"spo2",FILTER_VALIDATE_INT);
$bp=filter_input(INPUT_POST,"bp",FILTER_VALIDATE_INT);
$pulse=filter_input(INPUT_POST,"pulse",FILTER_VALIDATE_INT);
$UV=filter_input(INPUT_POST,"UV",FILTER_VALIDATE_INT);
$air=filter_input(INPUT_POST,"air",FILTER_VALIDATE_INT);
$pm=filter_input(INPUT_POST,"pm",FILTER_VALIDATE_INT);

$host="localhost";
$dbname="myfirstdatabase";
$username="root";
$password=""; 

$conn=mysqli_connect($host,$username,$password,$dbname);

if(mysqli_connect_errno()){
    die("Connection error: " .mysqli_connect_error());
}

 $sql="INSERT INTO sensordata( User_id,Room_temperature,Body_temperature,Bpm,Spo2,Blood_pressure,Pulse_rate,UV_exposure,Air_quality,Particulate_matter)
        VALUES(?,?,?,?,?,?,?,?,?,?)";
    
$stmt=mysqli_stmt_init($conn);

if(!mysqli_stmt_prepare($stmt,$sql)){
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt,"ssssssssss",
                        $id,
                        $rtemp,
                        $btemp,
                        $bpm,
                        $spo2,
                        $bp,
                        $pulse,
                        $UV,
                        $air,
                        $pm
                        );
mysqli_stmt_execute($stmt);
echo"Record saved";
