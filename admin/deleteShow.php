<?php
include_once 'includes/connection.php';
$sql = "DELETE FROM serije WHERE s_id='" . $_GET["s_id"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Uspjesno obrisano";
    
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
header("Refresh:0; url=manageShow.php");
mysqli_close($conn);
?>