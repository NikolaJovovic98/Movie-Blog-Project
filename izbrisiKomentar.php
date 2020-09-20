<?php
include_once 'includes/connection.php';
$sql = "DELETE FROM komentari WHERE k_id='" . $_GET["k_id"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Uspjesno obrisano";
    
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
header("Refresh:0; url=movies.php");
mysqli_close($conn);

