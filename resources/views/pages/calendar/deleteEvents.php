<?php


$id = $_POST["id"];

$db_conn = new mysqli('localhost', 'root', 'root', 'track_three');
if ($db_conn->connect_errno) {
    printf ("Could not connect to database server \n Error: ".$db_conn->connect_errno ."\n Report: ".$db_conn->connect_error."\n");

}
$qry = "DELETE FROM training_schedule WHERE id = '".$id."'";

$result = $db_conn->query($qry);
if($db_conn->errno != 0){
    die("Error running database query "."\n Error ".$db_conn->errno."\n Error Message ".$db_conn->error."\n\n");
}

$msg = array("msg"=>"i got it");



echo json_encode($result);

$db_conn->close();
?>
