<?php
include_once 'dhcp.inc.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    $sql="SELECT *FROM patientinfo;";
    $result=mysqli_query($conn,$sql);
    $resultCheck=mysqli_num_rows($result);
    if($resultCheck >0){
        while($row=mysqli_fetch_assoc($result)){
            echo $row['First_Name'];

        }

    }

?>

</body>
</html>