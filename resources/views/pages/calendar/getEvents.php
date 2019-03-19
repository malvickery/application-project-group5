<?php

$db_conn = new mysqli('localhost', 'root', 'root', 'track_three');
if ($db_conn->connect_errno) {
    printf ("Could not connect to database server \n Error: ".$db_conn->connect_errno ."\n Report: ".$db_conn->connect_error."\n");

}
$qry = "SELECT * FROM training_schedule ORDER BY training_date";

$result = $db_conn->query($qry);
if($db_conn->errno != 0){
    die("Error running database query "."\n Error ".$db_conn->errno."\n Error Message ".$db_conn->error."\n\n");
}

while($row = $result->fetch_assoc()){

    $data[] = $row;

}

$msg["events"] = $data;

echo json_encode($msg);

$db_conn->close();

?>