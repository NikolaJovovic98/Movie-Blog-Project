<?php
include_once 'includes/connection.php';
$sql = "DELETE FROM komentari_serije WHERE ks_id='" . $_GET["ks_id"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Uspjesno obrisano";
    
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
header("Refresh:0; url=series.php");
mysqli_close($conn);

