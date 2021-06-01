<?php
    include('ConsultaBD.php');


    $ClientName = $_POST['ClientName'];
    $ClientNum = $_POST['ClientNum'];
    $Phone = $_POST['Phone'];
    $MachineName = $_POST['MachineName'];
    $FechaAlta = $_POST['FechaAlta'];
    $Situation = $_POST['Situation'];
    $Brand = $_POST['Brand'];
    $Model = $_POST['Model'];
    $MachineType = $_POST['MachineType'];
    $SensorIncluded = $_POST['SensorIncluded'];
    $Street = $_POST['Street'];
    $Colonia = $_POST['Colonia'];
    $EntreCalles = $_POST['EntreCalles'];
    $CP = $_POST['CP'];     
    
    //$sql = "SELECT * FROM estudiantes where Id = $num";

    $sql = "UPDATE machines SET ClientName='$ClientName', ClientNum='$ClientNum', Phone='$Phone', MachineName='$MachineName', FechaAlta='$FechaAlta', Situation='$Situation', Brand='$Brand', Model='$Model', MachineType='$MachineType', SensorIncluded=$SensorIncluded, Street='$Street', Colonia='$Colonia', EntreCalles='$EntreCalles', CP=$CP WHERE MachineName='$MachineName'";

    ConsultaBD($sql)
?>
